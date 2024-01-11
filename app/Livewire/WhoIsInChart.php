<?php
 
namespace App\Livewire;
use App\Models\EmployeeDetails;
use App\Models\SwipeRecord;
use App\Models\LeaveRequest;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
 
 
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
 
class WhoIsInChart extends Component
{
    use WithPagination;
   
    public $leaveRequests;
   
    public $swipe_records;
 
    public $approvedLeaveRequests;
    public $currentDate;
 
    public $notFound;
    public $notFound2;
    public $notFound3;
    public $isdatepickerclicked=0;
   
    public $from_date;
   
   
    public $search = '';
    public $results=[];
 
    public function mount()
    {
       
        $this->currentDate = Carbon::now()->format('Y-m-d');
    }
    public function downloadExcelForLateArrivals()
    {
    // Fetch employee id and name from SwipeRecord model
    $loggedInEmpId = Auth::guard('emp')->user()->emp_id;
    $employees=EmployeeDetails::where('manager_id',$loggedInEmpId)->select('emp_id', 'first_name', 'last_name')->get();
       
   
     
    if($this->isdatepickerclicked ==0)
    {
        $currentDate = now()->toDateString();
    }
    else
    {
        $currentDate=$this->from_date;
    }
   
   
   
 
    $swipes = SwipeRecord::whereIn('id', function ($query) use ($employees, $currentDate) {
        $query->selectRaw('MIN(id)')
            ->from('swipe_records')
            ->whereIn('emp_id', $employees->pluck('emp_id'))
            ->whereDate('created_at', $currentDate)
            ->groupBy('emp_id');
    })
    ->join('employee_details', 'swipe_records.emp_id', '=', 'employee_details.emp_id')
    ->select('swipe_records.*', 'employee_details.first_name', 'employee_details.last_name')
    ->get();
   
    // Your data to be exported to Excel
    $data = [ ['List of Late Arrival Employees on ' . Carbon::parse($currentDate)->format('jS F, Y')],
        ['Employee ID', 'Name','Sign In Time','Late By(HH:MM)'],
   
    ];
    foreach ($swipes as $employee) {
        $swipeTime = \Carbon\Carbon::parse($employee->swipe_time);
        $swipeTime1 = Carbon::parse($employee['created_at'])->format('H:i:s');
        $lateArrivalTime = $swipeTime->diff(\Carbon\Carbon::parse('10:00'))->format('%H:%I');
        $isLateBy10AM = $swipeTime->format('H:i') > '10:00';
        if($isLateBy10AM)
        {
          $data[] = [$employee['emp_id'], $employee['first_name'] . ' ' . $employee['last_name'],$swipeTime1,$lateArrivalTime];
        }
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
        'Content-Type' => 'application/vnd.ms-excel',
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
   public function downloadExcelForEarlyArrivals()
   {
   // Fetch employee id and name from SwipeRecord model
   $loggedInEmpId = Auth::guard('emp')->user()->emp_id;
   $employees=EmployeeDetails::where('manager_id',$loggedInEmpId)->select('emp_id', 'first_name', 'last_name')->get();
     
 
     
   if($this->isdatepickerclicked ==0)
   {
       $currentDate = now()->toDateString();
   }
   else
   {
       $currentDate=$this->from_date;
   }
   
   
 
   $swipes = SwipeRecord::whereIn('id', function ($query) use ($employees, $currentDate) {
       $query->selectRaw('MIN(id)')
           ->from('swipe_records')
           ->whereIn('emp_id', $employees->pluck('emp_id'))
           ->whereDate('created_at', $currentDate)
           ->groupBy('emp_id');
   })
   ->join('employee_details', 'swipe_records.emp_id', '=', 'employee_details.emp_id')
   ->select('swipe_records.*', 'employee_details.first_name', 'employee_details.last_name')
   ->get();
   
   // Your data to be exported to Excel
   $data = [
    ['List of On Time Employees on ' . Carbon::parse($currentDate)->format('jS F, Y')],
     ['Employee ID', 'Name','Sign In Time','Late By(HH:MM)'],
 
   ];
   foreach ($swipes as $employee) {
       $swipeTime = \Carbon\Carbon::parse($employee->swipe_time);
       $swipeTime1 = Carbon::parse($employee['created_at'])->format('H:i:s');
       $earlyArrivalTime = $swipeTime->diff(\Carbon\Carbon::parse('10:00'))->format('%H:%I');
       $isEarlyBy10AM = $swipeTime->format('H:i') < '10:00';
       if($isEarlyBy10AM)
       {
         $data[] = [$employee['emp_id'], $employee['first_name'] . ' ' . $employee['last_name'], $swipeTime1,$earlyArrivalTime];
       }
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
       'Content-Disposition' => 'attachment; filename="ON_TIME.csv"',
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
  public function downloadExcelForLeave()
  {
      $loggedInEmpId = Auth::guard('emp')->user()->emp_id;
      $employees=EmployeeDetails::where('manager_id',$loggedInEmpId)->select('emp_id', 'first_name', 'last_name')->get();
     
       
      if($this->isdatepickerclicked ==0)
      {
          $currentDate = now()->toDateString();
      }
      else
      {
          $currentDate=$this->from_date;
      }
     
      $approvedLeaveRequests = LeaveRequest::join('employee_details', 'leave_applies.emp_id', '=', 'employee_details.emp_id')
      ->where('leave_applies.status', 'approved')
      ->whereIn('leave_applies.emp_id', $employees->pluck('emp_id'))
      ->whereDate('from_date', '<=', $currentDate)
      ->whereDate('to_date', '>=', $currentDate)
      ->get(['leave_applies.*', 'employee_details.first_name', 'employee_details.last_name'])
      ->map(function ($leaveRequest) {
          // Calculate the number of days between from_date and to_date
          $fromDate = \Carbon\Carbon::parse($leaveRequest->from_date);
          $toDate = \Carbon\Carbon::parse($leaveRequest->to_date);
 
          $leaveRequest->number_of_days = $fromDate->diffInDays($toDate) + 1; // Add 1 to include both start and end dates
 
          return $leaveRequest;
      });
     
     
      // Your data to be exported to Excel
      $data = [ ['List of On Leave Employees on ' . Carbon::parse($currentDate)->format('jS F, Y')],
         ['Employee ID', 'Name','Leave Type','Leave Days'],
     
      ];
      foreach ($approvedLeaveRequests as $employee) {
          $data[] = [$employee['emp_id'], $employee['first_name'] . ' ' . $employee['last_name'],$employee['leave_type'],$employee['number_of_days']];
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
          'Content-Disposition' => 'attachment; filename="ON_LEAVE"',
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
    public function downloadExcelForAbsent()
    {
        $loggedInEmpId = Auth::guard('emp')->user()->emp_id;
        $employees=EmployeeDetails::where('manager_id',$loggedInEmpId)->select('emp_id', 'first_name', 'last_name')->get();
       
        if($this->isdatepickerclicked ==0)
        {
            $currentDate = now()->toDateString();
        }
        else
        {
            $currentDate=$this->from_date;
        }
       
        $approvedLeaveRequests = LeaveRequest::join('employee_details', 'leave_applies.emp_id', '=', 'employee_details.emp_id')
        ->where('leave_applies.status', 'approved')
        ->whereIn('leave_applies.emp_id', $employees->pluck('emp_id'))
        ->whereDate('from_date', '<=', $currentDate)
        ->whereDate('to_date', '>=', $currentDate)
        ->get(['leave_applies.*', 'employee_details.first_name', 'employee_details.last_name'])
        ->map(function ($leaveRequest) {
            // Calculate the number of days between from_date and to_date
            $fromDate = \Carbon\Carbon::parse($leaveRequest->from_date);
            $toDate = \Carbon\Carbon::parse($leaveRequest->to_date);
 
            $leaveRequest->number_of_days = $fromDate->diffInDays($toDate) + 1; // Add 1 to include both start and end dates
 
            return $leaveRequest;
        });
        $employees1 = EmployeeDetails::where('manager_id', $loggedInEmpId)
        ->select('emp_id', 'first_name', 'last_name')
        ->whereNotIn('emp_id', function ($query) use ($loggedInEmpId, $currentDate, $approvedLeaveRequests) {
            $query->select('emp_id')
                ->from('swipe_records')
                ->where('manager_id', $loggedInEmpId)
                ->whereDate('created_at', $currentDate);
        })
        ->whereNotIn('emp_id', $approvedLeaveRequests->pluck('emp_id'))
        ->get()->toArray();
       
        // Your data to be exported to Excel
        $data = [ ['List of Absent Employees on ' . Carbon::parse($currentDate)->format('jS F, Y')],
            ['Employee ID', 'Name'],
       
        ];
        foreach ($employees1 as $employee) {
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
            'Content-Disposition' => 'attachment; filename="NOT_YET_IN"                                                                                                         .csv"',
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
   
 
    public function searchFilters()
    {
    // Your logic to perform the search based on $this->search
    // Update the $results property with the search results
 
    // Example:
 
    $loggedInEmpId1 = Auth::guard('emp')->user()->emp_id;
    $this->results = EmployeeDetails::where(function ($query) use ($loggedInEmpId1) {
        $query->where('manager_id', $loggedInEmpId1)
            ->where(function ($query) {
                $query->where('first_name', 'like', '%' . $this->search . '%')
                    ->orWhere('last_name', 'like', '%' . $this->search . '%')
                    ->orWhere('emp_id', 'like', '%' . $this->search . '%');
            });
    })->get();
   
    }
    public function updateDate()
    {
        $this->isdatepickerclicked=1;
        $this->currentDate=$this->from_date;
    }
     public function clearSearch()
    {
         $this->search = '';
         $this->results = [];
    }
 
 
    public function render()
    {
     
 
       
       
        $loggedInEmpId = Auth::guard('emp')->user()->emp_id;
       
 
    // Apply search filter if a search term is provided
   
 
    // Fetch the employees based on the applied filters
   
 
        $employees=EmployeeDetails::where('manager_id',$loggedInEmpId)->select('emp_id', 'first_name', 'last_name')->get();
     
        $employees2=EmployeeDetails::where('manager_id',$loggedInEmpId)->select('emp_id', 'first_name', 'last_name')->count();
       
     
        if($this->isdatepickerclicked ==0)
        {
         
            $currentDate = now()->toDateString();
        }
        else
        {
            $currentDate=$this->from_date;
        }
        $approvedLeaveRequests = LeaveRequest::join('employee_details', 'leave_applies.emp_id', '=', 'employee_details.emp_id')
        ->where('leave_applies.status', 'approved')
        ->whereIn('leave_applies.emp_id', $employees->pluck('emp_id'))
        ->whereDate('from_date', '<=', $currentDate)
        ->whereDate('to_date', '>=', $currentDate)
        ->get(['leave_applies.*', 'employee_details.first_name', 'employee_details.last_name'])
        ->map(function ($leaveRequest) {
            // Calculate the number of days between from_date and to_date
            $fromDate = \Carbon\Carbon::parse($leaveRequest->from_date);
            $toDate = \Carbon\Carbon::parse($leaveRequest->to_date);
 
            $leaveRequest->number_of_days = $fromDate->diffInDays($toDate) + 1; // Add 1 to include both start and end dates
 
            return $leaveRequest;
        });
       
    // Update $approvedLeaveRequests1 based on the selected date
    $approvedLeaveRequests1 = LeaveRequest::join('employee_details', 'leave_applies.emp_id', '=', 'employee_details.emp_id')
        ->where('leave_applies.status', 'approved')
        ->whereIn('leave_applies.emp_id', $employees->pluck('emp_id'))
        ->whereDate('from_date', '<=', $currentDate)
        ->whereDate('to_date', '>=', $currentDate)
        ->count();
       
        $employees1 = EmployeeDetails::where('manager_id', $loggedInEmpId)
        ->select('emp_id', 'first_name', 'last_name')
        ->whereNotIn('emp_id', function ($query) use ($loggedInEmpId, $currentDate, $approvedLeaveRequests) {
            $query->select('emp_id')
                ->from('swipe_records')
                ->where('manager_id', $loggedInEmpId)
                ->whereDate('created_at', $currentDate);
        })
        ->whereNotIn('emp_id', $approvedLeaveRequests->pluck('emp_id'))
        ->get();
     
// Output the SQL query for debugging
 
   
         
$employeesCount = EmployeeDetails::where('manager_id', $loggedInEmpId)
->select('emp_id', 'first_name', 'last_name')
->whereNotIn('emp_id', function ($query) use ($loggedInEmpId, $currentDate, $approvedLeaveRequests) {
    $query->select('emp_id')
        ->from('swipe_records')
        ->where('manager_id', $loggedInEmpId)
        ->whereDate('created_at', $currentDate);
})
->whereNotIn('emp_id', $approvedLeaveRequests->pluck('emp_id'))
->count();
 
        // $currentDate = Carbon::now()->format('Y-m-d');
   
        $swipes = SwipeRecord::whereIn('id', function ($query) use ($employees, $currentDate) {
            $query->selectRaw('MIN(id)')
                ->from('swipe_records')
                ->whereIn('emp_id', $employees->pluck('emp_id'))
                ->whereDate('created_at', $currentDate)
                ->groupBy('emp_id');
        })
        ->join('employee_details', 'swipe_records.emp_id', '=', 'employee_details.emp_id')
        ->select('swipe_records.*', 'employee_details.first_name', 'employee_details.last_name')
        ->get();
       
        $lateSwipesCount = SwipeRecord::whereIn('id', function ($query) use ($employees, $currentDate) {
            $query->selectRaw('MIN(id)')
                ->from('swipe_records')
                ->whereIn('emp_id', $employees->pluck('emp_id'))
                ->whereDate('created_at', $currentDate)
                ->groupBy('emp_id');
        })
        ->join('employee_details', 'swipe_records.emp_id', '=', 'employee_details.emp_id')
        ->select('swipe_records.*', 'employee_details.first_name', 'employee_details.last_name')
        ->where(function ($query) {
            $query->whereTime('swipe_records.swipe_time', '>', '10:00:00'); // Assuming 'swipe_time' is a datetime column
        })
        ->count();
        $earlySwipesCount = SwipeRecord::whereIn('id', function ($query) use ($employees, $currentDate) {
            $query->selectRaw('MIN(id)')
                ->from('swipe_records')
                ->whereIn('emp_id', $employees->pluck('emp_id'))
                ->whereDate('created_at', $currentDate)
                ->groupBy('emp_id');
        })
        ->join('employee_details', 'swipe_records.emp_id', '=', 'employee_details.emp_id')
        ->select('swipe_records.*', 'employee_details.first_name', 'employee_details.last_name')
        ->where(function ($query) {
            $query->whereTime('swipe_records.swipe_time', '<', '10:00:00'); // Assuming 'swipe_time' is a datetime column
        })
        ->count();
       
       
        $swipes2= SwipeRecord::whereIn('id', function ($query) use ($employees, $currentDate) {
            $query->selectRaw('MIN(id)')
                ->from('swipe_records')
                ->whereIn('emp_id', $employees->pluck('emp_id'))
                ->whereDate('created_at', $currentDate)
                ->groupBy('emp_id');
        })
        ->join('employee_details', 'swipe_records.emp_id', '=', 'employee_details.emp_id')
        ->select('swipe_records.*', 'employee_details.first_name', 'employee_details.last_name')
        ->get();
        $swipes_count = $swipes2->count();
       
        $calculateAbsent=($employeesCount/$employees2)*100;
        $calculateApprovedLeaves=($approvedLeaveRequests1/$employees2)*100;
       
        $nameFilter = $this->search;
        $swipes = $swipes ->filter(function ($swipe) use ($nameFilter) {
            return stripos($swipe->first_name, $nameFilter) !== false ||
                   stripos($swipe->last_name, $nameFilter) !== false ||
                   stripos($swipe->emp_id, $nameFilter) !== false ||
                   stripos($swipe->swipe_time, $nameFilter) !== false;
        });
        $employees1 = $employees1->filter(function ($swipe) use ($nameFilter) {
            return stripos($swipe->first_name, $nameFilter) !== false ||
                   stripos($swipe->last_name, $nameFilter) !== false ||
                   stripos($swipe->emp_id, $nameFilter) !== false ||
                   stripos($swipe->swipe_time, $nameFilter) !== false;
        });
        $approvedLeaveRequests = $approvedLeaveRequests->filter(function ($swipe) use ($nameFilter) {
            return stripos($swipe->first_name, $nameFilter) !== false ||
                   stripos($swipe->last_name, $nameFilter) !== false ||
                   stripos($swipe->emp_id, $nameFilter) !== false ||
                   stripos($swipe->swipe_time, $nameFilter) !== false;
        });
 
 
        // Check if $swipes is empty after filtering
        $this->notFound = $swipes->isEmpty();
        $this->notFound= $employees1->isEmpty();
        $this->notFound3= $approvedLeaveRequests->isEmpty();
       
        return view('livewire.who-is-in-chart',['Swipes'=> $swipes,'ApprovedLeaveRequests'=>$approvedLeaveRequests,'ApprovedLeaveRequestsCount'=>$approvedLeaveRequests1,'Employees1'=> $employees1,'employeesCount1'=>$employeesCount,'Employess2'=> $employees2,'CalculateAbsentees'=>$calculateAbsent,'CalculateApprovedLeaves'=>$calculateApprovedLeaves,'TotalEmployees'=>$employees2,'currentdate' => $this->currentDate,'Swipes1'=> $swipes_count,'EarlySwipesCount'=>$earlySwipesCount,'LateSwipesCount'=>$lateSwipesCount]);
    }
}