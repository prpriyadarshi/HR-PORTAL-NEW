<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\EmployeeDetails;
use Illuminate\Http\Request;

class GoogleLogins extends Component
{
    public $google;
    public function redirectToGoogle()
    {
        return Socialite::driver('google')
            ->redirectUrl('http://127.0.0.1:8000/auth/google/callback')
            ->redirect('/');
    }
  

    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();
    
            if ($googleUser && $googleUser->emp_id) {
                // Check if the Google email matches an existing emp_id
                $employeeDetails = EmployeeDetails::where('email', $googleUser->email)->first();
    
                if ($employeeDetails) {
                    // Set a session variable to indicate a match is found
                    session(['emp_id' => $employeeDetails->emp_id]);
                } else {
                    // Store or update the Google user details in your EmpDetails model using Google's unique ID
                    $this->storeGoogleDetails($googleUser);
                }
            } else {
                // Handle scenario when ID is not obtained from Google user data
                session()->flash('error', 'ID not found in Google user data.');
                return redirect('/');
            }
        } catch (\Exception $e) {
            // Handle exceptions that might occur during Google authentication
            session()->flash('error', 'Error occurred during Google authentication.');
            return redirect('/');
        }
    
        // Redirect to the home page after Google login
        return redirect('/'); // Replace '/home' with the desired URL for the home page
    }
    
    
    public function render()
    {
        return view('livewire.google-logins');
    }
}
