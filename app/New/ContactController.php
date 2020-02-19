<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tbl_post_contacts;
use App\Tbl_email_list_contacts;
use App\Tbl_email_list;
use App\Tbl_team_member_permission;
use Session;
use App\Tbl_salutation;
use App\Tbl_countries;
use App\Tbl_state;
use App\Tbl_cities;
use App\Tbl_team_member_type;




class ContactController extends Controller
{
    public function index(Request $request){


        // $datas = Tbl_post_contacts::leftJoin('tbl_team_member_type','tbl_post_contacts.company_name','=','tbl_team_member_type.type_ID')
        //                             ->leftJoin('states','tbl_post_contacts.state_id','=','states.state_id')
        //                             ->get();

        // $contact_object =  Tbl_post_contacts::leftJoin('tbl_team_member_type','tbl_post_contacts.company_name','=','tbl_team_member_type.type_ID')
        // ->leftJoin('states','tbl_post_contacts.state_id','=','states.state_id')
        // ->select('tbl_post_contacts.*','tbl_team_member_type.type_name','states.state_name')
        // ->get();
       
        return view('post_new_contacts');
    }

    public function change_add_status(Request $request)
    {
        $hidden_input_purpose = "add";
        $hidden_input_id= "NA";

      
    
        $contact_object =  new Tbl_post_contacts;

        $salutions = Tbl_salutation::get();
        $countries = Tbl_countries::get();
        $states = Tbl_state::get();
        $cities = Tbl_cities::get();
        $team_member_types = Tbl_team_member_type::get();

        if(isset($request->purpose)&&isset($request->id)){
            $hidden_input_purpose=$request->purpose;
            $hidden_input_id=$request->id;
            $contact_object = $contact_object->find($request->id);
        }
        return view('post_new_contacts')->with(compact('hidden_input_purpose','hidden_input_id','contact_object','salutions','countries','states','cities','team_member_types'));
    }

    public function add(Request $request){

        $contact_object = new Tbl_post_contacts;
        if($request->hidden_input_purpose=="edit")
        {
            $contact_object = $contact_object->find($request->hidden_input_id);
        }

        $contact_object -> sub_name      = $request ->salutation;
        $contact_object -> cont_per_name = $request ->name;
        $contact_object -> phone_c       = $request ->phone_c;
        $contact_object -> phone_w       = $request ->phone_w;
        $contact_object -> email_h       = $request ->email_h;
        $contact_object -> email_w       = $request ->email_w;
        $contact_object -> country       = $request ->country;
        $contact_object -> state         = $request->state;
        $contact_object -> city          = $request->city;
        $contact_object -> company_name  = $request->company_name;
        $contact_object -> designation   = $request->designation;

        $contact_object->status="active";
        $mydate=date('Y-m-d');
        $contact_object->created_date=$mydate;
        $contact_object->created_by="rohit";
        $contact_object->last_updated_by="";
        $contact_object->last_updated_date=$mydate;
        $contact_object->employer_id=12;

        $contact_object -> save();

        return redirect('employer/my_posted_contacts');
    }


    public function show(){

        $current_module_id=6;
             $toReturn['user_type']=Session::get('type');
            if($toReturn['user_type']=="teammember")
            {
            $user_permission_list=Session::get('user_permission');
                if($user_permission_list)
                {
                    foreach($user_permission_list as $key =>$value )
                    {
                        if($user_permission_list[$key]['module_id']==$current_module_id)
                        {
                            $toReturn['current_module_permission']=Tbl_team_member_permission::where('permission_value',$current_module_id)->where('team_member_id',Session::get('user_id'))->first()->toArray();
                        
                        }

                    }
                }
            }
        $contact_object =Tbl_post_contacts::leftJoin('tbl_team_member_type','tbl_post_contacts.company_name','=','tbl_team_member_type.type_ID')
                        ->leftJoin('states','tbl_post_contacts.state','=','states.state_id')
                        ->select('tbl_post_contacts.*','tbl_team_member_type.type_name','states.state_name')
                        ->get(); 
        $emailList = Tbl_email_list_contacts::all();
        $email=Tbl_email_list::all();

        return view('my_posted_contacts')->with('list',$emailList)->with('contacts',$contact_object)->with('email',$email)->with('toReturn',$toReturn);
        
    } 

    public function delete($id=""){
    
        $contact_delete = Tbl_post_contacts::where('id',$id)->delete();

        return redirect('employer/my_posted_contacts');
    }

    public function edit_contact_data($id="")
    {
      
        $edit_data = Tbl_post_contacts::where('id',$id)->first();

        return redirect('employer/my_posted_contacts'); 
    }

    public function add_email_form(Request $request){
        
        $emailList = new Tbl_email_list_contacts;
        $emailList->employer_id = Session::get('id');
        $emailList ->salutation = $request->salutation;
        $emailList ->first_name = $request->firstname;
        $emailList ->last_name  = $request->lastname;
        $emailList ->full_name  = $request->fullname;
        $emailList ->email_contact_id =$request->emailid;
        $emailList ->add_in_contact_db = $request->contactdatabase;
        $mydate=date('Y-m-d');
        $emailList->last_updated_date = $mydate;
      

        $emailList->created_by = Session::get('full_name');
       
        $emailList ->save();
        
        return redirect('employer/my_posted_contacts');
      
    }

    public function show_email_form()
    {
        return view('post_new_email_contact');
    }

    public function delete_email($id=""){     
        
      $email_delete  = Tbl_email_list_contacts::where('id',$id)->delete();
      return redirect('employer/my_posted_contacts');

    }
    public function delete_email_list($id=""){

      $email_delete_list=Tbl_email_list::where('id',$id)->delete();
      return redirect('employer/my_posted_contacts');
        
     }




}



