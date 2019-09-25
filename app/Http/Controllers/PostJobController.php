<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tbl_employers;
use App\Tbl_companies;  
use App\user;



class PostJobController extends Controller
{
    public function index(){
    	return view('jobpostsignup');
    }


    public function add(Request $Request)
    {
		$Tbl_employers=new Tbl_employers();
		$Tbl_companies=new Tbl_companies();
		$Tbl_employers->first_name=$Request->firstname;
		$Tbl_employers->email=$Request->email;
		$Tbl_employers->pass_code=$Request->password;
		$Tbl_companies->company_name=$Request->company_name;
		$Tbl_companies->Industry_ID=$Request->Industry;
		$Tbl_companies->company_state=$Request->state;
		$Tbl_companies->Federal_id=$Request->faderal_id;
		$Tbl_companies->loc_time_zone=$Request->localtiontimezone;
		$Tbl_companies->dis_time_zone=$Request->displaytimezone;
		$Tbl_companies->company_location=$Request->company_location1;
		$Tbl_companies->company_location_one=$Request->company_location2;
		$Tbl_companies->company_country=$Request->country;
		$Tbl_companies->company_state=$Request->state;
		$Tbl_companies->company_city=$Request->city;
		$Tbl_companies->company_phone=$Request->company_phone1;
		$Tbl_companies->company_website=$Request->company_website;
		$Tbl_companies->no_of_employees=$Request->noofemp;
		$Tbl_companies->company_slug=$Request->company_description;
		$Tbl_companies->save();
		$Tbl_employers->save();

		return view('jobpostsignup')->with("success","Comapany Created Success Fully");

	
    }
}
