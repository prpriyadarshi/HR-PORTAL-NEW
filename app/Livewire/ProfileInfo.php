<?php

namespace App\Livewire;

use App\Models\EmployeeDetails;
use Livewire\Component;

class ProfileInfo extends Component
{
    public $employees;
    public function mount(){
        $this->employees=EmployeeDetails::all();
    }
    public function render()
    {
        return view('livewire.profile-info');
    }
}
