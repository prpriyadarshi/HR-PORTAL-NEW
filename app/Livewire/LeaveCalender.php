<?php

namespace App\Livewire;

use Livewire\Component;
use Carbon\Carbon;
use App\Models\LeaveRequest;
use App\Models\HolidayCalendar;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
class LeaveCalender extends Component
{
    public $filterCriteria = null;
    public $year;
    public $month;
    public $calendar;
    public $leaveData;
    public $restrictedHolidayData;
    public $generalHolidayData;
    public $leaveRequests;
    public $leaveTransactions;

    public function mount()
    {
        $this->year = now()->year;
        $this->month = now()->month;
        $this->leaveRequests = LeaveRequest::all();
        $this->leaveData = LeaveRequest::where('emp_id',auth()->guard('emp')->user()->emp_id)->get();
        $this->generateCalendar();
    }

<<<<<<< HEAD
    public function generateCalendar()
    {
        $firstDay = Carbon::create($this->year, $this->month, 1);
        
        $daysInMonth = $firstDay->daysInMonth;
       
        $today = now();
      
        $calendar = [];
        $dayCount = 1;
        $publicHolidays = $this->getPublicHolidaysForMonth($this->year, $this->month);

        for ($i = 0; $i < ceil(($firstDay->dayOfWeek + $daysInMonth) / 7); $i++) {
            $week = [];
            for ($j = 0; $j < 7; $j++) {
                if ($i === 0 && $j < $firstDay->dayOfWeek) {
                    $week[] = null;
                } elseif ($dayCount <= $daysInMonth) {
                    $isToday = $dayCount === $today->day && $this->month === $today->month && $this->year === $today->year;
                    $publicHolidaysArray = [];
                    foreach ($publicHolidays as $holiday) {
                        $publicHolidaysArray[] = $holiday->toArray();
                    }


                    $isPublicHoliday = in_array(Carbon::create($this->year, $this->month, $dayCount)->toDateString(), $publicHolidaysArray);
                    $week[] = [
                        'day' => $dayCount,
                        'isToday' => $isToday,
                        'isPublicHoliday' => $isPublicHoliday,
                    ];

                    $dayCount++;
                } else {
                    $week[] = null;
                }
            }
            $calendar[] = $week;
        }

        $this->calendar = $calendar;
        dd($this->calendar);
=======
public function generateCalendar()
{
    $firstDay = Carbon::create($this->year, $this->month, 1);
    $lastDay = Carbon::create($this->year, $this->month, $firstDay->daysInMonth);
    $today = now();

    $calendar = [];
    $dayCount = 1;

    for ($i = 0; $i < ceil(($firstDay->dayOfWeek + $lastDay->day) / 7); $i++) {
        $week = [];
        for ($j = 0; $j < 7; $j++) {
            if ($i === 0 && $j < $firstDay->dayOfWeek) {
                $week[] = null;
            } elseif ($dayCount <= $lastDay->day) {
                $date = Carbon::create($this->year, $this->month, $dayCount);
                $isToday = $date->isSameDay($today);

                $week[] = [
                    'date' => $date,
                    'day' => $dayCount,
                    'isToday' => $isToday,
                    'holidays' => $this->getHolidaysForDay($date),
                    'teamLeaves' => $this->getTeamLeavesForDay($date),
                    'singleLeaves' => $this->getSingleLeavesForDay($date),
                ];

                $dayCount++;
            } else {
                $week[] = null;
            }
        }
        $calendar[] = $week;
>>>>>>> 59008e206d7a7b3bf864bd8e12e526db59d06967
    }
   
    protected function getPublicHolidaysForMonth($year, $month)
{
    return HolidayCalendar::whereYear('date', $year)
        ->whereMonth('date', $month)
        ->where('type', 'public') ;// Assuming 'public' is the type for public holidays

}


    $this->calendar = $calendar;
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

    public function filterBy($criteria)
    {
        $this->filterCriteria = $criteria;
    }

    protected function getTeamOnLeaveDataForDay($date)
{
    // Fetch team leave data from your database

    return LeaveRequest::where('from_date', $date)->get();
}

protected function isRestrictedHolidayForDay($date)
{
    // Check if $day is a restricted holiday
   // return LeaveRequest::where('date', $day)->where('type', 'restricted')->exists();
   return LeaveRequest::where('from_date', $date)->get();
}

<<<<<<< HEAD
protected function getHolidaysForMonth($year, $month)
{
    $startOfMonth = Carbon::create($year, $month, 1);
    $endOfMonth = Carbon::create($year, $month, $startOfMonth->daysInMonth);

    // Fetch holidays for the entire month
    $holidays = HolidayCalendar::whereBetween('date', [$startOfMonth, $endOfMonth])->get();
    // Organize holidays by day
    $holidaysByDay = [];

    foreach ($holidays as $holiday) {
        $day = $holiday->date;
// Store the holiday data in an array for each day
        $holidaysByDay[$day][] = $holiday;
    }
    return $holidaysByDay;
}


=======
protected function getHolidaysForDay($date)
{
    try {
        //echo 'Querying for date: ' . $date->toDateString(); // Add this line for debugging
        $holiday = DB::table('holiday_calendars')
            ->where('date', $date->toDateString())
            ->first();
        //dd($holiday);

        return $holiday !== null;
    } catch (QueryException $e) {
        // Display or log the error message
        echo 'Error: ' . $e->getMessage();
        // You can also log the error using your preferred logging mechanism
        // Log::error('Database Error: ' . $e->getMessage());
        return false; // Return false to indicate an error occurred
    }
}


protected function getTeamLeavesForDay($date)
{
    // Fetch team leaves for the specified date from your database
   // return LeaveRequest::where('date', $date->toDateString())->where('status', 'approved')->get();
}

protected function getSingleLeavesForDay($date)
{
    // Fetch approved single leaves for the specified date from your database
   // return LeaveRequest::where('date', $date->toDateString())->where('status', 'approved')->get();
}







public $calendarData = [];





>>>>>>> 59008e206d7a7b3bf864bd8e12e526db59d06967
    public function render()
    {
        return view('livewire.leave-calender');
    }


}
