<?php
namespace App\Http\Controllers;
use App\Repositories\UserRepository;
use App\Services\SmsService;
use App\User;
// use App\Entity\User;
use Avatar;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Storage;

class AuthController extends Controller {

	public function __construct(SmsService $smsService, UserRepository $userRepository) {
		$this->smsService = $smsService;
		$this->userRepository = $userRepository;
	}
	/**
	 * Create user 創造新使用者
	 *
	 * @param  [string] name
	 * @param  [string] email
	 * @param  [string] password
	 * @param  [string] password_confirmation
	 * @return [string] message
	 */
	public function signup(Request $request) {
		// 新增現階段需要的值 以整合網站的
		$request->validate([
			'name' => 'required|string',
			'email' => 'required|string|email|unique:users',
			'password' => 'required|string|confirmed',
		]);

		$name = $request->name;
		$email = $request->email;
		$password = $request->password;
		// 新增會員資料
		$result = $this->userRepository->addUser($name, $email, $password);
		// 返回user id 供驗證碼使用
		return response()->json([
			"status" => "",
			'message' => 'Successfully created user!',
			"data" => [
				"user_id" => $result,
			],
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
	public function login(Request $request) {
		$request->validate([
			'email' => 'required|string|email',
			'password' => 'required|string',
			'remember_me' => 'boolean',
		]);
		$credentials = request(['email', 'password']);
		if (!Auth::attempt($credentials)) {
			return response()->json([
				'message' => 'password or email error',
			], 401);
		}

		//放入verify
		//抓取user 資料庫 看activate 是否為1
		$email = $request->email;
		$check = User::where('email', $email)
			->where('activate', 1)
			->count();
		if (!$check) {
			return response()->json([
				'message' => 'Unauthorized',
			], 401);
		}
		//非1則回傳  未通過驗證
		$user = $request->user();
		$tokenResult = $user->createToken('Personal Access Token');
		$token = $tokenResult->token;
		if ($request->remember_me) {
			$token->expires_at = Carbon::now()->addWeeks(1);
		}

		$token->save();
		$avatar = Avatar::create($user->name)->getImageObject()->encode('png');
		Storage::put('avatars/' . $user->id . '/avatar.png', (string) $avatar);
		return response()->json([
			"status" => "200",
			"message" => "login success",
			"data" => [
				'access_token' => $tokenResult->accessToken,
				'token_type' => 'Bearer',
				'expires_at' => Carbon::parse(
					$tokenResult->token->expires_at
				)->toDateTimeString(),
			],
		]);
	}

	/**
	 * Logout user (Revoke the token)
	 *
	 * @return [string] message
	 */
	public function logout(Request $request) {
		$request->user()->token()->revoke();
		return response()->json([
			"status" => "",
			'message' => 'Successfully logged out',
		]);
	}

	/**
	 * Get the authenticated User
	 *
	 * @return [json] user object
	 */
	public function user(Request $request) {
		// return  $this->userRepository->userInfo($request->user());
		$content = $this->userRepository->userInfo($request->user());
		return response()->json(
			[
				"status" => 200,
				"message" => "",
				"data" => $content,
			], 200
		);
		// return response()->json($request->user());
	}
	/*
		        寄驗證信
		        若成功寄出 更新user表驗證碼欄位
		     *  @param  json $user_id , $phone_number
		     *
		     *  @return [json]
		     *
	*/
	public function sendValidateSms(Request $request) {
		$request->validate([
			'phone_number' => 'required',
			'user_id' => 'required',
		]);
		// 使用者id
		$user_id = $request->user_id;
		// 手機號碼
		$phone = $request->phone_number;
		// 亂碼表
		$garbled_array = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
		shuffle($garbled_array);
		// 亂碼產生
		$verify_code = $garbled_array[0] . $garbled_array[1] . $garbled_array[2] . $garbled_array[3];
		// 簡訊內容 目前中文會變成 "問號"
		$content = "VerifyCode:" . "\r\n" . $verify_code;
		// 寄出簡訊並抓取回傳值
		$result = $this->smsService->sendSms($phone, $content);
		if ($result == 0) {
			// 若成功，更新資料庫user verify欄位
			$this->userRepository
				->verificationCodeUpdate($user_id, $verify_code);
			// 若成功。更新資料庫mobilePhone 欄位
			$this->userRepository
				->phoneUpdate($user_id, $phone);
			return response()->json(
				[
					"status" => 200,
					"message" => "Successfully send demo sms",
				], 200
			);
		} else {
			return response()->json(
				[
					"status" => 400,
					"message" => "Can't Send SMS",
				]
			);
		}
	}
	/*
		        確認驗證碼
		     *  @param  $user_id
		     *  @param  [int] code_number
		     *
		     *  @return [json]
		     *
	*/
	public function confirmValidateCode($user_id, Request $request) {

		$request->validate([
			'code_number' => 'required',
		]);
		$code_number = $request->code_number;

		// 搜尋驗證碼與id是否有相符合的資料
		$check = $this->userRepository
			->codeNumCheck($user_id, $code_number);
		if ($check) {
			// 更新User 的 activate 狀態
			// $this->userRepository->updateSingleContent($user_id,"activate",1);
			$this->userRepository
				->verifyUser($user_id);
			return response()->json(
				[
					"status" => 200,
					"message" => "Successfully Verified",
				], 200
			);
		} else {
			return response()->json(
				[
					"status" => 203,
					"message" => "Wrong Code",
				]
			);
		}
	}
	/*
		        刪除用戶(現實中不容易有此功能)
		     *  @param  $user_id
		     *
		     *  @return void
		     *
	*/
}
