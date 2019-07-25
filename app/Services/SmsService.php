<?php

namespace App\Services;
use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;

class SmsService 
{
    //希望重複利用 註冊驗證或是金流寄信驗證之類也許還有密碼找回
    public function sendSms($phone,$content){
        // 需要接值
        // 從資料庫抓取 認證碼
        // 需要一個     認證的controller
        // 亂碼表
        // $garbled_array=[0,1,2,3,4,5,6,7,8,9];
        // shuffle($garbled_array);
        // $verify_code=$garbled_array[0].$garbled_array[1].$garbled_array[2].$garbled_array[3];

        try {
            $message =Nexmo::message()->send([
                'to' => $phone,
                'from' => 'Nexmo',
                'text' => $content
            ]);
            // $message = $client->message()->send([
            //     'to' => '886906910889',
            //     'from' => 'Nexmo',
            //     'text' => "驗證碼:"."\r\n"."2314"
            // ]);
            $response = $message->getResponseData();

            if($response['messages'][0]['status'] == 0) {
                
                // 把驗證碼更新到資料庫

                // echo "The message was sent successfully\n";
                // return response()->json(
                //     [
                //     "message" => "Successfully send demo sms"
                //     ], 200
                // );
                // 代表成功
                return 0;
            } else {
                echo "The message failed with status: " . $response['messages'][0]['status'] . "\n";
            }
        } catch (Exception $e) {
            echo "The message was not sent. Error: " . $e->getMessage() . "\n";
        }


     
    }
  
  
}
