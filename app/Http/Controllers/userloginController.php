<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\userlogin;
use App\sessions;
use DB;
use Session;

class userloginController extends Controller
{




	
		
	public function __construct()
		{
			// $this->middleware('check');
			$this->middleware('check')->except(['adminLogin','loginPage']);

		}
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
				$session_data = array(
					'id'   =>$userlogin->id,
					'email_id'=>$userlogin->email_id,
					'name'=>$userlogin->name
					
					);
					Session::put($session_data);
					
					// sessions::where('id', 1)->update(array(
					// 	'user_id' => $userlogin->id,
					// 	'email'	  => $userlogin->email_id,
					// ));

					$session = new sessions();
					$session->user_id = $userlogin->id;
					$session->email = $userlogin->email_id;
					$session->check_val = "1";
					$session->save();
					$val = sessions::where('user_id',1)->first();

						if(@$val['user_id'] == 1 ){

							// return redirect()->action('userloginController@dashboard');
							return redirect('admin/dashboard');
						}
						
				
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
			
			Session::flush();
			sessions::where('user_id',1)->delete();
			return redirect('/');
		}

}

