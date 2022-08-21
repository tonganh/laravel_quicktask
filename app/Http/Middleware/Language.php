<?php

namespace App\Http\Middleware;

use Closure;
use App;

class Language
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
        error_log(session()->has("lang_code"));
        if (session()->has("lang_code")) {
            App::setLocale(session()->get("lang_code"));
        }
        return $next($request);
    }
}