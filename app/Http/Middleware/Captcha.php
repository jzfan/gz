<?php

namespace App\Http\Middleware;

use Closure;

class Captcha
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
        if( session('phrase') !== request('captcha')) {
            return redirect()->back();
        }
        return $next($request);
    }
}
