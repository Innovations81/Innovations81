<?php

namespace App\Http\Traits;
use App\Models\Student;
use Mail;

trait SendMailTrait {

    public function sendmail($messagedata, $view) {
    	try{
    		Mail::send($view, $messagedata, function ($m) use ($messagedata) {
                $m->from( env('MAIL_USERNAME') , env('APP_NAME') );
                $m->to( env('CONTACT_US_EMAIL'), env('CONTACT_US_NAME'))->subject($messagedata['subject']);
            }); 
            return response()->json(['status' => true]);
    	}catch(\Exception $e){
    		return response()->json(['status' => false]);
    	}
      	
    }

}

?>