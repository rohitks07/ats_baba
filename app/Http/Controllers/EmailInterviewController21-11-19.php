<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Tbl_job_seekers;
use App\tbl_post_jobs;
use App\tbl_interview_mail;
use App\Tbl_time_zone;
use App\Tbl_companies;
use App\tbl_schedule_interview;
use App\Tbl_schedule_preview;
use App\user;
use App\Http\Controllers\Controller;
use Session;

class EmailInterviewController extends Controller
{

   public function show_interview_email(){

        $toReturn['jobpost']=tbl_post_jobs::select('job_code','ID')->get()->toArray();
        $toReturn['time_zone'] = Tbl_time_zone::get();
        $data[]=array();
        $data['name']=Tbl_job_seekers::get()->toArray();
         $val = 0;
      return view('interview_email_send_fill_data',compact('toReturn','data','val'));
   }
   public function interview_job_details(Request $REQUEST){
      $id = $REQUEST->job_code;
      $jobpost=tbl_post_jobs::where('ID',$id)->first();
      
      return response($jobpost);
   }

   public function interview_candidate_email(Request $REQUEST){
      $id = $REQUEST->candidate_id;
      $job_seeker_email = Tbl_job_seekers::where('ID',$id)->first();
      return response($job_seeker_email);
   }

   public function interview_schedule_email(Request $REQUEST){

      

     $email_to        = $REQUEST->email_to;
     $email_cc        = $REQUEST->email_cc;
     $interviewdate   = $REQUEST->interviewdate;
     $start_time      = $REQUEST->start_time;
     $end_time        = $REQUEST->end_time;
     $type_int        = $REQUEST->type_int;
     $time_zone       = $REQUEST->time_zone;
     $jobcode         = $REQUEST->jobcode;
     $instruction     = $REQUEST->instruction;
     $candidatename   = $REQUEST->candidatename;
     $venue           = $REQUEST->venue;
     $end_date        = $REQUEST->end_date;
     $instruction_tr  = $REQUEST->instruction;
     $instruction     = ltrim($instruction_tr," ");

     $new_files_upload = "";
     if ($REQUEST->has('files_upload')){
      $files_upload = $REQUEST->file('files_upload');
      $new_files_upload =$files_upload->getClientOriginalName();
      $files_upload->move(public_path('seekerresume'), $new_files_upload);
  
      }
      else{
          $store_cv=$REQUEST->cv_file_before;
      }
     

    // name
    $candidatename_explode = explode('|',$candidatename);
    $candidatename_name    =  $candidatename_explode[0];
    $candidatename_id      =  $candidatename_explode[1];

    //company_name        
    $jobcode_explode = explode('|',$jobcode);
    $jobcode_code    =  $jobcode_explode[0];
    $jobcode_id      =  $jobcode_explode[1]; 

    //for job info
    $job_data = tbl_post_jobs::where('ID',$jobcode_id)->first();

    //for candedate
    $candidatename_detail = Tbl_job_seekers::where('ID',$candidatename_id)->first();

      //   $files_upload_val = implode($files_upload, ',');

        $uni_no = rand();
        $add_mail                    = new tbl_interview_mail();
        $add_mail->job_id            =$jobcode_id;
        $add_mail->candidatename_id  =$candidatename_id;
        $add_mail->start_date        =$interviewdate;
        $add_mail->end_date          =$end_date;
        $add_mail->start_time        =$start_time;
        $add_mail->start_time        =$start_time;
        $add_mail->end_time          =$end_time;
        $add_mail->interview_type    =$type_int;
        $add_mail->time_zone         =$time_zone;
        $add_mail->venue             =$venue;
        $add_mail->email_to          =$email_to;
        $add_mail->email_cc          =$email_cc;
        $add_mail->sent_by           =Session::get('user_id');
        $add_mail->org_id            =Session::get('org_ID'); 
        $add_mail->date              =date("Y-m-d"); 
        $user = user::where('user_id', Session::get('user_id'))->first();
        $emai_sent_by = $user->email;
        if(($instruction !=="")&&($instruction !==" ")){
           $add_mail->instruction    =$instruction;
         }
       else
         {
            $toReturn['jobpost']=tbl_post_jobs::select('job_code','ID')->get()->toArray();
            $toReturn['time_zone'] = Tbl_time_zone::get();
            $data[]=array();
            $data['name']=Tbl_job_seekers::get()->toArray();
            $val = 1;
            return view('interview_email_send_fill_data',compact('toReturn','data','val'));
         }
        if(($new_files_upload !=="")&&($new_files_upload !==null)){
             $add_mail->files            = $new_files_upload;
        }
             $add_mail->uni_no           = $uni_no;
             $add_mail->save();
    
        
        $data=array('email_to'=>$email_to,'email_cc'=>$email_cc,'interviewdate'=>$interviewdate,'start_time'=>$start_time,
                    'end_time'=>$end_time,'type_int'=>$type_int,'time_zone'=>$time_zone,'jobcode_code'=>$jobcode_code,'instruction'=>$instruction,
                    'candidatename_name'=>$candidatename_name,'jobcode_id'=>$jobcode_id,'job_data'=>$job_data,'candidatename_detail'=>$candidatename_detail,'venue'=>$venue,'end_date'=>$end_date,'uni_no'=>$uni_no,'emai_sent_by'=>$emai_sent_by);

        // return view('emails.interview_mail')->with('data',$data);
        // exit();
        Mail::send('emails.interview_mail',['data' => $data], function($message) use ($data){
            $message->to($data['email_to'])
                    ->bcc($data['email_cc'])
                    ->subject('Review Interview');
            $message->from($data['emai_sent_by'],'ATS BABA');
        });

        // return view('emails.interview_mail')->with('data',$data);
        // exit();
        return redirect('employer/dashboard/interview-meeting');
        
   }


   public function interview_confirm($id=""){

      $encripted_id = tbl_interview_mail::where('uni_no',$id)->first();
      if($id == @$encripted_id->uni_no){
         $val = 1;
         return view('add_on.interview_conformdata')->with('val',$val)->with('id',$id);
      }
      else{
         $val = 0;
         return view('add_on.interview_conformdata')->with('val',$val);
      }
     
      
   }

   public function review(Request $REQUEST){
      $id = $REQUEST->value;
      $data['mail'] =  tbl_interview_mail::where('uni_no',$id)->first();
      $data['job'] =  tbl_post_jobs::where('ID',$data['mail']->job_id)->first();
      $data['candidate'] =  Tbl_job_seekers::where('ID',$data['mail']->candidatename_id)->first();
      $data['org_id'] =  Tbl_companies::where('ID',$data['mail']->org_id)->first();
      

      return response($data);
   }

   public function review_onload(Request $REQUEST){

      $u_id = $REQUEST->id_val;
      $value['mail'] =  tbl_interview_mail::where('uni_no',$u_id)->first();
      $value['org_id'] =  Tbl_companies::where('ID',$value['mail']->org_id)->first();
      $job =  tbl_post_jobs::where('ID',$value['mail']->job_id)->first();
      $candidate =  Tbl_job_seekers::where('ID',$value['mail']->candidatename_id)->first();


      $add_interview                   = new tbl_schedule_interview();
      $add_interview->employer_ID      =$value['mail']->sent_by;
      $add_interview->job_ID           =$job->job_code;
      $add_interview->seeker_ID        =$value['mail']->candidatename_id;
      $add_interview->interview_date   =$value['mail']->start_date;
      $add_interview->interview_type   =$value['mail']->interview_type;
      $add_interview->from_time        =$value['mail']->start_time;
      $add_interview->end_time         =$value['mail']->end_date;
      $add_interview->invitees_to      =$candidate->first_name.' '.$candidate->middle_name.' '.$candidate->last_name;
      $add_interview->invitees_cc      =$candidate->first_name.' '.$candidate->middle_name.' '.$candidate->last_name;
      $add_interview->candiate_name    =$candidate->first_name.' '.$candidate->middle_name.' '.$candidate->last_name;
      $add_interview->time_zone        =$value['mail']->time_zone;
      $add_interview->instructions     =$value['mail']->instruction;
      $add_interview->dated            =$value['mail']->date;
      $add_interview->status           ='active';
      $add_interview->save();

      
      $add_schedule_preview                        = new Tbl_schedule_preview();
      $add_schedule_preview->job_id                = $value['mail']->job_id; 
      $add_schedule_preview->seeker_id             = $value['mail']->candidatename_id;
      $add_schedule_preview->dated                 = $value['mail']->date;
      $add_schedule_preview->org_id                = $value['mail']->org_id;
      $add_schedule_preview->sent_by               = $value['mail']->sent_by;
      $add_schedule_preview->last_updated_date     = "";
      $add_schedule_preview->email_to              = $value['mail']->email_to;
      $add_schedule_preview->email_cc              = $value['mail']->email_cc;
      $add_schedule_preview->tbl_interview_mail_id = $value['mail']->id;
      $add_schedule_preview->interview_table_id    = $add_interview->id;
      $add_schedule_preview->sts                   = "accepted";
      $add_schedule_preview->save();

      return response($value);
   }

   public function reject_request($id=''){

      $encripted_id = tbl_interview_mail::where('uni_no',$id)->first();
      
      if($id == @$encripted_id->uni_no){
         $mail    =  Tbl_companies::where('ID',$encripted_id->org_id)->first();
         $val = 1;
         return view('add_on.interview_reject')->with('val',$val)->with('id',$id)->with('mail',$mail);
      }
      else{
         $val = 0;
         return view('add_on.interview_reject')->with('val',$val);
      }
   }

   public function review_reject(Request $REQUEST){
      $id_val   = $REQUEST->id_val;
      $val_text = $REQUEST->val_text;
      $text_box     = ltrim($val_text," ");
      if(($text_box !== "")&&($text_box !== " ")){

               $value['mail'] =  tbl_interview_mail::where('uni_no',$id_val)->first();
               $user = user::where('user_id', $value['mail']->sent_by)->first();
               $emai_sent_by = $user->email;

               $add_schedule_preview                        = new Tbl_schedule_preview();
               $add_schedule_preview->job_id                = $value['mail']->job_id; 
               $add_schedule_preview->seeker_id             = $value['mail']->candidatename_id;
               $add_schedule_preview->dated                 = $value['mail']->date;
               $add_schedule_preview->org_id                = $value['mail']->org_id;
               $add_schedule_preview->sent_by               = $value['mail']->sent_by;
               $add_schedule_preview->last_updated_date     = "";
               $add_schedule_preview->email_to              = $value['mail']->email_to;
               $add_schedule_preview->email_cc              = $value['mail']->email_cc;
               $add_schedule_preview->tbl_interview_mail_id = $value['mail']->id;
               $add_schedule_preview->reason                = $val_text;
               $add_schedule_preview->sts                   = "rejected";
               $add_schedule_preview->save();



               $user_email = user::where('user_id',$value['mail']->sent_by)->first();
               $email_to = $user_email->email;

               $job =  tbl_post_jobs::where('ID',$value['mail']->job_id)->first();
               $candidate =  Tbl_job_seekers::where('ID',$value['mail']->candidatename_id)->first();
               $job_title       = $job->job_title;
               $job_code        = $job->job_code;
               $candidate_name  = $candidate->first_name .' '.$candidate->middle_name.' '.$candidate->last_name;

               $data=array('email_to'=>$email_to,'job_title'=>$job_title,'job_code'=>$job_code,'candidate_name'=>$candidate_name,'val_text'=>$val_text,'emai_sent_by'=>$emai_sent_by);
               // return view('emails.rejected_email')->with('data',$data);
               // exit();
               // Mail::send('emails.rejected_email',['data' => $data], function($message) use ($data){
               //    $message->to('abhinavroy.itscient@gmail.com')
               //            ->subject('Rejected Interview');
               //    $message->from($data['email_to'],'ATS BABA');
               // });
               Mail::send('emails.rejected_email',['data' => $data], function($message) use ($data){
                  $message->to($data['email_to'])
                          ->subject('Interview has been Rejected');
                  $message->from($data['emai_sent_by'],'ATS BABA');
               });


               $data = "1";
               return response($data);
            }

      else
         {
            $data = "0";
            return response($data);

         }      

   }

   public function re_shidule($id = ""){

      $mail_data['value'] = Tbl_interview_mail::where('uni_no',$id)->first();
      $mail_data['org_id'] =  Tbl_companies::where('ID',$mail_data['value']->org_id)->first();
      if($id == @$mail_data['value']->uni_no){
         $val = 1;

         return view('add_on.interview_reshidule')->with('val',$val)->with('id',$id)->with('mail_data',$mail_data);
      }
      else{
         $val = 0;
         return view('add_on.interview_reshidule')->with('val',$val)->with('mail_data',$mail_data);
      }
   }

   public function reshidule_new(Request $REQUEST){
      
      $start_date = $REQUEST->start_date;
      $end_date   = $REQUEST->end_date;
      $start_time = $REQUEST->start_time;
      $end_time   = $REQUEST->end_time;
      $id_val     = $REQUEST->id_val;

      $value['mail'] = Tbl_interview_mail::where('uni_no',$id_val)->first();
      $value['org_id'] =  Tbl_companies::where('ID',$value['mail']->org_id)->first();
      $job =  tbl_post_jobs::where('ID',$value['mail']->job_id)->first();
      $candidate =  Tbl_job_seekers::where('ID',$value['mail']->candidatename_id)->first();
      $user = user::where('user_id', $value['mail']->sent_by)->first();
      $emai_sent_by = $user->email;
      $company_city = $value['org_id']->company_city;
      $company_state = $value['org_id']->company_state;
      $company_country = $value['org_id']->company_country;
      $company_location_one = $value['org_id']->company_location_one;
      
      $table_id = $value['mail']->tbl_interview_mail_id;
      tbl_schedule_interview::where('schedule_id',@$table_id)->delete();
      
    //   return $emai_sent_by;
    //   exit;
               $add_schedule_preview                        = new Tbl_schedule_preview();
               $add_schedule_preview->job_id                = $value['mail']->job_id; 
               $add_schedule_preview->seeker_id             = $value['mail']->candidatename_id;
               $add_schedule_preview->dated                 = $value['mail']->date;
               $add_schedule_preview->org_id                = $value['mail']->org_id;
               $add_schedule_preview->sent_by               = $value['mail']->sent_by;
               $add_schedule_preview->last_updated_date     = "";
               $add_schedule_preview->email_to              = $value['mail']->email_to;
               $add_schedule_preview->email_cc              = $value['mail']->email_cc;
               $add_schedule_preview->tbl_interview_mail_id = $value['mail']->id;
               $add_schedule_preview->sts                   = "rescheduled";
               $add_schedule_preview->save();


               $add_interview                   = new tbl_schedule_interview();
               $add_interview->employer_ID      =$value['mail']->sent_by;
               $add_interview->job_ID           =$job->job_code;
               $add_interview->seeker_ID        =$value['mail']->candidatename_id;
               $add_interview->interview_date   =$value['mail']->start_date;
               $add_interview->interview_type   =$value['mail']->interview_type;
               
               $add_interview->from_time        =$REQUEST->start_time;
               $add_interview->end_time         =$REQUEST->end_date;
               
               $add_interview->invitees_to      =$candidate->first_name.' '.$candidate->middle_name.' '.$candidate->last_name;
               $add_interview->invitees_cc      =$candidate->first_name.' '.$candidate->middle_name.' '.$candidate->last_name;
               $add_interview->candiate_name    =$candidate->first_name.' '.$candidate->middle_name.' '.$candidate->last_name;
               $add_interview->time_zone        =$value['mail']->time_zone;
               $add_interview->instructions     =$value['mail']->instruction;
               $add_interview->dated            =$value['mail']->date;
               $add_interview->status           ='active';
               $add_interview->save();

               $email_to = $value['mail']->email_to;
               $job_title= $job->job_title;
               $job_code = $job->job_code;
               $candidate_name = $candidate->first_name.' '.$candidate->middle_name.' '.$candidate->last_name;
               $start_date = $REQUEST->start_date;
               $end_date   = $REQUEST->end_date;
               $start_time = $REQUEST->start_time;
               $end_time   = $REQUEST->end_time;
               $id_val     = $REQUEST->id_val;
               
               $msg = "Your interview has been rescheduled";
               $data=array('email_to'=>$email_to,'job_title'=>$job_title,'job_code'=>$job_code,'candidate_name'=>$candidate_name,'start_date'=>$start_date,'end_date'=>$end_date,'start_time'=>$start_time,'end_time'=>$end_time,'emai_sent_by'=>$emai_sent_by,'company_city'=>$company_city,'company_state'=>$company_state,'company_country'=>$company_country,'company_location_one'=>$company_location_one,'msg'=>$msg);

               // return view('emails.reshidule_email')->with('data',$data);
                  // Mail::send('emails.reshidule_email',['data' => $data], function($message) use ($data){
                  //    $message->to('abhinavroy.itscient@gmail.com')
                  //            ->subject('Rescheduled interview');
                  //    $message->from($data['email_to'],'ATS BABA');
                  // });
               // exit();
               Mail::send('emails.reshidule_email',['data' => $data], function($message) use ($data){
                  $message->to($data['emai_sent_by'])
                          ->subject('Rescheduled interview');
                  $message->from($data['email_to'],'ATS BABA');
               });
                $msg = "interview has been rescheduled";             
                $data=array('email_to'=>$email_to,'job_title'=>$job_title,'job_code'=>$job_code,'candidate_name'=>$candidate_name,'start_date'=>$start_date,'end_date'=>$end_date,'start_time'=>$start_time,'end_time'=>$end_time,'emai_sent_by'=>$emai_sent_by,'company_city'=>$company_city,'company_state'=>$company_state,'company_country'=>$company_country,'company_location_one'=>$company_location_one,'msg'=>$msg);

                Mail::send('emails.reshidule_email',['data' => $data], function($message) use ($data){
                  $message->to($data['email_to'])
                          ->subject('Rescheduled interview');
                  $message->from($data['emai_sent_by'],'ATS BABA');
               });

               return redirect('/');
   }
   
   
   
   
   public function create_email_template()
   {

      $toReturn['jobpost'] = tbl_post_jobs::select('job_code', 'ID')->get()->toArray();
      $toReturn['seeker'] = Tbl_job_seekers::get()->toArray();
      $val = 1;
      return view('create_email_template', compact('toReturn', 'val'));
   }

   public function job_val(Request $REQUEST)
   {
      $job_val     = $REQUEST->job_val;
      $job_explode = explode('|', $job_val);
      $job_id    =  $job_explode[1];
      $data  = tbl_post_jobs::where('ID', $job_id)->first();
      return response($data);
   }

   public function candidate_val(Request $REQUEST)
   {
      $candidate_val = $REQUEST->candidate_val;
      $candidate_val_explode = explode('|', $candidate_val);
      $candidate_id  = $candidate_val_explode[1];
      $data = Tbl_job_seekers::where('ID', $candidate_id)->first();
      return response($data);
   }

   public function send_email_last_detail(Request $REQUEST)
   {


      $heading_input       = $REQUEST->heading_input;
      $body_head_input     = $REQUEST->body_head_input;
      $job_code            = $REQUEST->job_code;
      $job_title           = $REQUEST->job_title;
      $location            = $REQUEST->location;
      $job_detail          = $REQUEST->job_detail;
      $job_visa            = $REQUEST->job_visa;
      $job_client_name     = $REQUEST->job_client_name;
      $job_pay_rate        = $REQUEST->job_pay_rate;
      $candidate_name      = $REQUEST->candidate_name;
      $candidate_visa      = $REQUEST->candidate_visa;
      $candidate_location  = $REQUEST->candidate_location;
      $candidate_skill     = $REQUEST->candidate_skill;
      $email_to            = $REQUEST->email_to;
      $email_bcc           = $REQUEST->email_bcc;
      $subject_email       = $REQUEST->subject_email;

      $job_explode = explode('|', $job_code);
      $candidate_name_explode = explode('|', $candidate_name);
      $candidate_name_val = $candidate_name_explode[0];
      $heading_input_val   = ltrim($heading_input, " ");

      if (($heading_input_val == "") || ($heading_input_val == null)) {
         $val = 0;
         $toReturn['jobpost'] = tbl_post_jobs::select('job_code', 'ID')->get()->toArray();
         $toReturn['seeker'] = Tbl_job_seekers::get()->toArray();
         return view('create_email_template', compact('toReturn', 'data', 'val'));
      }
      $user_id = Session::get('user_id');
      $user_email = user::where('user_id', $user_id)->first();

      $add_to_email = new tbl_last_email();
      $add_to_email->email_to          = $email_to;
      $add_to_email->email_by          = $user_email->email;
      $add_to_email->job_id            = $job_explode[1];
      $add_to_email->candidate_id      = $candidate_name_explode[1];
      $add_to_email->sent_by           = $user_id;
      $add_to_email->dated             = date('Y-m-d');
      $add_to_email->org_id            = Session::get('org_ID');
      $add_to_email->email_bcc         = $email_bcc;
      $add_to_email->heading_input     = $heading_input_val;
      $add_to_email->body_head_input   = $body_head_input;
      $add_to_email->subject_email     = $subject_email;
      $add_to_email->save();

      
      
      $email_by  = $user_email->email;
      $user_name = $user_email->full_name;
      
      $company_details  = Tbl_companies::where('ID',Session::get('org_ID'))->first();
      $user_team_detail = Tbl_team_member::where('ID',Session::get('user_id'))->first();

      $footer = " || ".$company_details->company_name." || Tel: ".$user_team_detail->mobile_number." || Email: ".$email_by." || Web: ".$company_details->company_website." || ";

      $body_head_input_val = ltrim($body_head_input, " ");
      $temp = 'abhinavroy.itscient@gmail.com';
      if (($body_head_input_val !== null) || ($body_head_input_val !== "")) {
         $data = array(
            'email_to' => $email_to, 'job_title' => $job_title, 'job_code' => $job_code, 'candidate_name_val' => $candidate_name_val,
            'email_by' => $email_by, 'heading_input_val' => $heading_input_val, 'body_head_input_val' => $body_head_input_val, 'location' => $location,
            'job_detail' => $job_detail, 'job_visa' => $job_visa, 'job_client_name' => $job_client_name, 'job_pay_rate' => $job_pay_rate, 'candidate_location' => $candidate_location,
            'candidate_skill' => $candidate_skill, 'email_bcc' => $email_bcc,'subject_email'=>$subject_email,'candidate_visa'=>$candidate_visa,'user_name'=>$user_name,'footer'=>$footer,
            'temp'=>$temp
         );
      } else {
         $data = array(
            'email_to' => $email_to, 'job_title' => $job_title, 'job_code' => $job_code, 'candidate_name_val' => $candidate_name_val,
            'email_by' => $email_by, 'heading_input_val' => $heading_input_val, 'location' => $location, 'job_detail' => $job_detail,
            'job_visa' => $job_visa, 'job_client_name' => $job_client_name, 'job_pay_rate' => $job_pay_rate, 'candidate_location' => $candidate_location,
            'candidate_skill' => $candidate_skill, 'email_bcc' => $email_bcc,'subject_email'=>$subject_email,'candidate_visa'=>$candidate_visa,'user_name'=>$user_name,'footer'=>$footer, 
            'temp'=>$temp 
         );
      }


      Mail::send('add_on.final_email', ['data' => $data], function ($message) use ($data) {
         $message->to($data['email_to'])
                 ->subject($data['subject_email']);

         if ($data['email_bcc']) {
            $email_bcc_val = explode(',', $data['email_bcc']);
            foreach ($email_bcc_val as $key => $value) {
               $message->bcc($email_bcc_val[$key]);
            }
         }
         $message->from($data['email_by'],$data['candidate_name_val']);
      });
      
      Mail::send('add_on.final_email', ['data' => $data], function ($message) use ($data) {
         $message->to($data['email_by'])
         // $message->to($data['temp'])
                 ->subject($data['subject_email']);

         if ($data['email_bcc']) {
            $email_bcc_val = explode(',', $data['email_bcc']);
            foreach ($email_bcc_val as $key => $value) {
               $message->bcc($email_bcc_val[$key]);
            }
         }
         $message->from($data['email_by'],$data['candidate_name_val']);
      });
      // return view('add_on.final_email')->with('data',$data);
      
      return redirect('employer/dashboard/interview-meeting');

   }
}
