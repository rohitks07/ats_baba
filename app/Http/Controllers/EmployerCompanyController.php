<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tbl_employers;
use App\tbl_job_industries;
use App\Tbl_companies;
use App\user;
use DB;
use Session;



class EmployerCompanyController extends Controller
{
	public function __construct()
		{
			$this->middleware('check');

		}
 	public function index()
 	{
		 $toReturn = array();
		 $data = array();
		 $list_employers_noncode= array();
		 $list_short_data = \DB::table('tbl_employers')
		 					->leftjoin('tbl_companies','tbl_companies.ID', '=' , 'tbl_employers.company_ID')
                            ->select('tbl_employers.country as hq','tbl_employers.email as email','tbl_companies.company_name as company','tbl_employers.ID as ID','tbl_employers.sts as status','tbl_employers.top_employer as top_employer','tbl_employers.pass_code')
							->get()
							->toArray();

							foreach ($list_short_data as $key => $list){
								$email=$list->email;
								$pass=$list->pass_code;
								$getUserDetails  = DB::table('user')->where('email',$email)->where('password',$pass)->first();
								
								if($getUserDetails == "")
								{
									// $list_employers_noncode="loss";	
									$data[] = "";
								}
								else{
									// $list_employers_noncode[] = $list;

									// $list_employers_noncode = is_array ( $list )? array_values($list):array();

									// $list_employers_noncode = serialize($list);
									
									// $list_employers_noncode[] = $list;

									$data[] = $list;

								}
							}
							// $list_employers = json_encode($list_employers_noncode);
							// $list_employers_noncode1 = unserialize($list_employers_noncode);
							// echo"<pre>";
							// print_r($data[1]->ID);
							// exit;
							// return $list_short_data;
							// $list_employers1 = json_decode($list_employers);
							// return $list_employers;
							// return json_encode($list_employers);
							// return $list_employers1;
 		            // return view('employercompany')->with('list_employers', json_decode($list_employers, true));
 		            return view('employercompany')->with('data',$data);
 	}
	 
	 public function login_index($id=""){

		$list_employers = \DB::table('tbl_employers')
							->leftjoin('tbl_companies','tbl_companies.ID', '=' , 'tbl_employers.company_ID')
							->select('tbl_employers.country as hq','tbl_employers.email as email','tbl_companies.company_name as company','tbl_employers.ID as ID','tbl_employers.sts as status','tbl_employers.top_employer as top_employer','tbl_employers.pass_code')
							->where('tbl_companies.ID',$id)
							->first();
		$password =$list_employers->pass_code;
		$email_id =$list_employers->email;
		// return $email_id;
    	
        $getUserDetails  = DB::table('user')->where('email',$email_id)->where('password',$password)->first();
        // print_r($getUserDetails);
        // exit;
        if($getUserDetails)
        {
            $email_assign    =$getUserDetails->email;
            $password_assign =$getUserDetails->password;
            $user_type=$getUserDetails->user_type;
            $user_id=$getUserDetails->user_id;
            if ($email_id==$email_assign && $password==$password_assign)
            {       
                $session_data = array(
                'id'   =>$getUserDetails->ID,
                'email'=>$getUserDetails->email,
                'full_name'=>$getUserDetails->full_name,
                'user_id'=>$getUserDetails->user_id,
                'type' =>$getUserDetails->user_type,
                'org_ID'=>$getUserDetails->org_ID
                );

                // session create
                Session::put($session_data);
                if($user_type=='seeker')
                {
                    return redirect('indexjobseeker');
                }
                elseif($user_type=='teammember')
                {
                    $toReturn=array();
                    $toReturn['team_member']=tbl_team_member::where('ID',Session::get('user_id'))->first();
                    $toReturn['is_team_leader']=tbl_team_member_type::where('team_leader_id',Session::get('user_id'))->first(); 
                    if(!empty($toReturn['is_team_leader']))
                    {
                        $list_teammember=tbl_team_member::where('team_member_type',$toReturn['is_team_leader']['type_ID'])->get()->toArray();
                        $toReturn['one_group_teammember_list']['id']=array();
                        $count=0;
                        foreach($list_teammember as $key=>$value)
                        {
                            $toReturn['one_group_teammember_list']['id'][$key]=$list_teammember[$key]['ID'];
                            $toReturn['one_group_teammember_list']['employer_id'][$key]=$list_teammember[$key]['employer_id'];
                            $toReturn['one_group_teammember_list']['company_id'][$key]=$list_teammember[$key]['company_id'];
                            $toReturn['one_group_teammember_list']['full_name'][$key]=$list_teammember[$key]['full_name'];
                            $count=$count+1;
                        }
                        $toReturn['one_group_teammember_list']['id'][$count]=@$toReturn['is_team_leader']['team_leader_id'];
                        $toReturn['user_permission']=Tbl_team_member_permission::where('team_member_id',$user_id)
                        ->leftjoin('tbl_module','tbl_team_member_permission.permission_value','=','tbl_module.module_id')
                        ->get()->toArray();
                        $session_data = array(
                        'id'   =>$getUserDetails->ID,
                        'email'=>$getUserDetails->email,
                        'full_name'=>$getUserDetails->full_name,
                        'user_id'=>$getUserDetails->user_id,
                        'type' =>$getUserDetails->user_type,
                        'org_ID'=>$getUserDetails->org_ID,
                        'user_permission'=>$toReturn['user_permission'],
                        'one_group_teammember_id'=>$toReturn['one_group_teammember_list']['id'],
                        'one_group_teammember_employer_id'=>$toReturn['one_group_teammember_list']['employer_id'],
                        'one_group_teammember_full_name'=>$toReturn['one_group_teammember_list']['full_name']
                        );
                        // // exit;  
                    }
                    else{
                    $toReturn['user_permission']=Tbl_team_member_permission::where('team_member_id',$user_id)
                    ->leftjoin('tbl_module','tbl_team_member_permission.permission_value','=','tbl_module.module_id')
                    ->get()->toArray();
                    $session_data = array(
                        'id'   =>$getUserDetails->ID,
                        'email'=>$getUserDetails->email,
                        'full_name'=>$getUserDetails->full_name,
                        'user_id'=>$getUserDetails->user_id,
                        'type' =>$getUserDetails->user_type,
                        'org_ID'=>$getUserDetails->org_ID,
                        'user_permission'=>$toReturn['user_permission']
                    );
                    }
                //    return $session_data;
                    Session::put($session_data);
                    Session::put("sessiondata",$session_data);
                    return redirect('employer/dashboard');
                }
                else
                {
                    return redirect('employer/dashboard');
                }        
            }
            else{
            	$error="NOT LOGIN !!!!";
            	return view('employee_admin')->with('error',$error);
            }
        
        }
        else{
            	$error="Email Id Not Found !!!!";
        	return view('employee_admin')->with('error',$error);
        }
	 }
	 
 	
 	//updateStatus
 	public function updateStatus($id="")
 	{
 	    $emp_exit_status=Tbl_employers::where('ID',$id)->first('sts');
 	    $exit_status=$emp_exit_status->sts;
 	    
 	    if($exit_status=='active')
 	    {
 	        $emp_status=Tbl_employers::where('ID',$id)->update(array(
 	            'sts'=>'blocked'
 	         	        ));
 	        $emp_new_status=Tbl_employers::where('ID',$id)->first('sts');
 	    }
 	    else
 	    {
 	        $emp_status=Tbl_employers::where('ID',$id)->update(array(
 	            'sts'=>'active'
 	         	        ));
 	        $emp_new_status=Tbl_employers::where('ID',$id)->first('sts');
 	    }
 	    echo $emp_new_status;
 	}
 	
 	
 	//employer
 	public function top_employer($id="")
 	{
 	    
 	    $top_employer=Tbl_employers::where('ID',$id)->first('top_employer');
 	    $yes_or_no=$top_employer->top_employer;
 	    
 	    if($yes_or_no=='yes')
 	    {
 	        $temp=Tbl_employers::where('ID',$id)->update(array(
 	            'top_employer'=>'no'
 	         	        ));
 	        $temp_new=Tbl_employers::where('ID',$id)->first('top_employer');
 	    }
 	    else
 	    {
 	        $temp=Tbl_employers::where('ID',$id)->update(array(
 	            'top_employer'=>'yes'
 	         	        ));
 	        $temp_new=Tbl_employers::where('ID',$id)->first('top_employer');
 	    }
 	    echo $temp_new;
 	    
 	    
	 }
	 public function quick_view_company(Request $request){
		$id=$request->id;
		$data=DB::table('tbl_companies')
                              ->where('ID',$id)
							  ->first();
							  return response()->json($data);
	 }

	 public function emp_edit($id){
		$company = Tbl_companies::where('ID',$id)->first();
		
		$employer	 = Tbl_employers::where('company_ID',$id)->first();

		return view('all_employer_edit')->with('company',$company)->with('employer',$employer);
	 }

	 public function update_employer_info(Request $request , $id){

		Tbl_employers::where('ID',$id)->update(array(

			'first_name'   =>$request->first_name,
			'last_name'	   =>$request->last_name,
			'email'	       =>$request->email,
			'pass_code'	   =>$request->password,
			'mobile_phone' =>$request->number,

		));
		return redirect('admin/emp_edit'.$id);
		
	 }

	 public function update_Company_info(Request $request , $id){
		 

		if($request->hasFile('file'))
        {
            
            $file = $request->file('file');

            $file_val = $request->file = $file->getClientOriginalName();
            $destinationPath = 'public/companylogo';
            $file->move($destinationPath, $file->getClientOriginalName()); 
        }
        else{
			
			$file_val = $request->logo;
			
        }

		Tbl_companies::where('ID',$id)->update(array(

			'company_name'      => $request->c_name,
			'industry_ID'       => $request->Industry,
			'no_of_employees'   => $request->employee_no,
			'company_location'  => $request->c_location,
			'company_website'   => $request->website,
			'company_logo'      => $file_val,

		));
		
		return redirect('admin/emp_edit'.$id);

	 }
}
