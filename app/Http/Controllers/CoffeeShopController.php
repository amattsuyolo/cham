<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Services\MailService; 
use App\Http\Controllers\Redirect;

class CoffeeShopController extends Controller
{
	public function __construct( MailService $mailService) {
		$this->mailService = $mailService;
	}
    public function customerResponse(){
        //  Mail::send("email.test",[],function($message){
        //      $message->subject("laravel mail");
        //      $message->to("mattsuyolo@gmail.com");
        //  });
        // $email = $_POST['emailContact'];
		// $name = $_POST['nameContact'];
        // $message = $_POST['messageContact'];
        
        $email = $_GET['emailContact'];
		$name = $_GET['nameContact'];
		$message = $_GET['messageContact'];

		$form_data_origin = array(
			'email' => $email,
			'name' => $name,
			'message' => $message,
        );
        $form_data = json_encode($form_data_origin);
        $result = $this->mailService->send($form_data);
        // return 'email 寄出';
        return redirect()->back();
    }
}