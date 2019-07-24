<?php

namespace App\Http\Controllers\Cool;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
}
