<?php

namespace App\Http\Middleware;

use Closure;
use Hamcrest\Core\Set;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class CustomAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $path= $request->path();
        if($path=="login" && (Session::get("nip"))){
            return redirect('/');
        }
        else if($path != "login" && !Session::get("nip")){
            return redirect('/login');
        }
        return $next($request);
    }
}
