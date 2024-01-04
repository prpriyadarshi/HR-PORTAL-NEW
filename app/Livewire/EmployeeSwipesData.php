<?php

namespace App\Livewire;
use Illuminate\Support\Facades\Auth;
use App\Models\SwipeRecord;
use App\Models\EmployeeDetails;
use Livewire\Component;

class EmployeeSwipesData extends Component
{
    public $employees;
    
   
    public $date = "01/04/2024 - 01/04/2024";

    public $swipeTime='';
   

   
    
   
    
    public function dateRange($selectedDate)
    {
        dd('hii');
        // Do something with the selected date
        // For example, you can update the $date property
        // $this->date = $selectedDate;
    }
    public function render()
    {
        
        $currentDate = now()->toDateString(); 
        $loggedInEmpId = Auth::guard('emp')->user()->emp_id;
        $employees=EmployeeDetails::where('manager_id',$loggedInEmpId)->select('emp_id', 'first_name', 'last_name')->get();
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
        $todaySwipeIN = SwipeRecord::where('emp_id',auth()->guard('emp')->user()->emp_id)->whereDate('created_at', $currentDate)
        ->where('in_or_out', 'IN')
        ->first();
       
        if ($todaySwipeIN) {
            // Swipe IN time for today
          
            $this->swipeTime = $todaySwipeIN->swipe_time;
          

        } 
        return view('livewire.employee-swipes-data',['SignedInEmployees'=>$swipes,'SwipeTime'=>$this->swipeTime]);
    }
}
