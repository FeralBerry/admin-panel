<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckStatus
{
    public function handle($request, Closure $next)
    {
        if(Auth::user() && Auth::user()->isAdministrator()){
            return $next($request);
        }else{
            return redirect('/');
        }

    }
}
