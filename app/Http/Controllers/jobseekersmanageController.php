<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tbl_job_seekers;

class jobseekersmanageController extends Controller
{
   public function index()
   {
   	$job_seekers_list=Tbl_job_seekers::all();

   	return view('job_seekers')->with('job_seekers_list',$job_seekers_list);
   } 
   public function de($id=""){
      $d = Tbl_job_seekers::where('ID',$id)->delete();
      return redirect('admin/job_seekers_manage');
   }
}
 