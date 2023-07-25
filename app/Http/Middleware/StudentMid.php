<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class StudentMid
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
        if (!session()->has('StudentLogIn')) {
            return redirect('StudentLogIn')->with('Fail', 'You Have to log In First');
        }
        return $next($request);
    }
}