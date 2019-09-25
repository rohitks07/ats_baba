<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tbl_team_member_type;

class TeamMemberController extends Controller
{
   public function index()
    {

    	$Tbl_team_member_type=Tbl_team_member_type::all(); 

    	return view('team_members')->with('team_members',$Tbl_team_member_type);
    }
    public function add_teammembertype( Request $Request)
        {
        	$Tbl_team_member_type=new Tbl_team_member_type();
        	$Tbl_team_member_type->type_name=$Request->member_type;
        	$Tbl_team_member_type->save();
        	return redirect('admin/team_members');
    }
    public function edit_teammembertype(Request $Request)
    { 
    	$member_id=$Request->team_type_id;
    	$member_type=$Request->team_type_name;
        Tbl_team_member_type::where('type_ID', $member_id)->update(array(
            'type_name'=>$member_type
           
        ));

    	return redirect('admin/team_members');
    }
        public function delete_teammembertype($id ="")
    {

        $Tbl_team_member_type= Tbl_team_member_type::where('type_ID',$id)->delete();
     
            return redirect('admin/team_members');
       
   
    }
}
