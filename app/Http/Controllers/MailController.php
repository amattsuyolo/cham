<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
 public function __invoke(){
     Mail::send("email.userresponse",[],function($message){
         $message->subject("laravel mail");
         $message->to("mattsuyolo@gmail.com");
     });
     return 'email 寄出';
 }
}