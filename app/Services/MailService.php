<?php
namespace App\Services;
use Illuminate\Http\Request;
use Mail;

class MailService 
{
 public function send($content){
     $info=json_decode($content,true);
     Mail::send("email.userresponse",["yo"=>$info["message"],"gg"=>$info["name"]],function($message){
        $message->subject("laravel mail");
        $message->to("mattsuyolo@gmail.com");
    });
     return 'email 寄出';
 }
 public function sendValidateCode($email, $verify_code){
    // $info=json_decode($content,true);
    // 參考教學https://laravel-tricks.com/tricks/pass-variables-inside-the-mail-function
    $data=["email"=>$email];
    Mail::send("email.userresponse",["yo"=>"message","gg"=>$verify_code],function($message) use ($data){
      
        $message->subject("laravel");
        // return 0;
       $message->to( $data['email']);
   });
   return 0;
}
}