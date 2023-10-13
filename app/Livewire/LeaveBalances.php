<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\EmployeeDetails;


class LeaveBalances extends Component
{
    public $employeeDetails;

    public function render()
    {
        $employeeId = auth()->guard('emp')->user()->emp_id;
        $this->employeeDetails = EmployeeDetails::where('emp_id', $employeeId)->first();
        // Check if employeeDetails is not null before accessing its properties
        if ($this->employeeDetails) {
            $gender = $this->employeeDetails->gender;
            $grantedLeave = ($gender === 'Female') ? 90 : 05; // Adjust granted leave based on gender

            return view('livewire.leave-balances', [
                'gender' => $gender,
                'grantedLeave' => $grantedLeave,
            ]);
        }
    }
}
