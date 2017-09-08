<?php

namespace App\Http\Middleware;

use Closure;

//Auth Facade
use Auth;

class AuthenticateArtist {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        //If request does not comes from logged in artist
        //then he shall be redirected to Artist Login page
        if (!Auth::guard('web_artist')->check()) {
            return redirect('/artist_login');
        }

        return $next($request);
    }

}
