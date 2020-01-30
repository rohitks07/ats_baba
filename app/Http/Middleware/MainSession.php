<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use App\sessions;

class MainSession
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
        $url = url('/');
        $url_session = url('employer/dashboard');
        $url_current = url()->current();
        $use = Session::get('unique_session_id');
        
        if(($url_current !== $url)&&(($use == "")||($use == null))){
            return \redirect('/');
        }
        return $next($request); 
    }
}
