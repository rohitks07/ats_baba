<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tbl_marketing_emailer;
use App\Tbl_email_template;
use App\Tbl_post_contacts;
use App\Tbl_email_list_contacts;
use App\Tbl_email_list;
use App\Tbl_team_member_type;
use App\Tbl_salutation;
use App\Tbl_countries;
use Session;
use Mail;



class MarketingController extends Controller
{
	
	public function index()
	{
            $toReturn['team_member_type']=tbl_team_member_type::all();
            $toReturn['salutation']=Tbl_salutation::all();
            $toReturn['countries']=Tbl_countries::all();
            $toReturn['contacts'] =Tbl_post_contacts::all();   
            $toReturn['emailList']=Tbl_email_list::all();
        $toReturn['email']=tbl_marketing_emailer::all();
        $toReturn['email_Template']=Tbl_email_template::get();
			return view('team_member_marketing')->with('toReturn',$toReturn);
	}
	public function send_mail(Request $request)
	{
		$email_marketing = new tbl_marketing_emailer();
        $email_marketing->emailer_to=$request->email_to;
        $email_marketing->emailer_cc=$request->cc;
        $email_cc=explode(",",$request->cc);
        $email_marketing->emailer_subject=$request->subject;
        $email_marketing->emailer_content=$request->email_content;
        $email_marketing->employer_id=7;
        $email_marketing->emailer_section='email_list';
        $email_marketing->save();

        $user = array('email'=>$request->email_to, 'cc'=>$email_cc, 'subject'=>$request->subject, 'mail_content'=>$request->email_content);    
        Mail::send('emails.mail_marketing',['data' => $user], function($message) use ($user) {
            $message->to($user['email'])
                    ->cc($user['cc'])
                    ->subject($user['subject']);                  
            $message->from('rohit18212@gmail.com','ATS BABA');
        });
       
		return redirect('employer/marketing');
	}
	public function schedule_email()
	{
		return view('schedule_email_contacts_list');
    }
    public function add_template(Request $request)
    {
        $email_template=new Tbl_email_template();
        $email_template->et_sender_name=$request->templatesname;
        $email_template->et_content=$request->email_content;
        $email_template->et_sender_email=Session::get('email');
        $email_template->et_cc_emails=Session::get('email');
        $email_template->et_title=$request->templatesname;
        $email_template->et_subject=$request->templatesname;
        $todayDate=Date('Y-m-d');
        $email_template->created_date=$todayDate;
        $email_template->last_updated_date=$todayDate;
        $email_template->et_status="Active";
        $email_template->save();
        return redirect('employer/marketing');
    }
    public function edit_template($id="")
    {
        $edit_template=Tbl_email_template::where('et_id',$id)->first();
        echo json_encode($edit_template);
    }
    public function update_template(Request $request)
    {
        $id=$request->id;
        $edit_template=Tbl_email_template::where('et_id',$id)->update(array(
            'et_subject'=>'$request->templatesname',
            'et_content'=>'$request->email_content'
        ));
        return redirect('employer/marketing');
    }
    public function addcontact(Request $request)
    {
        // return $request;
        $contact_object = new Tbl_post_contacts;
        $contact_object ->sub_name      = $request ->salutation;
        $contact_object ->cont_per_name = $request ->name;
        $contact_object ->phone_c       = $request ->phone_c;
        $contact_object ->phone_w       = $request ->phone_w;
        $contact_object ->email_h       = $request ->email_h;
        $contact_object ->email_w       = $request ->email_w;
        $contact_object ->country       = $request ->country;
        $contact_object ->state         = $request->state;
        $contact_object ->city          = $request->city;
        $contact_object ->company_name  = $request->company_name;
        $contact_object ->designation   = $request->designation;
        $contact_object->status="active";
        $mydate=date('Y-m-d');
        $contact_object->created_date=$mydate;
        $contact_object->created_by="rohit";
        $contact_object->last_updated_by="";
        $contact_object->last_updated_date=$mydate;
        $contact_object->employer_id=12;
        $contact_object -> save();
        return redirect('employer/marketing');
    }
    public function deletetemplate($id="")
    {
        Tbl_email_template::where('et_id',$id)->delete();
        return redirect('employer/marketing');
    }
    public function deleteemaillist($id="")
    {
           $email_delete_list=Tbl_email_list::where('id',$id)->delete();
        return redirect('employer/marketing');
    }
    public function deleteContact($id="")
    {
        $contact_delete = Tbl_post_contacts::where('id',$id)->delete();
        return redirect('employer/marketing');
    }
    public function listtemplate()
    {
         $email_Template=Tbl_email_template::get();
         // $email_content=htmlspecialchars_decode($email_Template);
        return json_encode($email_Template);
    }
}
