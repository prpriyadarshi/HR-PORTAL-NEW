<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class VendorScreen extends Component
{
    public function logout()
    {
        Auth::logout();
        return redirect('/emplogin');
    }
    public function render()
    {
        return view('livewire.vendor-screen');
    }
}
