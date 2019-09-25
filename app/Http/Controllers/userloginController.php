<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\userlogin;
use DB;

class userloginController extends Controller
{
		function dashboard()
		{

			return view('dashboard');
		}
		
		function loginPage()
		{
			return view('adminLogin');
		}

		function adminLogin(Request $Request)
		{
			$username=$Request->username;
			$password=base64_encode($Request->password);

			// $userlogin= \userlogin::select('email_id','pass')->first();
			
			$userlogin = DB::table('userlogin')->first();
			$email=$userlogin->email_id;
			$pass=base64_encode($userlogin->pass);

			if($username==$email && $password==$pass)
			{

				return redirect()->action('userloginController@dashboard');
			}
			else
			{
				$error="Please enter the correct log-in details";

				return view('adminLogin')->with('error',$error);
			}
			// return ($email);

		}
		public function logout()
		{
			session_unset();
			return redirect('/');
		}

}

