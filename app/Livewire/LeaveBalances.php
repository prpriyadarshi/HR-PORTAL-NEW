<?php

namespace App\Livewire;

use Livewire\Component;
use App\Helpers\LeaveHelper;
use App\Models\EmployeeDetails;

class LeaveBalances extends Component
{
   
    public $employeeDetails;
    public $sickLeavePerYear = 12; // Assuming 12 days of sick leave per year
    public $casualLeavePerYear = 12; // Assuming 12 days of casual leave per year
    public $lossOfPayPerYear = 0;
    public $sickLeaveBalance;
    public $casualLeaveBalance;

    public function mount() {
        $employeeId = auth()->guard('emp')->user()->emp_id;
        $this->employeeDetails = EmployeeDetails::where('emp_id', $employeeId)->first();
    
        // Check if employeeDetails is not null before accessing its properties
        if ($this->employeeDetails) {
            // Get the logged-in employee's approved leave days for sick, causal, and loss of pay leave
            $approvedLeaveDays = LeaveHelper::getApprovedLeaveDays($employeeId);

            // Use the returned values in your component
            $this->totalCausalDays = $approvedLeaveDays['totalCausalDays'];
            $this->totalSickDays = $approvedLeaveDays['totalSickDays'];
            $this->totalLossOfPayDays = $approvedLeaveDays['totalLossOfPayDays'];
    
            // Calculate leave balances
            $this->sickLeaveBalance = $this->sickLeavePerYear - $this->totalSickDays;
            $this->casualLeaveBalance = $this->casualLeavePerYear - $this->totalCausalDays;
            $this->lossOfPayBalance = $this->lossOfPayPerYear - $this->totalLossOfPayDays;
    
        }
    }

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
                'sickLeaveBalance' => $this->sickLeaveBalance,
                'casualLeaveBalance' => $this->casualLeaveBalance,
                'lossOfPayBalance' => $this->lossOfPayBalance,
            ]);
        }
    }
        
        
    }


