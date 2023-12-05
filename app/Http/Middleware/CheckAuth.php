<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CheckAuth
{
  /**
   * Handle an incoming request.
   *
   * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
   */
  public function handle(Request $request, Closure $next): Response
  {
    // Check if the user is an employee
    if (auth()->guard('emp')->check()) {
      // Check if the session has expired
      if (Session::has('lastActivityTime')) {
        $maxSessionLifetime = config('session.lifetime');
        $lastActivityTime = Session::get('lastActivityTime');
        $currentTime = now();
        if ($currentTime->diffInMinutes($lastActivityTime) > $maxSessionLifetime) {
          // Session has expired
          Session::flash('sessionExpired', 'Your session has expired. Please log in again.');
          Session::forget('lastActivityTime');

          // Redirect to the login page
          return redirect(route('emplogin'));
        }
      }

      // Update the last activity time
      Session::put('lastActivityTime', now());
      // Set user type and emp_id in the session
      $emp_id = auth()->guard('emp')->user()->emp_id;
      Session::put('emp_id', $emp_id);
      Session::put('user_type', 'emp');

      return redirect(route('profile.info'));
    } elseif (auth()->user() && auth()->check()) {
      return redirect('/Jobs');
    } elseif (auth()->guard('com')->check()) {
      return redirect('/PostJobs');
    } else if (auth()->guard('finance')->check()) {
      session(['user_type' => 'finance']);
      return redirect('/financePage');
    } else if (auth()->guard('hr')->check()) {
      session(['user_type' => 'hr']);
      return redirect('/hrPage');
    } else if (auth()->guard('it')->check()) {
      session(['user_type' => 'it']);
      return redirect('/itPage');
    } else {
      session(['user_type' => 'guest']);
    }

    // Handle other user types and session expiration logic if needed

    return $next($request);
  }
}
