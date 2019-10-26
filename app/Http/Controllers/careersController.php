<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\tbl_post_jobs;
use App\Tbl_companies;

class careersController extends Controller
{
    public function View($url="")
    {
        // echo $url;
        $company_web="www.".$url.".com";
        
        $company_record=Tbl_companies ::where('company_website',$company_web)->first();
        print_r($company_record);
        exit;
        // echo url()->previous()."</br>";
        // $p_url=url()->previous();
        // $previous_url=explode('/',$p_url);
        // echo url()->current();
        // $c_url=url()->current();
    //    $current_url=explode('/',$c_url);
    //    print_r($current_url[3]);
      
    //    $result_url=array_splice($current_url,3,0,$previous_url[3]);
        // print_r($current_url);
        exit;
    //    print_r($current_url[1]);
        // url()->
        exit;
        $listjob=tbl_post_jobs::where('privacy_level','public')->get()->toArray();
        return view('careers/careers')->with('listjob',$listjob);
    }
    
    public function view_job_careers()
    {
        return view('careers/careers-jobpage');
    }
}
