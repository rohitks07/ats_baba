<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tbl_cities;
use App\cities;
use App\states;


class CityController extends Controller
{
    public function index()
    {
    	
        $cityList=cities::leftjoin('states','states.state_id','=','cities.state_id')
                            ->select('cities.city_name as city_name','states.state_name as state_name','cities.city_id as city_id','states.state_id as state_id')
                            ->paginate(15);
        // $cityList['city_state']->get();                    
                            
    
        // return $cityList;
        // exit();
    	return view('managecity')->with('cityList',$cityList);

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
        $cityid=$Request->city_id;
        $stateid=$Request->state_id;

        $city_name=$Request->cityname;
        $state=$Request->state;
       

        cities::where('city_id', $cityid)->update(array(
            'city_name'=>$city_name,        
        ));

        states::where('state_id', $stateid)->update(array(
            'state_name'=>$state,
        ));


        $cityList=cities::leftjoin('states','states.state_id','=','cities.state_id')
        ->select('cities.city_name as city_name','states.state_name as state_name','cities.city_id as city_id','states.state_id as state_id')
        ->paginate(15);

        return redirect('admin/cities')->with('cityList',$cityList);

        
    }
    public function delete($id ="")
    {

        $cityList= cities::where('city_id',$id)->delete();

        $cityList=cities::leftjoin('states','states.state_id','=','cities.state_id')
        ->select('cities.city_name as city_name','states.state_name as state_name','cities.city_id as city_id','states.state_id as state_id')
        ->paginate(15);


           return redirect('admin/cities')->with('cityList',$cityList);

       
   
    }

}
