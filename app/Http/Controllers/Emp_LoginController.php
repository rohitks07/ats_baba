<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use DB;


class Emp_LoginController extends Controller
{
    public function index(){
    	return view('employee_admin');
    }

    public function error(){}

    public function register(Request $request){
    	$this->validate($request,[
    		'email'    => 'required',
    		'password' => 'required'
    	]);
    	$email=$request->email;
    	$password=$request->password;

        $login= DB::table('user')->where('email',$email)->first();
        $name=$login->email;
        $pass=$login->password;

        if ($name==$email && $pass==$password){
        	return redirect('indexjobseeker');
        }
        else{
        	$error="NOT LOGIN!!!!";
        	return view('employee_admin')->with('error',$error);


        }

        

        
   }
}
