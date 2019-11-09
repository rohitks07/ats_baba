<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tbl_qualifications;

class QualificationController extends Controller
{
    public function __construct()
    {
        $this->middleware('check');
    }
    public function index()
    {
        $qual_obj = Tbl_qualifications::all();
        return view('qualification')->with('qual_obj', $qual_obj);
    }
    public function add_qualification(Request $request)
    {

        $qual_obj = new Tbl_qualifications;
        $qual_obj->val = $request->qual;
        $qual_obj->status = $request->status;
        $qual_obj->save();

        return redirect('admin/qualification');
    }

    public function edit_qualification(Request $Request)
    {

        $qualicationId = $Request->id;
        $qualificationval = $Request->qual;
        $qualificationtext = $Request->status;
        Tbl_qualifications::where('ID', $qualicationId)->update(array(
            'val' => $qualificationval,
            'status' => $qualificationtext
        ));
        return redirect('admin/qualification');
    }

    public function delete_qualification($id = "")
    {

        Tbl_qualifications::where('ID', $id)->delete();
        return redirect('admin/qualification');
    }
}
