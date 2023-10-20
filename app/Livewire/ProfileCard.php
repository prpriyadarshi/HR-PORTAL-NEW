<?php

namespace App\Livewire;

use App\Models\EmployeeDetails;
use Livewire\Component;

class ProfileCard extends Component
{
    public function render()
    {
        $employeeDetails = EmployeeDetails::where('emp_id',auth()->guard('emp')->user()->emp_id)->get();
        return view('livewire.profile-card', ['employees' => $employeeDetails]);
    }
}
