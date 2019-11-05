<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tbl_ad_codes;

class Ads_Management extends Controller
{
    public function __construct()
		{
			$this->middleware('check');

		}
    public function index(){
    	// return view('ads')->with('');
    	return view('error_pages.adds_page_404');
    }
    public function update_ads(Request $Request){
        
        $Ads_management = new tbl_ad_codes();
    	$Ads_management->right_side_1=$Request->rightsidead1;  	
    	$Ads_management->right_side_2=$Request->rightsidead2;
    	$Ads_management->bottom      =$Request->bottom_ads;
        $Ads_management->google_analytics=$Request->google_analytics; 
        $Ads_management->save();

        // tbl_ad_codes::where('ID',)->update(array(
        //     'right_side_1' =>$Rightside_Ad_1,
        //     'right_side_2'=>$Rightside_Ad_1,
        //     'bottom'=>$Bottom,
        //     'google_analytics'=>$Google_Analytics     
        // )); 
        return redirect('admin/ads');
    }
}
