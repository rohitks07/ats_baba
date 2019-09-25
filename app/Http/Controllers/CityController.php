<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tbl_cities;

class CityController extends Controller
{
    public function index()
    {
    	
    	$cityList=Tbl_cities::all();
    
    	return view('managecity')->with("cityList",$cityList);

    }
    public function add_cities( Request $Request)
    {
    	$city=new Tbl_cities();
    	$city->show=1;
    	$city->city_slug="";

    	$city->city_name=$Request->cityname;
    	$city->state=$Request->state;
    	$city->sort_order=233;
    	$city->country_ID=23;
    	$city->is_popular=1;
    	$city->save();
    	return  redirect('admin/cities');


    }
    public function edit_cities( Request $Request)
    {
        $cityid=$Request->cityid;
        $cityList= Tbl_cities::where('ID',$cityid)->first();
        $city_name=$Request->cityname;
        $state=$Request->state;
        //$cityList->save();

        Tbl_cities::where('ID', $cityid)->update(array(
            'city_name'=>$city_name,
            'state' =>  $state
        
        ));


            return redirect('admin/cities');

        // return $cityList;
        
    }
    public function delete($id ="")
    {

        $cityList= Tbl_cities::where('ID',$id)->delete();
     
            return redirect('admin/cities');
       
   
    }

}
