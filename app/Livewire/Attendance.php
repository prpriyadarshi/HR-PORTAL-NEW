<?php

namespace App\Livewire;

use App\Models\EmployeeDetails;
use App\Models\SwipeRecord;
use App\Models\HolidayCalendar;
use App\Models\LeaveRequest;
use Livewire\Component;
use Carbon\Carbon;
class Attendance extends Component
{
    public $currentDate;
    public $currentWeekday;
    public $swipe_record;
    public $holiday;
    public $leaveApplies;
    public $actualHours = [];
    public $firstSwipeTime;
    public $secondSwipeTime;
    public $swiperecords;
    public $currentDate1;
    public $swiperecord;

    public $modalTitle = '';

    public $view_student_swipe_time;
  
    public $view_student_in_or_out;
    public $swipeRecordId;
    public $from_date;
    public $to_date;
    public $view_student_emp_id; 
    public $view_employee_swipe_time;
 
    public $view_table_in;

    public $view_table_out;
    public $employeeDetails;
    public $student;
    public $selectedRecordId = null;
    public $distinctDates;
    public $table;

    public function mount()
    {
      
     $swipeRecords = SwipeRecord::where('emp_id', auth()->guard('emp')->user()->emp_id)->get();

  // Group the swipe records by the date part only
      $groupedDates = $swipeRecords->groupBy(function ($record) {
         return \Carbon\Carbon::parse($record->created_at)->format('Y-m-d');
      });
      $this->distinctDates = $groupedDates->mapWithKeys(function ($records, $key) {
        $inRecord = $records->where('in_or_out', 'IN')->first();
        $outRecord = $records->where('in_or_out', 'OUT')->last();

        return [$key => [
            'in' => "IN",
            'first_in_time' => optional($inRecord)->swipe_time,
            'last_out_time' => optional($outRecord)->swipe_time,
            'out' => "OUT",
        ]];
    });
   
   
 

        // Get the current date and store it in the $currentDate property
        $this->currentDate = date('d');
        $this->currentWeekday = date('D');
        $this->currentDate1 = date('d M Y'); 
        $this->swiperecords=SwipeRecord::all();
        // You can change the date format as needed
    }
   public $k,$k1;
public function showlargebox($k)
{

  $this->k1 = $k;
  $this->dispatchBrowserEvent('refreshModal', ['k1' => $this->k1]); 
  
}
  
public function updatedFromDate($value)
{
    // Additional logic if needed when from_date is updated
    $this->from_date=$value;
    $this->updateModalTitle();
    
}

public function updatedToDate($value)
{
    // Additional logic if needed when to_date is updated
    $this->to_date=$value;
    $this->updateModalTitle();
   
}
private function updateModalTitle()
{
    // Format the dates and update the modal title
    $formattedFromDate = \Carbon\Carbon::parse($this->from_date)->format('d M');
    $formattedToDate = \Carbon\Carbon::parse($this->to_date)->format('d M');
    $this->modalTitle = "Insights for Attendance Period $formattedFromDate - $formattedToDate";
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
    // $check=$this->view_student_emp_id.''.$this->view_student_swipe_time.''.$this->view_student_in_or_out;
    $this->showViewStudentModal();
  }

  public function closeViewStudentModal()
  {
      $this->view_student_emp_id = '';
      $this->view_student_swipe_time = '';
      $this->view_student_in_or_out = '';
     
  }
 
  public $show=false;  
  public $show1=false;   
  public function showViewStudentModal(){
    $this->show=true;
  }
  public function showViewTableModal(){
    $this->show1=true;
  }
  public function close(){
    $this->show=false;  
  }
  public function close1(){
    $this->show1=false;  
  }

  
    public function render()
    {
      // $this->holidayDateEmployeesData=EmployeeDetails::where('emp_id',auth()->guard('emp')->user()->emp_id)
      // ->where('swipe_records.created_at','holiday_lacender.date');
      // dd($this->holidayDateEmployeesData);
        $currentDate = Carbon::now()->format('Y-m-d');
        $today = Carbon::today();
        $data = SwipeRecord::join('employee_details', 'swipe_records.emp_id', '=', 'employee_details.emp_id')
        ->where('swipe_records.emp_id', auth()->guard('emp')->user()->emp_id)
        ->whereDate('swipe_records.created_at', $today)
        ->select('swipe_records.*', 'employee_details.first_name','employee_details.last_name')
        ->get();
         $this->holiday=HolidayCalendar::all();
         $this->leaveApplies=LeaveRequest::where('emp_id',auth()->guard('emp')->user()->emp_id)->get();
         
         
          // Fetch records for today's date
        //$swipe_records = SwipeRecord::all();
           $swipe_records = SwipeRecord::where('emp_id',auth()->guard('emp')->user()->emp_id)->whereDate('created_at', $currentDate)->get();
           $swipe_records1 = SwipeRecord::where('emp_id',auth()->guard('emp')->user()->emp_id)->orderBy('created_at', 'desc')->get(); 
            
              
            // $this->calculateActualHours();
            
            $this->calculateActualHours($swipe_records);
            return view('livewire.attendance',['Holiday'=>$this->holiday,'Swiperecords'=>$swipe_records,'Swiperecords1'=>$swipe_records1,'data'=>$data]);
    }
}
