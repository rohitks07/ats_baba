<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tbl_salaries;


class SalaryController extends Controller
{
    public function __construct()
		{
			$this->middleware('check');

		}
   public function index()
    { 
    	$salary=Tbl_salaries::orderby('val','asc')->get();
        return view('salary')->with('salary',$salary);
    }

   	public function add(Request $Request) 
    {
        $Tbl_salaries = new Tbl_salaries();
    	$Tbl_salaries->val=$Request->salary;
    	$Tbl_salaries->text=$Request->text;
    // 	$Tbl_salaries->display_order=3;
    	$Tbl_salaries->save();
    	return  redirect('admin/salary');
    } 
    
    public function edit_salary(Request $Request)
    {
            $salaryid=$Request->salaryid;
            $salary_value=$Request->salary;
            $salary_text=$Request->text;
            

            Tbl_salaries::where('ID', $salaryid)->update(array(
            'val'=>$salary_value,
            'text'=>$salary_text
             ));
            return redirect('admin/salary');
    }
      

    public function delete_salary($id="")
    {
        $cityList= Tbl_salaries::where('ID',$id)->delete();
     
            return redirect('admin/salary');
       
   
    }


}
