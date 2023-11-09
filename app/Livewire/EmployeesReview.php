<?php

namespace App\Livewire;
use App\Models\EmployeeDetails;
use App\Models\LeaveRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EmployeesReview extends Component
{
    public $count;
    public $applying_to= [];
    public $matchingLeaveApplications = [];
    public $leaveRequest;
    public $employeeDetails;
    public $approvedLeaveApplicationsList;
    public $search = '';
    public $filterData;
   

    public  function calculateNumberOfDays($fromDate, $fromSession, $toDate, $toSession)
    {
        try {
        
            $startDate = Carbon::parse($fromDate);
            $endDate = Carbon::parse($toDate);
            // Check if the start and end sessions are different on the same day
            if ($startDate->isSameDay($endDate) && $this->getSessionNumber($fromSession) === $this->getSessionNumber($toSession)) {
                // Inner condition to check if both start and end dates are weekdays
                if (!$startDate->isWeekend() && !$endDate->isWeekend()) {
                    return 0.5;
                } else {
                    // If either start or end date is a weekend, return 0
                    return 0;
                }
            }
            // Check if the start and end sessions are different on the same day
            if (
                
                $startDate->isSameDay($endDate) &&
                $this->getSessionNumber($fromSession) === $this->getSessionNumber($toSession)
            ) {
              
                // Inner condition to check if both start and end dates are weekdays
                if (!$startDate->isWeekend() && !$endDate->isWeekend()) {
                    return 0.5;
                } else {
                    // If either start or end date is a weekend, return 0
                    return 0;
                }
            }
            if (
                $startDate->isSameDay($endDate) &&
                $this->getSessionNumber($fromSession) !== $this->getSessionNumber($toSession)
            ) {
                
                // Inner condition to check if both start and end dates are weekdays
                if (!$startDate->isWeekend() && !$endDate->isWeekend()) {
                    return 1;
                } else {
                    // If either start or end date is a weekend, return 0
                    return 0;
                }
            }
            $totalDays = 0;

            while ($startDate->lte($endDate)) {
                // Check if it's a weekday (Monday to Friday)
                if ($startDate->isWeekday()) {
                    $totalDays += 1;
                }

                // Move to the next day
                $startDate->addDay();
            }

            // Deduct weekends based on the session numbers
            if ($this->getSessionNumber($fromSession) > 1) {
                $totalDays -= $this->getSessionNumber($fromSession) - 1; // Deduct days for the starting session
            }
            if ($this->getSessionNumber($toSession) < 2) {
                $totalDays -= 2 - $this->getSessionNumber($toSession); // Deduct days for the ending session
            }
            // Adjust for half days
            if ($this->getSessionNumber($fromSession) === $this->getSessionNumber($toSession)) {
                // If start and end sessions are the same, check if the session is not 1
                if ($this->getSessionNumber($fromSession) !== 1) {
                    $totalDays += 0.5; // Add half a day
                }
            }elseif($this->getSessionNumber($fromSession) !== $this->getSessionNumber($toSession)){
                if ($this->getSessionNumber($fromSession) !== 1) {
                    $totalDays += 1; // Add half a day
                }
            }
            else {
                $totalDays += ($this->getSessionNumber($toSession) - $this->getSessionNumber($fromSession) + 1) * 0.5;
            }

            return $totalDays;
            

        } catch (\Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }

    private function getSessionNumber($session)
    {
        // You might need to customize this based on your actual session values
        return (int) str_replace('Session ', '', $session);
    }


    public function render()
    {
        $employeeId = auth()->guard('emp')->user()->emp_id;
        
        $this->leaveRequests = LeaveRequest::where('status', 'Pending')->get();
        $matchingLeaveApplications = [];
    
        foreach ($this->leaveRequests as $leaveRequest) {
            $applyingToJson = trim($leaveRequest->applying_to);
            $applyingArray = is_array($applyingToJson) ? $applyingToJson : json_decode($applyingToJson, true);
    
            $ccToJson = trim($leaveRequest->cc_to);
            $ccArray = is_array($ccToJson) ? $ccToJson : json_decode($ccToJson, true);
    
            $isManagerInApplyingTo = isset($applyingArray[0]['manager_id']) && $applyingArray[0]['manager_id'] == $employeeId;
            $isEmpInCcTo = isset($ccArray[0]['emp_id']) && $ccArray[0]['emp_id'] == $employeeId;
    
            if ($isManagerInApplyingTo || $isEmpInCcTo) {
                $matchingLeaveApplications[] = $leaveRequest;
            }
        }

        $this->approvedLeaveRequests = LeaveRequest::where('status', 'approved')
        ->where(function ($query) use ($employeeId) {
            $query->whereJsonContains('applying_to', [['manager_id' => $employeeId]])
                ->orWhereJsonContains('cc_to', [['emp_id' => $employeeId]]);
        })
        ->join('employee_details', 'leave_applies.emp_id', '=', 'employee_details.emp_id')
        ->orderBy('created_at', 'desc')
        ->get(['leave_applies.*', 'employee_details.image', 'employee_details.first_name','employee_details.last_name']);
        $approvedLeaveApplications = [];
    
        foreach ($this->approvedLeaveRequests as $approvedLeaveRequest) {
            $applyingToJson = trim($approvedLeaveRequest->applying_to);
            $applyingArray = is_array($applyingToJson) ? $applyingToJson : json_decode($applyingToJson, true);
          
            $ccToJson = trim($approvedLeaveRequest->cc_to);
            $ccArray = is_array($ccToJson) ? $ccToJson : json_decode($ccToJson, true);
    
            $isManagerInApplyingTo = isset($applyingArray[0]['manager_id']) && $applyingArray[0]['manager_id'] == $employeeId;
            $isEmpInCcTo = isset($ccArray[0]['emp_id']) && $ccArray[0]['emp_id'] == $employeeId;
            $approvedLeaveRequest->formatted_from_date = Carbon::parse($approvedLeaveRequest->from_date)->format('d-m-Y');
            $approvedLeaveRequest->formatted_to_date = Carbon::parse($approvedLeaveRequest->to_date)->format('d-m-Y');
    
            if ($isManagerInApplyingTo || $isEmpInCcTo) {
                $approvedLeaveApplications[] = $approvedLeaveRequest;
            }
        }
        $this->approvedLeaveApplicationsList = $approvedLeaveApplications;

        $approvedLeaveApplicationsList =  $filteredData = array_filter($this->approvedLeaveApplicationsList, function ($item) {
            return stripos($item->first_name, $this->search) !== false ||
                   stripos($item->emp_id, $this->search) !== false ||
                   stripos($item->leave_type, $this->search) !== false;
        });
 
        $this->leaveApplications = $matchingLeaveApplications;
           return view('livewire.employees-review', [
            'leaveApplications' => $this->leaveApplications,
            'approvedLeaveApplicationsList' => $this->approvedLeaveApplicationsList,
            'approvedLeaveApplicationsList' => $filteredData

        ]);
    }
 

}
