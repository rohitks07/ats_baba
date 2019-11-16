<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tbl_job_seekers;
use App\user;
use Validator;


class Seeker_Signup_Controller extends Controller
{
    public function index()
    {

        return view('jobseekersignup')
    }

    public function add(Request $request){
        //  $this->validate($request,[
        //     'first_name'   => 'required|max:255',
        //     'email'        => 'required|max:255',
        //     'password'     => 'required|min:6',
        //     'confirm_password' => 'required|min:6',
        //     'gender'       => 'required',
        //     'dob_day'      => 'required',
        //     'dob_month'    => 'required',
        //     'dob_year'     => 'required',
        //     'present_address'=>'required',
        //     'country'      => 'required',
        //     'state'        => 'required',
        //     'city'         => 'required',
        //     'nationality'  => 'required',
        //     'visa_status'  => 'required',
        //     'mobile'       => 'required',
        //     'home_phone'   => 'required',
        //     'file_name'    => 'required',
        // ] );

        
        // for tbl_job seeker 
        $jobseeker = new Tbl_job_seekers();
        $jobseeker ->first_name = $request->first_name;
        $jobseeker ->email      = $request->email;
        $password_ok            = $request->password;
        $confirm_password_ok    = $request->confirm_password;
        // if ($password_ok == $confirm_password_ok){
        //   $jobseeker->password = $password_ok;
        // }
        // else{
        //   $error="Password does not match!!!";
        //   return view('jobseekersignup')->with('error',$error);
        // }
        
        $validation = Validator::make($request->all(), [
            'file_name' => 'required'
        ]);
        $cv = $request->file('file_name');
        $store_cv = rand() . '.' . $cv->getClientOriginalExtension();
        $cv->move(public_path('seekerresume'), $store_cv);
        $message ="You are successfully register !!!!!";
        $jobseeker ->gender   = $request->gender;       
        $birthday    = $request->dob_year . '-' . $request->dob_month . '-' . $request->dob_day;
        $jobseeker->dob = date('Y-m-d', strtotime($birthday));
        $jobseeker->present_address = $request->present_address;
        $jobseeker->country = $request->country;
        $jobseeker->state = $request->state;
        $jobseeker->city = $request->city;
        $jobseeker->nationality = $request->nationality;
        $jobseeker->visa_status = $request->visa_status;
        $jobseeker->mobile = $request->mobile;
        $jobseeker->home_phone = $request->home_phone;
        $jobseeker->cv_file=$store_cv;
        $jobseeker->middle_name ='';
        $jobseeker->ssn ='';
        $jobseeker->fed_id ='';
        $jobseeker->skype_id = '';
        $jobseeker->address_line_1 = '';
        $jobseeker->address_line_2 ='';
        $jobseeker->permanent_address = '';
        $jobseeker->dated = '';
        $jobseeker->photo ='';
        $jobseeker->default_cv_id = 12;
        $jobseeker->experience = '';
        $jobseeker->skills = '';
        $jobseeker->created_by  ='1';
        $jobseeker->is_employer ='1';
        $jobseeker->owner_id    ='';
        $jobseeker->old_id      ='1';
        $jobseeker->flag        ='';
        $jobseeker->owner_id='';
        $jobseeker->min_pay_rate='';
        $jobseeker->max_pay_rate='';
        $jobseeker->pay_rate_umo='';
        $jobseeker->employer_id='';
        $jobseeker->save();


        //Create record for user table
        $user_login = new user();
        $user_login ->org_ID="1";
        $user_login ->user_type="seeker";
        $user_login ->full_name=$request->first_name;
        $user_login ->email    =$request->email;
        $user_login ->password =$password_ok;
        $user_login ->save();

        
        return  redirect('/')->with('success',$message); 
     }

}
