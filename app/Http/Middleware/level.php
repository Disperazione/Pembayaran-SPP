<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class level
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$level)
    {
        if (is_array(Auth::guard('petugas')->level,$level)) {
            return $next($request);
        }else if (is_array('siswa', $level)) {
            return $next($request);
        }
        return back();
    }
}
