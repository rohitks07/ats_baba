<?php

namespace App\Http\Middleware;

use Closure;
use App\sessions;

class CheckSesson
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        

       
        $val = sessions::where('user_id',1)->first();
        $url = url('/admin');
        $url_dash = url('admin/dashboard');
        $url_current = url()->current();
        
       

        if((@$val['user_id'] == "")&&($url !== $url_current)){
               
            if(@$val['user_id'] == 1){

                return redirect('/admin/dashboard');

            }
            else if(@$val['check_val'] !== 1) {

                return redirect('/admin');
            }
        }
                 
        
            return $next($request);
        
          
        
        
    }
}
