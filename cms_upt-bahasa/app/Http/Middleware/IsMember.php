<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsMember
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
        if (Auth::user() && Auth::user()->roles == 'USER') {
            return $next($request);
        }elseif (Auth::user() && Auth::user()->roles == 'ADMIN') { 
            return redirect('admin/dashboard');
        }
        return redirect('/');
    }
}
