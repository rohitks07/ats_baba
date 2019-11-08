<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tbl_team_member_type;
use App\tbl_team_member;
use App\tbl_post_job;
use App\Tbl_job_seekers;
use App\Tbl_forward_candidate;
use App\Tbl_seeker_applied_for_job;

class TeamMemberController extends Controller
{
    public function __construct()
		{
			$this->middleware('check');

		}
   public function index()
    {

    	$Tbl_team_member_type=Tbl_team_member_type::all(); 

    	return view('team_members')->with('team_members',$Tbl_team_member_type);
    }
    public function add_teammembertype( Request $Request)
        {
        	$Tbl_team_member_type=new Tbl_team_member_type();
        	$Tbl_team_member_type->type_name=$Request->member_type;
        	$Tbl_team_member_type->save();
        	return redirect('admin/team_members');
    }
    public function edit_teammembertype(Request $Request) 
    { 
    	$member_id=$Request->team_type_id;
    	$member_type=$Request->team_type_name;
        Tbl_team_member_type::where('type_ID', $member_id)->update(array(
            'type_name'=>$member_type
           
        ));

    	return redirect('admin/team_members');
    }
        public function delete_teammembertype($id ="")
    {

        $Tbl_team_member_type= Tbl_team_member_type::where('type_ID',$id)->delete();
     
            return redirect('admin/team_members');
       
   
    }

    public function view_team_member(){

        $team_memeber = tbl_team_member::paginate(15);
        // return $team_memeber;
        // exit();
        return view('team_member_view')->with('team_member',$team_memeber);
    }

    public function delete_team_view($id){

        tbl_team_member::where('ID',$id)->delete();

        return redirect('admin/team_members_view');
    }

    public function report(Request $Request){

        $id = $Request->id;
        $toReturn['post_job'] =tbl_post_job::where('created_by',$id)->orderBy('dated', 'DESC')->get();
        return response($toReturn);
    }

    public function seeker_report(Request $Request){
        $id = $Request->id;
        $toReturn['job_seeker'] =Tbl_job_seekers::where('created_by',$id)->orderBy('dated', 'DESC')->get();
        return response($toReturn);
    }

    public function show_report_seeker_applied_for(Request $Request){
        $id = $Request->id;
        $toReturn['job_seeker_applied_for'] =Tbl_seeker_applied_for_job::where('submitted_by',$id)->orderBy('dated', 'DESC')->get();
        return response($toReturn);
    }


    public function forward_to(Request $Request){
        $id = $Request->id;
        // $id = 1;
        // $team_memeber = tbl_team_member::where('ID',$id)->first('email');
        $team_memeber = tbl_team_member::where('ID',$id)->first('email');
        $data = $team_memeber['email'];

        // @$join_job = Tbl_forward_candidate::leftjoin('tbl_post_jobs','tbl_post_jobs.ID','=','tbl_forward_candidate.job_id')
        //                                     ->select('tbl_post_jobs.job_title','tbl_post_jobs.ID','tbl_forward_candidate.forward_date','tbl_forward_candidate.forward_by','tbl_post_jobs.employer_ID')
        //                                     ->where('tbl_post_jobs.employer_ID',$id)
        //                                     // ->where('tbl_forward_candidate.forward_by','LIKE',$data)
        //                                     ->orderBy('tbl_forward_candidate.forward_date','DESC')
        //                                     ->get();

        
        @$toReturn['for_job'] =Tbl_forward_candidate::where('forward_by',$data)->orderBy('forward_date', 'DESC')->get();
        // foreach(@$data_tabl as $key => $item){
        //     @$job_id = $item->job_id;
        //     @$toReturn['for_job'][$key] = tbl_post_job::where('ID',$job_id)->get();
        // }
        
        // return @$data_tabl;
        return response(@$toReturn);
    }




    public function report_show($id = "",$name = ""){

            //for days
            $team_memeber = tbl_team_member::where('ID',$id)->first('email');
            $data = $team_memeber['email'];
            

            for ($j=0; $j < 12 ; $j++) { 
                $toReturn['week_report'][$j]['week_date'] = date('m-d-Y', strtotime('-'.$j.' days'));
                $toReturn['week_date_dated_us'][$j] = date('d-m-Y', strtotime('-'.$j.' days'));
                $newDate[$j] = date("Y-m-d", strtotime($toReturn['week_date_dated_us'][$j]));
                $toReturn['week_report'][$j]['job_created']= count(tbl_post_job::whereDate('dated',$newDate[$j])->where('created_by',$id)->get());
                $toReturn['week_report'][$j]['candidate_created']= count(Tbl_job_seekers::whereDate('dated',$newDate[$j])->where('created_by',$id)->get());
                $toReturn['week_report'][$j]['client_submittal']= count(Tbl_forward_candidate::whereDate('forward_date',$newDate[$j])->where('forward_by',$data)->get());
                $toReturn['week_report'][$j]['application_submitted']= count(Tbl_seeker_applied_for_job::whereDate('dated',$newDate[$j])->where('submitted_by',$id)->get());
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
                    $toReturn['monthly'][$i]['job_created_monthly1']= count(tbl_post_job::whereMonth('dated',$toReturn['monthly'][$i]['month_week_one1'])->where('created_by',$id)->get());
                    $toReturn['monthly'][$i]['candidate_created_monthly1']= count(Tbl_job_seekers::whereMonth('dated',$toReturn['monthly'][$i]['month_week_one1'])->where('created_by',$id)->get());
                    $toReturn['monthly'][$i]['client_submittal_monthly1']= count(Tbl_forward_candidate::whereMonth('forward_date',$toReturn['monthly'][$i]['month_week_one1'])->where('forward_by',$data)->get());
                    $toReturn['monthly'][$i]['application_submitted_monthly1']= count(Tbl_seeker_applied_for_job::whereMonth('dated',$toReturn['monthly'][$i]['month_week_one1'])->where('submitted_by',$id)->get());
                    $global=$two;
                }
            }



           

        return view('report_view')->with('toReturn',$toReturn)->with('name',$name);
    }
}
