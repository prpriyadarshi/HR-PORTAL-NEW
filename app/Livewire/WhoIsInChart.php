<?php

namespace App\Livewire;
use App\Models\EmployeeDetails;
use App\Models\SwipeRecord;
use App\Models\LeaveRequest;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
class WhoIsInChart extends Component
{
    use WithPagination;
   
    public $leaveRequests;
    
    public $swipe_records;
 

    public $currentDate;

    public $isdatepickerclicked=0;
    
    public $from_date;
    
    
    public $search = '';
    public $results=[];

    public function mount()
    {
        $this->currentDate = Carbon::now()->format('Y-m-d');
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
    if ($this->search) {
        $employeeIds = EmployeeDetails::where('manager_id', $loggedInEmpId)
            ->where('first_name', 'like', '%' . $this->search . '%')
            ->orWhere('last_name', 'like', '%' . $this->search . '%')
            ->pluck('emp_id');

        // Update other queries with the filtered employeeIds
    } else {
        // If no search term, get all employeeIds
        $employeeIds = EmployeeDetails::where('manager_id', $loggedInEmpId)->pluck('emp_id');
    }

    // Fetch the employees based on the applied filters
   

        $employees=EmployeeDetails::where('manager_id',$loggedInEmpId)->select('emp_id', 'first_name', 'last_name')->get();
     
        $employees2=EmployeeDetails::where('manager_id',$loggedInEmpId)->select('emp_id', 'first_name', 'last_name')->count();
        
        if($this->isdatepickerclicked ==0)
        {
          
           $currentDate = Carbon::now()->format('Y-m-d');
        }
        else
        {
            $currentDate=$this->from_date;
        }
       
        $employees1 = EmployeeDetails::where('manager_id', $loggedInEmpId)
        ->select('emp_id', 'first_name', 'last_name')
        ->whereNotIn('emp_id', function ($query) use ($loggedInEmpId, $currentDate) {
            $query->select('emp_id')
                ->from('swipe_records')
                ->where('manager_id', $loggedInEmpId)
                ->whereDate('created_at', $currentDate);
        })
        ->whereNotIn('emp_id', function ($query) use ($loggedInEmpId, $currentDate) {
            $query->select('emp_id')
                ->from('leave_applies')
                ->where('manager_id', $loggedInEmpId)
                ->whereDate('from_date', '>=', $currentDate)
                ->whereDate('to_date', '<=', $currentDate);
        })
        ->get();
         
         $employeesCount = EmployeeDetails::where('manager_id', $loggedInEmpId)
         ->select('emp_id', 'first_name', 'last_name')
         ->whereNotIn('emp_id', function ($query) use ($loggedInEmpId, $currentDate) {
             $query->select('emp_id')
                 ->from('swipe_records')
                 ->where('manager_id', $loggedInEmpId)
                 ->whereDate('created_at', $currentDate);
         })
         ->whereNotIn('emp_id', function ($query) use ($loggedInEmpId, $currentDate) {
             $query->select('emp_id')
                 ->from('leave_applies')
                 ->where('manager_id', $loggedInEmpId)
                 ->whereDate('from_date', '>=', $currentDate)
                 ->whereDate('to_date', '<=', $currentDate);
         })
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
       
        $swipes1 = $swipes->count();
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
       
        $calculateAbsent=($employeesCount/$employees2)*100;
        $calculateApprovedLeaves=($approvedLeaveRequests1/$employees2)*100;
        
       
        return view('livewire.who-is-in-chart',['Swipes'=> $swipes,'ApprovedLeaveRequests'=>$approvedLeaveRequests,'ApprovedLeaveRequestsCount'=>$approvedLeaveRequests1,'Employees1'=> $employees1,'employeesCount1'=>$employeesCount,'Employess2'=> $employees2,'CalculateAbsentees'=>$calculateAbsent,'CalculateApprovedLeaves'=>$calculateApprovedLeaves,'TotalEmployees'=>$employees2,'currentdate' => $this->currentDate,'Swipes1'=>$swipes1]);
    }
}
