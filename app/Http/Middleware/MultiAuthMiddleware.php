<?php

namespace App\Http\Middleware;

use Closure;

class MultiAuthMiddleware
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
        if (auth()->user()->role == 'admin' || auth()->user()->role == 'user'|| auth()->user()->role == 'editor') {
            return $next($request);
        }
        toast('Permission Denied', 'warning');
        return redirect("/");
    }
}
