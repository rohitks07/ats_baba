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
                
                $toReturn['week_date'][$j] = date('m-d-Y', strtotime('-'.$j.' days'));
                $toReturn['week_date_dated_us'][$j] = date('d-m-Y', strtotime('-'.$j.' days'));

                $newDate[$j] = date("Y-m-d", strtotime($toReturn['week_date_dated_us'][$j]));
                $toReturn['job_created'][$j]= count(tbl_post_job::whereDate('dated',$newDate[$j])->get());
                $toReturn['candidate_created'][$j]= count(Tbl_job_seekers::whereDate('dated',$newDate[$j])->get());
                $toReturn['client_submittal'][$j]= count(Tbl_forward_candidate::whereDate('forward_date',$newDate[$j])->get());
                $toReturn['application_submitted'][$j]= count(Tbl_seeker_applied_for_job::whereDate('dated',$newDate[$j])->get());
                
            }
            





            //for weeks

            //1
            $today_date= date('Y-m-d');
            $toReturn['week_week_one'] = date('d-m-Y', strtotime('-7 days'));
            $toReturn['week_week1'] = date('m-d-Y', strtotime( $toReturn['week_week_one']));
            $database1= date('Y-m-d', strtotime('-7 days'));

            
            $toReturn['job_created_weekly1']= count(tbl_post_job::where('dated','<=',$today_date)
                                            ->where('dated','>=',$database1)
                                            ->get());
            $toReturn['candidate_created1']= count(Tbl_job_seekers::where('dated','<=',$today_date)
                                            ->where('dated','>=',$database1)
                                            ->get());
            $toReturn['application_submitted1']= count(Tbl_seeker_applied_for_job::where('dated','<=',$today_date)
                                            ->where('dated','>=',$database1)
                                            ->get());
            $toReturn['client_submittal1']= count(Tbl_forward_candidate::where('forward_date','<=',$today_date)
                                            ->where('forward_date','>=',$database1)
                                            ->get());

                                           
           
            //2
            $toReturn['week_week_two']= date('d-m-Y',(strtotime ( '-7 days' , strtotime (   $toReturn['week_week_one']) ) ));
            $toReturn['week_week2'] = date('m-d-Y', strtotime( $toReturn['week_week_two']));
            $database2= date('Y-m-d',(strtotime ( '-7 days' , strtotime ($toReturn['week_week_one']))));

            $toReturn['job_created_weekly2']= count(tbl_post_job::where('dated','<=',$database1)
                                            ->where('dated','>=',$database2)
                                            ->get());
            $toReturn['candidate_created2']= count(Tbl_job_seekers::where('dated','<=',$database1)
                                            ->where('dated','>=',$database2)
                                            ->get());                                
            $toReturn['application_submitted2']= count(Tbl_seeker_applied_for_job::where('dated','<=',$database1)
                                            ->where('dated','>=',$database2)
                                            ->get());                                    
            $toReturn['client_submittal2']= count(Tbl_forward_candidate::where('forward_date','<=',$database1)
                                            ->where('forward_date','>=',$database2)
                                            ->get());
            
            //3
            $toReturn['week_week_three']= date('d-m-Y',(strtotime ( '-7 days' , strtotime (   $toReturn['week_week_two']) ) ));
            $toReturn['week_week3'] = date('m-d-Y', strtotime( $toReturn['week_week_three']));
            $database3= date('Y-m-d',(strtotime ( '-7 days' , strtotime ($toReturn['week_week_two']))));

            $toReturn['job_created_weekly3']= count(tbl_post_job::where('dated','<=',$database2)
                                            ->where('dated','>=',$database3)
                                            ->get());
            $toReturn['candidate_created3']= count(Tbl_job_seekers::where('dated','<=',$database2)
                                            ->where('dated','>=',$database3)
                                            ->get());                                
            $toReturn['application_submitted3']= count(Tbl_seeker_applied_for_job::where('dated','<=',$database2)
                                            ->where('dated','>=',$database3)
                                            ->get());
            $toReturn['client_submittal3']= count(Tbl_forward_candidate::where('forward_date','<=',$database2)
                                            ->where('forward_date','>=',$database3)
                                            ->get());


            //4                                
            $toReturn['week_week_four']= date('d-m-Y',(strtotime ( '-7 days' , strtotime (   $toReturn['week_week_three']) ) ));
            $toReturn['week_week4'] = date('m-d-Y', strtotime( $toReturn['week_week_four']));
            $database4= date('Y-m-d',(strtotime ( '-7 days' , strtotime ( $toReturn['week_week_three']))));

            $toReturn['job_created_weekly4']= count(tbl_post_job::where('dated','<=',$database3)
                                            ->where('dated','>=',$database4)
                                            ->get());
            $toReturn['candidate_created4']= count(Tbl_job_seekers::where('dated','<=',$database3)
                                            ->where('dated','>=',$database4)
                                            ->get());   
            $toReturn['application_submitted4']= count(Tbl_seeker_applied_for_job::where('dated','<=',$database3)
                                            ->where('dated','>=',$database4)
                                            ->get());                                
            $toReturn['client_submittal4']= count(Tbl_forward_candidate::where('forward_date','<=',$database3)
                                            ->where('forward_date','>=',$database4)
                                            ->get());                                    

            //5
            $toReturn['week_week_five']= date('d-m-Y',(strtotime ( '-7 days' , strtotime (   $toReturn['week_week_four']) ) ));
            $toReturn['week_week5'] = date('m-d-Y', strtotime( $toReturn['week_week_five']));
            $database5= date('Y-m-d',(strtotime ( '-7 days' , strtotime ($toReturn['week_week_four']))));

            $toReturn['job_created_weekly5']= count(tbl_post_job::where('dated','<=',$database4)
                                            ->where('dated','>=',$database5)
                                            ->get());
            $toReturn['candidate_created5']= count(Tbl_job_seekers::where('dated','<=',$database4)
                                            ->where('dated','>=',$database5)
                                            ->get());
            $toReturn['application_submitted5']= count(Tbl_seeker_applied_for_job::where('dated','<=',$database4)
                                            ->where('dated','>=',$database5)
                                            ->get());
            $toReturn['client_submittal5']= count(Tbl_forward_candidate::where('forward_date','<=',$database4)
                                            ->where('forward_date','>=',$database5)
                                            ->get());

            //6
            $toReturn['week_week_six']= date('d-m-Y',(strtotime ( '-7 days' , strtotime (   $toReturn['week_week_five']) ) ));
            $toReturn['week_week6'] = date('m-d-Y', strtotime( $toReturn['week_week_six']));
            $database6= date('Y-m-d',(strtotime ( '-7 days' , strtotime ($toReturn['week_week_five']))));

            $toReturn['job_created_weekly6']= count(tbl_post_job::where('dated','<=',$database5)
                                            ->where('dated','>=',$database6)
                                            ->get());
            $toReturn['candidate_created6']= count(Tbl_job_seekers::where('dated','<=',$database5)
                                            ->where('dated','>=',$database6)
                                            ->get());
            $toReturn['application_submitted6']= count(Tbl_seeker_applied_for_job::where('dated','<=',$database5)
                                            ->where('dated','>=',$database6)
                                            ->get());
            $toReturn['client_submittal6']= count(Tbl_forward_candidate::where('forward_date','<=',$database5)
                                            ->where('forward_date','>=',$database6)
                                            ->get());

            //7
            $toReturn['week_week_seven']= date('d-m-Y',(strtotime ( '-7 days' , strtotime (   $toReturn['week_week_six']) ) ));
            $toReturn['week_week7'] = date('m-d-Y', strtotime( $toReturn['week_week_seven']));
            $database7= date('Y-m-d',(strtotime ( '-7 days' , strtotime ($toReturn['week_week_six']))));

            $toReturn['job_created_weekly7']= count(tbl_post_job::where('dated','<=',$database6)
                                            ->where('dated','>=',$database7)
                                            ->get());
            $toReturn['candidate_created7']= count(Tbl_job_seekers::where('dated','<=',$database6)
                                            ->where('dated','>=',$database7)
                                            ->get());
            $toReturn['application_submitted7']= count(Tbl_seeker_applied_for_job::where('dated','<=',$database6)
                                            ->where('dated','>=',$database7)
                                            ->get());
            $toReturn['client_submittal7']= count(Tbl_forward_candidate::where('forward_date','<=',$database6)
                                            ->where('forward_date','>=',$database7)
                                            ->get());
                                            

            //8
            $toReturn['week_week_eight']= date('d-m-Y',(strtotime ( '-7 days' , strtotime (   $toReturn['week_week_seven']) ) ));
            $toReturn['week_week8'] = date('m-d-Y', strtotime( $toReturn['week_week_eight']));
            $database8= date('Y-m-d',(strtotime ( '-7 days' , strtotime ($toReturn['week_week_seven']))));

            $toReturn['job_created_weekly8']= count(tbl_post_job::where('dated','<=',$database7)
                                            ->where('dated','>=',$database8)
                                            ->get());
            $toReturn['candidate_created8']= count(Tbl_job_seekers::where('dated','<=',$database7)
                                            ->where('dated','>=',$database8)
                                            ->get());
            $toReturn['application_submitted8']= count(Tbl_seeker_applied_for_job::where('dated','<=',$database7)
                                            ->where('dated','>=',$database8)
                                            ->get());
            $toReturn['client_submittal8']= count(Tbl_forward_candidate::where('forward_date','<=',$database7)
                                            ->where('forward_date','>=',$database8)
                                            ->get());


            //9
            $toReturn['week_week_nine']= date('d-m-Y',(strtotime ( '-7 days' , strtotime (   $toReturn['week_week_eight']) ) ));
            $toReturn['week_week9'] = date('m-d-Y', strtotime( $toReturn['week_week_nine']));
            $database9= date('Y-m-d',(strtotime ( '-7 days' , strtotime ($toReturn['week_week_eight']))));

            $toReturn['job_created_weekly9']= count(tbl_post_job::where('dated','<=',$database8)
                                            ->where('dated','>=',$database9)
                                            ->get());
            $toReturn['candidate_created9']= count(Tbl_job_seekers::where('dated','<=',$database8)
                                            ->where('dated','>=',$database9)
                                            ->get());
            $toReturn['application_submitted9']= count(Tbl_seeker_applied_for_job::where('dated','<=',$database8)
                                            ->where('dated','>=',$database9)
                                            ->get());
            $toReturn['client_submittal9']= count(Tbl_forward_candidate::where('forward_date','<=',$database8)
                                            ->where('forward_date','>=',$database9)
                                            ->get());


            //10
            $toReturn['week_week_ten']= date('d-m-Y',(strtotime ( '-7 days' , strtotime (   $toReturn['week_week_nine']) ) ));
            $toReturn['week_week10'] = date('m-d-Y', strtotime( $toReturn['week_week_ten']));
            $database10= date('Y-m-d',(strtotime ( '-7 days' , strtotime ($toReturn['week_week_nine']))));

            $toReturn['job_created_weekly10']= count(tbl_post_job::where('dated','<=',$database9)
                                            ->where('dated','>=',$database10)
                                            ->get());
            $toReturn['candidate_created10']= count(Tbl_job_seekers::where('dated','<=',$database9)
                                            ->where('dated','>=',$database10)
                                            ->get());
            $toReturn['application_submitted10']= count(Tbl_seeker_applied_for_job::where('dated','<=',$database9)
                                            ->where('dated','>=',$database10)
                                            ->get());
            $toReturn['client_submittal10']= count(Tbl_forward_candidate::where('forward_date','<=',$database9)
                                            ->where('forward_date','>=',$database10)
                                            ->get());


            //11
            $toReturn['week_week_eleven']= date('d-m-Y',(strtotime ( '-7 days' , strtotime (   $toReturn['week_week_ten']) ) ));
            $toReturn['week_week11'] = date('m-d-Y', strtotime( $toReturn['week_week_eleven']));
            $database11= date('Y-m-d',(strtotime ( '-7 days' , strtotime ($toReturn['week_week_ten']))));

            $toReturn['job_created_weekly11']= count(tbl_post_job::where('dated','<=',$database10)
                                            ->where('dated','>=',$database11)
                                            ->get());
            $toReturn['candidate_created11']= count(Tbl_job_seekers::where('dated','<=',$database10)
                                            ->where('dated','>=',$database11)
                                            ->get());
            $toReturn['application_submitted11']= count(Tbl_seeker_applied_for_job::where('dated','<=',$database10)
                                            ->where('dated','>=',$database11)
                                            ->get());
            $toReturn['client_submittal11']= count(Tbl_forward_candidate::where('forward_date','<=',$database10)
                                            ->where('forward_date','>=',$database11)
                                            ->get());


            //12
            $toReturn['week_week_twelve']= date('d-m-Y',(strtotime ( '-7 days' , strtotime (   $toReturn['week_week_eleven']) ) ));
            $toReturn['week_week12'] = date('m-d-Y', strtotime( $toReturn['week_week_twelve']));
            $database12= date('Y-m-d',(strtotime ( '-7 days' , strtotime ($toReturn['week_week_eleven']))));
            $toReturn['job_created_weekly12']= count(tbl_post_job::where('dated','<=',$database11)
                                            ->where('dated','>=',$database12)
                                            ->get());
            $toReturn['candidate_created12']= count(Tbl_job_seekers::where('dated','<=',$database11)
                                            ->where('dated','>=',$database12)
                                            ->get());
            $toReturn['application_submitted12']= count(Tbl_seeker_applied_for_job::where('dated','<=',$database11)
                                            ->where('dated','>=',$database12)
                                            ->get());
            $toReturn['client_submittal12']= count(Tbl_forward_candidate::where('forward_date','<=',$database11)
                                            ->where('forward_date','>=',$database12)
                                            ->get());



            
            
            //for months

            $one = date('d-m-Y');
            $toReturn['month_week_one1'] = $newDate = date("m-Y", strtotime($one));

            $toReturn['job_created_monthly1']= count(tbl_post_job::whereMonth('dated',$toReturn['month_week_one1'])->get());
            $toReturn['candidate_created_monthly1']= count(Tbl_job_seekers::whereMonth('dated',$toReturn['month_week_one1'])->get());
            $toReturn['client_submittal_monthly1']= count(Tbl_forward_candidate::whereMonth('forward_date',$toReturn['month_week_one1'])->get());
            $toReturn['application_submitted_monthly1']= count(Tbl_seeker_applied_for_job::whereMonth('dated',$toReturn['month_week_one1'])->get());




            

            $two= date('d-m-Y',(strtotime ( '-30 days' , strtotime (   $one) ) ));
            $toReturn['month_week_one2'] =$newDate = date("m-Y", strtotime($two));
            
            $toReturn['job_created_monthly2']= count(tbl_post_job::whereMonth('dated',$toReturn['month_week_one2'])->get());
            $toReturn['candidate_created_monthly2']= count(Tbl_job_seekers::whereMonth('dated',$toReturn['month_week_one2'])->get());
            $toReturn['client_submittal_monthly2']= count(Tbl_forward_candidate::whereMonth('forward_date',$toReturn['month_week_one2'])->get());
            $toReturn['application_submitted_monthly2']= count(Tbl_seeker_applied_for_job::whereMonth('dated',$toReturn['month_week_one2'])->get());





            $three= date('d-m-Y',(strtotime ( '-30 days' , strtotime (   $two) ) ));
            $toReturn['month_week_one3'] = $newDate = date("m-Y", strtotime($three));

            $toReturn['job_created_monthly3']= count(tbl_post_job::whereMonth('dated',$toReturn['month_week_one3'])->get());
            $toReturn['candidate_created_monthly3']= count(Tbl_job_seekers::whereMonth('dated',$toReturn['month_week_one3'])->get());
            $toReturn['client_submittal_monthly3']= count(Tbl_forward_candidate::whereMonth('forward_date',$toReturn['month_week_one3'])->get());
            $toReturn['application_submitted_monthly3']= count(Tbl_seeker_applied_for_job::whereMonth('dated',$toReturn['month_week_one3'])->get());






            $four= date('d-m-Y',(strtotime ( '-30 days' , strtotime (   $three) ) ));
            $toReturn['month_week_one4'] = $newDate = date("m-Y", strtotime($four));

            $toReturn['job_created_monthly4']= count(tbl_post_job::whereMonth('dated', $toReturn['month_week_one4'])->get());
            $toReturn['candidate_created_monthly4']= count(Tbl_job_seekers::whereMonth('dated', $toReturn['month_week_one4'])->get());
            $toReturn['client_submittal_monthly4']= count(Tbl_forward_candidate::whereMonth('forward_date', $toReturn['month_week_one4'])->get());
            $toReturn['application_submitted_monthly4']= count(Tbl_seeker_applied_for_job::whereMonth('dated', $toReturn['month_week_one4'])->get());





           $five= date('d-m-Y',(strtotime ( '-30 days' , strtotime (   $four) ) ));
            $toReturn['month_week_one5'] =$newDate = date("m-Y", strtotime($five));

            $toReturn['job_created_monthly5']= count(tbl_post_job::whereMonth('dated',  $toReturn['month_week_one5'])->get());
            $toReturn['candidate_created_monthly5']= count(Tbl_job_seekers::whereMonth('dated',  $toReturn['month_week_one5'])->get());
            $toReturn['client_submittal_monthly5']= count(Tbl_forward_candidate::whereMonth('forward_date',  $toReturn['month_week_one5'])->get());
            $toReturn['application_submitted_monthly5']= count(Tbl_seeker_applied_for_job::whereMonth('dated',  $toReturn['month_week_one5'])->get());





            $six= date('d-m-Y',(strtotime ( '-30 days' , strtotime (  $five) ) ));
            $toReturn['month_week_one6'] =$newDate = date("m-Y", strtotime($six));

            $toReturn['job_created_monthly6']= count(tbl_post_job::whereMonth('dated',  $toReturn['month_week_one6'])->get());
            $toReturn['candidate_created_monthly6']= count(Tbl_job_seekers::whereMonth('dated',  $toReturn['month_week_one6'])->get());
            $toReturn['client_submittal_monthly6']= count(Tbl_forward_candidate::whereMonth('forward_date',  $toReturn['month_week_one6'])->get());
            $toReturn['application_submitted_monthly6']= count(Tbl_seeker_applied_for_job::whereMonth('dated',  $toReturn['month_week_one6'])->get());





            $seven= date('d-m-Y',(strtotime ( '-30 days' , strtotime (   $six) ) ));
            $toReturn['month_week_one7'] = $newDate = date("m-Y", strtotime($seven));

            $toReturn['job_created_monthly7']= count(tbl_post_job::whereMonth('dated',  $toReturn['month_week_one7'])->get());
            $toReturn['candidate_created_monthly7']= count(Tbl_job_seekers::whereMonth('dated',  $toReturn['month_week_one7'])->get());
            $toReturn['client_submittal_monthly7']= count(Tbl_forward_candidate::whereMonth('forward_date',  $toReturn['month_week_one7'])->get());
            $toReturn['application_submitted_monthly7']= count(Tbl_seeker_applied_for_job::whereMonth('dated',  $toReturn['month_week_one7'])->get());



            

            $eight= date('d-m-Y',(strtotime ( '-30 days' , strtotime (   $seven) ) ));
            $toReturn['month_week_one8'] = $newDate = date("m-Y", strtotime($eight));

            $toReturn['job_created_monthly8']= count(tbl_post_job::whereMonth('dated', $toReturn['month_week_one8'])->get());
            $toReturn['candidate_created_monthly8']= count(Tbl_job_seekers::whereMonth('dated', $toReturn['month_week_one8'])->get());
            $toReturn['client_submittal_monthly8']= count(Tbl_forward_candidate::whereMonth('forward_date', $toReturn['month_week_one8'])->get());
            $toReturn['application_submitted_monthly8']= count(Tbl_seeker_applied_for_job::whereMonth('dated', $toReturn['month_week_one8'])->get());





            $nine= date('d-m-Y',(strtotime ( '-30 days' , strtotime (   $eight) ) ));
            $toReturn['month_week_one9'] =$newDate = date("m-Y", strtotime($nine));

            $toReturn['job_created_monthly9']= count(tbl_post_job::whereMonth('dated', $toReturn['month_week_one9'])->get());
            $toReturn['candidate_created_monthly9']= count(Tbl_job_seekers::whereMonth('dated', $toReturn['month_week_one9'])->get());
            $toReturn['client_submittal_monthly9']= count(Tbl_forward_candidate::whereMonth('forward_date', $toReturn['month_week_one9'])->get());
            $toReturn['application_submitted_monthly9']= count(Tbl_seeker_applied_for_job::whereMonth('dated', $toReturn['month_week_one9'])->get());



            

            $ten= date('d-m-Y',(strtotime ( '-30 days' , strtotime (   $nine) ) ));
            $toReturn['month_week_one10'] =$newDate = date("m-Y", strtotime($ten));

            $toReturn['job_created_monthly10']= count(tbl_post_job::whereMonth('dated',  $toReturn['month_week_one10'])->get());
            $toReturn['candidate_created_monthly10']= count(Tbl_job_seekers::whereMonth('dated',  $toReturn['month_week_one10'])->get());
            $toReturn['client_submittal_monthly10']= count(Tbl_forward_candidate::whereMonth('forward_date',  $toReturn['month_week_one10'])->get());
            $toReturn['application_submitted_monthly10']= count(Tbl_seeker_applied_for_job::whereMonth('dated',  $toReturn['month_week_one10'])->get());





            $eleven= date('d-m-Y',(strtotime ( '-30 days' , strtotime (   $ten) ) ));
            $toReturn['month_week_one11'] =$newDate = date("m-Y", strtotime($eleven));

            $toReturn['job_created_monthly11']= count(tbl_post_job::whereMonth('dated',  $toReturn['month_week_one11'])->get());
            $toReturn['candidate_created_monthly11']= count(Tbl_job_seekers::whereMonth('dated',  $toReturn['month_week_one11'])->get());
            $toReturn['client_submittal_monthly11']= count(Tbl_forward_candidate::whereMonth('forward_date',  $toReturn['month_week_one11'])->get());
            $toReturn['application_submitted_monthly11']= count(Tbl_seeker_applied_for_job::whereMonth('dated',  $toReturn['month_week_one11'])->get());




            
            $twelve= date('d-m-Y',(strtotime ( '-30 days' , strtotime (   $eleven) ) ));
            $toReturn['month_week_one12'] =$newDate = date("m-Y", strtotime($twelve));

            $toReturn['job_created_monthly12']= count(tbl_post_job::whereMonth('dated',   $toReturn['month_week_one12'])->get());
            $toReturn['candidate_created_monthly12']= count(Tbl_job_seekers::whereMonth('dated',   $toReturn['month_week_one12'])->get());
            $toReturn['client_submittal_monthly12']= count(Tbl_forward_candidate::whereMonth('forward_date',   $toReturn['month_week_one12'])->get());
            $toReturn['application_submitted_monthly12']= count(Tbl_seeker_applied_for_job::whereMonth('dated',   $toReturn['month_week_one12'])->get());







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


    public function search_daily(Request $request){

        $date_1=$request->one_new;
        $date_2=$request->two_new;
        $data['one1']=$date_1;
        $data['two2']=$date_2;


        $data['job_created_days']= count(tbl_post_job::where('dated','<=', $date_2)
                                            ->where('dated','>=',$date_1)
                                            ->get());
        $data['candidate_created_days']= count(Tbl_job_seekers::where('dated','<=',$date_2)
                                            ->where('dated','>=',$date_1)
                                            ->get());
        $data['application_submitted_days']= count(Tbl_seeker_applied_for_job::where('dated','<=',$date_2)
                                            ->where('dated','>=',$date_1)
                                            ->get());
        $data['client_submittal_days']= count(Tbl_forward_candidate::where('forward_date','<=',$date_2)
                                            ->where('forward_date','>=',$date_1)
                                            ->get());
        return response()->json($data);
    }

    public function search_weekly(Request $request){
        
        $date_1=$request->one_new;
        $date_2=$request->two_new;
        $data['one1']=$date_1;
        $data['two2']=$date_2;


        $data['job_created_days']= count(tbl_post_job::where('dated','<=', $date_2)
                                            ->where('dated','>=',$date_1)
                                            ->get());
        $data['candidate_created_days']= count(Tbl_job_seekers::where('dated','<=',$date_2)
                                            ->where('dated','>=',$date_1)
                                            ->get());
        $data['application_submitted_days']= count(Tbl_seeker_applied_for_job::where('dated','<=',$date_2)
                                            ->where('dated','>=',$date_1)
                                            ->get());
        $data['client_submittal_days']= count(Tbl_forward_candidate::where('forward_date','<=',$date_2)
                                            ->where('forward_date','>=',$date_1)
                                            ->get());
        return response()->json($data);

    }


    // public function search_monthly(Request $request){

    //     $date_1=$request->one_new;
    //     $date_2=$request->two_new;
    //     $data['one1']=$date_1;
    //     $data['two2']=$date_2;


    //     $data['job_created_days']= count(tbl_post_job::whereMonth('dated','<=', $date_2)
    //                                         ->whereMonth('dated','>=',$date_1)
    //                                         ->get());
    //     $data['candidate_created_days']= count(Tbl_job_seekers::whereMonth('dated','<=',$date_2)
    //                                         ->whereMonth('dated','>=',$date_1)
    //                                         ->get());
    //     $data['application_submitted_days']= count(Tbl_seeker_applied_for_job::whereMonth('dated','<=',$date_2)
    //                                         ->whereMonth('dated','>=',$date_1)
    //                                         ->get());
    //     $data['client_submittal_days']= count(Tbl_forward_candidate::whereMonth('forward_date','<=',$date_2)
    //                                         ->whereMonth('forward_date','>=',$date_1)
    //                                         ->get());
    //     return response()->json($data);

    // }

   



}
