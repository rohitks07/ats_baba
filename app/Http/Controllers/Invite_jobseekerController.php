<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\invite_jobseeker;
use Mail;
use Session;

class Invite_jobseekerController extends Controller
{
  public function __construct()
		{
			$this->middleware('check');

		} 
    public function index(){
      $default_message="Hi, Your Profile is Missing Recruiters Attention, Click here to register...";   
      return view('invite_jobseeker')->with('default_message',$default_message);
    }
    public function add(Request $Request){ 

      $name= Session::get('name');
      @$email_id= Session::get('email_id');

      $invite_jobseeker=new invite_jobseeker();
      $invite_jobseeker->jobseeker_name=$Request->jobseeker_name;
      $invite_jobseeker->jobseeker_email=$Request->jobseeker_email;
      $invite_jobseeker->message=$Request->message;
      $invite_jobseeker->created_by=$name;
      $date=date('Y,m,d');
      $invite_jobseeker->date=$date;
      $invite_jobseeker->status=1;
      $invite_jobseeker->save();

      $user = array('email'=>$Request->jobseeker_email, 'name' => $Request->jobseeker_name,'email' => $email_id);    
      Mail::send('emails.mail_jobseeker', ['data' => $user], function($message) use ($user) {
        $message->to($user['email'], $user['name'])
                ->subject('Looking for Job change?');
        $message->from($user['email'],'ATS BABA');
      });   
      return  redirect('admin/invitejobseeker')->with('alert','Email Send'); 
    }
}

