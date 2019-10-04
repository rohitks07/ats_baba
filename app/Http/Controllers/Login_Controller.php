<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use DB;
use App\Tbl_job_seekers;
use Session;
use App\Tbl_team_member_permission;
use App\Tbl_module;
use App\tbl_team_member;
use App\Tbl_team_member_type;
use Mail;

class Login_Controller extends Controller{

    public function index(){
    	return view('employee_admin');
    }


    public function login_page(Request $request){
		$this->validate($request,[
			'email_id' => 'required',
			'password' => 'required'
		]);

    	$email_id =$request->email_id;
    	$password =$request->password;
        $getUserDetails  = DB::table('user')->where('email',$email_id)->where('password',$password)->first();
        if($getUserDetails)
        {
            $email_assign    =$getUserDetails->email;
            $password_assign =$getUserDetails->password;
            $user_type=$getUserDetails->user_type;
            $user_id=$getUserDetails->user_id;
            if ($email_id==$email_assign && $password==$password_assign)
            {       
                $session_data = array(
                'id'   =>$getUserDetails->ID,
                'email'=>$getUserDetails->email,
                'full_name'=>$getUserDetails->full_name,
                'user_id'=>$getUserDetails->user_id,
                'type' =>$getUserDetails->user_type,
                'org_ID'=>$getUserDetails->org_ID
                );

                // session create
                Session::put($session_data);
                if($user_type=='seeker')
                {
                    return redirect('indexjobseeker');
                }
                elseif($user_type=='teammember')
                {
                    $toReturn['team_member']=tbl_team_member::where('ID',$user_id)->get();
                    // return $toReturn;
                    $toReturn['user_permission']=Tbl_team_member_permission::where('team_member_id',$user_id)
                    ->leftjoin('tbl_module','tbl_team_member_permission.permission_value','=','tbl_module.module_id')
                    ->get()->toArray();
                    $session_data = array(
                        'id'   =>$getUserDetails->ID,
                        'email'=>$getUserDetails->email,
                        'full_name'=>$getUserDetails->full_name,
                        'user_id'=>$getUserDetails->user_id,
                        'type' =>$getUserDetails->user_type,
                        'org_ID'=>$getUserDetails->org_ID,
                        'user_permission'=>$toReturn['user_permission']
                    );
                    Session::put($session_data);
                    // return $session_data;
                    return redirect('employer/dashboard');
                }
                else
                {
                    return redirect('employer/dashboard');
                }        
            }
            else{
            	$error="NOT LOGIN !!!!";
            	return view('employee_admin')->with('error',$error);
            }
        
        }
        else{
            	$error="Email Id Not Found !!!!";
        	return view('employee_admin')->with('error',$error);
        }
    }
    
    
    
    public function forget_password(){
        return view('forget_password');
    }
    
    
    public function send_mail(Request $Request){
        $email_id = $Request->email_id;
        $user = array('email'=>$Request->email_id);
    // print_r($user);
    // exit;
        Mail::send('emails.mail_forget', ['data' => $email_id], function($message) use ($user) {
            $message->to($user['email'])
                    ->subject('Forget Link');
            $message->from('rohit18212@gmail.com','ATS BABA');
        });   
        
        return redirect('/');
    }
    
    
    public function email_red_view($email_id=""){
        return view('email_link')->with('email',$email_id);
    }
    
    
    public function forgot(Request $Request){
        $this->validate($Request,[
            'new_password'    => 'required',
            'confirm_password'=> 'required'
        ]);
        $user_email=$Request->email;
        $getUserDetails  = DB::table('user')->where('email',$user_email)->first();
        $new    = $Request->new_password;
        $confirm= $Request->confirm_password;
        if($getUserDetails)
        {
            if($new==$confirm){
                user::where('email', $user_email)->update(array(
                    'password' =>$confirm  
                ));
            }
            return redirect('/')->with('alert','Password Reset Successfully'); ;
        }
    }
    public function session_out()
    {
        session_unset();
        return redirect('/');
    }
   
}


