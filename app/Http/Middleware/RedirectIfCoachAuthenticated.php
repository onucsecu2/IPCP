<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;

class RedirectIfCoachAuthenticated
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
        //If request comes from logged in user, he will
        //be redirect to home page.
        //if (Auth::guard()->check()) {
       //     return redirect('/coach/login');
        //}
        
        //If request comes from logged in coach, he will
        //be redirected to coach's home page.
        if (Auth::guard('coach')->check()) {
            return redirect('/coach');
        }
  
        return $next($request);
    }
}
