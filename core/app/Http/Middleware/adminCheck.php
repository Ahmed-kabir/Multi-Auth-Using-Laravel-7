<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class adminCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard=null)
    {
//        dd($guard == 'admin' && Auth::guard($guard)->check());
        if(Auth::guard('admin')->check()) {
            return redirect()->route('adminHome');
        }
        return $next($request);

    }
}
