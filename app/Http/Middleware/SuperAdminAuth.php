<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SuperAdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth()->user()->type == 2){ // super admin = 2
            //only super admin can access this page
            return $next($request);
        }else{
            return redirect()->route('login')->with('error', 'You do not have permission to access this page !');
        }
    }
}
