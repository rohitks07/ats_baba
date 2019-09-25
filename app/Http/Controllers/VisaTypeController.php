<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tbl_visa_type;

class VisaTypeController extends Controller
{
    public function index()
    {
        $visa_type_obj = Tbl_visa_type ::all();

        return view('visa_type')->with('visa_type_obj',$visa_type_obj);
        
    }

    public function add_visa_type(Request $request)
    {

       $visa_type_obj = new Tbl_visa_type;

       $visa_type_obj ->type_name = $request->visa;
       $visa_type_obj->save();
     
       return redirect('admin/visa_type');
    }

    public function edit_visa_type(Request $request)
    {

        $visa_type_id  = $request->id;
        $visa_type_visa = $request->visa;

        Tbl_visa_type::where('type_ID', $visa_type_id)->update(array(
            'type_name' =>  $visa_type_visa
        
        )); 
        return redirect('admin/visa_type');        
    }

    public function delete_visa_type($id="")
    {
    
        Tbl_visa_type::where('type_ID',$id)->delete();
        return redirect('admin/visa_type');
    }
}
