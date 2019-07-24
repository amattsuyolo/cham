<?php

namespace App\Http\Controllers\Cool;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Nexmo\Laravel\Facade\Nexmo;

class TestController extends Controller
{
    //
    public function smsTest($yo){
        echo $yo."<br>";

        $basic  = new \Nexmo\Client\Credentials\Basic('e8632314', '5LR8NihVpos6HGZR');
        $client = new \Nexmo\Client($basic);

        // $message = $client->message()->send([
        //     'to' => '886906910889',
        //     'from' => 'Nexmo',
        //     'text' => '驗證碼:'.'<br>'.'2314'
        // ]);
        try {
            $message = $client->message()->send([
                'to' => '886906910889',
                'from' => 'Nexmo',
                'text' => "驗證碼:"."\r\n"."2314"
            ]);
            $response = $message->getResponseData();

            if($response['messages'][0]['status'] == 0) {
                echo "The message was sent successfully\n";
            } else {
                echo "The message failed with status: " . $response['messages'][0]['status'] . "\n";
            }
        } catch (Exception $e) {
            echo "The message was not sent. Error: " . $e->getMessage() . "\n";
        }


        return view("hello");
    }
    public function smsTest2($yo){
        echo $yo."<br>";

        // $basic  = new \Nexmo\Client\Credentials\Basic('e8632314', '5LR8NihVpos6HGZR');
        // $client = new \Nexmo\Client($basic);

        // $message = $client->message()->send([
        //     'to' => '886906910889',
        //     'from' => 'Nexmo',
        //     'text' => '驗證碼:'.'<br>'.'2314'
        // ]);
        try {
            $message =Nexmo::message()->send([
                'to' => '886906910889',
                'from' => 'Nexmo',
                'text' => '驗證碼:'.'<br>'.'2314'
            ]);
            // $message = $client->message()->send([
            //     'to' => '886906910889',
            //     'from' => 'Nexmo',
            //     'text' => "驗證碼:"."\r\n"."2314"
            // ]);
            $response = $message->getResponseData();

            if($response['messages'][0]['status'] == 0) {
                echo "The message was sent successfully\n";
            } else {
                echo "The message failed with status: " . $response['messages'][0]['status'] . "\n";
            }
        } catch (Exception $e) {
            echo "The message was not sent. Error: " . $e->getMessage() . "\n";
        }


        return view("hello");
    }
    public function smsTest3(){
        // 從資料庫抓取 認證碼
        // 需要一個     認證的controller
        try {
            // $message =Nexmo::message()->send([
            //     'to' => '886906910889',
            //     'from' => 'Nexmo',
            //     'text' => '驗證碼:'.'<br>'.'2314'
            // ]);
            $message =Nexmo::message()->send([
                'to' => '886908189360',
                'from' => 'Nexmo',
                'text' => 'verify_code:'."\r\n".'2314'
            ]);
            // $message = $client->message()->send([
            //     'to' => '886906910889',
            //     'from' => 'Nexmo',
            //     'text' => "驗證碼:"."\r\n"."2314"
            // ]);
            $response = $message->getResponseData();

            if($response['messages'][0]['status'] == 0) {
                // echo "The message was sent successfully\n";
                return response()->json(
                    [
                    "message" => "Successfully send demo sms"
                    ], 200
                );
            } else {
                echo "The message failed with status: " . $response['messages'][0]['status'] . "\n";
            }
        } catch (Exception $e) {
            echo "The message was not sent. Error: " . $e->getMessage() . "\n";
        }


     
    }
  
  
}
