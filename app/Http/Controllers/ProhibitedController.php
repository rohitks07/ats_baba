<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\prohibited_keyword;

class ProhibitedController extends Controller
{
  public function __construct()
		{
			$this->middleware('check');

		}
 
  public function index()
    { 
      $prohibited_keyword = prohibited_keyword::all();
      return view('prohibited_keyword')->with('keyword',$prohibited_keyword);
    }

    public function add(Request $Request) 
    {
      $prohibited_keyword=new prohibited_keyword;

      $prohibited_keyword-> keyword =$Request->key;
      $prohibited_keyword->save();
      return  redirect('admin/prohibited_keyword');
    }
    
    public function edit(Request $Request){

      $keywordid=$Request->myid;
      $keyword=$Request->key;


      prohibited_keyword::where('ID', $keywordid)->update(array(
      'keyword'=>$keyword
         ));
  return  redirect('admin/prohibited_keyword');
    }
      
    
      public function delete($id ="")
    {

      prohibited_keyword::where('ID',$id)->delete();
     
        return  redirect('admin/prohibited_keyword');
       
   
    
    }
 

}