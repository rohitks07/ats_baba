<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\tbl_post_job;
use App\Tbl_team_member_type;
use App\countries;
use App\cities;
use App\states;
use App\tbl_job_industries;
use DB;


class Jobpost_manage_Controller extends Controller
{
    public function __construct()
		{
			$this->middleware('check');

		}
    public function view_manage_job(){

        $data=tbl_post_job::get()->toArray();
        
        return view('manage_job_post')->with('data',$data);
    }

    public function change_status(Request $Request){

        tbl_post_job::where('ID',$Request->id)->update(array(
            'sts'=>$Request->status
        ));
        return redirect('admin/job_post_manage');
    }
    public function delete($id=""){
        tbl_post_job::where('ID',$id)->delete();
        return redirect('admin/job_post_manage');

    }
    public function update_view($id=""){
        $value=tbl_post_job::where('ID',$id)->get()->toArray();
        $for_group=tbl_post_job::where('ID',$id)->get('for_group')->toArray();
        $industry_id=tbl_post_job::where('ID',$id)->get('industry_ID')->toArray();
        
        $toReturn['team_member_type']=Tbl_team_member_type::get();
        $toReturn['countries']=countries::get();
        $toReturn['cities']=cities::get();
        $toReturn['states']=states::get();
        $toReturn['industries']=tbl_job_industries::get();
        $toReturn['industry_name']=tbl_job_industries::where('ID',$industry_id)->get();
        $toReturn['team']=Tbl_team_member_type::where('type_ID',$for_group)->get();
        // return $toReturn['industry_name'];
        // $value['group']=
        return view('edit_manage_job_post')
             ->with('value',$value)
             ->with('toReturn',$toReturn);
    }


    public function update (Request $Request){
        $id=$Request->id;
        $pay_rate=$Request->pay;
        $exploded_value = explode('-', $pay_rate);
        $value_one = $exploded_value[0];
        $value_two = $exploded_value[1];
        $city_op=$Request->city_op;
        if($city_op==""){

            tbl_post_job::where('ID',$id)->update(array(
                'for_group'=>$Request->group,
                'job_title'=>$Request->job_title,
                'vacancies'=>$Request->no_of_vacancy,
                'industry_ID'=>$Request->industry,
                'experience'=>$Request->experience,
                'job_mode'=>$Request->job_type,
                'country'=>$Request->country,
                'state'=>$Request->state,
                'city'=>$Request->city,
                'pay_min'=>$value_one,
                'pay_max'=>$value_two,
    
            ));
        }
        else{


            tbl_post_job::where('ID',$id)->update(array(
                'for_group'=>$Request->group,
                'job_title'=>$Request->job_title,
                'vacancies'=>$Request->no_of_vacancy,
                'industry_ID'=>$Request->industry,
                'experience'=>$Request->experience,
                'job_mode'=>$Request->job_type,
                'country'=>$Request->country,
                'state'=>$Request->state,
                'city'=>$Request->city_op,
                'pay_min'=>$value_one,
                'pay_max'=>$value_two,
    
            ));

        }
        
       
        return redirect('admin/job_post_manage');
       
    }
    function search(Request $request){
        $search_featured1=$request->search_name;
        // $company_name=$request->company_name;
        $search_featured2=$request->search_featured;
        $city=$request->city;


        
        if(($search_featured1=="")&&($city=="")){

            $matchrecord=tbl_post_job::where('job_mode', 'LIKE', $search_featured2)
            ->get()
            ->toArray();
            foreach ($matchrecord as $item){

                $company_name = DB::table('tbl_companies')->where('ID',$item['company_ID'])->first('company_name');  

            }
            


            
            
        }
        else if(($search_featured2=="")&&($search_featured1==""))  {
            $matchrecord=tbl_post_job::where('city','LIKE', '%'.$city.'%')
             ->get()
             ->toArray();
             $company_name = DB::table('tbl_companies')->where('ID',$matchrecord->company_ID)->first('company_name');  

             
        }  
        else if(($search_featured2=="")&&($city=="")){

            $matchrecord=tbl_post_job::where('job_title','LIKE', '%'.$search_featured1.'%')
            ->get()
            ->toArray();
            $company_name = DB::table('tbl_companies')->where('ID',$matchrecord->company_ID)->first('company_name');  

            

        }
        else{
            $matchrecord=tbl_post_job::where('job_title','LIKE', '%'.$search_featured1.'%')
            ->where('job_mode', 'LIKE', $search_featured2)
            ->where('city','LIKE', '%'.$city.'%')
            ->get()
            ->toArray();
            $company_name = DB::table('tbl_companies')->where('ID',$matchrecord->company_ID)->first('company_name');  

            
        }


       
            // $matchrecord=tbl_post_job::where('job_title','LIKE', '%'.$search_featured1.'%')
            // ->get()
            // ->toArray();
        
        return response()->json(array(
            'matchrecord' => $matchrecord,
            'company_name'=> $company_name));
    }
}
