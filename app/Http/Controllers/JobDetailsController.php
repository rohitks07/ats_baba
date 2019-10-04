<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tbl_post_jobs;
use App\tbl_job_industries;
use App\Tbl_seeker_applied_for_job;
use App\Tbl_job_seekers;
use DB;
class JobDetailsController extends Controller
{
   public function show_detail($id ="")
    {
        $data= tbl_post_jobs::where('ID',$id)->first();
        $industry=tbl_job_industries::where('ID',$data->industry_ID)->first();
        $toReturn['matchingjobs']=Tbl_seeker_applied_for_job::where('job_ID',$id)
        ->leftjoin('tbl_post_jobs as post_job', 'tbl_seeker_applied_for_job.job_ID','=','post_job.ID')
        ->leftjoin('tbl_job_seekers as seeker', 'tbl_seeker_applied_for_job.seeker_ID','=','seeker.ID')
        ->select('tbl_seeker_applied_for_job.candate_name as candate_name','tbl_seeker_applied_for_job.phone_no_mobile as phone_no_mobile','tbl_seeker_applied_for_job.email_id as email_id','tbl_seeker_applied_for_job.current_location as current_location','tbl_seeker_applied_for_job.visa_status as visa_status','tbl_seeker_applied_for_job.total_experience as total_experience','seeker.skills as skills','post_job.required_skills as required_skills')
        ->get();
        foreach ($toReturn['matchingjobs'] as $key=> $value) {
        		$seeker_skill=$value['skills'];	
        }
        foreach ($toReturn['matchingjobs'] as $key=> $value) {
        		$job_skill=$value['required_skills'];	
        }
        // $result=array_diff($seeker_skill,$job_skill);
        // 		$seeker_skill_array=explode(",",$seeker_skill);
        // 		$job_skill_array=explode(",",$job_skill);
        // 		$matching_skill=array_intersect($job_skill_array,$seeker_skill_array);
        // 		$no_of_seeker_skill=count($seeker_skill_array);
        // 		$no_of_matching_skill=count($matching_skill);
        		// echo $no_of_matching_skill;
        		// echo $no_of_seeker_skill;
        // 		$toReturn['matchingjobs']['matching_per'] =($no_of_matching_skill/$no_of_seeker_skill)*100;
        		// return $matching_per;
        		//return $toReturn['matchingjobs'];
        		// if($no_of_seeker_skill==$no_of_matching_skill)
        		// {
        		// 	return $matching_skill_per=100;
        		// }
  	      	// 	else if($)
        		// {

        		// }
     	
     	        // return $toReturn['matchingjobs'];
        return view('team_member_jobdetails')
        ->with('data', $data)
        ->with('industry',$industry)->with('toReturn',$toReturn);

    }
    // public function Potential_match()
    // {
    // 	return "mathcing job"; 
    // }
}
