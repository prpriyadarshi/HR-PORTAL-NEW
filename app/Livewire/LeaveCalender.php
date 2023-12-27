<?php

namespace App\Livewire;

use Livewire\Component;
use Carbon\Carbon;
use App\Models\LeaveRequest;
use App\Models\HolidayCalendar;
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
    }
   
    protected function getPublicHolidaysForMonth($year, $month)
{
    return HolidayCalendar::whereYear('date', $year)
        ->whereMonth('date', $month)
        ->where('type', 'public') ;// Assuming 'public' is the type for public holidays

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

    public function loadLeaveTransactions($date)
    {

        // Retrieve leave transactions for the selected date from the database
        $leaveTransactions = LeaveRequest::where('date', $date)->get();

        // Pass the leave transactions to the view
        $this->leaveTransactions = $leaveTransactions;
    }

    protected function getTeamOnLeaveDataForDay($day)
{
    // Fetch team leave data from your database

    return LeaveRequest::where('from_date', $day)->get();
}

protected function isRestrictedHolidayForDay($day)
{
    // Check if $day is a restricted holiday
   // return LeaveRequest::where('date', $day)->where('type', 'restricted')->exists();
   return LeaveRequest::where('from_date', $day)->get();
}

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


    public function render()
    {
        return view('livewire.leave-calender');
    }


}
