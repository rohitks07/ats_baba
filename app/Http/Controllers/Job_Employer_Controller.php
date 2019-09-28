<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session; 
use App\Tbl_cities;
use App\Tbl_countries;
use App\Tbl_email_list;
use App\Tbl_email_list_contacts;
use App\tbl_job_industries;
use App\Tbl_job_post_assign;
use App\Tbl_job_seekers;
use App\tbl_meeting;
use App\Tbl_post_contacts;
use App\tbl_post_job;
use App\tbl_post_jobs;
use App\tbl_schedule_interview;
use App\Tbl_seeker_academic;
use App\Tbl_seeker_applied_for_job;
use App\Tbl_seeker_applied_for_job_doc;
use App\Tbl_seeker_experience;
use App\Tbl_seeker_skills;
use App\tbl_team_member;
use App\Tbl_team_member_type;
use App\tbl_interview_add;
use App\Tbl_visa_type;
use App\Tbl_state; 
use App\Tbl_qualifications;
use App\Tbl_notification;
use App\Tbl_team_member_permission;
use App\Tbl_forward_candidate;
use App\Tbl_forward_candidate_reference;
use App\Tbl_forward_candidate_exp_required;
use App\Tbl_module;
use App\Tbl_degree;
use Mail;
use App\user;
use Validator;




class Job_Employer_Controller extends Controller
{
     public function dashboard()
    {
            $toReturn['one_day_job']= count(tbl_post_job::whereDate('dated', '=', date('Y-m-d'))->where('employer_ID',Session::get('id'))->get());
            $toReturn['total_job']= count(tbl_post_job::where('employer_ID',Session::get('id'))->get());           
            //$toReturn['total_job']=count(tbl_post_job::get());
            $toReturn['job_post'] = tbl_post_job::paginate(10);
            $toReturn['total_resume']=count(Tbl_job_seekers::where('employer_id',Session::get('user_id'))->get());
            $toReturn['total_interview']=count(tbl_schedule_interview::get());
            $toReturn['interview']= tbl_schedule_interview::get()->toArray();
            $toReturn['meeting']= tbl_meeting::get()->toArray();
            $toReturn['assign']=Tbl_job_post_assign::get()->toArray();
            $toReturn['tota_interview']=count(tbl_schedule_interview::get());
            $toReturn['total_meeting']=count(tbl_meeting::get());
            $toReturn['total_application']=count(Tbl_seeker_applied_for_job::where('employer_ID',Session::get('user_id'))->get());
            $toReturn['application']= Tbl_seeker_applied_for_job::leftjoin('tbl_post_jobs as post_jobs','tbl_seeker_applied_for_job.job_ID','=','post_jobs.ID')
            ->leftjoin('tbl_job_seekers as seeker','tbl_seeker_applied_for_job.seeker_ID','=','seeker.ID')
            ->select('post_jobs.job_code as job_code','post_jobs.job_title as job_title','post_jobs.client_name as job_client_name','post_jobs.country as location','post_jobs.job_visa_status as  job_visa','post_jobs.pay_min as pay_min','post_jobs.pay_max as pay_max','seeker.first_name as can_first_name','seeker.last_name as can_last_name','seeker.country as can_location','seeker.visa_status as can_visa','tbl_seeker_applied_for_job.dated as applied_date')
            ->paginate(10);       
            for($i=0;$i<7;$i++)
            {
                $toReturn['date'][$i]= date('d-m-Y',strtotime("-".$i."days"));
                $toReturn['Publish_DatejobCount'][$i]= tbl_post_job::where('dated','=',date('Y-m-d',strtotime("-".$i."days")))->count();
                $toReturn['close_DatejobCount'][$i]= tbl_post_job::where('last_date','=',date('Y-m-d',strtotime("-".$i."days")))->count();
                // return $toReturn['close_DatejobCount'][$i];
                // exit;

            }    
        
           // return $toReturn['date'];

                // $toReturn['Total_Jobs']= tbl_post_job::where(date('d-m-Y'))->count();
          // }
           
        //    return $toReturn['Total_Jobs'];
        //    exit;
            //$toReturn['Work in Process']
    return view('employerdashboard')->with('toReturn',$toReturn);
    }
    
    
    public function status(Request $request){
        $id=$request->id;
        $status=$request->sts;
        if($status=='deleted'){
            $stsdelete=tbl_post_job::where('ID',$id)->delete();
        } 
        tbl_post_job::where('ID', $id)->update(array(
            'sts'=>$status
        )); 
        return redirect('employer/dashboard');
    
    }

    public function view_post_form()
    {
            $toReturn=array();
            $toReturn['team_member_type']=tbl_team_member_type::get()->toArray();
            $toReturn['post_job']        =tbl_post_jobs::get()->toArray();
            $toReturn['team_member']     =tbl_team_member::get()->toArray();
            $toReturn['job_industries']  =tbl_job_industries::get()->toArray();
        return view('post_new_job')->with('toReturn',$toReturn);
    }

    public function Add_to_post_job(Request $request)
    {                   
            // $Add_group = new tbl_team_member_type();
            $Add_to_post_job = new tbl_post_jobs(); 
            // $Add_job_industries =new tbl_job_industries();
            // $Add_group ->type_name      =  $request->group_of_company;
            $Add_to_post_job ->client_name    =  $request->company_name;
            $Add_to_post_job ->privacy_level  =  $request->privacy_level;
            $Add_to_post_job ->sts            =  $request->status;
            $Add_to_post_job ->industry_ID =  $request->industry;
            $Add_to_post_job ->job_code       =  $request->job_code;
            $Add_to_post_job ->job_title      =  $request->job_title;
            $Add_to_post_job ->vacancies      =  $request->no_of_vacancies;
            $Add_to_post_job->employer_ID   =Session::get('id');
            $Add_to_post_job->owner_id=$request->owner_name;
            $Add_to_post_job->company_ID=Session::get('org_ID');
            $date = $request->closeing_date;
            $Add_to_post_job ->last_date   =  date('Y-m-d', strtotime($date));
            // return $date; 
            // exit;status          
            $Add_to_post_job ->dated       =  date('Y-m-d');
            $Add_to_post_job ->job_visa_status=  implode(',',$request->visa);
            $Add_to_post_job ->qualification  =  implode(',',$request->quali);
            $Add_to_post_job ->country        =  $request->country;
            $Add_to_post_job ->state          =  $request->state;
            $Add_to_post_job ->city           =  $request->city;
            $Add_to_post_job ->job_mode       =  $request->type_of_job;
            $Add_to_post_job ->job_duration   =  $request->job_duration;
            $Add_to_post_job ->job_duration_uom =  $request->day_week;
            $select_payment=$request->select_payment;
            if($select_payment=='DOE')
            {
                $Add_to_post_job ->pay_min       =  $select_payment;
                $Add_to_post_job ->	pay_max      =  $select_payment;
            }else{
            $payment_array=explode('-',$select_payment);
            $Add_to_post_job ->pay_min        =  $payment_array[0];
            $Add_to_post_job ->pay_max      =  $payment_array[1];
            }
            // $payment_array=explode('-',$select_payment);
            // $Add_to_post_job ->pay_min        =  $payment_array[0];
            // $Add_to_post_job ->	pay_max      =  $payment_array[1];
            $Add_to_post_job ->pay_uom        =  $request->pay_uom;
            $Add_to_post_job ->min_pay_rate        =  $request->pay_min;
            $Add_to_post_job ->	max_pay_rate        =  $request->pay_max;
            $Add_to_post_job ->	pay_rate_umo        =  $request->pay_uom;
             $Add_to_post_job ->experience     =  $request->experience;
            $Add_to_post_job ->min_experience     =  $request->experience;
            $Add_to_post_job ->max_experience     =  $request->experience;
            $Add_to_post_job ->requirement_must=  $request->requirement;
            $Add_to_post_job ->requirement_optional=  $request->requirements;
            $Add_to_post_job ->job_description =  $request->job_desc;
            $Add_to_post_job ->required_skills =  $request->skills;
            $Add_to_post_job->created_by=Session::get('id');
            $Add_to_post_job->last_updated_by=Session::get('id');
            
            // $Add_group->save();     
            $Add_to_post_job->save();
            //Add Notiofication
            // $notification=new Tbl_notification();
     
        return redirect('employer/posted_jobs');
    }
    
    
    public function editjob($id="")
    {
            ini_set('memory_limit', '-1');
            $toReturn[]=array();
            $toReturn['state']=Tbl_state::get()->toArray();
            $toReturn['city']=Tbl_cities::get()->toArray();
            $toReturn['countries']=Tbl_countries::get()->toArray();
            $toReturn['qualification']=Tbl_qualifications::get()->toArray();
            $toReturn['post_job_edit']=tbl_post_jobs::get()->toArray();
            $toReturn['post_job'] = tbl_post_jobs::where('ID',$id)->first();
            $toReturn['team_member_type']=tbl_team_member_type::get()->toArray();
            $toReturn['team_member']     =tbl_team_member::get()->toArray();
            $toReturn['job_industries']  =tbl_job_industries::get()->toArray();
        return view('edit_posted_job')->with('toReturn',$toReturn);
    }
    
    
    public function updatejob(Request $Request)
    {
        $id=$Request->id;
        $post_job = tbl_post_jobs::where('ID',$id)->update(array(
            'client_name'=>$Request->company_name,
            'privacy_level'=>$Request->privacy_level,
            'sts'=>$Request->status,
            'industry_ID'=>$Request->industry,
            'job_code'=>$Request->job_code,
            'job_title'=>$Request->job_title,
            'country'=>$Request->country,
            'last_date'=>$Request->closeing_date,
            'vacancies'=>$Request->no_of_vacancies,
            'job_visa_status'=>$Request->job_visa_status,
            'qualification'=>$Request->qualification,
            'sts'=>$Request->status,
            'city'=>$Request->city,
            'job_mode'=>$Request->type_of_job,
            'job_duration'=>$Request->job_duration,
            'job_duration_uom'=>$Request->day_week,
            'pay_min'=>$Request->pay_min,
            'pay_max'=>$Request->pay_max,
            'pay_uom'=>$Request->pay_uom,
            'experience'=>$Request->experience,
            'requirement_must'=>$Request->requirement,
            'requirement_optional'=>$Request->requirements,
            'job_description'=>$Request->job_desc,
            'required_skills'=>$Request->required_skills,
            'owner_id'=>$Request->owner_name
        ));
        $Notification=new Tbl_notification();
        $Notification->notification_service_id=$id;
        $Notification->service_type="Update Job";
        $Notification->notification_added_by=Session::get('id');
        $Notification->notification_added_to=$Request->company_name;
        $Notification->applied_id=" ";
        $Notification->notification_text=$Request->job_title."This  job Is Update By ".Session::get('id');
        $mydate=date('Y-m-d');
        $Notification->submit_date=$mydate;
        $Notification->updated_date=$mydate;
        $Notification->read_date=$mydate;
        $Notification->read_status_team_member=1;
        $Notification->read_date_team_member=$mydate;
        // $Notification->notification_service_id=$Add_to_post_job->ID;
        $Notification->save();
    return redirect('employer/posted_jobs');
    }
    
    
    public function view_my_posted_job(){
            $toReturn[]=array();
            $current_module_id=3;
            $user_permission_list=Session::get('user_permission');
            if($user_permission_list)
            {
        foreach($user_permission_list as $key =>$value )
        {
             if($user_permission_list[$key]['module_id']==$current_module_id)
             {
                 $toReturn['current_module_permission']=Tbl_team_member_permission::where('permission_value',$current_module_id)->where('team_member_id',Session::get('user_id'))->first()->toArray();
               
             }

        }
            }
       
            $toReturn['post_job'] = tbl_post_jobs::where('employer_ID',Session::get('id'))->paginate(25);
        return view('my_posted_jobs')->with('toReturn',$toReturn);
    }
  
    public function delete_employer($id=''){
            $employer_data=tbl_post_jobs::where('ID',$id)->delete();
        return redirect('employer/posted_jobs');
    }

    public function show_detail($id ="")
    {
        $data= tbl_post_jobs::where('ID',$id)->first();
        $industry=tbl_job_industries::where('ID',$data->industry_ID)->first();
        return view('team_member_jobdetails')
        ->with('data', $data)
        ->with('industry',$industry);
    }
   
   public function application()
   {
    ini_set('memory_limit', '-1');
    $toReturn['application']= Tbl_seeker_applied_for_job::leftjoin('tbl_post_jobs as post_jobs','tbl_seeker_applied_for_job.job_ID','=','post_jobs.ID')
      ->leftjoin('tbl_job_seekers as seeker','tbl_seeker_applied_for_job.seeker_ID','=','seeker.ID')
      // ->leftjoin('tbl_seeker_applied_for_job as applied_jobs','applied_jobs.job_ID','=','post_jobs.ID ' )
      ->select('tbl_seeker_applied_for_job.ID as application_id','post_jobs.ID as ID','post_jobs.job_code as job_code','post_jobs.job_title as job_title','post_jobs.client_name as job_client_name','post_jobs.country as location','post_jobs.job_visa_status as  job_visa','post_jobs.pay_min as pay_min','post_jobs.pay_max as pay_max','seeker.first_name as can_first_name','seeker.last_name as can_last_name','seeker.country as can_location','seeker.visa_status as can_visa','tbl_seeker_applied_for_job.dated as applied_date')
     ->paginate(10);
   	return view('employerApplication')->with('toReturn',$toReturn);
   }
   
    public function application_delete($id=''){
            $employer_application_delete=Tbl_seeker_applied_for_job::where('ID',$id)->delete();
        return redirect ('employer/Application');
    }

 public function list()
 {
 ini_set('memory_limit', '-1');

        $toReturn = array();
        $source="Internal";
        $personal = \DB::table('tbl_job_seekers')
                                ->select('tbl_job_seekers.ID as id','tbl_job_seekers.first_name as first','tbl_job_seekers.last_name as last',
                                'tbl_job_seekers.dob as dob','tbl_job_seekers.city as city','tbl_job_seekers.state as state','tbl_job_seekers.visa_status as visa',
                                'tbl_job_seekers.email as email','tbl_job_seekers.mobile as mobile','tbl_job_seekers.skype_id as skype_id',
                                'tbl_seeker_experience.start_date as seeker_experience_start','tbl_seeker_experience.end_date as seeker_experience_end','tbl_seeker_academic.degree_title as degree')
                               ->leftjoin('tbl_seeker_experience','tbl_seeker_experience.seeker_ID', '=' , 'tbl_job_seekers.ID')
                               ->leftjoin('tbl_seeker_academic','tbl_seeker_academic.seeker_ID', '=' ,'tbl_job_seekers.ID' )
                               ->where('tbl_job_seekers.employer_id',Session::get('user_id'))
                                ->orderBy('tbl_job_seekers.ID','asc')
                                ->distinct()
                               ->paginate(10);
                            //    echo"<pre>";
                            //    print_r($personal);
                            //    exit;
                            //    return $personal;
                               
            $current_module_id=2;
            $user_permission_list=Session::get('user_permission');
        foreach($user_permission_list as $key =>$value )
        {
             if($user_permission_list[$key]['module_id']==$current_module_id)
             {
                 $toReturn['current_module_permission']=Tbl_team_member_permission::where('permission_value',$current_module_id)->where('team_member_id',Session::get('user_id'))->first()->toArray();
                
             }

        }
                            
        return view('search_resume')->with('personal',$personal)->with('source',$source)->with('toReturn',$toReturn);
 
      
    }
    public function list_delete($id ="")
    {
        
        $personal= tbl_job_seekers::where('ID',$id)->delete();
     
        return redirect('employer/search_resume');
    }
    
    
    public function show_form(){
        $toReturn=array();
        $toReturn['countries']=Tbl_countries::get()->toArray();
        $toReturn['cities']=Tbl_cities::get()->toArray(); 
        $toReturn['degree']=Tbl_seeker_academic::get()->toArray();
        $toReturn['visa_type']=Tbl_visa_type::get()->toArray();
        
       return view('post_new_candidate')->with('toReturn',$toReturn);
    }
    
    public function post_new_candidate(Request $request)
    {
        
    $validation = Validator::make($request->all(), [
            'cv_file' => 'required'
        ]);
      $cv = $request->file('cv_file');
      $store_cv = rand() . '.' . $cv->getClientOriginalExtension();
      $cv->move(public_path('seekerresume'), $store_cv);
      if ($request->hasFile('file_other1')){
      $file_other1 = $request->file('file_other1');
      $file_other1_cv = rand() . '.' . $file_other1->getClientOriginalExtension();
      $file_other1->move(public_path('seekerresume'), $file_other1_cv);
      }
      if ($request->hasFile('file_other2')){
      $file_other2 = $request->file('file_other2');
      $file_other2_cv = rand() . '.' . $file_other2->getClientOriginalExtension();
      $file_other2->move(public_path('seekerresume'), $file_other2_cv);
      }
        $postcandidate = new Tbl_job_seekers(); 
        $postcandidate->first_name=$request->first_name;
        $postcandidate->middle_name=$request->middle_name;
        $postcandidate->last_name=$request->last_name;
        $birthday = $request->dob_year . '-' . $request->dob_month . '-' . $request->dob_day;
        $postcandidate->dob=$birthday;
        $postcandidate->gender=$request->gender;
        $postcandidate->email=$request->email;
        $postcandidate->skype_id=$request->skype_id;
        $postcandidate->ssn=$request->ssn;
        $postcandidate->visa_status=$request->visa_status;
        $postcandidate->country=$request->country;
        $postcandidate->state=$request->state;
        $postcandidate->city=$request->city;
        $postcandidate->address_line_1=$request->addressline1;
        $postcandidate->address_line_2=$request->addressline2;
        $postcandidate->mobile=$request->mobilephone;
        $postcandidate->home_phone=$request->homephone;
        $postcandidate->cv_file=$store_cv;
        
        if ($request->hasFile('file_other1')){
        $postcandidate->otherdocuments1=$file_other1_cv;
        }
        if ($request->hasFile('file_other2')){
        $postcandidate->otherdocuments2=$file_other2_cv;
        }
        $postcandidate->fed_id=12;
           $mydate=date('Y-m-d');
        $postcandidate->dated=$mydate;
        $postcandidate->experience="";
        $postcandidate->default_cv_id=1;
        // $postcandidate->cv_file=;
        $postcandidate->skills=$request->skills;
        $postcandidate->employer_id=Session::get('user_id');
        $postcandidate->created_by=Session::get('user_id');
        $postcandidate->is_employer=Session::get('user_id');
        $postcandidate->owner_id="";
        $postcandidate->min_pay_rate="";
        $postcandidate->max_pay_rate="";
        $postcandidate->pay_rate_umo="";
        $postcandidate->save();
        $id=$postcandidate->id;

    
        // educational insert
        $degree = $request->degree;   
           foreach($degree as $key => $value) {
               if($degree[$key]!="")
               {
            $seeker_academic = new Tbl_seeker_academic();
            $seeker_academic->seeker_ID	=$id;
            $seeker_academic->degree_title    = $degree[$key];
            $seeker_academic->major           = $request->major_subject[$key];
            $seeker_academic->institude       = $request->institute[$key];
            $seeker_academic->city            = $request->edu_city[$key];
            $seeker_academic->country         = $request->edu_country[$key];
            $seeker_academic->completion_year =$request->completion_year[$key];
            $seeker_academic->dated=data('Y-m-d');               
            $seeker_academic->save();
            }

        }

        //experiance  start
        $job_title_experience = $request->job_title;              
        foreach($job_title_experience as $key => $value ){
            if($job_title_experience[$key]!="")
               {
            $seeker_exprience = new Tbl_seeker_experience();
            $seeker_exprience->seeker_ID=$id;
            $seeker_exprience->  job_title  = $job_title_experience[$key]; 
            $seeker_exprience->company_name = $request->company_name[$key];
            $seeker_exprience->city         = $request->exp_city[$key];
            $seeker_exprience->country      = $request->exp_country[$key];
            $seeker_exprience->start_date   = $request->start_date[$key];
            $seeker_exprience->end_date     = $request->end_date[$key];
            $seeker_exprience->save(); 
            } 
        }
        //   experiance end


        //skill  start
        $seeker_skill_name = new Tbl_seeker_skills();
        $seeker_skill_name->skill_name = $request->skill;
        return redirect('employer/search_resume');
    }
    
    // function uploaded_resume(Request $request)
    //   {
    //     return $request;
    //  $validation = Validator::make($request->all(), [
    //   'Upload_image' => 'required'
    //  ]);
    //  if($validation->passes())
    //  {
    //   $image = $request->file('select_file');
    //   $new_name = rand() . '.' . $image->getClientOriginalExtension();
    //   $image->move(public_path('images'), $new_name);
    //   return response()->json([
    //   'message'   => 'Image Upload Successfully',
    //   'uploaded_image' => '<img src="/images/'.$new_name.'" class="img-thumbnail" width="300" />',
    //   'class_name'  => 'alert-success'
    //   ]);
    //  }
    //  else
    //  {
    //   return response()->json([
    //   'message'   => $validation->errors()->all(),
    //   'uploaded_image' => '',
    //   'class_name'  => 'alert-danger'
    //   ]);
    //  }
    // }
    
    

    
    // Team member managing functions
    public function showteam()
    { 
        
         $module=Tbl_module::all();
        return view('create_team_member')
        ->with('group', Tbl_team_member_type::all())
        ->with('country', tbl_countries::all())
        ->with('city', tbl_cities::all())
        ->with('module',$module);
    }
    public function showteamadd(Request $Request)
    { 
        if ($Request->hasFile('profile_image')){
            $profile_image = $Request->file('profile_image');
            $new_profile_image = rand() . '.' . $profile_image->getClientOriginalExtension();
            $profile_image->move(public_path('seekerresume'), $new_profile_image);
            }
    	$team=new tbl_team_member();
    	$team->employer_id=Session::get('id');
    	$team->company_id=Session::get('org_ID');
    // 	return $Request->member_id;
    	$team->member_id=$Request->member_id;
        $team->team_member_type=$Request->group;
        $team->assigned_jobs=" ";
        $team->email=$Request->email;
        $team->pass_code=$Request->password;
        $team->full_name=$Request->full_name;
        $team->first_name=$Request->full_name;
         
        if ($Request->hasFile('profile_image')){
        $team->profile_image=$new_profile_image;
        }
        $team->jobs_history=$Request->jobs_history;
        $team->is_active="active";
        $date=date('Y-m-d');
        $team->dated=$date;
        $team->phone=$Request->phone;
        $team->mobile_number=$Request->mobile_number;
        $team->sts='active';
       // $team->country=$Request->country;
        // $team->state=$Request->state;
        // $team->city=$Request->city;
        // $team->loc_time_zone=$Request->timea;
        // $team->dis_time_zone=$Request->timeb;
        $time=date('Y-m-d h:i:s',time());
        $team->first_login_date=$time;
        $team->last_login_date=$time;
        $team->last_updated_date=$time;
        $team->last_updated_by=Session::get('id');
        $team->save();
        $module=$Request->module;     
        foreach ($module as $key => $value) {
        $permission= new Tbl_team_member_permission();
        $permission->team_member_id=$team->id;
        $permission->employer_id=Session::get('id');
        $permission->company_id=Session::get('org_ID');
        $permission->permission_value=$value;
        $permission->is_read = (!empty($Request->input('read'.$value))) ? "yes":"no";
        $permission->is_add = (!empty($Request->input('add'.$value))) ? "yes":"no";
        $permission->is_edit = (!empty($Request->input('edit'.$value))) ? "yes":"no";
        $permission->is_delete = (!empty($Request->input('delete'.$value))) ? "yes":"no";   
        $permission->save();
        }
        $user_tbl=new user();
        $user_tbl->full_name=$Request->full_name;
        $user_tbl->email=$Request->email;
        $user_tbl->user_id=$team->id;
        $user_tbl->password=$Request->password;
        $user_tbl->user_type="teammember";
        $user_tbl->org_ID=Session::get('org_ID');
        $user_tbl->save();
        return redirect('employer/manageteammember');

    }
    
    
    public function addteam()
    { 
    	return view('create_team_member_group');
    }
    
    
    public function addteaminsert( Request $Request)
    { 
        $teamType=new Tbl_team_member_type();
        $teamType->type_name=$Request->groupname;
        $teamType->status=1;
        $date=date('Y-m-d h:i:s');
        $teamType->date_created=$date;
        $teamType->date_closed=$date;
        $teamType->last_updated_date=$date;
        $teamType->last_updated_by=Session::get('id');
        $teamType->save();
        return redirect('employer/manageteammember');
    }
    
    public function editteam(Request $Request)
    {
        $id=$Request->id;
        $editteamgroup = Tbl_team_member_type::where('type_ID',$id)->update(array(
                'type_name'=>$Request->type_namegroup
            ));
        return redirect('employer/manageteammember');
    }
    

    public function manageteam()
    { 
        $current_module_id=11;
        $toReturn=array();
            $user_permission_list=Session::get('user_permission');
            if($user_permission_list)
            {
        foreach($user_permission_list as $key =>$value )
        {
             if($user_permission_list[$key]['module_id']==$current_module_id)
             {
                 $toReturn['current_module_permission']=Tbl_team_member_permission::where('permission_value',$current_module_id)->where('team_member_id',Session::get('user_id'))->first()->toArray();
             }

        }
            }
        $team_member= tbl_team_member::leftjoin('tbl_team_member_type as member_type','tbl_team_member.team_member_type','=','member_type.type_ID')
        ->select('tbl_team_member.ID as ID','tbl_team_member.first_name as first_name','member_type.type_name as team_member_type','tbl_team_member.city as city','tbl_team_member.state as state','tbl_team_member.country as  country','tbl_team_member.loc_time_zone as loc_time_zone','tbl_team_member.first_login_date as first_login_date','tbl_team_member.last_login_date as last_login_date','tbl_team_member.last_updated_date as last_updated_date','tbl_team_member.is_active as is_active','tbl_team_member.ID as ID')
        ->get();
         $team_member_type=tbl_team_member_type::all();
        return view('manage_team_members')->with("team_member",$team_member)->with("team_member_type",$team_member_type)->with('toReturn',$toReturn);
    }
    public function delete_teammember($id ="")
    {
            $team_member_del= tbl_team_member::where('ID',$id)->delete();
        return redirect('employer/manageteammember');
    }
    public function edit_teammember($id ="")
    {
        $data= tbl_team_member::where('ID',$id)->first();
        
        return view('edit_team_member')
        ->with('data', $data)
        ->with('group', Tbl_team_member_type::all())
        ->with('country', tbl_countries::all())
        ->with('city', tbl_cities::all());
    }
    public function edit_teammember_add(Request $Request)
    {
        $date=date('Y-m-d h:i:s',time());
        
        tbl_team_member::where('ID', $Request->ID)->update(array(
        'team_member_type'=>$Request->group,
        'email'=>$Request->email,
        'pass_code'=>$Request->password,
        'full_name'=>$Request->full_name,
        'first_name'=>$Request->full_name,
        'profile_image'=>$Request->profile_image,
        'jobs_history'=>$Request->jobs_history,
        'phone'=>$Request->phone,
        'mobile_number'=>$Request->mobile_number,
        'country'=>$Request->country,
        'state'=>$Request->state,
        'city'=>$Request->city,
        'loc_time_zone'=>$Request->timea,
        'dis_time_zone'=>$Request->timeb,
        'last_updated_date'=>$date,
        'last_updated_by'=>2
        ));
       return redirect('employer/manageteammember');
    }
    public function manageteamadd()
    { 
        $team_member_type=tbl_team_member_type::all();
    	return view('manage_team_members_group')->with("team_member_type",$team_member_type);
    // 	return view('manage_team_members')->with("team_member_type",$team_member_type);
    
    }
    public function delete_teammember_type($id ="")
    {
        $team_member_del= tbl_team_member_type::where('type_ID',$id)->delete();
        
        return redirect('employer/manageteammember');
    }
    public function manageteamaddedit( Request $Request)
    {
        $type_ID=$Request->type_id;
        $team_type= tbl_team_member_type::where('type_ID',$type_ID)->first();
        $type_name=$Request->type_name;
        
        tbl_team_member_type::where('type_ID', $type_ID)->update(array('type_name'=>$type_name));
        return redirect('employer/manageteammember');

        
    }
  
    

    public function add_email_form(Request $request)
    {
            $emailList = new Tbl_email_list_contacts;
            $emailList ->salutation = $request->salutation;
            $emailList ->first_name = $request->firstname;
            $emailList ->last_name  = $request->lastname;
            $emailList ->full_name  = $request->fullname;
            $emailList ->email_contact_id =$request->emailid;
            $emailList ->add_in_contact_db = $request->contactdatabase;
            $emailList ->save();
        return redirect('employer/my_posted_contacts');
    }

    public function show_email_form()
    {
        return view('post_new_email_contact');
    }

    public function delete_email($id="")
    {     
            $email_delete  = Tbl_email_list_contacts::where('id',$id)->delete();
        return redirect('employer/my_posted_contacts');
    }
    
    public function delete_email_list($id="")
    {  
           $email_delete_list=Tbl_email_list::where('id',$id)->delete();
        return redirect('employer/my_posted_contacts');
    }
    // public function check_permission($current_module_id)
    // {
    //     // $current_module_id=3;
    //         $user_permission_list=Session::get('user_permission');
    //     foreach($user_permission_list as $key =>$value )
    //     {
    //          if($user_permission_list[$key]['module_id']==$current_module_id)
    //          {
    //              $current_module_permission=Tbl_team_member_permission::where('permission_value',$current_module_id)->where('team_member_id',Session::get('user_id'))->first()->toArray();
    //             //  print_r($current_module_permission);
    //             //  exit;
    //                 return true;
    //          }
    //          else
    //          {
    //              return false;       
    //          }

    //     }
    // }
       
     
    public function assign_job($id="")
    {
        $toReturn=array();
        $toReturn['team_member_list']= tbl_team_member::get()->toArray();  
        foreach($toReturn['team_member_list'] as $key => $value){
           $check_already_assign = tbl_job_post_assign::where(array('job_post_id'=>$id,'team_member_id'=>$toReturn['team_member_list'][$key]['ID'],'status'=>'active'))->first();
        //    echo"<pre>";
        //    print_r($check_already_assign);
        //    exit;
            if(!empty($check_already_assign)){
                $toReturn['team_member_list'][$key]['sts'] = 'active';
            }else{
                $toReturn['team_member_list'][$key]['sts'] = 'inactive';
            }
        
        }
        $toReturn['post_job'] = tbl_post_jobs::where('id',$id)->first();
        $post_job  = tbl_post_jobs::where('id',$id)->first();      
        $assign_details= \DB::table('tbl_job_post_assign')
                                                ->leftjoin('tbl_team_member','tbl_team_member.ID','=','tbl_job_post_assign.team_member_id')
                                                ->leftjoin('user','user.ID','=','tbl_job_post_assign.team_member_id')
                                                ->select('tbl_team_member.full_name as name','tbl_team_member.email as email','user.full_name as userAssign',
                                                        'tbl_job_post_assign.job_assigned_date as job_assign_date')->get()->toArray();
                    // return $assign_details;
                    // exit;
            
            return view('posted_job_assined')->with('toReturn',$toReturn)->with('jobpost',$post_job)->with('assign_details',$assign_details);
                                     //->with('job_post_assign_status',$job_post_assign_status);
    }

    public function assign_active(Request $request)
    {
        //return $request->team_member_id;
        // // exit;  s
        if($request->sts =='active')
        {
                $assigned_job = new tbl_job_post_assign();            
                $assigned_job->team_member_id=$request->team_member_id;
                $assigned_job->job_assigned_by=Session::get('id');
                $assigned_job->owner_id=$request->owner_id;
                $assigned_job->job_post_id=$request->job_id;
                $assigned_job->job_assigned_date=date('Y-m-d');
                $assigned_job->job_unassigned_date=date('Y-m-d');
                $assigned_job->status="active";  
                $assigned_job->read_flag=0;
                $assigned_job->favourite_flag=0;
                $assigned_job->save();
            return redirect('employer/posted_job_assined');   
       }
       else
       {
           $team_member=tbl_team_member::where('ID',$request->team_member_id)->update(array('sts'=>'inactive'));
           return redirect('employer/posted_job_assined'); 
        //  return $request->job_id;
        //  $assign_details= \DB::table('tbl_job_post_assign')->where('job_post_id',$request->job_id)->where('team_member_id',$request->team_member_id)->get();
        //     return $assign_details;   
       }
        
    }
    public function list_candidate($id="")
    {
        $source="Internal";
        $toReturn['personal'] = \DB::table('tbl_job_seekers')
                                ->select('tbl_job_seekers.ID as id','tbl_job_seekers.first_name as first','tbl_job_seekers.last_name as last',
                                'tbl_job_seekers.dob as dob','tbl_job_seekers.city as city','tbl_job_seekers.state as state','tbl_job_seekers.visa_status as visa',
                                'tbl_job_seekers.email as email','tbl_job_seekers.mobile as mobile','tbl_job_seekers.skype_id as skype_id',
                                'tbl_seeker_applied_for_job.total_experience as experience','tbl_seeker_academic.degree_title as degree')
                               ->leftjoin('tbl_seeker_experience','tbl_seeker_experience.seeker_ID', '=' , 'tbl_job_seekers.ID')
                               ->leftjoin('tbl_seeker_academic','tbl_seeker_academic.seeker_ID', '=' ,'tbl_job_seekers.ID' )
                               ->leftjoin('tbl_seeker_applied_for_job','tbl_seeker_applied_for_job.seeker_ID', '=' ,'tbl_job_seekers.ID')
                               ->where('tbl_job_seekers.ID',$id)
                                ->orderBy('tbl_job_seekers.ID','asc')
                               ->first();
        // echo"<pre>";
        
        $toReturn['job_list']= tbl_post_jobs::get()->toArray();
        return view('employer_submit_to_job')->with('toReturn',$toReturn);
    }
    public function submit_candidate(Request $Request)
    { 
        // return $Request;
        // return $Request->updated_resume;
        // if ($Request->hasFile('updated_resume')){
            // $updated_resume = $Request->file('updated_resume');
            // return $updated_resume;
            $mydate=date('m-Y-d');
            $seeker_name=$Request->seeker_name;
            if ($Request->hasFile('updated_resume')){
                $updated_resume = $Request->file('updated_resume');
                $new_updated_resume =$seeker_name."update_resume".$mydate.".".$updated_resume->getClientOriginalExtension();
                $updated_resume->move(public_path('seekerresume'), $new_updated_resume);
                }
        $seeker_applied_for_job=new Tbl_seeker_applied_for_job();
        $seeker_applied_for_job->seeker_ID=$Request->seeker_id;
        $seeker_applied_for_job->job_ID=$Request->job_id;
        // $seeker_applied_for_job->cover_letter=
        $payment=explode('-',$Request->payment_range);
        $pay_min=$payment[0];
        $pay_max=$payment[1];
        $seeker_applied_for_job->expected_salary=$Request->payment_range;
        $seeker_applied_for_job->dated=date('Y-m-d');
        $seeker_applied_for_job->ip_address=$Request->ip();
        $seeker_applied_for_job->employer_ID=Session::get('user_id');
        // $seeker_applied_for_job->flag=
        // $seeker_applied_for_job->old_id=
        $seeker_applied_for_job->candate_name=$Request->seeker_name;
        $seeker_applied_for_job->phone_no_mobile=$Request->mobile_number;
        // $seeker_applied_for_job->phone_no_home=
        $seeker_applied_for_job->email_id	=$Request->seeker_email;
        if($Request->hasFile('updated_resume'))
        {
        $seeker_applied_for_job->updated_resume=$new_updated_resume;
        }
        // $seeker_applied_for_job->skype_id=
        $seeker_applied_for_job->current_location=$Request->seeker_city;
        $seeker_applied_for_job->visa_status=$Request->seeker_visa;
        // $seeker_applied_for_job->new_assignment=
        // $seeker_applied_for_job->personal_interviews=
        // $seeker_applied_for_job->telephonic_interviews=
        // $seeker_applied_for_job->expectation_trainee_stipend=
        // $seeker_applied_for_job->expectation_hours=
        // $seeker_applied_for_job->total_experience=
        $seeker_applied_for_job->is_employer=0;
        $seeker_applied_for_job->submitted_by=Session::get('user_id');
        $seeker_applied_for_job->pay_min=$pay_min;
        $seeker_applied_for_job->pay_max=$pay_max;
        $seeker_applied_for_job->save();
        return redirect('employer/Application');
        // return $Request;
    }

    
    
    public function show_interview_add(){
        $data[]=array();
        $data['name']=Tbl_job_seekers::get()->toArray();
        return view ('employee_dashbord_intrerview_add')
        ->with('data',$data);
    }
    
         
public function show_meeting1(){
    return view ('employee_dashbord_meeting_add');
}


public function addinterview(Request $add){
    DB::insert('insert into tbl_schedule_interview(interview_date,from_time,end_time,interview_type,invitees_to,candiate_name,instructions,time_zone) values(?,?,?,?,?,?,?,?)',[$add->date_interview,$add->start_time,$add->end_time,$add->type,$add->interview_type,$add->candiate_name,$add->instruction,$add->time_zone]);     
    return redirect('employer/dashboard/interview-meeting');
    
}

public function addmeeting(Request $add){
    DB::insert('insert into tbl_meetings(meeting_date,meeting_time,subject,timezone,participants) values(?,?,?,?,?)',[$add->date,$add->meeting_time,$add->subject,$add->local_time,$add->parti]);     
    return redirect('employer/dashboard/interview-meeting');
    
}

public function meetingshow(){
  $toReturn['meetingall']= tbl_meeting::all();
  
    $toReturn['interviewall']= tbl_schedule_interview::all();
    return view('calendar',compact('toReturn'));

}
public function del($id="")
{

$contact_delete = tbl_meeting::where('meeting_ID',$id)->delete();
return redirect('employer/dashboard/interview-meeting');
}


public function delint($ida="")
{
    $contact_delete1 = tbl_schedule_interview::where('job_ID',$ida)->delete();
     return redirect('employer/dashboard/interview-meeting');
}

// public function upint($id="",Request $r)
// {
//     $post_id=$r->id;
//     $up = tbl_interview_add::where('id',$post_id)->update(array(
//         'candiate_name'=>$r->u6,
//         'intervew_date'=>$r->u1,
//         'invitees_to'=>$r->u5,
//         'interview_type'=>$r->u4,
//         'instruction'=>$r->u7,
//         'end_time'=>$r->u3,
//         'from_time'=>$r->u2
        
//     ));
//     return redirect('employer/dashboard/interview-meeting');
// }



public function upda($id ="")
    { 
        $data= tbl_meeting::where('meeting_ID',$id)->first();
       
        
        return view('employee_dashbord_meeting_edit')
        ->with('data', $data);
        
    }

    public function updateadd(Request $Request)
    {
        
        // DB::update('update tbl_meetings set meeting_date=?,meeting_time=?,timezone=?,subject=?,participants=? where meeting_ID = ?',[$r->y1,$r->y2,$r->y3,$r->y4,$r->y5,$r->id]);
        
        
        tbl_meeting::where('meeting_ID', $Request->id_main)->update(array(
        'meeting_date'=>$Request->date,
        'meeting_time'=>$Request->meeting_time,
        'timezone'=>$Request->local_time,
        'subject'=>$Request->subject,
        'participants'=>$Request->parti,
        
        ));
       return redirect('employer/dashboard/interview-meeting');
    }

    public function updaint($id ="")
    {   
        $data[]=array();
        $data['name']=Tbl_job_seekers::get()->toArray();
        $data['int']= tbl_schedule_interview::where('job_ID',$id)->first();
        
        return view('employee_dashbord_intrerview_editinterview')
        ->with('data', $data);
        
    }


    public function updateedit(Request $Request)
    {
        
        // DB::update('update tbl_meetings set meeting_date=?,meeting_time=?,timezone=?,subject=?,participants=? where meeting_ID = ?',[$r->y1,$r->y2,$r->y3,$r->y4,$r->y5,$r->id]);
        
        
        tbl_schedule_interview::where('job_ID', $Request->t0)->update(array(
        'interview_date'=>$Request->date_interview,
        'from_time'=>$Request->start_time,
        'end_time'=>$Request->end_time,
        'time_zone'=>$Request->time_zone,
        'interview_type'=>$Request->type,
        'invitees_to'=>$Request->interview_job,
        'candiate_name'=>$Request->candiate_name,
        'instructions'=>$Request->instruction,
        ));
       return redirect('employer/dashboard/interview-meeting');
    }
   
    public function application_forword($id="")
    {
        $toReturn['application_detail']= Tbl_seeker_applied_for_job::where('ID',$id)->first();
        // return $toReturn['application_detail'];
        $toReturn['form_email_id']=Session::get('email');
        return view('forward_candidate')->with('toReturn',$toReturn); 
    }
    public function forward_candidate(Request $Request)
    {
        // return $Request->document_upload[0];

        $update_resume=$Request->updated_resume;
        $experience_list=$Request->experience;
        $reference_list=$Request->reference;
        $job_id=$Request->job_id;
        $seeker_id=$Request->seeker_id;
        $seeker_detail=Tbl_job_seekers::where('ID',$seeker_id)->first();
        $seeker_edu_detail=tbl_seeker_academic::where('seeker_id',$seeker_id)->first();
        // return $seeker_edu_detail;
        $seeker_exp_detail=tbl_seeker_experience::where('seeker_ID',$seeker_id)->first();
        $current_org=$seeker_exp_detail['company_name'];
        $start_date = $seeker_exp_detail['start_date'];
        $end_date = $seeker_exp_detail['end_date'];
        $datetime1 = strtotime(date('Y-m-d', strtotime($start_date)));
        $datetime2 = strtotime(date('Y-m-d', strtotime($end_date)));
        $secs = $datetime2 - $datetime1;// == <seconds between the two times>
        $days = $secs / 86400;
        $exp_month=floor($days/30);
        $exp_years=floor($exp_month/12);
        $job_detail=tbl_post_job::where('ID',$job_id)->first();
        $forward_candidate=new Tbl_forward_candidate();
        $forward_candidate->job_seeker_id=$seeker_id;
        $forward_candidate->job_id=$Request->job_id;
        $forward_candidate->forward_by=Session::get('email');
        $forward_candidate->forward_to=$Request->email_to;
        $forward_candidate->cc=$Request->email_cc;
        $forward_candidate->bcc=$Request->email_bcc;
        $forward_candidate->subject=$Request->email_subject;
        $forward_candidate->content=$Request->email_content;
        $forward_candidate->fullname=$Request->fullname;
        $forward_candidate->ssn=$Request->last_for_digit_ssn;
        $forward_candidate->visa_status=$Request->us_visa_status;
        // $forward_candidate->notice_period=$Request->notice_period;
        $forward_candidate->yearExp=$exp_years;
        $forward_candidate->monthExp=$exp_month;
        $forward_candidate->mobile=$Request->phone_primary;
        $forward_candidate->email=$Request->condidate_email_id;
        $forward_candidate->current_ctc=$Request->current_ctc;
        $forward_candidate->pay_min=$job_detail['pay_min'];
        $forward_candidate->pay_max=$job_detail['pay_max'];
        // $forward_candidate->panNumber=$Request->panNumber;
        $forward_candidate->institute=$seeker_edu_detail['institude'];
        $forward_candidate->current_org=$current_org;
        $forward_candidate->qualification=$seeker_edu_detail['degree_level'];
        $forward_candidate->qualification1=$Request->qual_with_uni;
        // $forward_candidate->prefer_location=$Request->prefer_location;
        $forward_candidate->passyear=$seeker_edu_detail['completion_year'];
        $forward_candidate->dob=$seeker_detail['dob'];
        $forward_candidate->entered=$Request->entred_in_us;
        $forward_candidate->relocation=$Request->Open_For_Relocation;
        $forward_candidate->telephonicinterview=$Request->availa_for_tele;
        $forward_candidate->personinterview=$Request->availa_for_per;
        $forward_candidate->availibilitynewproj=$Request->availa_for_new;
        $forward_candidate->expectedrate=$Request->expectedrate;
        $forward_candidate->save();
        $forward_candidate_reference=new Tbl_forward_candidate_reference();    
        $send_mail_id=Session::get('email');
        $email_to=$Request->email_to;
        // echo"<pre>";
        // print_r($experience_list);
        // exit;
        // return $experience_list;
        // if(!empty($experience_list))
        // {
        //     foreach($experience_list as $key =>$value)
        // {   
            echo"dsfsdf";
            // if($experience_list[$key]!="" )
            // {
                
            $forward_candidate_exp_required1 = new Tbl_forward_candidate_exp_required();
            $forward_candidate_exp_required1->skills="fghf";
            // $forward_candidate_exp_required->skills=$experience_list[0][0];
            // $forward_candidate_exp_required->yrs_of_exp=$experience_list[1][1];
            // $forward_candidate_exp_required->expertise_level=$experience_list[1][2];
            $forward_candidate_exp_required1->save;
            // }
            // break;

        // }            
        // }
        

        $data = array('forward_candidate'=>$forward_candidate, 'experience_list'=>$experience_list, 'reference_list'=>$reference_list,'update_resume'=>$update_resume); 
        // echo "<pre>";
        // print_r($data['forward_candidate']['fullname']);
        // exit;   
        // Mail::send('emails.forward_candidate',['data' => $data], function($message) use ($data){
        //     $message->to($data['forward_candidate']['forward_to'])
        //             ->cc($data['forward_candidate']['cc'])
        //             ->bcc($data['forward_candidate']['bcc'])
        //             ->subject($data['forward_candidate']['subject']);
        //     $message->attach('public/seekerresume', array(
        //             'as' => $data['update_resume'], 
        //             'mime' => 'application/docx')
        //         ); 
        //     $message->from($data['forward_candidate']['forward_by'],'ATS BABA');
        // });
        return view('emails.forward_candidate')->with('data',$data);
               return redirect('employer/Application');
        
    }

}
