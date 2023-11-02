<?php

namespace App\Livewire;
use App\Models\EmployeeDetails;
use App\Models\LeaveRequest;
use App\Models\SwipeRecord;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Models\HolidayCalendar;
use App\Models\SalaryRevision;
use Illuminate\Support\Facades\Auth;

use App\Livewire\TeamOnLeave;
class Home extends Component
{   
    public $currentDate;

    public $currentDay;
    public $showAlertDialog = false;
    public $signIn = true;
    public $swipeDetails;
    public $calendarData;
    public $employeeDetails;
    public $employee;
    public $salaries; 
    public $salaryRevision;// Rename this variable to 'salaries'

    public function toggleSignState()
    {
        $employeeId = auth()->guard('emp')->user()->emp_id;
        $this->employeeDetails = EmployeeDetails::where('emp_id', $employeeId)->first();
        $this->signIn = !$this->signIn;
        SwipeRecord::create([
            'emp_id' => $this->employeeDetails->emp_id,
            'swipe_time' => now()->format('H:i:s'),
            'in_or_out' => $this->signIn ? "Sign Out" : "Sign In",
        ]);
        $flashMessage = $this->signIn ? "You Have Successfully Signed Out." : "You Have Successfully Signed In.";
        session()->flash('success', $flashMessage);
    }
    
    public function open()
    {
        $this->showAlertDialog = true;
    }
    
    public function close()
    {
        $this->showAlertDialog = false;
    }
    
    public function render()
    {
        $employeeId = auth()->guard('emp')->user()->emp_id;
        $this->currentDay = now()->format('l');
        $this->currentDate = now()->format('d M Y');
        $today = Carbon::now()->format('Y-m-d');

        $leaveApplicationsCount = LeaveRequest::where(function ($query) use ($employeeId) {
            $query->where('applying_to', $employeeId)
                ->orWhere('status', 'pending')
                ->orWhere('cc_to', $employeeId);
        })->count();
       
        $this->swipeDetails = DB::table('swipe_records')
            ->whereDate('created_at', $today)
            ->where('emp_id', $employeeId)
            ->orderBy('created_at', 'desc')
            ->get();
    
        // Assuming $calendarData should contain the data for upcoming holidays
        $this->calendarData = HolidayCalendar::where('date', '>=', $today)
            ->orderBy('date')
            ->take(3)
            ->get();
    
        $this->salaryRevision = SalaryRevision::where('emp_id', $employeeId)->get(); // Define and fetch salary data
    
        $loggedInEmpId = Auth::guard('emp')->user()->emp_id;

        // Check if the logged-in user is a manager by comparing emp_id with manager_id in employeedetails
        $isManager = EmployeeDetails::where('manager_id', $loggedInEmpId)->exists();

        // Show "Team on Leave" if the logged-in user is a manager
        $this->showLeaveApplies = $isManager;

        return view('livewire.home', [
            'calendarData' => $this->calendarData,
            'salaryRevision' => $this->salaryRevision,
            'showLeaveApplies' => $this->showLeaveApplies,
            'leaveApplicationsCount' => $leaveApplicationsCount, // Pass the salary data to the view
        ]);
    }
}    