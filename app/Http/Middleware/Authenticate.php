<?php


// use App\sessions;
namespace App\Http\Middleware;
// use Session;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function redirectTo($request)
    {
        // $val = sessions::where('user_id',1)->get();
        // if(Request::url('/admin')&&($val == "")){
        //     echo "done";
        //     exit();
        // }else if($val == ""){
        //     echo "not";
        //     exit();
        // }
        // else ($val == "")){
        //     return redirect('/admin');
        // }
        // else{
        //     echo "not done";
        //     exit();
        // }
        $val = Session::get('id');
    
        if(@$val == ""){

            return redirect('/admin');
            
        }
    }
}
