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
  public $currentDate2;

  public $currentDate;
  public $date1;
  public $clickedDate;
  public $currentWeekday;
  public $calendar;
  public $selectedDate;
  public $swipe_record;
  public $holiday;
  public $leaveApplies;

  public $year;

  public $currentDate2record;

  public $month;
  public $actualHours = [];
  public $firstSwipeTime;
  public $secondSwipeTime;
  public $swiperecords;
  public $currentDate1;
  public $swiperecord;



  public $date2;
  public $modalTitle = '';

  public $view_student_swipe_time;

  public $view_student_in_or_out;
  public $swipeRecordId;
  public $from_date;
  public $to_date;

  public $status;
  public $dynamicDate;
  public $view_student_emp_id;
  public $view_employee_swipe_time;

  public $currentDate2recordexists;

  public $dateclicked;
  public $view_table_in;

  public $view_table_out;
  public $employeeDetails;

    public $changeDate=0;
    public $student;
   
    public $selectedRecordId = null;
    public $distinctDates;
    public $isPresent;
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

      // Get the current date and store it in the $currentDate property
      $this->currentDate = date('d');
      $this->currentWeekday = date('D');
      $this->currentDate1 = date('d M Y');
      $this->swiperecords = SwipeRecord::all();
      $this->year = now()->year;
      $this->month = now()->month;
      $this->generateCalendar();
      // You can change the date format as needed
    });
  }
  public $k, $k1;
  protected function getPublicHolidaysForMonth($year, $month)
  {
    return HolidayCalendar::whereYear('date', $year)
      ->whereMonth('date', $month)
      ->get();
  }
  public function showlargebox($k)
  {

    $this->k1 = $k;
    $this->dispatchBrowserEvent('refreshModal', ['k1' => $this->k1]);
  }
  private function isEmployeePresentOnDate($date)
  {
    // Implement your logic to check if the employee is present on the given date
    // For example, you can query the database for swipe records on that date
    return SwipeRecord::whereDate('created_at', $date)->exists();
}
private function isEmployeeLeaveOnDate($date, $employeeId)
{
    $employeeId= auth()->guard('emp')->user()->emp_id;
    // Check if there is a leave request that covers the given date for the specified employee
    return LeaveRequest::where('emp_id', $employeeId)
        ->where(function ($query) use ($date) {
            $query->whereDate('from_date', '<=', $date)
                ->whereDate('to_date', '>=', $date);
        })
        ->exists();
}
private function getLeaveType($date, $employeeId)
{
    // Replace 'your_leave_request_table' with the actual table name storing leave requests
    $leaveType = LeaveRequest::where('emp_id', $employeeId)
        ->whereDate('from_date', '<=', $date)
        ->whereDate('to_date', '>=', $date)
        ->value('leave_type');

    return $leaveType;
}
public function generateCalendar()
{
    $employeeId= auth()->guard('emp')->user()->emp_id;
    $firstDay = Carbon::create($this->year, $this->month, 1);

    $daysInMonth = $firstDay->daysInMonth;

    $today = now();

    $calendar = [];
    $dayCount = 1;
    $publicHolidays = $this->getPublicHolidaysForMonth($this->year, $this->month);

    // Calculate the first day of the week for the current month
    $firstDayOfWeek = $firstDay->dayOfWeek;

    // Calculate the starting date of the previous month
    $startOfPreviousMonth = $firstDay->copy()->subMonth();

    // Fetch holidays for the previous month
    $publicHolidaysPreviousMonth = $this->getPublicHolidaysForMonth(
      $startOfPreviousMonth->year,
      $startOfPreviousMonth->month
    );

    // Calculate the last day of the previous month
    $lastDayOfPreviousMonth = $firstDay->copy()->subDay();

    for ($i = 0; $i < ceil(($firstDayOfWeek + $daysInMonth) / 7); $i++) {
        $week = [];
        for ($j = 0; $j < 7; $j++) {
            if ($i === 0 && $j < $firstDay->dayOfWeek) {
                // Add the days of the previous month
                $previousMonthDays = $lastDayOfPreviousMonth->copy()->subDays($firstDay->dayOfWeek - $j - 1);
                $week[] = [
                    'day' => $previousMonthDays->day,
                    'isToday' => false,
                    'isPublicHoliday' => in_array($previousMonthDays->toDateString(), $publicHolidaysPreviousMonth->pluck('date')->toArray()),
                    'isCurrentMonth' => false,
                    'isPreviousMonth' => true,
                    'backgroundColor' => '', // Initialize with an empty background color
                    'status' => '',
                    'onleave'=>'' // Add a status property
                ];
            } elseif ($dayCount <= $daysInMonth) {
                // Add the days of the current month
                $isToday = $dayCount === $today->day && $this->month === $today->month && $this->year === $today->year;
                $isPublicHoliday = in_array(
                    Carbon::create($this->year, $this->month, $dayCount)->toDateString(),
                    $publicHolidays->pluck('date')->toArray()
                );
                
                $backgroundColor = $isPublicHoliday ? 'background-color: IRIS;' : '';
                
                $date = Carbon::create($this->year, $this->month, $dayCount)->toDateString();
                
                // Check if the employee is absent
                $isAbsent = !$this->isEmployeePresentOnDate($date);
                $isonLeave=$this->isEmployeeLeaveOnDate($date,$employeeId);
                $leaveType = $this->getLeaveType($date, $employeeId);
                if ($isonLeave) {
                    $leaveType = $this->getLeaveType($date, $employeeId);
                    
                    switch ($leaveType) {
                        case 'Causal Leave Probation':
                            $status = 'CLP'; // Casual Leave Probation
                            break;
                        case 'Sick Leave':
                            $status = 'SL'; // Sick Leave
                            break;
                        case 'Loss Of Pay':
                            $status = 'LOP'; // Loss of Pay
                            break;
                        default:
                            $status = 'L'; // Default to 'L' if the leave type is not recognized
                            break;
                    }
                } else {
                    // Employee is not on leave, check for absence or presence
                    $isAbsent = !$this->isEmployeePresentOnDate($date);
                
                    // Set the status based on presence
                    $status = $isAbsent ? 'A' : 'P';
                }
                // Set the status based on presence
                
                
                $week[] = [
                    'day' => $dayCount,
                    'isToday' => $isToday,
                    'isPublicHoliday' => $isPublicHoliday,
                    'isCurrentMonth' => true,
                    'isPreviousMonth' => false,
                    'backgroundColor' => $backgroundColor,
                    'status' => $status,
                ];
              
                $dayCount++;
            } else {
                // Add the days of the next month
                $week[] = [
                    'day' => $dayCount - $daysInMonth,
                    'isToday' => false,
                    'isPublicHoliday' => in_array($lastDayOfPreviousMonth->copy()->addDays($dayCount - $daysInMonth)->toDateString(), $this->getPublicHolidaysForMonth($startOfPreviousMonth->year, $startOfPreviousMonth->month)->pluck('date')->toArray()),
                    'isCurrentMonth' => false,
                    'isNextMonth' => true,
                    'backgroundColor' => '', // Initialize with an empty background color
                    'status' => '', // Add a status property
                ];
                $dayCount++;
            }
        }
        $calendar[] = $week;
     
    }

    $this->calendar = $calendar;
  }
  public function updateDate($date1)
  {
    $this->changeDate = 1;

    // Handle any additional logic needed when the date is updated
    // You can use $formattedDate or $this->selectedDate as needed
}
public function dateClicked($date1)
{
    $date1 = trim($date1);
    $this->selectedDate = $this->year . '-' . $this->month . '-' . str_pad($date1, 2, '0', STR_PAD_LEFT);  
    $isSwipedIn = SwipeRecord::whereDate('created_at', $date1)->where('in_or_out', 'In')->exists();
    $isSwipedOut = SwipeRecord::whereDate('created_at', $date1)->where('in_or_out', 'Out')->exists();


    if (!$isSwipedIn) {
      // Employee did not swipe in
      $this->selectedDate = $date1;
      $this->status = 'A';
    } elseif (!$isSwipedOut) {
      // Employee swiped in but not out
      $this->selectedDate = $date1;
      $this->status = 'P';
    }
    $this->updateDate($date1);
    $this->dateclicked = $date1;
  }


  public function updatedFromDate($value)
  {
    // Additional logic if needed when from_date is updated
    $this->from_date = $value;
    $this->updateModalTitle();
  }

  public function updatedToDate($value)
  {
    // Additional logic if needed when to_date is updated
    $this->to_date = $value;
    $this->updateModalTitle();
  }
  public function gff()
  {
    dd('hii' . $this->clickedDate);
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

    $this->view_student_swipe_time = $student->swipe_time;
    $this->view_student_in_or_out = $student->in_or_out;
    // $check=$this->view_student_emp_id.''.$this->view_student_swipe_time.''.$this->view_student_in_or_out;
    $this->showViewStudentModal();
  }

  public function closeViewStudentModal()
  {
    $this->view_student_emp_id = '';
    $this->view_student_swipe_time = '';
    $this->view_student_in_or_out = '';
  }

  public $show = false;
  public $show1 = false;
  public function showViewStudentModal()
  {
    $this->show = true;
  }

  public function showViewTableModal()
  {
    $this->show1 = true;
  }
  public function close()
  {
    $this->show = false;
  }
  public function close1()
  {
    $this->show1 = false;
  }
  public function previousMonth()
    {
        
        $date = Carbon::create($this->year, $this->month, 1)->subMonth();
     
        $this->year = $date->year;
        $this->month = $date->month;
        $this->generateCalendar();
    }
    public function nextMonth()
    {
        $date = Carbon::create($this->year, $this->month, 1)->addMonth();
        $this->year = $date->year;
        $this->month = $date->month;
        $this->generateCalendar();
    }
  
    public function render()
    {
      $this->dynamicDate = now()->format('Y-m-d');
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
         //$leave=LeaveRequest::where('emp_id',auth()->guard('emp')->user()->emp_id)->get();
         $this->holiday=HolidayCalendar::all();
         $this->leaveApplies=LeaveRequest::where('emp_id',auth()->guard('emp')->user()->emp_id)->get();
         
        if($this->changeDate==1)
        {
            
            $currentDate2=$this->dateclicked;
           
            $this->currentDate2record=SwipeRecord::where('emp_id',auth()->guard('emp')->user()->emp_id)->whereDate('created_at',$currentDate2)->get();
            
            $this->currentDate2recordexists=SwipeRecord::where('emp_id',auth()->guard('emp')->user()->emp_id)->whereDate('created_at',$currentDate2)->exists();
            
            
            
        } 
        else
        {
            $currentDate2 = Carbon::now()->format('Y-m-d');
        }
        
          // Fetch records for today's date
        //$swipe_records = SwipeRecord::all();
           $swipe_records = SwipeRecord::where('emp_id',auth()->guard('emp')->user()->emp_id)->whereDate('created_at', $currentDate)->get();
           $swipe_records1 = SwipeRecord::where('emp_id',auth()->guard('emp')->user()->emp_id)->orderBy('created_at', 'desc')->get(); 
          
         
            // $this->calculateActualHours();
            
            $this->calculateActualHours($swipe_records);
            return view('livewire.attendance',['Holiday'=>$this->holiday,'Swiperecords'=>$swipe_records,'Swiperecords1'=>$swipe_records1,'data'=>$data,'CurrentDate'=>$currentDate2,'CurrentDateTwoRecord'=>$this->currentDate2record,'ChangeDate'=>$this->changeDate,'CurrentDate2recordexists'=>$this->currentDate2recordexists]);
    }
}
