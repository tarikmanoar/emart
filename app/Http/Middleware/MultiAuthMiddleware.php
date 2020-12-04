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
        if (auth()->user()->role == 'admin' || auth()->user()->role == 'teacher'|| auth()->user()->role == 'parent'|| auth()->user()->role == 'student'|| auth()->user()->role == 'accountant'|| auth()->user()->role == 'librarian') {
            return $next($request);
        }
        toast('Permission Denied','warning');
        return redirect("/");
    }
}
