<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tbl_cms;
use DB;

class CMSController extends Controller
{
    public function index(){
        $pages_object = Tbl_cms::orderBy('dated','asc')->get();

        // $pages_object = DB::table('tbl_cms')->select()->orderBy('pageID', 'asc')->get();
        return view('page_management')->with('pages',$pages_object);
    } 

    public function add(Request $request){
        // $this->validate($request,[
        //     'pageheading' => 'required',
        //     'pageslug' => 'required',
        //     'pagetitle'=>'requried',
        //     'metakeyword'=> 'requried',
        //     'metadescription' => 'requried'
        // ] );
     
        $pages_object = new Tbl_cms;  
       
        $pages_object ->pageTitle=$request->pageheading;
        $pages_object ->pageSlug=$request->pageslug;
        $pages_object ->pageContent=$request->pagecontent;
        $pages_object ->seoMetaTitle=$request->pagetitle;
        $pages_object ->seoMetaKeyword=$request->metakeyword;
        $pages_object ->seoMetaDescription=$request->metadescription;
        $pages_object ->save();
        return redirect('admin/page_management');
    
    }

    public function edit(Request $request){

        $pageheading = $request->pageheading;
        $pageslug    = $request->pageslug;
        // $pagecontent = $request->pagecontent;
        $pagetitle   = $request->pagetitle;
        $pagemeta = $request->metakeyword;
        $metadescription = $request->metadescription;
        $pageid = $request->id;


        Tbl_cms::where('pageID', $pageid)->update(array(
            'pageTitle'=>$pageheading,
            'pageSlug'=>$pageslug,
           // 'pageContent'=>$pagecontent,
            'seoMetaTitle'=>$pagetitle,
            'seoMetaKeyword'=>$pagemeta,
            'seoMetaDescription'=>$metadescription  
        )); 
        // return $request->id;
        return redirect('admin/page_management');
             
    }
    
    public function delete($id=""){
        
        Tbl_cms::where('pageID',$id)->delete();
    
       return redirect('admin/page_management');
       
   }
   public function pagecontent($pagehead="")
   {
    $cms_content=Tbl_cms::select('pageContent')->where('pageSlug', $pagehead)->first();
       return view('cms_content')->with('cms_content',$cms_content) ;
   }

}
