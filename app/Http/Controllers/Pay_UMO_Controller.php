<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pay_UMO;

class Pay_UMO_Controller extends Controller
{
  public function index()
    { 
    	$Pay_UMO=Pay_UMO::all();
      return view('pay_umo')->with('Pay_UMO',$Pay_UMO);
    }

  public function add_pay_umo(Request $Request){   
      
    $Pay_UMO=new Pay_UMO();    
  	$Pay_UMO->option_val=$Request->Pay_UMO;  	
  	$Pay_UMO->status=1;
  	$Pay_UMO->save();
  	return  redirect('admin/pay_umo');
           
  }

  public function edit_pay_umo( Request $Request)
  {
   	$payid=$Request->payid;
    $payumo=$Request->payumo;
    Pay_UMO::where('id', $payid)->update(array(
    'option_val'=>$payumo 
    ));
    return  redirect('admin/pay_umo');
  }

  public function delete_pay_umo($id="")
  {
    $cityList= Pay_UMO::where('id',$id)->delete();
    return  redirect('admin/pay_umo');
  } 
}

