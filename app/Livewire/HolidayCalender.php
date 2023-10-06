<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\HolidayCalendar;
class HolidayCalender extends Component
{
    public $year = '2023'; // Default year

    public function render()
    {
        try {
            // Attempt to fetch the calendar data for the selected year
            $calendarData = HolidayCalendar::where('year', $this->year)->get();
        } catch (\Exception $e) {
            // Handle the exception, you can log it or display an error message
            // For example, you can log the error message
            \Log::error('Error fetching calendar data: ' . $e->getMessage());
    
            // Provide a default value or an error message to display
            $calendarData = [];
    
            // You can also redirect to an error page or show a notification to the user
        }
    
        return view('livewire.holiday-calender', [
            'calendarData' => $calendarData,
        ]);
    }
    
}
