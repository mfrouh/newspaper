<?php

namespace App\Http\Middleware;

use Closure;

class block
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$guard=null)
    {
        if(auth()->check()){
           if(auth()->user()->blockuser  &&  auth()->user()->blockuser->active()){
               return abort('403','You Are In Block');
           }

           if(!auth()->user()->blockuser || !auth()->user()->blockuser->active()){
               return $next($request);
           }
       }
       else
       {
         return  redirect('/login');
       }
    }
}
