<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tbl_post_contacts;
use App\Tbl_email_list_contacts;
use App\Tbl_email_list;




class ContactController extends Controller
{
    public function index(){

        return view ('post_new_contacts');
    }


    public function add(Request $request){

        $contact_object = new Tbl_post_contacts;

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
        // return $request;
    }


    public function show(){

        $contact_object =Tbl_post_contacts::all();   
        $emailList = Tbl_email_list_contacts::all();
        $email=Tbl_email_list::all();

        return view('my_posted_contacts')->with('list',$emailList)->with('contacts',$contact_object)->with('email',$email);
        
    } 

    public function delete($id=""){
    
        $contact_delete = Tbl_post_contacts::where('id',$id)->delete();

        return redirect('employer/my_posted_contacts');
    }

    public function add_email_form(Request $request){

        $emailList = new Tbl_email_list_contacts;

        $emailList ->salutation = $request-> salutation;
        $emailList ->first_name = $request-> firstname;
        $emailList ->last_name  = $request-> lastname;
        $emailList ->full_name  = $request-> fullname;
        $emailList ->email_contact_id =$request->emailid;
        $emailList ->add_in_contact_db = $request-> contactdatabase;
       
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



