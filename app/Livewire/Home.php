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
    public $count;
    public $applying_to= [];
    public $matchingLeaveApplications = [];
    public $leaveRequest;
    public $salaryRevision;// Rename this variable to 'salaries'
    public $pieChartData;
    public $grossPay;
    public $deductions;
    public $netPay;
public $leaveRequests;
public $showLeaveApplies;
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
        $flashMessage = $this->signIn ? "You have successfully signed out." : "You have successfully signed in.";
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
        $this->leaveRequests = LeaveRequest::where('status', 'pending')->get();
        $matchingLeaveApplications = [];

        foreach ($this->leaveRequests as $leaveRequest) {
            $applyingToJson = trim($leaveRequest->applying_to);
            $applyingArray = is_array($applyingToJson) ? $applyingToJson : json_decode($applyingToJson, true);

            $ccToJson = trim($leaveRequest->cc_to);
            $ccArray = is_array($ccToJson) ? $ccToJson : json_decode($ccToJson, true);

            $isManagerInApplyingTo = isset($applyingArray[0]['manager_id']) && $applyingArray[0]['manager_id'] == $employeeId;
            $isEmpInCcTo = isset($ccArray[0]['emp_id']) && $ccArray[0]['emp_id'] == $employeeId;

            if ($isManagerInApplyingTo || $isEmpInCcTo) {
                $matchingLeaveApplications[] = $leaveRequest;
            }
        }

        // Get the count of matching leave applications
        $this->count = count($matchingLeaveApplications);


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

        $this->salaryRevision = SalaryRevision::where('emp_id', $employeeId)->get();
        $loggedInEmpId = Auth::guard('emp')->user()->emp_id;

        $isManager = EmployeeDetails::where('manager_id', $loggedInEmpId)->exists();

        $this->showLeaveApplies = $isManager;


//##################################### pie chart details #########################
        $sal=new SalaryRevision();
        $this->grossPay = $sal->calculateTotalAllowance();
        $this->deductions =$sal ->calculateTotalDeductions();
        $this->netPay = $this->grossPay - $this->deductions;
        // Pass the data to the view and return the view instance
        return view('livewire.home', [

            'calendarData' => $this->calendarData,
           'salaryRevision' => $this->salaryRevision,
            'showLeaveApplies' => $this->showLeaveApplies,
            'count' => $this->count,
            'matchingLeaveApplications' => $matchingLeaveApplications,
            'matchingLeaveApplications' => $matchingLeaveApplications,
        ]);
    }


}
