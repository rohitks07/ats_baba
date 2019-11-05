<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tbl_job_industries;

class IndustryController extends Controller
{
	public function __construct()
		{
			$this->middleware('check');

		}
    public function index()
    {
    	  // $data['content'] ='sale.allsale';
    	$user=Tbl_job_industries::all();
	// return $user;
             return view('industries')->with("user",$user);
       
    	// return view('industries')->with('return', $toReturn);
 
            

    }
 

    public function delete_all_industries ($id="")
	{
		

	 $del = Tbl_job_industries::where('ID',$id)->delete();
             return redirect('admin/industries');
	}

	public function add_all_industries (Request $request){
		$add_data = new Tbl_job_industries();
		$add_data->industry_name = $request->ind_name;
		$add_data->save();

		return redirect('admin/industries');


	}
 

}

