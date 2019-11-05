<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tbl_institute;

class InstituteController extends Controller
{
  public function __construct()
		{
			$this->middleware('check');

		}
  public function index()
  {
    $inst_obj =Tbl_institute::all();

    return view('institute')->with('inst_obj',$inst_obj);
    
  }
  
  public function add_institute(Request $request){
                                                    
      
          $inst_obj = new Tbl_institute;

          $inst_obj ->name=$request->institute;
          // return $inst_obj;
          $inst_obj ->save();
          return redirect('admin/institute');
   }

   public function edit_institute(Request $request){

      $instituteid=$request->instituteid;
      $institutename=$request->institute;
      

      Tbl_institute::where('ID', $instituteid)->update(array(
        'name'=>$institutename
    
    ));
      return redirect('admin/institute');

  }
  
      public function delete_institute($id ="")
    {

      Tbl_institute::where('ID',$id)->delete();
     
        return  redirect('admin/institute');
       
   
    
    }



}

