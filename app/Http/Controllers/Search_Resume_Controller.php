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
    
    public function edit_experience($id="")
    {
        $experiences= Tbl_seeker_experience::where('seeker_id',$id)->get();	
       
        return view('team_member_edit_experience')->with('experiences',$experiences)->with('id',$id);
    }

   

    
  public function add_insert(Request $data)
    {
         $id=$data->seeker_id;    
        DB::insert('insert into tbl_seeker_experience(seeker_id,job_title,company_name,country,city,start_date,end_date) values(?,?,?,?,?,?,?)',[$data->seeker_id,$data->job_title,$data->company_name,$data->edu_country,$data->edu_city,$data->start_date,$data->end_date]); 
        return redirect('employer/team_member_edit_experience/'.$id);    
    }
  

    
    public function delete_entry($id="",$seekerid="")
    {
         $exp=DB::table('tbl_seeker_experience')->where('ID',$id)->delete();
         return redirect('employer/team_member_edit_experience/'.$seekerid);    
    }

    public function show_up($id="",$seekerid=""){
        
        
        $exp=DB::table('tbl_seeker_experience')->where('ID',$id)->first();
        // echo"<pre>";
        // print_r($exp->ID);
        // exit;
         return view('team_member_update_experience')->with('exp',$exp);
    }

public function update(Request $request)
{
   // $id=$request->id;
    $u=Tbl_seeker_experience::where('ID',$request->ID)->update(array(
'job_title'=>$request->job_title,
'company_name'=>$request->company_name,
'start_date'=>$request->start_date,
'end_date'=>$request->end_date,
'city'=>$request->city,
'country'=>$request->country

    ));
    return $u;
    return redirect('employer/team_member_edit_experience_update');
}
}
