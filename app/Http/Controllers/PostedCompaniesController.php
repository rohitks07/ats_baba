<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tbl_post_company;
use App\Tbl_employers;
use App\Tbl_companies;
use App\Tbl_industry;
use App\Tbl_organization_type;
use App\Tbl_state; 
use App\Tbl_cities; 
use App\Tbl_countries;
use Session;
use Validator;

class PostedCompaniesController extends Controller
{
   
   public function index()
   {
   	$post_company=Tbl_post_company::all();
   	return view('my_posted_companies')->with('post_company',$post_company);
   }
     
   public function add_form()
   {
   	$toReturn=array();
   	$toReturn['countries']=Tbl_countries::get()->toArray();
   	$toReturn['cities']=Tbl_cities::get()->toArray();
   	return view('post_new_company')->with('toReturn',$toReturn);
   }
   
   public function add(Request $Request)
   {
	//    return  $Request;
	
		if($Request->hasFile('company_logo')){
			$upload_directory = "public/companylogo/";
			$file = $Request->file('company_logo');
			$company_logo = "clogo-".time().rand(1000,5000).'.'.strtolower($file->getClientOriginalExtension());
			$file->move($upload_directory, $company_logo);   // move the file to desired folder

		}
    
   	$post_company=new Tbl_post_company();
   	$post_company->employer_id=Session::get('id');
   	$post_company->fed_id=$Request->fed_id;
   	$post_company->duns=$Request->duns;
   	$post_company->company_name=$Request->company_name;
   	$post_company->company_short_name=$Request->company_short_name;
   	$post_company->country=$Request->country_name;
   	$post_company->state=$Request->state;
   	$post_company->city=$Request->city_name;
   	$post_company->state_of_org=$Request->organization_state;
   	$post_company->employees=$Request->employer;
   	$post_company->hq_location=$Request->country_name;
   	$post_company->status="active";
   	$post_company->created_by=Session::get('id');
   	$post_company->company_logo=$company_logo;
   	$mydate=date('Y-m-d');
   	$post_company->created_date=$mydate;
   	$post_company->last_updated_date=$mydate;
   	$post_company->last_updated_by=Session::get('id');
   	$post_company->save();
   	return redirect('employer/posted_companies');
}


public function edit($id="")
{
	$toReturn=array();
	$toReturn['posted_companies_id']=$id;
	$toReturn['edit_posted_company']=Tbl_post_company::where('id',$id)->first()->toArray();
	
	$toReturn['countries']=Tbl_countries::get()->toArray();
	$toReturn['cities']=Tbl_cities::get()->toArray();
	// return $toReturn['posted_companies_id'];
	//return view('post_new_company')->with('toReturn',$toReturn);
	return view('edit_posted_company')->with('toReturn',$toReturn);
}

public function update(Request $Request)
{
	$post_company_id=$Request->post_company_id;
	  // scheme logo
	 	if ($Request->hasFile('company_logo')) {
			//delete previous scheme logo
			if (@file_exists("public/companylogo/".Tbl_post_company::find($post_company_id)->company_logo)) {
				@unlink("public/companylogo/".Tbl_post_company::find($post_company_id)->company_logo);
			}

			$file = $Request->file('company_logo');
			$upload_directory = "public/companylogo/";
			$scheme_logo_tmp_name = "clogo-" . time() . rand(1000, 5000) . '.' . strtolower($file->getClientOriginalExtension());
			$file->move($upload_directory, $scheme_logo_tmp_name); //  move file
			$new_name = $scheme_logo_tmp_name; // assign
		} else {
			if ($Request->company_logo_delete) {
				$new_name = "";
			}
			else{
				$new_name = Tbl_post_company::find($post_company_id)->company_logo;
			}
		}
		// to previous scheme_logo if delete clicked
		if ($Request->company_logo_delete) {
			if (file_exists("public/companylogo/".$Request->company_logo_delete)) {
				unlink("public/companylogo/".$Request->company_logo_delete);
			}
		}
	  
	  $mydate=date('Y-m-d');
      $edit_posted_company=Tbl_post_company::where('id',$post_company_id)->update(array(
		'employer_id'=>Session::get('id'),
		'fed_id'=>$Request->fed_id,
		'duns'=>$Request->duns,
		'company_name'=>$Request->company_name,
		'company_short_name'=>$Request->company_short_name,
		'country'=>$Request->country_name,
		'state'=>$Request->state,
		'city'=>$Request->city_name,
		'company_logo'=>$new_name,
		'state_of_org'=>$Request->organization_state,
		'employees'=>$Request->employer,
		'hq_location'=>$Request->country_name,
		'status'=>"active",
		'created_by'=>Session::get('id'),
			
		'created_date'=>$mydate,
		'last_updated_date'=>$mydate,  
		'last_updated_by'=>Session::get('id')
	   ));
	   
   	return redirect('employer/posted_companies');
   }


   public function delete($id="")
   {
   	Tbl_post_company::where('id',$id)->first()->delete();
   	return redirect('employer/posted_companies');
   }
}
