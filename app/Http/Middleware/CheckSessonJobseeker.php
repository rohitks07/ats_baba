<?php

namespace App\Http\Middleware;

use Closure;
use App\sessions;

class CheckSessonJobseeker
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



        $val = sessions::where('check_val','seeker')->first();
        $url = url('/admin');
        // $url_dash = url('admin/dashboard');
        $url_current = url()->current();
        
       

        // if((@$val['user_id'] == "")&&($url !== $url_current)){
         if((@$val['user_id'] == "")&&($url !== $url_current)){

            if(@$val['check_val'] == 'seeker'){

                return redirect('indexjobseeker');

            }
            else if(@$val['check_val'] !== 'seeker') {

                return redirect('/');
            }
         }
        else if(@$val['check_val'] == ""){
               
            if(@$val['check_val'] == 'seeker'){

                return redirect('indexjobseeker');

            }
            else if(@$val['check_val'] !== 'seeker') {

                return redirect('/');
            }
        }
                 
        

        return $next($request);
    }
}
