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





    public function render()
    {
        return view('livewire.leave-calender');
    }


}
