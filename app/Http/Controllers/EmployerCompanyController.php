<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tbl_employers;
use App\Tbl_companies;
use DB;



class EmployerCompanyController extends Controller
{
 	public function index()
 	{
 	    $toReturn = array();
 	    $list_employers = \DB::table('tbl_employers')
                            ->select('tbl_employers.country as hq','tbl_employers.email as email','tbl_companies.company_name as company','tbl_employers.ID as ID','tbl_employers.sts as status','tbl_employers.top_employer as top_employer')
                            ->leftjoin('tbl_companies','tbl_companies.ID', '=' , 'tbl_employers.company_ID')
                            // ->where('tbl_job_seekers.ID','=','*')
                            // ->orderBy('tbl_job_seekers.ID','asc')
                            ->get()->toArray();
 		            return view('employercompany')->with('list_employers',$list_employers);
 	}
 	
 	
 	//updateStatus
 	public function updateStatus($id="")
 	{
 	    $emp_exit_status=Tbl_employers::where('ID',$id)->first('sts');
 	    $exit_status=$emp_exit_status->sts;
 	    
 	    if($exit_status=='active')
 	    {
 	        $emp_status=Tbl_employers::where('ID',$id)->update(array(
 	            'sts'=>'blocked'
 	         	        ));
 	        $emp_new_status=Tbl_employers::where('ID',$id)->first('sts');
 	    }
 	    else
 	    {
 	        $emp_status=Tbl_employers::where('ID',$id)->update(array(
 	            'sts'=>'active'
 	         	        ));
 	        $emp_new_status=Tbl_employers::where('ID',$id)->first('sts');
 	    }
 	    echo $emp_new_status;
 	}
 	
 	
 	//employer
 	public function top_employer($id="")
 	{
 	    
 	    $top_employer=Tbl_employers::where('ID',$id)->first('top_employer');
 	    $yes_or_no=$top_employer->top_employer;
 	    
 	    if($yes_or_no=='yes')
 	    {
 	        $temp=Tbl_employers::where('ID',$id)->update(array(
 	            'top_employer'=>'no'
 	         	        ));
 	        $temp_new=Tbl_employers::where('ID',$id)->first('top_employer');
 	    }
 	    else
 	    {
 	        $temp=Tbl_employers::where('ID',$id)->update(array(
 	            'top_employer'=>'yes'
 	         	        ));
 	        $temp_new=Tbl_employers::where('ID',$id)->first('top_employer');
 	    }
 	    echo $temp_new;
 	    
 	    
 	}
}
