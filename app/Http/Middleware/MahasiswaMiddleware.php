<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;

class MahasiswaMiddleware 
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        if (Auth::user() && Auth::user()->role == 'mahasiswa') {
            return $next($request);
        }
        // else if ( Auth::user() && Auth::user()->roles == 'ADMIN' ) {
        //     return redirect('/');
        // }
        return redirect('/');

    }
}
