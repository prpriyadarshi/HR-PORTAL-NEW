<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\EmployeeDetails;

class TeamOnLeave extends Component
{
    public $showTeamOnLeave = false;

    public function render()
    {
        // Get the authenticated user's emp_id
        $loggedInEmpId = Auth::guard('emp')->user()->emp_id;

        // Check if the logged-in user is a manager by comparing emp_id with manager_id in employeedetails
        $isManager = EmployeeDetails::where('manager_id', $loggedInEmpId)->exists();

        // Show "Team on Leave" if the logged-in user is a manager
        $this->showTeamOnLeave = $isManager;

        return view('livewire.team-on-leave', [
            'showTeamOnLeave' => $this->showTeamOnLeave,
        ]);
      
    }
}
