<?php

namespace App\Livewire;

use App\Models\EmployeeDetails;
use Livewire\Component;

class ProfileInfo extends Component
{
    public $employeeDetails;
    public function render()
    {
         $this->employeeDetails = EmployeeDetails::where('emp_id',auth()->guard('emp')->user()->emp_id)->get();
        return view('livewire.profile-info', ['employees' => $this->employeeDetails]);
    }
    
}
