<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class AdminMiddleware
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
        if(Auth::user()->usertype == 'admin')
        {
            return $next($request);
        }

        elseif(Auth::user()->usertype == '2')
        {
            return $next($request);
        }
        else
        {
           return redirect('/home')->with('status','you are not authorised to admin dashboard');
        }
       
    }
}
