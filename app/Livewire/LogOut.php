<?php

namespace App\Livewire;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class LogOut extends Component
{
    public function handleLogout()
    {

        //Session::pull('emp_id');
        session()->forget('emp_id');
        session()->flush();
        auth()->guard('emp')->logout();
        session()->flash('success', "You are logged out successfully!");
        return redirect(route('emplogin'));
    }

    public function render()
    {
        return view('livewire.log-out');
    }
}
