<?php

namespace App\Livewire;
use App\Models\EmployeeDetails;
use App\Models\SwipeRecord;
use App\Models\LeaveRequest;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
class WhoIsInChart extends Component
{
   
    public $leaveRequests;
    
    public $swipe_records;
 

    public $currentDate;
    public $from_date;
    
    // public function updatedFrom_date($value)
    // {
    //     $this->currentDate = $value;
    // }
    public function render()
    {
      
 
       
       
        $loggedInEmpId = Auth::guard('emp')->user()->emp_id;
        $employees=EmployeeDetails::where('manager_id',$loggedInEmpId)->select('emp_id', 'first_name', 'last_name')->get();
      
        $employees2=EmployeeDetails::where('manager_id',$loggedInEmpId)->select('emp_id', 'first_name', 'last_name')->count();
       
        $currentDate = Carbon::now()->format('Y-m-d');
        
        $employees1 = EmployeeDetails::where('manager_id', $loggedInEmpId)
        ->select('emp_id', 'first_name', 'last_name')
        ->whereNotIn('emp_id', function ($query) {
            $query->select('emp_id')
                ->from('swipe_records')
                ->whereDate('created_at', today());
        })
        ->whereNotIn('emp_id', function ($query) {
            $query->select('emp_id')
                ->from('leave_applies')
                ->whereDate('from_date', '=', today())
                ->whereDate('to_date', '>=', today());
        })
        ->get();
         
         
         $employeesCount = EmployeeDetails::where('manager_id', $loggedInEmpId)
         ->select('emp_id', 'first_name', 'last_name')
         ->whereNotIn('emp_id', function ($query) {
             $query->select('emp_id')
                 ->from('swipe_records')
                 ->whereDate('created_at', today());
         })
         ->whereNotIn('emp_id', function ($query) {
             $query->select('emp_id')
                 ->from('leave_applies')
                 ->whereDate('from_date', '=', today())
                 ->whereDate('to_date', '>=', today());
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
        $swipes1=$swipes->count();
        $approvedLeaveRequests = LeaveRequest::join('employee_details', 'leave_applies.emp_id', '=', 'employee_details.emp_id')
        ->where('leave_applies.status', 'approved')
        ->whereIn('leave_applies.emp_id', $employees->pluck('emp_id'))
        ->whereDate('from_date', '<=', $currentDate)
        ->whereDate('to_date', '>=', $currentDate)
        ->get(['leave_applies.*', 'employee_details.first_name','employee_details.last_name'])
        ->map(function ($leaveRequest) {
            // Calculate the number of days between from_date and to_date
            $fromDate = \Carbon\Carbon::parse($leaveRequest->from_date);
            $toDate = \Carbon\Carbon::parse($leaveRequest->to_date);
    
            $leaveRequest->number_of_days = $fromDate->diffInDays($toDate) + 1; // Add 1 to include both start and end dates
    
            return $leaveRequest;
        });
       
       
         // Group by emp_id to get distinct records for each employee->get();
         $approvedLeaveRequests1 = LeaveRequest::join('employee_details', 'leave_applies.emp_id', '=', 'employee_details.emp_id')
         ->where('leave_applies.status', 'approved')
         ->whereIn('leave_applies.emp_id', $employees->pluck('emp_id'))
         ->whereDate('from_date', '<=', $currentDate)
         ->whereDate('to_date', '>=', $currentDate)
         ->count();
     
        
       
        $calculateAbsent=($employeesCount/$employees2)*100;
        $calculateApprovedLeaves=($approvedLeaveRequests1/$employees2)*100;
        
       
        return view('livewire.who-is-in-chart',['Swipes'=> $swipes,'ApprovedLeaveRequests'=>$approvedLeaveRequests,'ApprovedLeaveRequestsCount'=>$approvedLeaveRequests1,'Employees1'=> $employees1,'employeesCount1'=>$employeesCount,'Employess2'=> $employees2,'CalculateAbsentees'=>$calculateAbsent,'CalculateApprovedLeaves'=>$calculateApprovedLeaves,'TotalEmployees'=>$employees2,'currentdate'=>$currentDate,'Swipes1'=>$swipes1]);
    }
}
