<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tbl_state;
use App\Tbl_cities;
use App\Tbl_countries;

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
}
