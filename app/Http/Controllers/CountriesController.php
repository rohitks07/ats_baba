<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tbl_countries;

class CountriesController extends Controller
{
    public function index()
    {
    	$countries= Tbl_countries::all();	

    	return view('countries')->with("countries",$countries);
    }
    
    
    public function add_countries(Request $Request)
    {
        	$countries=new Tbl_countries();
        	$countries->country_name=$Request->country_name;
        	$countries->country_citizen=$Request->country_citizen;
        	$countries->save();
    	return  redirect('admin/countries');
    }

    public function edit_countries(Request $Request)
    {
        $country_id=$Request->countries_id;
        $country_name=$Request->country_name;
        $country_citizen=$Request->country_citizen;
        Tbl_countries::where('ID', $country_id)->update(array(
            'country_name'=>$country_name,
            'country_citizen' =>  $country_citizen
        
        ));
        return  redirect('admin/countries');
    }


    public function delete_countries($id="")
    {
            $Tbl_countries= Tbl_countries::where('ID',$id)->delete();
        return  redirect('admin/countries');
    }


}
