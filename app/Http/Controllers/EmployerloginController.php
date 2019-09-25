<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tbl_employers;

class EmployerloginController extends Controller
{
  public function  index()
  {

  	return view('login');
  } 
  public function login( Request $Request)
  {
  	$email=$Request->email;
  	$password=base64_encode($Request->password);

  	$Employer=Tbl_employers::where('email',$email)->first();
  	$Employeremail=$Employer->email;
  	$Employerpass=base64_encode($Employer->pass_code);
  	if($email==$Employeremail&& $password==$Employerpass)
			{

				return redirect('empolyer/dashboard');
			}
			else
			{
				$error="Employer Does not Exit";
				
				return view ('login')->with('error',$error);
			}

  
  }
}
