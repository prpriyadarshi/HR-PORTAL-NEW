<?php

namespace App\Livewire;
use App\Models\SwipeRecord;
use Livewire\Component;
use Carbon\Carbon;
class Attendance extends Component
{
    public $currentDate;
    public $currentWeekday;
    public $swipe_record;
    public $actualHours = [];
    public $firstSwipeTime;
    public $secondSwipeTime;
    public $swiperecords;
    public $currentDate1;
    public $swiperecord;

    public $swipeRecordId;
    public $view_student_emp_id; 
    public $view_student_swipe_time;
    public $view_student_in_or_out;
    public $employeeDetails;
    public $student;
    public $selectedRecordId = null;
    

    public function mount()
    {
        
        // Get the current date and store it in the $currentDate property
        $this->currentDate = date('d');
        $this->currentWeekday = date('D');
        $this->currentDate1 = date('d M Y'); 
        $this->swiperecords=SwipeRecord::all();
        // You can change the date format as needed
    }
   
   
  

private function calculateActualHours($swipe_records)
{
    $this->actualHours = [];

    for ($i = 0; $i < count($swipe_records) - 1; $i += 2) {
        $firstSwipeTime = strtotime($swipe_records[$i]->swipe_time);
        $secondSwipeTime = strtotime($swipe_records[$i + 1]->swipe_time);

        $timeDifference = $secondSwipeTime - $firstSwipeTime;

        $hours = floor($timeDifference / 3600);
        $minutes = floor(($timeDifference % 3600) / 60);

        $this->actualHours[] = sprintf("%02dhrs %02dmins", $hours, $minutes);
    }
}
  public function viewDetails($id)
  {
   
    $student = SwipeRecord::find($id);
    
   
    // $this->view_student_id = $student->student_id;
    $this->view_student_emp_id = $student->emp_id;
    
    $this->view_student_swipe_time= $student->swipe_time;
    
    $this->view_student_in_or_out= $student->in_or_out;
    
  }
 
  public function closeViewStudentModal()
  {
      $this->view_student_emp_id = '';
      $this->view_student_swipe_time = '';
      $this->view_student_in_or_out = '';
     
  }
    public function render()
    {
        $currentDate = Carbon::now()->format('Y-m-d');
        $today = Carbon::today();
        $data = SwipeRecord::join('employee_details', 'swipe_records.emp_id', '=', 'employee_details.emp_id')
        ->where('swipe_records.emp_id', auth()->guard('emp')->user()->emp_id)
        ->whereDate('swipe_records.created_at', $today)
        ->select('swipe_records.*', 'employee_details.first_name','employee_details.last_name')
        ->get();
      
        
        // Fetch records for today's date
        //$swipe_records = SwipeRecord::all();
           $swipe_records = SwipeRecord::where('emp_id',auth()->guard('emp')->user()->emp_id)->whereDate('created_at', $currentDate)->get();
           $swipe_records1 = SwipeRecord::where('emp_id',auth()->guard('emp')->user()->emp_id)->orderBy('created_at', 'desc')->get(); 
                 
                 
            // $this->calculateActualHours();
            
            $this->calculateActualHours($swipe_records);
            return view('livewire.attendance',['Swiperecords'=>$swipe_records,'Swiperecords1'=>$swipe_records1,'data'=>$data]);
    }
}
