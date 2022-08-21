<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use App;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        error_log(session()->has("lang_code"));
        if (session()->has("lang_code")) {
            App::setLocale(session()->get("lang_code"));
        }

        if (!$request->expectsJson()) {
            return route('login');
        }
    }
}
