<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\Tbl_companies;
use App\Tbl_employers;
use Validator;


class Post_Job_Controller extends Controller
{
    public function index(){
    	return view('jobpostsignup');
    }
    
    //Inserting Functions
    public function insert(request $data)
    {
        $validation = Validator::make($data->all(), [
            'logo' => 'required'
        ]);
        $companylogo = $data->file('logo');
        $logo = rand() . '.' . $companylogo->getClientOriginalExtension();
        $companylogo->move(public_path('companylogo'), $logo);
        
        // tbl_company insertion
        $tbl_company=new tbl_companies();
        $tbl_company->company_name=$data->companyname;
        $tbl_company->company_email=$data->email_id;
        $tbl_company->industry_ID=$data->Industry;
        $tbl_company->company_description=$data->company_description;
        $tbl_company->company_location=$data->company_location1;
        $tbl_company->company_location_one=$data->company_location2;
        $tbl_company->company_website=$data->company_website;
        $tbl_company->no_of_employees=$data->noofemp;
        $tbl_company->company_phone=$data->company_phone;
        $tbl_company->company_logo=$logo;
        $tbl_company->company_country=$data->country;
        $tbl_company->company_state=$data->state_text;
        $tbl_company->sts='Active';
        $tbl_company->company_city=$data->city;
        $tbl_company->company_slug=$data->email;
        $tbl_company->federal_id=$data->federal_id;
        $tbl_company->duns=$data->duns;
        $tbl_company->loc_time_zone=$data->locationtimezone;
        $tbl_company->dis_time_zone=$data->displaytimezone;
        $tbl_company->company_csz=' ';
       // $tbl_company->save();
      
        $comp_id=$tbl_company->id;
       
        // tbl_employer insertion
        $tbl_employer=new tbl_employers();
        $tbl_employer->company_ID=$comp_id;
        $tbl_employer->email=$data->email_id;
        $tbl_employer->pass_code=$data->password_id;
        $tbl_employer->first_name=$data->firstname;
        $tbl_employer->country=$data->country;
        $tbl_employer->state=$data->state_text;
        $tbl_employer->city=$data->city;
        $tbl_employer->mobile_phone=$data->mobile_phone;
        $date=date('Y-m-d');
        $tbl_employer->dated=$date;
        //$tbl_employer->save();
        
        // user insertion
        $user_tbl=new user();
        $user_tbl->full_name=$data->firstname;
        $user_tbl->email=$data->email_id;
        $user_tbl->password=$data->password_id;
        $user_tbl->user_type="employer";
        $user_tbl->org_ID=$comp_id;
        //$user_tbl->save();
        return redirect('/')->with("success","Comapany Created Success Fully");
    }
}
