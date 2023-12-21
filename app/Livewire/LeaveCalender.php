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
    public $selectedDate;
    public $eventDetails;

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
                ];
            } elseif ($dayCount <= $daysInMonth) {
                // Add the days of the current month
                $isToday = $dayCount === $today->day && $this->month === $today->month && $this->year === $today->year;
                $isPublicHoliday = in_array(
                    Carbon::create($this->year, $this->month, $dayCount)->toDateString(),
                    $publicHolidays->pluck('date')->toArray()
                );
                
                $backgroundColor = $isPublicHoliday ? 'background-color: IRIS;' : '';

                $week[] = [
                    'day' => $dayCount,
                    'isToday' => $isToday,
                    'isPublicHoliday' => $isPublicHoliday,
                    'isCurrentMonth' => true,
                    'isPreviousMonth' => false,
                    'backgroundColor' => $backgroundColor,
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
                ];
                $dayCount++;
            }
        }
        $calendar[] = $week;
    }

    $this->calendar = $calendar;
}
 
    protected function getPublicHolidaysForMonth($year, $month)
    {
        return HolidayCalendar::whereYear('date', $year)
            ->whereMonth('date', $month)
            ->get();
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


    public function dateClicked($date)
    {
        $date = trim($date);
        $this->selectedDate = $this->year . '-' . $this->month . '-' . str_pad($date, 2, '0', STR_PAD_LEFT);
        $this->eventDetails = $this->getEventDetailsForDate($date);
        
    }

    public function render()
    {
        $holidays = $this->getHolidays();
        return view('livewire.leave-calender', [
            'holidays' => $holidays,
        ]);
       
    }
   

    public function getEventDetailsForDate($date)
    {
       
        return "Event hebvxdcfvgbhjn details today $date";
    }
    public function getHolidays()
    {
        $clickedDate = Carbon::parse($this->selectedDate);
        return HolidayCalendar::whereDate('date', $clickedDate->toDateString())->get();
    }
    
    
    
    
}
