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
    //########################## this is also working fine but this is with out using session ######################################
    // if (auth()->guard('emp')->check()) {
    //   session(['user_type' => 'emp']);
    //   return redirect(route('profile.info'));
    // }
//######################################### using the session ########################################################################
    // if (!session()->has('emp.emp_id')) {
    //     return redirect(route('emplogin'));
    // } but it is failing the after login then directly add the login url but it is working that is not good practice.
//######################################################################################################
    if (auth()->guard('emp')->check()) {
       // $emp_id = Auth::guard('emp')->user()->emp_id;
       $emp_id = auth()->guard('emp')->user()->emp_id;
        // Store emp_id in the session
        //Session::put('emp.emp_id', $emp_id);
        session(['emp_id' => $emp_id]);
        session(['user_type' => 'emp']);
        return redirect(route('profile.info'));
      }
    elseif (auth()->user() && auth()->check()) {
      return redirect('/Jobs');
    }elseif (auth()->guard('com')->check()) {
      return redirect('/PostJobs');
    }
     else {
      session(['user_type' => 'guest']);
    }

    return $next($request);
  }
}
