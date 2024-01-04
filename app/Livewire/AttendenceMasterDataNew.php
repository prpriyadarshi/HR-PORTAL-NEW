<?php

namespace App\Livewire;
use Illuminate\Support\Facades\Auth;
use App\Models\EmployeeDetails;
use App\Models\HolidayCalendar;
use App\Models\SwipeRecord;
use App\Models\LeaveRequest;
use Carbon\Carbon;
use DateTime;
use Livewire\Component;

class AttendenceMasterDataNew extends Component
{
    public $currentMonth;

    public  $holiday; 
    public $daysInMonth;

    public $distinctDatesMap;
    public function render()
    {
        $currentMonth1 = date('n');
        $firstDayOfCurrentMonth = strtotime(date('Y-m-01')); // First day of the current month
        $previousMonth = strtotime('-1 month', $firstDayOfCurrentMonth); // First day of the previous month

        $previousMonthName = date('F', $previousMonth); 
      
        $currentYear1 = date('Y');
        $year = 2023; 
        $this->holiday = HolidayCalendar::where('month', $previousMonthName)
            ->where('year', $year)
            ->pluck('date');
        
       
        // Total number of days in the current month
         $daysInMonth1= cal_days_in_month(CAL_GREGORIAN, $currentMonth1, $currentYear1);
     
        $currentMonth = now()->format('n');
        $this->daysInMonth = now()->daysInMonth;
       
        $loggedInEmpId = Auth::guard('emp')->user()->emp_id;
        $employees=EmployeeDetails::where('manager_id',$loggedInEmpId)->select('emp_id', 'first_name', 'last_name')->get();
        $employeescount=EmployeeDetails::where('manager_id',$loggedInEmpId)->count();
      
    // You can now loop through $attendanceRecords to access the records
    
  
   
    $managerId = $loggedInEmpId;
// $swipes now contains $managerId = $loggedInEmpId;

$employees = EmployeeDetails::where('manager_id', $managerId)
->select('emp_id', 'first_name', 'last_name','job_title','city')
->get();

$employeeIds = $employees->pluck('emp_id');

$distinctDatesMap = SwipeRecord::whereIn('emp_id', $employeeIds)
    ->whereMonth('created_at', 12) // December
    ->selectRaw('DISTINCT emp_id, DATE(created_at) as distinct_date ')
    ->get()
    ->groupBy('emp_id')
    ->map(function ($dates) {
        return $dates->pluck('distinct_date')->toArray();
    })
    ->toArray();
  
    

    
    $distinctDatesMapCount = SwipeRecord::whereIn('swipe_records.emp_id', $employeeIds)
    ->whereMonth('swipe_records.created_at', 12) // December
    ->whereRaw('DAYOFWEEK(swipe_records.created_at) NOT IN (1, 7)') // Exclude Sunday (1) and Saturday (7)
    ->join('employee_details', 'swipe_records.emp_id', '=', 'employee_details.emp_id')
    ->selectRaw('swipe_records.emp_id, COUNT(DISTINCT DATE(swipe_records.created_at)) as date_count, employee_details.first_name, employee_details.last_name')
    ->groupBy('swipe_records.emp_id', 'employee_details.first_name', 'employee_details.last_name')
    ->get()
    ->keyBy('emp_id')
    ->toArray();
  
    $approvedLeaveRequests = LeaveRequest::join('employee_details', 'leave_applies.emp_id', '=', 'employee_details.emp_id')
    ->where('leave_applies.status', 'approved')
    ->whereIn('leave_applies.emp_id', $employees->pluck('emp_id'))
    ->where('employee_details.manager_id', $managerId) // Add condition for manager's ID
    ->whereDate('from_date', '>=', '2023-12-01') // Start of the current month
    ->whereDate('to_date', '<=','2023-12-31') // End of the current month
    ->get(['leave_applies.*', 'employee_details.first_name', 'employee_details.last_name'])
    ->map(function ($leaveRequest) {
        // Calculate the number of days between from_date and to_date
        $fromDate = \Carbon\Carbon::parse($leaveRequest->from_date);
        $toDate = \Carbon\Carbon::parse($leaveRequest->to_date);
    
        $leaveRequest->number_of_days = $fromDate->diffInDays($toDate) + 1; // Add 1 to include both start and end dates
    
        return $leaveRequest;
    });
    $approvedLeaveRequests1 = LeaveRequest::join('employee_details', 'leave_applies.emp_id', '=', 'employee_details.emp_id')
    ->where('leave_applies.status', 'approved')
    ->whereIn('leave_applies.emp_id', $employeeIds)
    ->whereDate('from_date', '>=', '2023-12-01')
    ->whereDate('to_date', '<=', '2023-12-31')
    ->get(['leave_applies.*', 'employee_details.emp_id', 'employee_details.first_name', 'employee_details.last_name'])
    ->mapWithKeys(function ($leaveRequest) {
        $fromDate = \Carbon\Carbon::parse($leaveRequest->from_date);
        $toDate = \Carbon\Carbon::parse($leaveRequest->to_date);

        $number_of_days = $fromDate->diffInDays($toDate) + 1;

        $dates = [];
        for ($i = 0; $i < $number_of_days; $i++) {
            $dates[] = $fromDate->copy()->addDays($i)->toDateString();
        }

        return [
            $leaveRequest->emp_id => [
                'emp_id' => $leaveRequest->emp_id,
              
                'dates' => $dates,
            ],
        ];
    });

 
// Merge the two collections
 
// $presentEmployees now contains the list of employees present for the current month
 

        return view('livewire.attendence-master-data-new',['Employees'=>$employees,'EmployeesCount'=>$employeescount,'DistinctDatesMap'=>$distinctDatesMap,'DistinctDatesMapCount'=>$distinctDatesMapCount,'Holiday'=> $this->holiday,'ApprovedLeaveRequests1'=>$approvedLeaveRequests1 ]);
    }
}
