<?php

namespace App\Http\Middleware;

use Closure;

//Auth Facade
use Auth;

class AuthenticateModel {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        //If request does not comes from logged in member
        //then he shall be redirected to Member Login page
        if (!Auth::guard('web_model')->check()) {
            return redirect('/model_login');
        }

        return $next($request);
    }

}
