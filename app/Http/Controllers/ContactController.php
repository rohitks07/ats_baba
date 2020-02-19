<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tbl_post_contacts;
use App\Tbl_email_list_contacts;
use App\Tbl_email_list;
use App\Tbl_team_member_permission;
use Session;


class ContactController extends Controller
{
    public function __construct()
		{
			$this->middleware('mian_session');

		}
    public function index(){
        return view ('post_new_contacts');
    }


    public function add(Request $request)
    {
            $contact_object = new Tbl_post_contacts;
            $contact_object ->sub_name      = $request ->salutation;
            $contact_object ->cont_per_name = $request ->name;//mandatory
            $contact_object ->phone_c       = $request ->phone_c;//mandatory
            $contact_object ->phone_w       = $request ->phone_w;
            $contact_object ->email_h       = $request ->email_h;//mandatory
            $contact_object ->email_w       = $request ->email_w;
            $contact_object ->country       = $request ->country;//mandatory
            $contact_object ->state         = $request->state;//mandatory
            $contact_object ->city          = $request->city;//mandatory
            $contact_object ->company_name  = $request->company_name;
            $contact_object ->designation   = $request->designation;
            $contact_object->status="active";
            $mydate=date('Y-m-d');
            $contact_object->created_date=$mydate;
            $contact_object->created_by=Session::get('full_name');
            $contact_object->last_updated_by=Session::get('id');
            $contact_object->last_updated_date=$mydate;
            $contact_object -> save();
        return redirect('employer/my_posted_contacts');
    }




    public function show()
    {
        $toReturn=array();
        $current_module_id=6;
            $user_permission_list=Session::get('user_permission');
        foreach($user_permission_list as $key =>$value )
        {
             if($user_permission_list[$key]['module_id']==$current_module_id)
             {
                 $toReturn['current_module_permission']=Tbl_team_member_permission::where('permission_value',$current_module_id)->where('team_member_id',Session::get('user_id'))->first()->toArray();
             }
        }
        // return "test";
        // exit;
            $contact_object =Tbl_post_contacts::all();   
            $emailList = Tbl_email_list_contacts::all();
            $email=Tbl_email_list::all();
        return view('my_posted_contacts')->with('contacts',$contact_object)->with('list',$emailList)->with('email',$email)->with('toReturn',$toReturn);
    } 
    public function delete($id="")
    {
       
        $contact_delete = Tbl_post_contacts::where('id',$id)->delete();
           
        return redirect('employer/my_posted_contacts');
    }

    
    public function edit_contact_data($id="")
    {
      
        $edit_data = Tbl_post_contacts::where('id',$id)->first();

     
        return $edit_data;

        // return redirect('employer/my_posted_contacts'); 
    }
    public function add_email_form(Request $request)
    {
            $emailList = new Tbl_email_list_contacts;
            $emailList ->salutation = $request->salutation;
            $emailList ->first_name = $request->firstname;
            $emailList ->last_name  = $request->lastname;
            $emailList ->full_name  = $request->fullname;
            $emailList ->email_contact_id =$request->emailid;
            $emailList ->add_in_contact_db = $request->contactdatabase;
            $DateCreatedOnce = date('Y-m-d');
            $emailList->created_date=$DateCreatedOnce;
            $emailList->last_updated_date=$DateCreatedOnce;
            $emailList->last_updated_by=$DateCreatedOnce;
            // return $emailList;
            // exit;
            $emailList ->save();
        return redirect('employer/my_posted_contacts');
    }
   public function show_email_form()
    {
        return view('post_new_email_contact');
    }


    public function delete_email($id="")
    {     
            $email_delete  = Tbl_email_list_contacts::where('id',$id)->delete();
        return redirect('employer/my_posted_contacts');
    }

   
    public function delete_email_list($id="")
    {
           $email_delete_list=Tbl_email_list::where('id',$id)->delete();
        return redirect('employer/my_posted_contacts');
    }
}



