<?php

namespace App\Livewire;
use Illuminate\Support\Facades\Auth;
use App\Models\EmployeeDetails;
use App\Models\HolidayCalendar;
use App\Models\SwipeRecord;
use App\Models\LeaveRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Carbon\Carbon;
use DateTime;
use Livewire\Component;

class AttendenceMasterDataNew extends Component
{
    public $currentMonth;

    public $searching=1;
    public  $holiday;
    public $notFound;


  
    public $search;
    public $filteredEmployees;
    public $daysInMonth;
 
    public $results=[];
    public $distinctDatesMap;

    public function searchfilter()
    {
        $searching=1;
        $currentDate = now()->toDateString(); 
        $loggedInEmpId = Auth::guard('emp')->user()->emp_id;
        $employees=EmployeeDetails::where('manager_id',$loggedInEmpId)->select('emp_id', 'first_name', 'last_name')->get();
        $nameFilter = $this->search; // Assuming $this->search contains the name filter
$filteredEmployees = $employees->filter(function ($employee) use ($nameFilter) {
    return stripos($employee->first_name, $nameFilter) !== false ||
        stripos($employee->last_name, $nameFilter) !== false ||
        stripos($employee->emp_id, $nameFilter) !== false;
});

if ($filteredEmployees->isEmpty()) {
    $this->notFound = true; // Set a flag indicating that the name was not found
} else {
    $this->notFound = false;
}
        dd($filteredEmployees);
       
      
    }
    public function downloadExcel()
    {
         // Your data to be exported to Excel
  // Fetch employee id and name from SwipeRecord model
  $loggedInEmpId = Auth::guard('emp')->user()->emp_id;
  $employees=EmployeeDetails::where('manager_id',$loggedInEmpId)->select('emp_id', 'first_name', 'last_name')->get();
     
 
    
  
  
  

 
  
  // Your data to be exported to Excel
  $data = [ ['List of Employees  ' ],
      ['Employee ID', 'Name'],
 
  ];


$employeeIds = $employees->pluck('emp_id');
  $distinctDatesMapCount = SwipeRecord::whereIn('swipe_records.emp_id', $employeeIds)
  ->whereMonth('swipe_records.created_at', 12) // December
  ->whereRaw('DAYOFWEEK(swipe_records.created_at) NOT IN (1, 7)') // Exclude Sunday (1) and Saturday (7)
  ->join('employee_details', 'swipe_records.emp_id', '=', 'employee_details.emp_id')
  ->selectRaw('swipe_records.emp_id, COUNT(DISTINCT DATE(swipe_records.created_at)) as date_count, employee_details.first_name, employee_details.last_name')
  ->groupBy('swipe_records.emp_id', 'employee_details.first_name', 'employee_details.last_name')
  ->get()
  ->keyBy('emp_id')
  ->toArray();
  foreach ($employees as $employee) {
      

        $data[] = [$employee['emp_id'], $employee['first_name'] . ' ' . $employee['last_name']];
     
        
      
  }

  // Create a temporary file
  $tempFilePath = storage_path('app/public/' . Str::random(16) . '.csv');

  // Open the file for writing
  $file = fopen($tempFilePath, 'w');

  // Write the data to the file
  foreach ($data as $row) {
      fputcsv($file, $row);
  }

  // Close the file
  fclose($file);

  // Set the response headers for download
  $headers = [
      'Content-Type' => 'text/csv',
      'Content-Disposition' => 'attachment; filename="LATE_ARRIVALS"',
  ];

  // Return the response with the file and headers
  return response()->stream(
      function () use ($tempFilePath) {
          readfile($tempFilePath);
          // Delete the file after it has been streamed
          File::delete($tempFilePath);
      },
      200,
      $headers
  );
        
    }
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
$nameFilter = $this->search; // Assuming $this->search contains the name filter
$filteredEmployees = $employees->filter(function ($employee) use ($nameFilter) {
    return stripos($employee->first_name, $nameFilter) !== false ||
        stripos($employee->last_name, $nameFilter) !== false ||
        stripos($employee->emp_id, $nameFilter) !== false;
});

if ($filteredEmployees->isEmpty()) {
    $this->notFound = true; // Set a flag indicating that the name was not found
} else {
    $this->notFound = false;
}



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
