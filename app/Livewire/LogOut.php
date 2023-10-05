<?php

namespace App\Livewire;

use Livewire\Component;

class LogOut extends Component
{
    public function handleLogout()
    {
        auth()->guard('emp')->logout();
        session()->flash('success', "You Are LoggedOut Successfully!");
        return redirect(route('emplogin'));
    }
    
    public function render()
    {
        return view('livewire.log-out');
    }
}
