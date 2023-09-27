<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        // if(auth()->user() && auth()->check()){
        //     session(['user_type' => 'admin']);
        //      return redirect(route('home'));
        //  }
        //  else
        if (auth('emp')->check()) {
            session(['user_type' => 'emp']);
            return redirect(route('home'));
           }
      else {
                session(['user_type' => 'guest']);
                return $next($request);
            }

    }
}
