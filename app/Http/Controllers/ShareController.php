<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tbl_post_job;
use App\Tbl_companies;
use Session;

class ShareController extends Controller
{
    public function share_linkedin(Request $REQUEST){
        $id = $REQUEST->id;
        $job = tbl_post_job::where('ID',$id)->first();
        $org = Session::get('org_ID');
        $data = array ('job'=>$job, 'org'=>$org);
        return response($data);
    }

    public function job_detail_preview($id,$org){
        $data = tbl_post_job::where('ID',$id)->first();
        $company_record=Tbl_companies::where('ID',$org)->first();
        $data_from = 'Redirected from '.$company_record->company_name;
        return view('careers.job_details')->with('data',$data)->with('company_record',$company_record)->with('data_from',$data_from);
    }
}
