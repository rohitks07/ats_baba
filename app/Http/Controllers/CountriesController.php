<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tbl_countries;
use App\countries;

class CountriesController extends Controller
{
    public function index()
    {
        $countries= countries::paginate(15);	
        

    	return view('countries')->with("countries",$countries);
    }
    
    
    public function add_countries(Request $Request)
    {
        	$countries=new countries();
        	$countries->country_name=$Request->country_name;
            $countries->save();
            
    	return  redirect('admin/countries');
    }

    public function edit_countries(Request $Request)
    {
        $country_name=$Request->country_name;
        $country_id=$Request->country_id;
        // return $country_name;
        // $country_citizen=$Request->country_citizen;
        countries::where('country_id', $country_id)->update(array(
            'country_name'=>$country_name,        
        ));
        $countries= countries::paginate(15);

        return  redirect('admin/countries')->with("countries",$countries);
    }


    public function delete_countries($id="")
    {
            $Tbl_countries= Tbl_countries::where('ID',$id)->delete();
        return  redirect('admin/countries');
    }


}
