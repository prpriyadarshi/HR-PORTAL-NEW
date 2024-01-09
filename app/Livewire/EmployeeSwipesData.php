<?php

namespace App\Livewire;

use App\Models\EmployeeDetails;
use App\Models\SwipeRecord;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;


class EmployeeSwipesData extends Component
{
    public $employees;
      
       public $search;
    
    
       public $swipes;  
       public $date = "01/04/2024 - 01/04/2024";
    
       public $swipeTime='';
      
    
      
      
      
      
       public function dateRange($selectedDate)
       {
          
           // Do something with the selected date
           // For example, you can update the $date property
           // $this->date = $selectedDate;
       }
       public function testMethod()
       {
          
           $currentDate = now()->toDateString();
           $loggedInEmpId = Auth::guard('emp')->user()->emp_id;
           $employees=EmployeeDetails::where('manager_id',$loggedInEmpId)->select('emp_id', 'first_name', 'last_name')->get();
           $this->swipes = SwipeRecord::whereIn('id', function ($query) use ($employees, $currentDate) {
               $query->selectRaw('MIN(id)')
                   ->from('swipe_records')
                   ->whereIn('emp_id', $employees->pluck('emp_id'))
                   ->whereDate('created_at', $currentDate)
                   ->groupBy('emp_id');
           })
               ->join('employee_details', 'swipe_records.emp_id', '=', 'employee_details.emp_id')
               ->when($this->search, function ($query) {
                   $query->where(function ($subQuery) {
                       $subQuery->where('first_name', 'like', '%' . $this->search . '%')
                           ->orWhere('last_name', 'like', '%' . $this->search . '%');
                   });
               })
               ->select('swipe_records.*', 'employee_details.first_name', 'employee_details.last_name')
               ->get();
    
       }
       public function render()
       {
          
           $currentDate = now()->toDateString();
           $loggedInEmpId = Auth::guard('emp')->user()->emp_id;
           $employees=EmployeeDetails::where('manager_id',$loggedInEmpId)->select('emp_id', 'first_name', 'last_name')->get();
          
          
          
            
          
               $this->swipes = SwipeRecord::whereIn('id', function ($query) use ($employees, $currentDate) {
                   $query->selectRaw('MIN(id)')
                       ->from('swipe_records')
                       ->whereIn('emp_id', $employees->pluck('emp_id'))
                       ->whereDate('created_at', $currentDate)
                       ->groupBy('emp_id');
               })
               ->join('employee_details', 'swipe_records.emp_id', '=', 'employee_details.emp_id')
               ->select('swipe_records.*', 'employee_details.first_name', 'employee_details.last_name')
               ->get();
    
          
          
           $todaySwipeIN = SwipeRecord::where('emp_id',auth()->guard('emp')->user()->emp_id)->whereDate('created_at', $currentDate)
           ->where('in_or_out', 'IN')
           ->first();
          
           if ($todaySwipeIN) {
               // Swipe IN time for today
            
               $this->swipeTime = $todaySwipeIN->swipe_time;
            
    
           }
           return view('livewire.employee-swipes-data',['SignedInEmployees'=>$this->swipes,'SwipeTime'=>$this->swipeTime]);
       }
}
