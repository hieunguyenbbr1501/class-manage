<?php

namespace App\Http\Middleware;

use Closure;

class CheckLoginForLecturer
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
        if(auth()->user() && auth()->user()->isLecturer){
            return $next($request);

        }
        else{
            dd('not authorized');
        }
    }
}
