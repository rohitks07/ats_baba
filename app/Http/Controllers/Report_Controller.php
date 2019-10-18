<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Tbl_job_seekers;
use App\tbl_post_job;
use App\tbl_post_jobs;
use App\Tbl_forward_candidate;
use App\Tbl_seeker_applied_for_job;
use App\Tbl_job_post_assign;
use App\Tbl_team_member_type;
use App\tbl_team_member; 


class Report_Controller extends Controller
{

    public function repost_show(){
            
        $org_id=Session::get('org_ID');

            //for days

            for ($j=0; $j < 12 ; $j++) { 
                $toReturn['week_report'][$j]['week_date'] = date('m-d-Y', strtotime('-'.$j.' days'));
                $toReturn['week_date_dated_us'][$j] = date('d-m-Y', strtotime('-'.$j.' days'));
                $newDate[$j] = date("Y-m-d", strtotime($toReturn['week_date_dated_us'][$j]));
                $toReturn['week_report'][$j]['job_created']= count(tbl_post_job::whereDate('dated',$newDate[$j])->get());
                // $toReturn['week_report'][$j]['job_created']= count(tbl_post_job::whereDate('dated',$newDate[$j])->where('company_ID',$org_id)->get());
                // $data_group[$j]=tbl_post_job::whereDate('dated',$newDate[$j])->where('company_ID',$org_id)->get('for_group');

                $toReturn['week_report'][$j]['candidate_created']= count(Tbl_job_seekers::whereDate('dated',$newDate[$j])->get());
                $toReturn['week_report'][$j]['client_submittal']= count(Tbl_forward_candidate::whereDate('forward_date',$newDate[$j])->get());
                $toReturn['week_report'][$j]['application_submitted']= count(Tbl_seeker_applied_for_job::whereDate('dated',$newDate[$j])->get());
                $toReturn['week_report'][$j]['post_assign']= count(Tbl_job_post_assign::whereDate('job_assigned_date',$newDate[$j])->get());

                
            }
            

            $org_id=Session::get('org_ID');
         //job post
            $date_team['team']=Tbl_team_member_type::leftjoin('tbl_post_jobs','tbl_post_jobs.for_group','=','tbl_team_member_type.type_ID')
            ->select('tbl_team_member_type.type_ID as id','tbl_team_member_type.type_name',
                    'tbl_post_jobs.for_group as group','tbl_post_jobs.dated as date','tbl_post_jobs.company_ID')
                    ->get();



            //job post assign
            $post_assign=Tbl_job_post_assign::get()->toArray();


                                    

            //job assign
            $date_team['post_assign']=tbl_team_member::leftjoin('tbl_job_post_assign','tbl_job_post_assign.team_member_id','=','tbl_team_member.ID')     
                                                    ->leftjoin('tbl_team_member_type','tbl_team_member_type.type_ID','=','tbl_team_member.team_member_type')  
                                                    ->select('tbl_team_member.team_member_type','tbl_team_member.company_id','tbl_team_member.full_name',
                                                    'tbl_job_post_assign.team_member_id','tbl_team_member_type.type_name','tbl_team_member_type.type_ID',
                                                    'tbl_job_post_assign.job_assigned_date','tbl_team_member.company_id')
                                                    ->get();

            //create_candidate
            // $date_team['create_candidate']=Tbl_job_seekers::leftjoin('user','user.user_id','=','tbl_job_seekers.employer_id')
            //                                         ->leftjoin('tbl_team_member','tbl_team_member.ID','=','user.user_id')  
            //                                         ->leftjoin('tbl_team_member_type','tbl_team_member_type.type_ID','=','tbl_team_member.team_member_type')  
            //                                         ->select('tbl_job_seekers.ID','tbl_job_seekers.dated','tbl_job_seekers.dated','tbl_job_seekers.employer_id',
            //                                         'tbl_team_member.full_name','tbl_team_member.team_member_type','tbl_team_member_type.type_ID','tbl_team_member_type.type_name')
            //                                         ->get();


            $date_team['create_candidate']=tbl_team_member_type::leftjoin('tbl_team_member','tbl_team_member.team_member_type','=','tbl_team_member_type.type_ID')
                                                    ->leftjoin('user','user.user_id','=','tbl_team_member.ID')  
                                                    ->leftjoin('tbl_job_seekers','tbl_job_seekers.employer_id','=','user.user_id')  
                                                    ->select('tbl_job_seekers.ID','tbl_job_seekers.dated','tbl_job_seekers.dated','tbl_job_seekers.employer_id',
                                                    'tbl_team_member.full_name','tbl_team_member.team_member_type','tbl_team_member_type.type_ID','tbl_team_member_type.type_name','tbl_team_member.company_id')
                                                    ->get();

            // application_submitted
            $date_team['application_submitted']=Tbl_seeker_applied_for_job::leftjoin('tbl_job_seekers','tbl_job_seekers.ID','=','tbl_seeker_applied_for_job.seeker_ID')
                                                    ->leftjoin('user','user.ID','=','tbl_job_seekers.employer_id')  
                                                    ->leftjoin('tbl_team_member','tbl_team_member.ID','=','user.user_id')  
                                                    ->leftjoin('tbl_team_member_type','tbl_team_member_type.type_ID','=','tbl_team_member.team_member_type')  
                                                    ->select('tbl_job_seekers.ID','tbl_job_seekers.dated','tbl_seeker_applied_for_job.dated','tbl_job_seekers.employer_id',
                                                    'tbl_team_member.full_name','tbl_team_member.team_member_type','tbl_team_member_type.type_ID','tbl_team_member_type.type_name','tbl_team_member.company_id')
                                                    ->get();

                                                    
            // $date_team['application_submitted']=Tbl_seeker_applied_for_job::leftjoin('tbl_job_seekers','tbl_job_seekers.ID','=','tbl_seeker_applied_for_job.seeker_ID')
            //                                         ->leftjoin('user','user.ID','=','tbl_job_seekers.employer_id')  
            //                                         ->leftjoin('tbl_team_member','tbl_team_member.ID','=','user.user_id')  
            //                                         ->leftjoin('tbl_team_member_type','tbl_team_member_type.type_ID','=','tbl_team_member.team_member_type')  
            //                                         ->select('tbl_job_seekers.ID','tbl_job_seekers.dated','tbl_seeker_applied_for_job.dated','tbl_job_seekers.employer_id',
            //                                         'tbl_team_member.full_name','tbl_team_member.team_member_type','tbl_team_member_type.type_ID','tbl_team_member_type.type_name')
            //                                         ->get();

            $date_team['forward_candidate']=Tbl_forward_candidate::leftjoin('tbl_post_jobs','tbl_post_jobs.ID','=','tbl_forward_candidate.job_id')
                                                                   ->leftjoin('tbl_team_member_type','tbl_team_member_type.type_ID','=','tbl_post_jobs.for_group')
                                                                   ->select('tbl_team_member_type.type_ID','tbl_team_member_type.type_name',
                                                                        'tbl_post_jobs.for_group','tbl_forward_candidate.forward_date','tbl_forward_candidate.forward_by')
                                                                        ->get();
                                                                        $google=$date_team['forward_candidate'];
        
            //   return $google;                                       
        


            @$toReturn['team_member']=Tbl_team_member_type::get()->toArray();
            for($o=0;$o<12;$o++){
                $data_one[$o]=$newDate[$o];        
                $filtered[$o] = $date_team['team']->whereIn('date', $data_one[$o])->toArray(); 
                $filtered1[$o] =$date_team['team']->whereIn('date', $data_one[$o]);

            }      

            
            // for months;
            $global="";
            for($i=0;$i<12;$i++){

                if($i==0){
                    $one = date('d-m-Y');
                    $global=$one;
                }
                else{

                    $two= date('d-m-Y',(strtotime ( '-30 days' , strtotime (   $global) ) ));
                    $toReturn['monthly'][$i]['month_week_one1'] =$newDate = date("m-Y", strtotime($global));
                    $toReturn['monthly'][$i]['job_created_monthly1']= count(tbl_post_job::whereMonth('dated',$toReturn['monthly'][$i]['month_week_one1'])->get()->toArray());
                    $toReturn['monthly'][$i]['candidate_created_monthly1']= count(Tbl_job_seekers::whereMonth('dated',$toReturn['monthly'][$i]['month_week_one1'])->get()->toArray());
                    $toReturn['monthly'][$i]['client_submittal_monthly1']= count(Tbl_forward_candidate::whereMonth('forward_date',$toReturn['monthly'][$i]['month_week_one1'])->get()->toArray());
                    $toReturn['monthly'][$i]['application_submitted_monthly1']= count(Tbl_seeker_applied_for_job::whereMonth('dated',$toReturn['monthly'][$i]['month_week_one1'])->get()->toArray());
                    $toReturn['monthly'][$i]['post_assign_month1']= count(tbl_job_post_assign::whereMonth('job_assigned_date',$toReturn['monthly'][$i]['month_week_one1'])->get()->toArray());
                    $global=$two;
                }
            }
            
            


                // for yeaars

                $global_year="";
                for($k=0;$k<12;$k++){
    
                    if($k==0){
                        $one = date('d-m-Y');
                        $global_year=$one;
                    }
                    else {
    
                        $two= date('d-m-Y',(strtotime ( '-365 days' , strtotime (   $global_year) ) ));
                        $toReturn['yearly'][$k]['month_week_one1'] =$newDate = date("Y", strtotime($global_year));
                        $toReturn['yearly'][$k]['job_created_monthly1']= count(tbl_post_job::whereYear('dated',$toReturn['yearly'][$k]['month_week_one1'])->get()->toArray());
                        $toReturn['yearly'][$k]['candidate_created_monthly1']= count(Tbl_job_seekers::whereYear('dated',$toReturn['yearly'][$k]['month_week_one1'])->get()->toArray());
                        $toReturn['yearly'][$k]['client_submittal_monthly1']= count(Tbl_forward_candidate::whereYear('forward_date',$toReturn['yearly'][$k]['month_week_one1'])->get()->toArray());
                        $toReturn['yearly'][$k]['application_submitted_monthly1']= count(Tbl_seeker_applied_for_job::whereYear('dated',$toReturn['yearly'][$k]['month_week_one1'])->get()->toArray());
                        $toReturn['yearly'][$k]['post_assign_month1']= count(Tbl_job_post_assign::whereYear('job_assigned_date',$toReturn['yearly'][$k]['month_week_one1'])->get()->toArray());
                        $global_year=$two;
                    }
                }
               
                // return $toReturn['yearly'];
                // exit;
                


                $first_date="";
                $final_date="";
                $week_data="";
                for($p=0;$p<12;$p++){
    
                    if($p==0){
                        $today_date= date('Y-m-d');
                        $toReturn['weekly_show'][$p]['week_week_one'] = date('d-m-Y', strtotime('-7 days'));
                        $toReturn['weekly_show'][$p]['week_week1'] = date('m-d-Y', strtotime( $toReturn['weekly_show'][$p]['week_week_one']));

                        $database1 = date('Y-m-d', strtotime('-7 days'));

                        $toReturn['weekly_show'][$p]['job_created_week_wise']= count(tbl_post_job::where('dated','<=',$today_date)
                                                        ->where('dated','>=',$database1)
                                                        ->get());
                        $toReturn['weekly_show'][$p]['candidate_created_week_wise']= count(Tbl_job_seekers::where('dated','<=',$today_date)
                                                        ->where('dated','>=',$database1)
                                                        ->get());
                        $toReturn['weekly_show'][$p]['application_submitted_week_wise']= count(Tbl_seeker_applied_for_job::where('dated','<=',$today_date)
                                                        ->where('dated','>=',$database1)
                                                        ->get());
                        $toReturn['weekly_show'][$p]['client_submittal_week_wise']= count(Tbl_forward_candidate::where('forward_date','<=',$today_date)
                                                        ->where('forward_date','>=',$database1)
                                                        ->get());
                        $toReturn['weekly_show'][$p]['post_assign_week_wise']= count(Tbl_job_post_assign::where('job_assigned_date','<=',$today_date)
                                                        ->where('job_assigned_date','>=',$database1)
                                                        ->get());
                        $first_date=$today_date;
                        $final_date=$database1; 
                        $week_data= $toReturn['weekly_show'][$p]['week_week_one'];                                                   
                    }
                    else{
    
                        // $toReturn['weekly_show'][$p]['week_week_one']= date('d-m-Y',(strtotime ( '-7 days' , strtotime ($final_date) ) ));
                        $toReturn['weekly_show'][$p]['week_week_all']= date('Y-m-d',(strtotime ( '-7 days' , strtotime ($final_date) ) ));

                        $toReturn['weekly_show'][$p]['week_week1'] = date('m-d-Y', strtotime( $toReturn['weekly_show'][$p]['week_week_all']));
                        $database2[$p]= date('Y-m-d',(strtotime ( '-7 days' , strtotime ($toReturn['weekly_show'][$p]['week_week_all']))));

                        $toReturn['weekly_show'][$p]['job_created_week_wise']= count(tbl_post_job::whereDate('dated','<=',$toReturn['weekly_show'][$p]['week_week_all'])
                                                        ->where('dated','>=',$database2[$p])
                                                        ->get());
                        $toReturn['weekly_show'][$p]['candidate_created_week_wise']= count(Tbl_job_seekers::where('dated','<=',$toReturn['weekly_show'][$p]['week_week_all'])
                                                        ->where('dated','>=',$database2[$p])
                                                        ->get());                                
                        $toReturn['weekly_show'][$p]['application_submitted_week_wise']= count(Tbl_seeker_applied_for_job::where('dated','<=',$toReturn['weekly_show'][$p]['week_week_all'])
                                                        ->where('dated','>=',$database2[$p])
                                                        ->get());                                    
                        $toReturn['weekly_show'][$p]['client_submittal_week_wise']= count(Tbl_forward_candidate::where('forward_date','<=',$toReturn['weekly_show'][$p]['week_week_all'])
                                                        ->where('forward_date','>=',$database2[$p])
                                                        ->get());
                        $toReturn['weekly_show'][$p]['post_assign_week_wise']= count(Tbl_job_post_assign::where('job_assigned_date','<=',$toReturn['weekly_show'][$p]['week_week_all'])
                                                        ->where('job_assigned_date','>=',$database2[$p])
                                                        ->get());
                        
                        $final_date=$database2[$p];
                        // $week_data=                                                       
                    }
                }
                // return   $toReturn['weekly_show'];
                // exit;
            

            
        return view('report')->with('toReturn',$toReturn)
                             ->with('date_team',$date_team)
                             ->with('org_id',$org_id);
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
        $data['post_assign_days']= count(Tbl_job_post_assign::where('job_assigned_date','<=',$date_2)
                                            ->where('job_assigned_date','>=',$date_1)
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
        $data['post_assign_days']= count(Tbl_job_post_assign::where('job_assigned_date','<=',$date_2)
                                            ->where('job_assigned_date','>=',$date_1)
                                            ->get());                                     
        return response()->json($data);

    }


   



}
