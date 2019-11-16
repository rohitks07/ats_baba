<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\tbl_post_jobs;
use App\Tbl_companies;

class careersController extends Controller
{
    public function View($company_name="")
    {
    $name=str_replace(' ', '', $company_name);
    $company_mail_name=strtolower($name);
    $company_web="www.".$company_mail_name.".com";
    $company_record=Tbl_companies::where('company_website',$company_web)->first();
    if(empty($company_record))
    {
        return view('error_pages.page_404');
    }
    $listjob=tbl_post_jobs::where('privacy_level','public')->where('company_ID',$company_record->ID)->get()->toArray();
    // print_r($company_record->ID);
    // exit;
    return view('careers/careers')->with('listjob',$listjob)->with('company_record',$company_record);
    }
    
    
    public function view_job_careers($company_name="")
    {
        // echo $company_name;
        $company_web="www.".$company_name.".com";
        // echo $company_web;
        $company_record=Tbl_companies ::where('company_website',$company_web)->first();
        if(empty($company_record))
        {
            return view('error_pages.page_404');
        }
        $listjob=tbl_post_jobs::where('privacy_level','public')->where('company_ID',$company_record->ID)->get()->toArray();
        // print_r($company_record);
        // // exit;
        return view('careers/careers-jobpage')->with('company_record',$company_record)->with('listjob',$listjob); 
    }
    public function search_job($job="",$location="")
    {
    //     $compaletlocation=explode(",",$location);
    //     // $country=$
        $listjob=tbl_post_jobs::Where('job_code','LIKE', '%'.$job.'%')->Where('job_title','LIKE', '%'.$job.'%')->orWhere('client_name','LIKE', '%'.$job.'%')->orWhere('country','LIKE', '%'.$location.'%')->orWhere('city','LIKE', '%'.$location.'%')->orWhere('state','LIKE', '%'.$location.'%')->get()->toArray();
    // //    / echo $job;
    echo "<pre>";
    print_r($listjob);
    // exit;
        return json_encode($listjob);
    }
}
