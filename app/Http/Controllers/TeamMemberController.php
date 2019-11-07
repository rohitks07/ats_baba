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
}
