<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tbl_notification;
use App\Tbl_team_member_permission;
use App\tbl_post_jobs;
use App\tbl_job_seekers;
use Session;

class NotificationController extends Controller
{
    public function show_notification()
    {
        $mydate=date('Y-m-d');
    	$notification=Tbl_notification::where('notify_to',Session::get('user_id'))->limit(10)
        ->where('submit_date','=', $mydate)
        // ->orderBy('read_date')
        ->get()->toArray();  
    	return  json_encode($notification);
    }

    public function jon_noti($id = ""){

        $toReturn[]=array();
        $current_module_id=3;
        $toReturn['user_type']=Session::get('type');
        if($toReturn['user_type']=="teammember")
        {
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
        }
        $one_group_teammember_employer_id=Session::get('one_group_teammember_id');
        if($one_group_teammember_employer_id)
        {
            $toReturn['post_job'] = tbl_post_jobs::where('ID',$id)->get();
        }else
        {
            $toReturn['post_job'] = tbl_post_jobs::where('ID',$id)->get();

        }
        $post_job_show = tbl_job_seekers::get()->toArray();

        return view('posted_job_notification')->with('toReturn',$toReturn)->with('post_job_show',$post_job_show);
    }
}