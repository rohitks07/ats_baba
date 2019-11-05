<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tbl_cities;
use App\cities;
use App\states;
use App\countries;

class CityController extends Controller
{
    public function __construct()
		{
			$this->middleware('check');

		}
    public function index()
    {
    	
        $cityList=cities::leftjoin('states','states.state_id','=','cities.state_id')
                            ->select('cities.city_name as city_name','states.state_name as state_name','cities.city_id as city_id','states.state_id as state_id')
                            ->paginate(15);
        // $cityList['city_state']->get();                    
                            
    
        // return $cityList;
        // exit();
        $all_country=countries::get();
        $all_state=states::get();
        return view('managecity')->with('cityList',$cityList)
                ->with('all_country',$all_country)
                ->with('all_state',$all_state);

    }
    public function add_cities( Request $Request)
    {
    	
        
        $Country=$Request->country;
        $exploded_value = explode('|', $Country);
        $value_one = $exploded_value[0];
        $value_two = $exploded_value[1];
        
        $add_to_state =  new states();
        $add_to_state->state_name = $Request->state;
        $add_to_state->country_id = $value_two;
        $add_to_state-> save();


        // return $add_to_state;
        // exit();



    	return  redirect('admin/cities');
    }

    public function add_state(Request $Request)
    {
    	
        
        $State=$Request->state;
        $exploded_value = explode('|', $State);
        $value_one = $exploded_value[0];
        $value_two = $exploded_value[1];
        
        $add_to_city =  new cities();
        $add_to_city->city_name = $Request->city;
        $add_to_city->state_id = $value_two;
        $add_to_city-> save();


        // return $add_to_city;
        // exit();



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

        $all_country=countries::get();
        $all_state=states::get();

        $cityList=cities::leftjoin('states','states.state_id','=','cities.state_id')
        ->select('cities.city_name as city_name','states.state_name as state_name','cities.city_id as city_id','states.state_id as state_id')
        ->paginate(15);

        return redirect('admin/cities')->with('cityList',$cityList)
                                    ->with('all_country',$all_country)
                                    ->with('all_state',$all_state);

        
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
