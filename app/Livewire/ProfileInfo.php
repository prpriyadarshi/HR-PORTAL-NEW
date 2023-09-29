<?php

namespace App\Livewire;

use App\Models\EmployeeDetails;
use Livewire\Component;

class ProfileInfo extends Component
{
    public function render()
    {
        $employeeDetails = EmployeeDetails::all();
        
        return view('livewire.profile-info', ['employees' => $employeeDetails]);
    }
    
}
