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
use App\Tbl_forward_candidate_document;
use App\Tbl_module;
use App\Tbl_degree;
use App\Tbl_jobs_notes;
use Mail;
use App\user;
use Validator;
use App\cities;
use App\countries;
use App\states;
use App\tbl_candidate_notes;
use App\Tbl_job_mail;
use App\tbl_forward_emp_details;





class Report_Controller extends Controller
{

    public function repost_show(){
            


            //for days

            for ($j=0; $j < 12 ; $j++) { 
                
                $toReturn['week_date'][$j] = date('d-m-Y', strtotime('-'.$j.' days'));
                $newDate[$j] = date("Y-m-d", strtotime($toReturn['week_date'][$j]));
                $toReturn['job_created'][$j]= count(tbl_post_job::whereDate('dated',$newDate[$j])->get());
                $toReturn['candidate_created'][$j]= count(Tbl_job_seekers::whereDate('dated',$newDate[$j])->get());
                $toReturn['client_submittal'][$j]= count(Tbl_forward_candidate::whereDate('forward_date',$newDate[$j])->get());
                $toReturn['application_submitted'][$j]= count(Tbl_seeker_applied_for_job::whereDate('dated',$newDate[$j])->get());
                
            }
            





            //for weeks

            $toReturn['week_week_one'] = date('d-m-Y', strtotime('-7 days'));
            $toReturn['week_week_two']= date('d-m-Y',(strtotime ( '-7 days' , strtotime (   $toReturn['week_week_one']) ) ));
            $toReturn['week_week_three']= date('d-m-Y',(strtotime ( '-7 days' , strtotime (   $toReturn['week_week_two']) ) ));
            $toReturn['week_week_four']= date('d-m-Y',(strtotime ( '-7 days' , strtotime (   $toReturn['week_week_three']) ) ));
            $toReturn['week_week_five']= date('d-m-Y',(strtotime ( '-7 days' , strtotime (   $toReturn['week_week_four']) ) ));
            $toReturn['week_week_six']= date('d-m-Y',(strtotime ( '-7 days' , strtotime (   $toReturn['week_week_five']) ) ));
            $toReturn['week_week_seven']= date('d-m-Y',(strtotime ( '-7 days' , strtotime (   $toReturn['week_week_six']) ) ));
            $toReturn['week_week_eight']= date('d-m-Y',(strtotime ( '-7 days' , strtotime (   $toReturn['week_week_seven']) ) ));
            $toReturn['week_week_nine']= date('d-m-Y',(strtotime ( '-7 days' , strtotime (   $toReturn['week_week_eight']) ) ));
            $toReturn['week_week_ten']= date('d-m-Y',(strtotime ( '-7 days' , strtotime (   $toReturn['week_week_nine']) ) ));
            $toReturn['week_week_eleven']= date('d-m-Y',(strtotime ( '-7 days' , strtotime (   $toReturn['week_week_ten']) ) ));
            $toReturn['week_week_twelve']= date('d-m-Y',(strtotime ( '-7 days' , strtotime (   $toReturn['week_week_eleven']) ) ));
            
            
            //for months

            $one = date('d-m-Y');
            $toReturn['month_week_one1'] = $newDate = date("m-Y", strtotime($one));
            

            $two= date('d-m-Y',(strtotime ( '-30 days' , strtotime (   $one) ) ));
            $toReturn['month_week_one2'] =$newDate = date("m-Y", strtotime($two));

            $three= date('d-m-Y',(strtotime ( '-30 days' , strtotime (   $two) ) ));
            $toReturn['month_week_one3'] = $newDate = date("m-Y", strtotime($three));

            $four= date('d-m-Y',(strtotime ( '-30 days' , strtotime (   $three) ) ));
            $toReturn['month_week_one4'] = $newDate = date("m-Y", strtotime($four));

           $five= date('d-m-Y',(strtotime ( '-30 days' , strtotime (   $four) ) ));
            $toReturn['month_week_one5'] =$newDate = date("m-Y", strtotime($five));

            $six= date('d-m-Y',(strtotime ( '-30 days' , strtotime (  $five) ) ));
            $toReturn['month_week_one6'] =$newDate = date("m-Y", strtotime($six));

            $seven= date('d-m-Y',(strtotime ( '-30 days' , strtotime (   $six) ) ));
            $toReturn['month_week_one7'] = $newDate = date("m-Y", strtotime($seven));

            $eight= date('d-m-Y',(strtotime ( '-30 days' , strtotime (   $seven) ) ));
            $toReturn['month_week_one8'] = $newDate = date("m-Y", strtotime($eight));

            $nine= date('d-m-Y',(strtotime ( '-30 days' , strtotime (   $eight) ) ));
            $toReturn['month_week_one9'] =$newDate = date("m-Y", strtotime($nine));

            $ten= date('d-m-Y',(strtotime ( '-30 days' , strtotime (   $nine) ) ));
            $toReturn['month_week_one10'] =$newDate = date("m-Y", strtotime($ten));

            $eleven= date('d-m-Y',(strtotime ( '-30 days' , strtotime (   $ten) ) ));
            $toReturn['month_week_one11'] =$newDate = date("m-Y", strtotime($eleven));
            
            $twelve= date('d-m-Y',(strtotime ( '-30 days' , strtotime (   $eleven) ) ));
            $toReturn['month_week_one12'] =$newDate = date("m-Y", strtotime($twelve));



            // for yers


            $one = date('d-m-Y');
            $toReturn['year_week_one1'] = $newDate = date("Y", strtotime($one));

            $toReturn['job_created_yerly1']= count(tbl_post_job::whereYear('dated',$toReturn['year_week_one1'])->get());
            $toReturn['candidate_created_yerly1']= count(Tbl_job_seekers::whereYear('dated',$toReturn['year_week_one1'])->get());
            $toReturn['client_submittal_yerly1']= count(Tbl_forward_candidate::whereYear('forward_date',$toReturn['year_week_one1'])->get());
            $toReturn['application_submitted_yerly1']= count(Tbl_seeker_applied_for_job::whereYear('dated',$toReturn['year_week_one1'])->get());
           



            $two= date('d-m-Y',(strtotime ( '-365 days' , strtotime (   $one) ) ));
            $toReturn['year_week_one2'] =$newDate = date("Y", strtotime($two));

            $toReturn['job_created_yerly2']= count(tbl_post_job::whereYear('dated',$toReturn['year_week_one2'])->get());
            $toReturn['candidate_created_yerly2']= count(Tbl_job_seekers::whereYear('dated',$toReturn['year_week_one2'])->get());
            $toReturn['client_submittal_yerly2']= count(Tbl_forward_candidate::whereYear('forward_date',$toReturn['year_week_one2'])->get());
            $toReturn['application_submitted_yerly2']= count(Tbl_seeker_applied_for_job::whereYear('dated',$toReturn['year_week_one2'])->get());




            $three= date('d-m-Y',(strtotime ( '-365 days' , strtotime (   $two) ) ));
            $toReturn['year_week_one3'] = $newDate = date("Y", strtotime($three));

            $toReturn['job_created_yerly3']= count(tbl_post_job::whereYear('dated',$toReturn['year_week_one3'])->get());
            $toReturn['candidate_created_yerly3']= count(Tbl_job_seekers::whereYear('dated',$toReturn['year_week_one3'])->get());
            $toReturn['client_submittal_yerly3']= count(Tbl_forward_candidate::whereYear('forward_date',$toReturn['year_week_one3'])->get());
            $toReturn['application_submitted_yerly3']= count(Tbl_seeker_applied_for_job::whereYear('dated',$toReturn['year_week_one3'])->get());




            $four= date('d-m-Y',(strtotime ( '-365 days' , strtotime (   $three) ) ));
            $toReturn['year_week_one4'] = $newDate = date("Y", strtotime($four));

            $toReturn['job_created_yerly4']= count(tbl_post_job::whereYear('dated', $toReturn['year_week_one4'])->get());
            $toReturn['candidate_created_yerly4']= count(Tbl_job_seekers::whereYear('dated', $toReturn['year_week_one4'])->get());
            $toReturn['client_submittal_yerly4']= count(Tbl_forward_candidate::whereYear('forward_date', $toReturn['year_week_one4'])->get());
            $toReturn['application_submitted_yerly4']= count(Tbl_seeker_applied_for_job::whereYear('dated', $toReturn['year_week_one4'])->get());




           $five= date('d-m-Y',(strtotime ( '-365 days' , strtotime (   $four) ) ));
            $toReturn['year_week_one5'] =$newDate = date("Y", strtotime($five));

            $toReturn['job_created_yerly5']= count(tbl_post_job::whereYear('dated',$toReturn['year_week_one5'])->get());
            $toReturn['candidate_created_yerly5']= count(Tbl_job_seekers::whereYear('dated',$toReturn['year_week_one5'])->get());
            $toReturn['client_submittal_yerly5']= count(Tbl_forward_candidate::whereYear('forward_date',$toReturn['year_week_one5'])->get());
            $toReturn['application_submitted_yerly5']= count(Tbl_seeker_applied_for_job::whereYear('dated',$toReturn['year_week_one5'])->get());




            $six= date('d-m-Y',(strtotime ( '-365 days' , strtotime (  $five) ) ));
            $toReturn['year_week_one6'] =$newDate = date("Y", strtotime($six));

            $toReturn['job_created_yerly6']= count(tbl_post_job::whereYear('dated',$toReturn['year_week_one6'])->get());
            $toReturn['candidate_created_yerly6']= count(Tbl_job_seekers::whereYear('dated',$toReturn['year_week_one6'])->get());
            $toReturn['client_submittal_yerly6']= count(Tbl_forward_candidate::whereYear('forward_date',$toReturn['year_week_one6'])->get());
            $toReturn['application_submitted_yerly6']= count(Tbl_seeker_applied_for_job::whereYear('dated',$toReturn['year_week_one6'])->get());




            $seven= date('d-m-Y',(strtotime ( '-365 days' , strtotime (   $six) ) ));
            $toReturn['year_week_one7'] = $newDate = date("Y", strtotime($seven));

            $toReturn['job_created_yerly7']= count(tbl_post_job::whereYear('dated', $toReturn['year_week_one7'])->get());
            $toReturn['candidate_created_yerly7']= count(Tbl_job_seekers::whereYear('dated', $toReturn['year_week_one7'])->get());
            $toReturn['client_submittal_yerly7']= count(Tbl_forward_candidate::whereYear('forward_date', $toReturn['year_week_one7'])->get());
            $toReturn['application_submitted_yerly7']= count(Tbl_seeker_applied_for_job::whereYear('dated', $toReturn['year_week_one7'])->get());




            $eight= date('d-m-Y',(strtotime ( '-365 days' , strtotime (   $seven) ) ));
            $toReturn['year_week_one8'] = $newDate = date("Y", strtotime($eight));

            $toReturn['job_created_yerly8']= count(tbl_post_job::whereYear('dated',$toReturn['year_week_one8'])->get());
            $toReturn['candidate_created_yerly8']= count(Tbl_job_seekers::whereYear('dated',$toReturn['year_week_one8'])->get());
            $toReturn['client_submittal_yerly8']= count(Tbl_forward_candidate::whereYear('forward_date',$toReturn['year_week_one8'])->get());
            $toReturn['application_submitted_yerly8']= count(Tbl_seeker_applied_for_job::whereYear('dated',$toReturn['year_week_one8'])->get());




            $nine= date('d-m-Y',(strtotime ( '-365 days' , strtotime (   $eight) ) ));
            $toReturn['year_week_one9'] =$newDate = date("Y", strtotime($nine));

            $toReturn['job_created_yerly9']= count(tbl_post_job::whereYear('dated',$toReturn['year_week_one9'])->get());
            $toReturn['candidate_created_yerly9']= count(Tbl_job_seekers::whereYear('dated',$toReturn['year_week_one9'])->get());
            $toReturn['client_submittal_yerly9']= count(Tbl_forward_candidate::whereYear('forward_date',$toReturn['year_week_one9'])->get());
            $toReturn['application_submitted_yerly9']= count(Tbl_seeker_applied_for_job::whereYear('dated',$toReturn['year_week_one9'])->get());




            $ten= date('d-m-Y',(strtotime ( '-365 days' , strtotime (   $nine) ) ));
            $toReturn['year_week_one10'] =$newDate = date("Y", strtotime($ten));

            $toReturn['job_created_yerly10']= count(tbl_post_job::whereYear('dated',$toReturn['year_week_one10'])->get());
            $toReturn['candidate_created_yerly10']= count(Tbl_job_seekers::whereYear('dated',$toReturn['year_week_one10'])->get());
            $toReturn['client_submittal_yerly10']= count(Tbl_forward_candidate::whereYear('forward_date',$toReturn['year_week_one10'])->get());
            $toReturn['application_submitted_yerly10']= count(Tbl_seeker_applied_for_job::whereYear('dated',$toReturn['year_week_one10'])->get());




            $eleven= date('d-m-Y',(strtotime ( '-365 days' , strtotime (   $ten) ) ));
            $toReturn['year_week_one11'] =$newDate = date("Y", strtotime($eleven));

            $toReturn['job_created_yerly11']= count(tbl_post_job::whereYear('dated',$toReturn['year_week_one11'])->get());
            $toReturn['candidate_created_yerly11']= count(Tbl_job_seekers::whereYear('dated',$toReturn['year_week_one11'])->get());
            $toReturn['client_submittal_yerly11']= count(Tbl_forward_candidate::whereYear('forward_date',$toReturn['year_week_one11'])->get());
            $toReturn['application_submitted_yerly11']= count(Tbl_seeker_applied_for_job::whereYear('dated',$toReturn['year_week_one11'])->get());



            
            $twelve= date('d-m-Y',(strtotime ( '-365 days' , strtotime (   $eleven) ) ));
            $toReturn['year_week_one12'] =$newDate = date("Y", strtotime($twelve));

            $toReturn['job_created_yerly12']= count(tbl_post_job::whereYear('dated',$toReturn['year_week_one12'])->get());
            $toReturn['candidate_created_yerly12']= count(Tbl_job_seekers::whereYear('dated',$toReturn['year_week_one12'])->get());
            $toReturn['client_submittal_yerly12']= count(Tbl_forward_candidate::whereYear('forward_date',$toReturn['year_week_one12'])->get());
            $toReturn['application_submitted_yerly12']= count(Tbl_seeker_applied_for_job::whereYear('dated',$toReturn['year_week_one12'])->get());





            



            
        return view('report')->with('toReturn',$toReturn);
    }


   



}
