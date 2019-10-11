<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tbl_state;
use App\Tbl_cities;
use App\Tbl_countries;
use App\cities;
use App\countries;
use App\states;

class LocationController extends Controller
{
   public function fetchstate($id="")
   {
       $state_list=Tbl_state::where('country_id',$id)->get();
       return json_encode($state_list);
   }
   public function fetchcity($id="",$counid="")
   {
       $state_id=$id;
       $country_id=$counid;
       echo $state_list;
       exit;
       $city_list=Tbl_cities::where('country_id',$country_id)->where('state_id',$state_id)->get();
       return json_encode($city_list);
   }
   
   
   
  //DINAMIC LOCATION
  public function get_state($country_id=""){
    $data_state = states::where('country_id', $country_id)->get();
    return response()->json($data_state);
  }



  
  public function get_city($state_id=""){
    $data_city = cities::where('state_id', $state_id)->get();
    return response()->json($data_city);
  }
}
