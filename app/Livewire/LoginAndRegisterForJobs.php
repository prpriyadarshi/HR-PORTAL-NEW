<?php

namespace App\Livewire;

use App\Models\AppliedJob;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
class LoginAndRegisterForJobs extends Component
{
    use WithFileUploads;
    public $user_full_name;
    public $user_email;
    public $user_password;
    public $user_mobile_no;
    public $user_address;
    public $user_resume;
    public $user_work_status;
    public $login_password;
    public $login_email;
    public $credentials;
    public $activeTab = 'register';

    public $showDialogBox = false;

    public function login()
    {
        $this->validate([
            'login_email' => 'required|email',
            'login_password' => 'required',
        ]);

        $this->credentials = [
            'email' => $this->login_email,
            'password' => $this->login_password,
        ];

        if (Auth::attempt($this->credentials)) {
            return redirect('/Jobs'); 
        }
        $this->addError('login_email', 'Invalid email or password');
    }

    public function register()
    {
        $this->validate([
            'user_full_name' => 'required',
            'user_email' => 'required|email|unique:users,email',
            'user_password' => 'required',
            'user_mobile_no' => 'required',
            'user_work_status' => 'required',
            'user_address' => 'required',
            'user_resume'=>'required'
        ]);
        User::create([
            'full_name' => $this->user_full_name,
            'email' => $this->user_email,
            'password' => $this->user_password,
            'mobile_no' => $this->user_mobile_no,
            'work_status' => $this->user_work_status,
            'address' => $this->user_address,
            'resume' => $this->user_resume,
        ]);
        return redirect('/Jobs'); 
    }
   
    public function render()
    {
        return view('livewire.login-and-register-for-jobs');
    }
}
