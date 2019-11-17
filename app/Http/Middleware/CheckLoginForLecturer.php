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
    public function handle($request, Closure $next, $guard="lecturer")
    {
        if(!auth()->guard($guard)->check()) {
            return redirect(route('lecturer.login'));
        }
        return $next($request);
    }
}
