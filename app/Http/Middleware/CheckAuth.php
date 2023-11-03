<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class CheckAuth
{
  /**
   * Handle an incoming request.
   *
   * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
   */
  public function handle(Request $request, Closure $next): Response
  {

    //    This is also working fine.........
    // if($request->user()){
    //         session(['user_type' => 'admin']);
    //         return redirect(route('home'));

    //    }
    // if (auth()->user() && auth()->check()) {
    //     // Set the navigation bar for admin users
    //     view()->share('navbar', 'navbar-admin');
    // } elseif (auth()->guard('staff')->check()) {
    //     // Set the navigation bar for staff users
    //     view()->share('navbar', 'navbar-staff');
    // } elseif (auth()->guard('student')->check()) {
    //     // Set the navigation bar for student users
    //     view()->share('navbar', 'navbar-student');
    // } else {
    //     // Set a default navigation bar for guests
    //     view()->share('navbar', 'navbar-guest');
    // }

    // return $next($request);
    if (auth()->guard('emp')->check()) {
    //   session(['user_type' => 'emp']);
      $emp_id = Auth::guard('emp')->user()->emp_id;
      Session::put('emp_id', $emp_id);
      $user = auth('emp')->user();
      $sessionTimeout = $user->role === 'admin' ? 60 : 10; // Example: Admins get a 60-minute timeout, others get a 10-minute timeout.
    //   Log::info("Session Timeout: $sessionTimeout minutes");
    //   config(['session.lifetime' => $sessionTimeout]);
      return redirect(route('profile.info'));
    } elseif (auth()->user() && auth()->check()) {
      return redirect('/Jobs');
    }elseif (auth()->guard('com')->check()) {
      return redirect('/PostJobs');
    }
     else {
      session(['user_type' => 'guest']);
      Log::info('Session has timed out');
     // return redirect('/emplogin');
    //  return redirect(route('emplogin'));
      return $next($request);
    }

    //
  }
}
