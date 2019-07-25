<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
// use App\Entity\User;
use App\User;
use Avatar;
use Storage;
use App\Services\SmsService;
use App\Repositories\UserRepository;

class AuthController extends Controller
{
    /**
     * Create user
     *
     * @param  [string] name
     * @param  [string] email
     * @param  [string] password
     * @param  [string] password_confirmation
     * @return [string] message
     */
    public function __construct(SmsService $smsService,UserRepository $userRepository)
    {
        $this->smsService = $smsService;
        $this->userRepository = $userRepository;
    }
    public function signup(Request $request)
    {   
        // 新增現階段需要的值 以整合網站的
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|confirmed'
        ]);
        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        $user->save();
        // 返回user id 供驗證碼使用
        return response()->json([
            'message' => 'Successfully created user!'
        ], 201);
    }
  
    /**
     * Login user and create token
     *
     * @param  [string] email
     * @param  [string] password
     * @param  [boolean] remember_me
     * @return [string] access_token
     * @return [string] token_type
     * @return [string] expires_at
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
            'remember_me' => 'boolean'
        ]);
        $credentials = request(['email', 'password']);
        if(!Auth::attempt($credentials))
            return response()->json([
                'message' => 'password or email error'
            ], 401);
        //放入verify
        //抓取user 資料庫 看activate 是否為1
        $email=$request->email;
        $check = User::where('email', $email)
        ->where('activate',1)
        ->count();
        if(!$check){
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        }
        //非1則回傳  未通過驗證
        $user = $request->user();
        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;
        if ($request->remember_me)
            $token->expires_at = Carbon::now()->addWeeks(1);
        $token->save();
        $avatar = Avatar::create($user->name)->getImageObject()->encode('png');
        Storage::put('avatars/'.$user->id.'/avatar.png', (string) $avatar);
        return response()->json([
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse(
                $tokenResult->token->expires_at
            )->toDateTimeString()
        ]);
    }
  
    /**
     * Logout user (Revoke the token)
     *
     * @return [string] message
     */
    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }
  
    /**
     * Get the authenticated User
     *
     * @return [json] user object
     */
    // 激活開始
    public function activation(Request $request) {
        // 需要接簡訊四碼
        // 比對與資料庫相同
        // 更改activate欄位為 1
		$name = $request->route('name');
		$act=DB::select("SELECT `activate`,`facebook_login` FROM `users` WHERE datediff(CURDATE(),`update_at`)<=1 AND name='$name' AND `activate`=0");
		$realIP = $request->getClientIp();
			DB::insert('insert into attack_records (ip, account, type, route) values (?, ?, ?, ?)', [$realIP, $name, '1', 'https://idiyiqilu.com/activation/' . $name . '']);
		if($act){
			print_r ($act);
			DB::update('update users set activate = 1 where name = ?', array($name));
			if (Auth::attempt(['name' => $name, 'password' => $act[0]["facebook_login"]])) {
	            // 認證通過...
				DB::update('update users set facebook_login = ? where name = ?', array('',$name));
	            return redirect()->intended('index');
        	}
		}
		Auth::logout();
		return redirect('index');
	}
    // 激活結束

    public function user(Request $request)
    {
        return response()->json($request->user());
    }
    // 寄驗證信
    public function sendValidateMail(Request $request){
        // 預計要傳電話號碼，user_id
        // 資料庫更新認證碼
        // 需要一個     認證的controller
        $request->validate([
            'phone_number' => 'required',
            'user_id' => 'required'
        ]);
        //  3000001
        // '886906910889'
        // 使用者id
        $user_id=$request->user_id;
        // 手機號碼
        $phone=$request->phone_number;
        // 亂碼表
        $garbled_array=[0,1,2,3,4,5,6,7,8,9];
        shuffle($garbled_array);
        // 亂碼產生
        $verify_code=$garbled_array[0].$garbled_array[1].$garbled_array[2].$garbled_array[3];        
        // 簡訊內容 目前中文會變成 ?
        $content="VerifyCode:"."\r\n".$verify_code;
        // 寄出簡訊並抓取回傳值
        $result=$this->smsService->sendSms($phone,$content);
        if($result==0){
            // 若成功，更新資料庫user verify欄位
            User::where('id', $user_id)
            ->update(['verify' =>$verify_code]);

            return response()->json(
                [
                "message" => "Successfully send demo sms"
                ], 200
            );
        }
        // 錯誤重寄....
    }
    // 確認驗證碼
    public function confirmValidateCode($user_id,Request $request){
        // $request->validate([
        //     'code_number' => 'required',
        //     'user_id' => 'required'
        // ]);
        $request->validate([
            'code_number' => 'required',
        ]);
        $code_number=$request->code_number; 
        // $user_id=$request->user_id;
        // 搜尋驗證碼與id是否有相符合的資料
        $check = User::where('id', $user_id)
                ->where('verify',$code_number)
                ->count();
        if($check){
            // 更新User 的 activate 狀態
            // User::where('id', $user_id)
            // ->update(['activate' =>1]);
            $this->userRepository->updateSingleContent($user_id,"activate",1);
            return response()->json(
                [
                "message" => "Successfully Verified"
                ], 200
            );
        }else{
            ##############
            ###未完成
            #############
        }
    }

}
