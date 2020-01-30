<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tbl_job_seekers;
use App\Tbl_state; 
use App\Tbl_cities; 
use App\Tbl_countries;
use App\Tbl_seeker_experience;
use App\sessions;
use App\Tbl_seeker_academic;
use App\Tbl_seeker_skills;
use App\tbl_candidate_notes;
use App\Tbl_seeker_additional_info;
use App\tbl_post_jobs;
use App\user;
use DB;
use Session; 

class Job_Seeker_Controller extends Controller{

    public function __construct()
		{
			$this->middleware('mian_session');

		}
//     public function __construct()
// 		{
// 			$this->middleware('check_jobseeker');

// 		}
    public function index(){
        return view('indexjobseeker');
     } 
  
    public function manage_account(Request $request){
         
          $toReturn=array();
          $toReturn['seeker_info']=Tbl_seeker_additional_info::where('seeker_ID',Session::get('user_id'))->first();
          $toReturn['manage_acc']= Tbl_job_seekers::where('ID',Session::get('user_id'))->get()->toArray(); 
          $toReturn['countries'] = Tbl_countries::get()->toArray();
          $toReturn['cities']    = Tbl_cities::get()->toArray();
        //   return $toReturn['manage_acc'];
          return view('my_account')->with('toReturn',$toReturn);
    }
    
    public function update_manage_account(Request $request){

          $success ="Your Profile Uploaded Successfully!!!!";
          $birthday             = $request->date_of_birth;
            $birthday_date    =strtotime($birthday);
            $seeker_details =  Tbl_job_seekers::where('ID',Session::get('user_id'))->first();
            if($seeker_details)
            {
          $update_seeker_details =  Tbl_job_seekers::where('ID',Session::get('user_id'))->update(array(
              'first_name' => $request->name,
              'gender'     => $request->gender,
              'dob'        =>date('Y-m-d', $birthday_date),  
              'present_address' => $request->current_address,
              'country'    => $request->country,
              'state'      =>$request->state,
              'city'       => $request->city,
              'nationality'=> $request->nationality,        
              'mobile'     => $request->mobile_number,
              'home_phone' =>$request->home_number,       
              'experience' =>$request->total_experience,
              'visa_status'=> $request->visa_status
              ));
            
               return redirect('jobseeker/dashboard')->with('success',$success);
            }
            else
            {
                $new_seeker_detail=new Tbl_job_seekers();
                $new_seeker_detail->first_name = $request->name;
              $new_seeker_detail->gender     = $request->gender;
              $new_seeker_detail->dob        =date('Y-m-d', $birthday_date);  
              $new_seeker_detail->present_address = $request->current_address;
              $new_seeker_detail->country    = $request->country;
              $new_seeker_detail->state     =$request->state;
              $new_seeker_detail->city     = $request->city;
              $new_seeker_detail->nationality= $request->nationality;       
              $new_seeker_detail->mobile     = $request->mobile_number;
              $new_seeker_detail->home_phone =$request->home_number;      
              $new_seeker_detail->experience =$request->total_experience;
              $new_seeker_detail->visa_status= $request->visa_status;
                $new_seeker_detail->save();
             return redirect('jobseeker/dashboard')->with('success',$success);
            }
      }
     
      
      
     function uploaded_image(Request $request)
      {
        return $request;
     $validation = Validator::make($request->all(), [
      'Upload_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
     ]);
     if($validation->passes())
     {
      $image = $request->file('select_file');
      $new_name = rand() . '.' . $image->getClientOriginalExtension();
      $image->move(public_path('images'), $new_name);
      return response()->json([
       'message'   => 'Image Upload Successfully',
       'uploaded_image' => '<img src="/images/'.$new_name.'" class="img-thumbnail" width="300" />',
       'class_name'  => 'alert-success'
      ]);
     }
     else
     {
      return response()->json([
       'message'   => $validation->errors()->all(),
       'uploaded_image' => '',
       'class_name'  => 'alert-danger'
      ]);
     }
    }
    public function add(Request $Request)
   {
      $invite_obj=new Tbl_seeker_skills;
      $invite_obj->skill_name=$Request->mobile_number;
      $invite_obj->seeker_ID=Session::get('id');
     $invite_obj->save();
    return redirect('jobseeker/add_skill');
   }
   public function show()
    {
      $data= Tbl_seeker_skills::where('seeker_ID',Session::get('id'))->get();
      return view('add_skill')->with('data',$data);
    }

    public function addexp(Request $Request)
    {
        
        $experience=new tbl_seeker_experience();
        $experience->seeker_ID=$Request->seeker_ID;
        $experience->job_title=$Request->job_title;
        $experience->company_name=$Request->company_name;
        $date=date('Y-m-d h:i:s',time());
        $experience->start_date=$Request->datea;
        $experience->end_date=$Request->dateb;
        $experience->city=$Request->city;
        $experience->country=$Request->country;
        $experience->dated=$date;
        $experience->responsibilities=$Request->responsibilities;
        $experience->save();
        return redirect('jobseeker/dashboard');
    }
    
    public function addedu(Request $Request)
    {
        
        $academics=new tbl_seeker_academic();
        $academics->seeker_ID=$Request->seeker_ID_edu;
        $academics->degree_level=$Request->degree_level;
        $academics->degree_title=$Request->degree_title;
        $academics->major=$Request->major;
        $academics->institute=$Request->institute;
        $academics->country=$Request->country_edu;
        $academics->city=$Request->city_edu;
        $academics->completion_year=$Request->completion_year;
        $date=date('Y-m-d h:i:s',time());
        $academics->dated=$date;
        $academics->save();
        return redirect('jobseeker/dashboard');
    }
    
    
    public function dashboard()
    {
      $toReturn=array();
      $toReturn['job_seeker']=Tbl_job_seekers::where('ID',Session::get('user_id'))->first();
           $toReturn['summary']=tbl_candidate_notes::where('id',Session::get('user_id'))->first(); //fetch Personal Summary Note
           $toReturn['additional_info']=Tbl_seeker_additional_info::where('seeker_ID',Session::get('user_id'))->first(); //fetch Additional Info
      return view('jobseekerdashboard')->with('toReturn',$toReturn);
    }
    
    
    
    
    public function my_jobs()
    {
            $toReturn['postjob']=tbl_post_jobs::where('ID',Session::get('user_id'))->first();
      return view('my_jobs')->with('toReturn',$toReturn);
    }
    public function add_info()
    {
     $toReturn['additional_info']=Tbl_seeker_additional_info::where('seeker_ID',Session::get('user_id'))->first(); //fetch Additional Info
                   
      return view('add_info')->with('toReturn',$toReturn);
    }
     public function insert_additonal_info(Request $request){
         
                $this->validate($request,[
                    'seeker_career_objective' => 'required',
                    'seeker_interest' => 'required',
                    'seeker_achivement'=>'required'
                 ]);
        $seeker_additonal_info = new Tbl_seeker_additional_info();
        $seeker_additonal_info->seeker_ID=Session::get('user_id');
        $seeker_additonal_info->additional_qualities =$request->seeker_career_objective;
        $seeker_additonal_info->interest             =$request->seeker_interest;
        $seeker_additonal_info->awards               =$request->seeker_achivement;
        $seeker_additonal_info->save();
        return redirect('jobseeker/dashboard');
      }
    public function search_resume()
    {
      return view('search_resume');
    }
   public function change_pass()
    {
      $toReturn=array();
      $toReturn['old_pass']=Tbl_job_seekers::where('ID',Session::get('user_id'))->first();
      return view('change_pass')->with('toReturn',$toReturn);
    }
    
    public function update_pass(Request $Request)
    {
      
      $old_password=$Request->old_password;
      $new_password=$Request->new_password;
      $confirm_password=$Request->confirm_password;
      $user_pwd = user::where('id',Session::get('id'))->first('password');
      $userExit_pwd=Tbl_job_seekers::where('ID',Session::get('user_id'))->first('password');
      $exit_old_pwd=$user_pwd->password;
      $errors="";
      if($exit_old_pwd==$old_password)
      {
          if($new_password==$confirm_password)
            {
             //$errors='Upadate Successfully ';
              $update_pwd=DB::table('user')->where('id',Session::get('id'))->update(['password'=>$Request->confirm_password]);
              $upd_pass= Tbl_job_seekers::where('ID',Session::get('user_id'))->update(['password'=>$Request->confirm_password]);    
            return redirect('admin/logout');//->with('errors',$errors );
            }
            else
            {
              $errors='Your New Password is not Match';
              return $errors;
            //   return redirect('jobseeker/change_pass')->with('errors',$errors);
            }
      }
      else
      {
        $errors='Your Password is not Match';
        return redirect('jobseeker/change_pass')->with('errors',$errors );
      }
      
    }
    //Personal Summary
    public function notes(Request $Request)
    {
      $notes= tbl_candidate_notes::where('candidate_id',Session::get('user_id'))->update(['note'=>$Request->note]);
      if($notes)
      {
        $notes_data=tbl_candidate_notes::where('candidate_id',Session::get('user_id'))->first('note');
      }
    return  response()->json($notes_data); 
      // return response()->json(false); 
    }
    public function cv_download($data="")
    {
         $filePath = public_path('cv');
        $headers = ['Content-Type: application/txt'];
        $fileName = time().'.txt';
         return response()->download($filePath, $fileName, $headers);

    }

    public function logout(){

        sessions::where('check_val','seeker')->delete();
        Session::flush();
        return redirect('/');
			
    }
    
  }
