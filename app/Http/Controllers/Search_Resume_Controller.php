<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tbl_job_seekers;
use App\Tbl_seeker_applied_for_job_doc;
use App\Tbl_seeker_experience;
use App\Tbl_seeker_skills;
use App\Tbl_seeker_academic;
use App\Tbl_seeker_applied_for_job;
use App\Tbl_countries;
use App\Tbl_cities;
use App\Tbl_visa_type;
use DB;


class Search_Resume_Controller extends Controller
{
    
    public function index(){

        
        $toReturn['personal'] = \DB::table('tbl_job_seekers')
                                ->select('tbl_job_seekers.ID as id','tbl_job_seekers.first_name as first','tbl_job_seekers.last_name as last',
                                'tbl_job_seekers.dob','tbl_job_seekers.city','tbl_job_seekers.state','tbl_job_seekers.visa_status',
                                'tbl_job_seekers.email','tbl_job_seekers.mobile','tbl_job_seekers.skype_id',
                                'tbl_seeker_applied_for_job.total_experience as experience','tbl_seeker_academic.degree_title as degree')
                               ->leftjoin('tbl_seeker_experience','tbl_seeker_experience.seeker_ID', '=' , 'tbl_job_seekers.ID')
                               ->leftjoin('tbl_seeker_academic','tbl_seeker_academic.seeker_ID', '=' ,'tbl_job_seekers.ID' )
                               ->leftjoin('tbl_seeker_applied_for_job','tbl_seeker_applied_for_job.seeker_ID', '=' ,'tbl_job_seekers.ID' )
                               ->where('tbl_job_seekers.ID','=','*')
                               ->orderBy('tbl_job_seekers.ID','asc')
                               ->first();
                             
        return view ('search_resume')->with('toReturn',$toReturn);
 
        
    	
    }
    
    public function post_new_candidate(Request $request){

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
            
        $postcandidate->fed_id=12;$postcandidate->dated="";$postcandidate->experience="";
        $postcandidate->default_cv_id=1;$postcandidate->cv_file="";$postcandidate->skills="";
        $postcandidate->employer_id=1;$postcandidate->created_by=12;$postcandidate->is_employer=12;
        $postcandidate->owner_id="";$postcandidate->min_pay_rate="";$postcandidate->max_pay_rate="";
        $postcandidate->pay_rate_umo="";
        $postcandidate->save();

        
        $degree = $request->degree;   
           foreach($degree as $key => $value) {
            $seeker_academic = new Tbl_seeker_academic();
            $seeker_academic->degree_title    = $degree[$key];
            $seeker_academic->major           = $request->major_subject[$key];
            $seeker_academic->institude       = $request->institute[$key];
            $seeker_academic->city            = $request->edu_city[$key];
            $seeker_academic->country         = $request->edu_country[$key];
            $seeker_academic->completion_year =$request->completion_year[$key];               
            $seeker_academic->save();
            
        }

        
        $job_title_experience = $request->job_title;              
        foreach($job_title_experience as $key => $value ){
            $seeker_exprience = new Tbl_seeker_experience();
            $seeker_exprience->  job_title  = $job_title_experience[$key]; 
            $seeker_exprience->company_name = $request->company_name[$key];
            $seeker_exprience->city         = $request->exp_city[$key];
            $seeker_exprience->country      = $request->exp_country[$key];
            $seeker_exprience->start_date   = $request->start_date[$key];
            $seeker_exprience->end_date     = $request->end_date[$key];
            $seeker_exprience->save();
            
        }
        

        
        $seeker_skill_name = new Tbl_seeker_skills();
        $seeker_skill_name->skill_name = $request->skill;
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
    
    //Candidate->Experience
    public function edit_experience($id="")
    {
        $experiences= Tbl_seeker_experience::where('seeker_id',$id)->get();
        return view('team_member_edit_experience')->with('experiences',$experiences);
    }

    public function add_insert(Request $data)
    {
        $seekerid=$data->seeker_ID;    
        DB::insert('insert into tbl_seeker_experience(seeker_id,job_title,company_name,country,city,start_date,end_date) values(?,?,?,?,?,?,?)',[$data->seeker_id,$data->job_title,$data->company_name,$data->edu_country,$data->edu_city,$data->start_date,$data->end_date]); 
        return redirect('employer/team_member_edit_experience/'.$seekerid);     
    }
  

    public function show_up($id="",$seekerid=""){
        
        $exp=tbl_seeker_experience::where('ID',$id)->first();
        // return $exp;
         return view('team_member_update_experience')->with('exp',$exp);
    }


    
    public function delete_entry($id="",$seekerid="")
    {
         $exp=DB::table('tbl_seeker_experience')->where('ID',$id)->delete();
         return redirect('employer/team_member_edit_experience/'.$seekerid);    
    }


public function update(Request $Request)
{
   $seekerid=$Request->seeker_ID;
//    return $Request;
    $u=Tbl_seeker_experience::where('ID',$Request->ID)->update(array(
'job_title'=>$Request->job_title,
'company_name'=>$Request->company_name,
'start_date'=>$Request->start_date,
'end_date'=>$Request->end_date,
'city'=>$Request->city,
'country'=>$Request->country
    ));
    return redirect('employer/team_member_edit_experience/'.$seekerid);
}

//Candidate->Skills
public function view_skill($id="")
{
    $skills= Tbl_seeker_skills::where('seeker_id',$id)->get();	
  
    return view('team_member_skills')->with('skills',$skills)->with('id',$id);
}

public function insert_skill(Request $data)
{
   
    $id=$data->seeker_ID;    
    DB::insert('insert into tbl_seeker_skills(seeker_ID,skill_name) values(?,?)',[$data->seeker_ID,$data->skills]); 
    
    
     return redirect('employer/team_member_skills/'.$id);    
}

public function delete_skill($id="",$seekerid="")
{
     $exp=DB::table('tbl_seeker_skills')->where('ID',$id)->delete();
     return redirect('employer/team_member_skills/'.$seekerid);    

}

//Candidate->Personal Details
public function view_personal_details($id="")
{
    $toReturn=array();
    $toReturn['countries']=Tbl_countries::get()->toArray();
    $toReturn['cities']=Tbl_cities::get()->toArray(); 
    $toReturn['degree']=Tbl_seeker_academic::get()->toArray();
    $toReturn['visa_type']=Tbl_visa_type::get()->toArray();

    $details= Tbl_job_seekers::where('ID',$id)->first();	
    	

   return view('edit_posted_candidate')->with('toReturn',$toReturn)->with('details',$details);

}
public function update_personal_details(Request $request)
{
   

    $u=Tbl_job_seekers::where('ID',$request->id)->update(array(

'first_name'=>$request->first_name,
'middle_name'=>$request->middle_name,
'last_name'=>$request->last_name,
'dob'=>$request->dob,
'gender'=>$request->gender,
'email'=>$request->email,
'skype_id'=>$request->skype_id,
'ssn'=>$request->ssn,
'visa_status'=>$request->visa_status,
'email'=>$request->email,
'country'=>$request->country,
'state'=>$request->state,
'city'=>$request->city,
'address_line_1'=>$request->addressline1,
'address_line_2'=>$request->addressline2,
'mobile'=>$request->mobilephone,
'home_phone'=>$request->homephone,
'cv_file'=>$request->cv_file,
'otherdocuments1'=>$request->file_other1,
'otherdocuments2'=>$request->file_other2,


    ));
    

    return redirect('employer/search_resume');
}

//Candidate->Education
public function show_education($id="")
{	
  
    $education= Tbl_seeker_academic::where('seeker_id',$id)->get();	
  
    return view('employer_edit_education')->with('education',$education)->with('id',$id);
}

}