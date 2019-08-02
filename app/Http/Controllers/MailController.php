<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
 public function send(){
     Mail::send("email.test",[],function($message){
         $message->subject("laravel mail");
         $message->to("mattsuyolo@gmail.com");
     });
     return 'email 寄出';
 }
}