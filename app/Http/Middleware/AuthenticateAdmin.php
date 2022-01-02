<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class AuthenticateAdmin
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
        $can_access = Auth::check();
        if($can_access)
            return $next($request);
        else
        {
            //dd('test');
            Auth::logout();
            return redirect()->route('web-admin.sign-in');
        }
    }
}
