<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tbl_job_seekers;
use App\tbl_post_jobs;
use App\Tbl_seeker_applied_for_job;
use DB;
use App\cities;
use App\countries;
use App\states;


class ApplicationController extends Controller
{
    public function __construct()
		{
			$this->middleware('mian_session');

		}
   public function view_application($id="")
   {

    $toReturn['list_application']=Tbl_seeker_applied_for_job::where('ID',$id)->first();
    $seeker_id=$toReturn['list_application']->seeker_ID;
    // echo $seeker_id;
    $job_id=$toReturn['list_application']->job_ID;
    $toReturn['seeker_details']= Tbl_job_seekers::where('ID',$seeker_id)->first();
    $toReturn['job_details']=tbl_post_jobs::where('ID',$job_id)->first();
    // print_r($toReturn['job_details']);
    // echo "<br>";
    // print_r($toReturn['seeker_details']);
    // exit;
    // echo $toReturn['job_details']->job_visa_status."&nbsp;";
    // echo $toReturn['job_details']->pay_min."&nbsp;";
    // echo $toReturn['job_details']->pay_max."&nbsp;";
    // echo $toReturn['job_details']->pay_uom."&nbsp;";
    // echo $toReturn['job_details']->country."&nbsp;";
    // echo $toReturn['job_details']->experience."&nbsp;";
    // echo $toReturn['job_details']->city."&nbsp;";
    // echo $toReturn['job_details']->state."&nbsp;"."<br>";
    // echo $toReturn['job_details']->required_skills."&nbsp;";
    $joblocationarray=array();
    $state_name=states::orWhere('state_id',$toReturn['job_details']->state)->orWhere('state_name',$toReturn['job_details']->state)->first();
    $city_name=cities::orWhere('city_id',$toReturn['job_details']->city)->orWhere('city_name',$toReturn['job_details']->city)->first();
    // print_r($toReturn['job_details']->city);
    // exit; 
    if((!empty($city_name->city_name))&&(!empty($state_name->state_name)))
    {
    // print_r($city_name->city_name);
    // exit;
    $joblocationarray['city']=$city_name->city_name;
    $joblocationarray['country']=$toReturn['job_details']->country;
    $joblocationarray['state']=$state_name->state_name;
    }
    else
    {
    $joblocationarray['city']=$toReturn['job_details']->city;
    $joblocationarray['country']=$toReturn['job_details']->country;
    $joblocationarray['state']=$toReturn['job_details']->state;
    }
    $toReturn['jobcity']=$joblocationarray['city'];
    $toReturn['jobstate']=$joblocationarray['state'];
    // return $toReturn['jobstate'];
    $seeker_location_array=array();
    $seeker_state_name=states::orWhere('state_id',$toReturn['seeker_details']->state)->orWhere('state_name',$toReturn['seeker_details']->state)->first();
    $seeker_city_name=cities::orWhere('city_id',$toReturn['seeker_details']->city)->orWhere('city_name',$toReturn['seeker_details']->city)->first();
    // return $seeker_city_name;
    if((!empty($seeker_city_name->city_name))&&(!empty($seeker_state_name->state_name)))
    {
    $seeker_location_array['city']=$seeker_city_name->city_name;
    $seeker_location_array['country']=$toReturn['seeker_details']->country;
    $seeker_location_array['state']=$seeker_city_name->state_name;
    }
    else
    {
    $seeker_location_array['city']=$toReturn['seeker_details']->city;
    $seeker_location_array['country']=$toReturn['seeker_details']->country;
    $seeker_location_array['state']=$toReturn['seeker_details']->state;
    }
    $match_city=strnatcasecmp($joblocationarray['city'],$seeker_location_array['city']);
    $match_state=strnatcasecmp($joblocationarray['state'],$seeker_location_array['state']);
    $match_country=strnatcasecmp($joblocationarray['country'],$seeker_location_array['country']);
   
    $toReturn['matchLocation']=0;
    if($match_city==0)
    {
        $toReturn['matchLocation']=100;
    }
    elseif($match_state==0)
    {
        $toReturn['matchLocation']=55;
    }
    elseif($match_country==0)
    {
        $toReturn['matchLocation']=30;
    }
    else
    {
        $toReturn['matchLocation']=0;
    }
    
    $toReturn['matchpayrate']=0;
    $candidate_pay_rate=explode("-", $toReturn['list_application']->expected_salary);
    // return $toReturn['seeker_details'];
    $min_match_salary=strnatcasecmp($toReturn['job_details']->pay_min,$candidate_pay_rate[0]);
    $max_to_min_match_salary=strnatcasecmp($toReturn['job_details']->pay_max,$candidate_pay_rate[0]);
    $min_to_max_match_salary=strnatcasecmp($toReturn['job_details']->pay_min,@$candidate_pay_rate[1]);
    $max_match_salary=strnatcasecmp($toReturn['job_details']->pay_max,@$candidate_pay_rate[1]);
    if($min_match_salary==0&& $max_match_salary==0)
    {
        $toReturn['matchpayrate']=100;
    }
    elseif($min_to_max_match_salary==0 || $max_to_min_match_salary==0)
    {
        $toReturn['matchpayrate']=50;
    }
    else
    {
        $toReturn['matchpayrate']=0;
    }
    $job_visa_array=explode(",",$toReturn['job_details']->job_visa_status);
    $job_skill_array=explode(",",$toReturn['job_details']->required_skills);

                $visa_match_percentage=0;
                $toReturn['skill_match_percentage']=0;
                $toReturn['city_match_percentage']=0;
                $toReturn['visa_match_percentage']=0;
                foreach($job_visa_array as $key_visa=>$value)
                {
                    $visa_match_list=strnatcasecmp($job_visa_array[$key_visa],$toReturn['seeker_details']->visa_status);
                    if($visa_match_list==0)
                    {
                        $toReturn['visa_match_percentage']=100;
                    }
                }
                $job_skill_count=0;
                foreach($job_skill_array as $key_skill=>$value)
                {
                    $job_match_list=strnatcasecmp($job_skill_array[$key_skill],$toReturn['seeker_details']->skills);
                    $job_skill_count=$job_skill_count+1;
                    if($job_skill_count>3)
                    {
                        $toReturn['skill_match_percentage']=100;
                    }
                    elseif($job_skill_count==3)
                    {
                        $toReturn['skill_match_percentage']=70;
                    }
                    elseif($job_skill_count==2)
                    {
                        $toReturn['skill_match_percentage']=55;
                    }
                    elseif($job_skill_count==1)
                    {
                        $toReturn['skill_match_percentage']=30;
                    }
                    else
                    {
                        $toReturn['skill_match_percentage']=0;
                    }
                }

                // foreach($joblocationarray as $key_loc=>$value)
                // {
                //     $job_match_list=strnatcasecmp($joblocationarray[$key_loc],$toReturn['seeker_details']->skills);
                //     $job_skill_count=$job_skill_count+1;
                //     if($job_skill_count==3)
                //     {
                //         $skill_match_percentage=45;
                //     }
                // }
            // echo "<br>".$skill_match_percentage;
            // echo "<br>".$visa_match_percentage;
            // echo"<pre>";
            // print_r($toReturn);
    // exit;

    

    
    // echo $seeker_id;
    // echo $job_id;
    // $data= Tbl_job_seekers::where('ID',$seeker_id)->first();
    //     $results = array();
    //       $matchrecord=DB::table('tbl_post_jobs')->where('required_skills','LIKE', '%'.$data->skills.'%')->where('city', 'LIKE', '%'.$data->city.'%')->where('job_visa_status', 'LIKE', '%'.$data->visa_status.'%')->get()->toArray();
    //       $results['job_record']=$matchrecord;
    //     foreach($matchrecord as $key=>$value)
    //     {
    //             $city_match=strnatcasecmp($data->city,$matchrecord[$key]->city);
    //             $visa_match_percentage=0;
    //             $skill_match_percentage=0;
    //             $city_match_percentage=0;
    //             $job_visa_array=explode(",",$matchrecord[$key]->job_visa_status);
    //             $job_skill_array=explode(",",$matchrecord[$key]->required_skills);
    //             foreach($job_visa_array as $key_visa=>$value)
    //             {
    //                 $visa_match_list=strnatcasecmp($job_visa_array[$key_visa],$data->visa_status);
    //                 if($visa_match_list==0)
    //                 {
    //                     $visa_match_percentage=30;
    //                 }
    //             }
    //             $job_skill_count=0;
    //             foreach($job_skill_array as $key_skill=>$value)
    //             {
    //                 $job_match_list=strnatcasecmp($job_skill_array[$key_skill],$data->skills);
    //                 $job_skill_count=$job_skill_count+1;
    //                 if($job_skill_count==3)
    //                 {
    //                     $skill_match_percentage=45;
    //                 }
    //             }
    //             if($city_match==0)
    //             {
    //                 $city_match_percentage=25;
    //             }
    //             $results['job_record'][$key]->match_percentage=$city_match_percentage + $visa_match_percentage + $skill_match_percentage;
    //     }
        return view('view_application')->with('toReturn',$toReturn);

   }
}
