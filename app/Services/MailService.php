<?php
namespace App\Services;
use Illuminate\Http\Request;
use Mail;

class MailService 
{
 public function send($content){
 
     Mail::send("email.test",["yo"=>$content],function($message){
        $message->subject("laravel mail");
        $message->to("mattsuyolo@gmail.com");
    });
     return 'email 寄出';
 }
}