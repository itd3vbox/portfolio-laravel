<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $locale = $request->route('locale') !== null
            ? $request->route('locale') : App::currentLocale();
        
        URL::defaults(['locale' => $locale]); // default for all routes

        App::setLocale($locale);
        
        return $next($request);
    }
}
