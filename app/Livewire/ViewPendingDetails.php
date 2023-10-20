<?php

namespace App\Livewire;
use App\Models\LeaveRequest;
use App\Models\EmployeeDetails;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use Livewire\Component;

class ViewPendingDetails extends Component
{
    public $employeeDetails = [];
    public $employeeId;
    public $leaveRequests;

    public function mount()
    {
        // Get the logged-in user's ID
        $employeeId = auth()->guard('emp')->user()->emp_id;
    
        // Fetch employee details by joining employeedetails and leave_applies tables
        $this->employeeDetails = EmployeeDetails::join('leave_applies', 'employee_details.emp_id', '=', 'leave_applies.emp_id')
            ->where('employee_details.emp_id', $employeeId)
            ->select(
                DB::raw('CONCAT(employee_details.first_name, " ", employee_details.last_name) as fullname'),
                'employee_details.image',
                'leave_applies.*'
            )
            ->first();
          
    
        // Check if employeeDetails is not null
        if ($this->employeeDetails) {
            // Fetch only pending leave requests for the logged-in user
            $this->leaveRequests = LeaveRequest::where('emp_id', $employeeId)
                ->where('status', 'pending')
                ->get();
        } else {
            // Handle the case where employeeDetails is null
            $this->leaveRequests = collect(); // or any other appropriate handling
        }
    }
    
    
    
    
    public function hasPendingLeave()
    {
        // Check if there are pending leave requests
        return $this->leaveRequests->where('status', 'pending')->isNotEmpty();
    }
    public function calculateNumberOfDays($fromDate, $fromSession, $toDate, $toSession)
    {
        try {
            $startDate = Carbon::createFromFormat('Y-m-d H:i:s', $fromDate . ' 00:00:00');
            $endDate = Carbon::createFromFormat('Y-m-d H:i:s', $toDate . ' 00:00:00');
    
            // Check and adjust start session
            if ($fromSession == 'Session 2') {
                $startDate->addHours(12);
            }
    
            // Check and adjust end session
            if ($toSession == 'Session 2') {
                $endDate->addHours(12);
            }
    
            // Scenario 1: Both sessions are the same and on the same date (half day)
            if ($fromSession == $toSession && $startDate->isSameDay($endDate)) {
                return 0.5;
            }
    
            // Scenario 2: Different sessions on the same date (1 day)
            if ($startDate->isSameDay($endDate)) {
                return 1;
            }
            
            if ($fromSession == $toSession && $startDate->isSameDay($endDate)) {
                return 0.5;
            }
    
            // Scenario 3: Different sessions on different dates
            return $startDate->diffInDays($endDate);
        } catch (\Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    public function approveLeave($leaveRequestId)
    {
        // Find the leave request by ID
        $leaveRequest = LeaveRequest::find($leaveRequestId);

        // Update status to 'approved'
        $leaveRequest->status = 'approved';
        $leaveRequest->save();

        session()->flash('message', 'Leave application approved successfully.');
    }

    public function rejectLeave($leaveRequestId)
    {
        // Find the leave request by ID
        $leaveRequest = LeaveRequest::find($leaveRequestId);

        // Update status to 'rejected'
        $leaveRequest->status = 'rejected';
        $leaveRequest->save();

        session()->flash('message', 'Leave application rejected.');
    }

    public function render()
    {
        return view('livewire.view-pending-details');
    }
}
