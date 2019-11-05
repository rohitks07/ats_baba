<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\invite_employer;
use Mail;

class InviteEmpolyerController extends Controller
{
    public function __construct()
		{
			$this->middleware('check');

        }
        public function index(){
            // return Session::get('email_id');
            // exit;
            $default_message="Hi, Your Profile is Missing Recruiters Attention, Click here to register...";   
            return view('invite_employer')->with('default_message',$default_message);
          }
          public function add(Request $Request){
            $name= Session::get('name');
            @$email_id= Session::get('email_id');

            
            $invite_jobseeker=new invite_employer();
            $invite_jobseeker->employer_name=$Request->employer_name;
            $invite_jobseeker->employer_email=$Request->employer_email;
            $invite_jobseeker->message=$Request->message;
            $invite_jobseeker->created_by=$name;
            $date=date('Y,m,d');
            $invite_jobseeker->date=$date;
            $invite_jobseeker->status=1;
            $invite_jobseeker->save();
      
            $user = array('email'=>$Request->employer_email, 'name' => $Request->employer_name, 'email' => $email_id);    
            Mail::send('emails.mail_jobseeker', ['data' => $user], function($message) use ($user) {
              $message->to($user['email'], $user['name'])
                      ->subject('Looking for Job change?');
              $message->from($user['email'],'ADMIN ATS BABA');
            });   
            return  redirect('admin/inviteemployer')->with('alert','Email Send'); 
          }
}
