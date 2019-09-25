<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\invite_employer;
use Mail;


class Invite_employerController extends Controller
{
    public function index(){
        $default_message="ATS helps millions of job seekers and employers find the right fit every day. Start hiring now on the world's #1 job site.";
        return view('invite_employer')->with('default_message',$default_message);
    }
    
    public function add(Request $Request)
    {
        $invite_employer = new invite_employer();
	    $invite_employer->employer_name=$Request->employer_name;
	    $invite_employer->employer_email=$Request->employer_email;
	    $invite_employer->message=$Request->message;
	    $date=date('Y,m,d');
	    $invite_employer->date=$date;
	    $invite_employer->status=1;
	    $invite_employer->created_by='rohit';
	    $invite_employer->save();
	    
	    $user = array('email'=>$Request->employer_email, 'name' => $Request->employer_name);    
		Mail::send('emails.mail_employer', ['data' => $user], function($message) use ($user) {
		    $message->to($user['email'], $user['name'])
		            ->subject('Hi Your next hire is here.');
		    $message->from('rohit18212@gmail.com','ATS BABA');
		});      
	    
      return  redirect('admin/inviteemployer')->with('alert','Email Send'); 
    }
}
