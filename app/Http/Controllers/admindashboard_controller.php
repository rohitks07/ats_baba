<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tbl_job_seekers;
use App\tbl_seeker_experience;


class admindashboard_controller extends Controller
{
    //load page function
    public
    function index() {
        return view('admindashboard');

    }

    public function add(Request $Request)
    {
        $request->seeker_ID='4';
        $experience=new tbl_seeker_experience();
        $experience->seeker_ID=$Request->seeker_ID;
        $experience->job_title=$Request->job_title;
        $experience->company_name=$Request->company_name;
        // $experience->status="1";
        // $date=date('Y-m-d h:i:s',time());
        $experience->start_date=$experience->datea;
        $experience->end_date=$experience->dateb;
        $experience->city=$experience->city;
        $experience->country=$experience->country;
        $experience->responsibilities=$experience->responsibilities;
        $experience->save();
        return redirect('admindashboard');
    }
}
