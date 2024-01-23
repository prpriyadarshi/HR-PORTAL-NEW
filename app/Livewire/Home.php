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
    public $swipes;
    public $showSalary = false;
    public $currentDay;

    public $absent_employees_count;
    public $showAlertDialog = false;
    public $signIn = true;
    public $swipeDetails;
    public $calendarData;
    public $employeeDetails;
    public $employee;
    public $salaries;
    public $count;
    public $initials;
    public $applying_to = [];
    public $matchingLeaveApplications = [];
    public $upcomingLeaveApplications;
    public $leaveRequest;
    public $salaryRevision; // Rename this variable to 'salaries'
    public $pieChartData;
    public $absent_employees;
    public $grossPay;
    public $deductions;
    public $netPay;
    public $leaveRequests;
    public $showLeaveApplies;
    public $greetingImage;
    public $greetingText;
    public $teamOnLeave;
    public $leaveApplied;
    public  $teamOnLeaveRequests;
    public  $teamCount = 0;
    public  $upcomingLeaveRequests;
    public $holidayCount = 0;



    public function mount()
    {
        $currentHour = date('G');

        if ($currentHour >= 4 && $currentHour < 12) {
            $this->greetingImage = 'sunrise.png';
            $this->greetingText = 'Good Morning';
        } elseif ($currentHour >= 12 && $currentHour < 16) {
            $this->greetingImage = 'afternoon.png';
            $this->greetingText = 'Good Afternoon';
        } elseif ($currentHour >= 16 && $currentHour < 20) {
            $this->greetingImage = 'sunset.png';
            $this->greetingText = 'Good Evening';
        } else {
            $this->greetingImage = 'goodnight.png';
            $this->greetingText = 'Good Night';
        }
    }
    public function toggleSignState()
    {
        $employeeId = auth()->guard('emp')->user()->emp_id;
        $this->employeeDetails = EmployeeDetails::where('emp_id', $employeeId)->first();
        $this->signIn = !$this->signIn;
        SwipeRecord::create([
            'emp_id' => $this->employeeDetails->emp_id,
            'swipe_time' => now()->format('H:i:s'),
            'in_or_out' => $this->swipes
                ? ($this->swipes->in_or_out == "IN" ? "OUT" : "IN")
                : 'IN',
        ]);
        $flashMessage = $this->swipes
            ? ($this->swipes->in_or_out == "IN" ? "OUT" : "IN")
            : 'IN';

        $message = $flashMessage == "IN"
            ? "You have successfully signed in."
            : "You have successfully signed out.";

        session()->flash('success', $message);
    }

    public function open()
    {
        $this->showAlertDialog = true;
    }

    public function close()
    {
        $this->showAlertDialog = false;
    }
    public function toggleSalary()
    {
        $this->showSalary = !$this->showSalary;
    }

    public function render()
    {
        $loggedInEmpId = Auth::guard('emp')->user()->emp_id;

        // Check if the logged-in user is a manager by comparing emp_id with manager_id in employeedetails
        $isManager = EmployeeDetails::where('manager_id', $loggedInEmpId)->exists();
        $employeeId = auth()->guard('emp')->user()->emp_id;
        $this->currentDay = now()->format('l');
        $this->currentDate = now()->format('d M Y');
        $today = Carbon::now()->format('Y-m-d');
        $this->leaveRequests = LeaveRequest::with('employee')
        ->where('status', 'pending')
        ->get();
        $matchingLeaveApplications = [];

        foreach ($this->leaveRequests as $leaveRequest) {
            $applyingToJson = trim($leaveRequest->applying_to);
            $applyingArray = is_array($applyingToJson) ? $applyingToJson : json_decode($applyingToJson, true);

            $ccToJson = trim($leaveRequest->cc_to);
            $ccArray = is_array($ccToJson) ? $ccToJson : json_decode($ccToJson, true);

            $isManagerInApplyingTo = isset($applyingArray[0]['manager_id']) && $applyingArray[0]['manager_id'] == $employeeId;
            $isEmpInCcTo = isset($ccArray[0]['emp_id']) && $ccArray[0]['emp_id'] == $employeeId;
            if (!empty($ccArray) && !empty($applyingArray)) {
                // Process when both cc_to and applying_to are present
                foreach ($ccArray as $ccItem) {
                    if (isset($ccItem['emp_id']) && $ccItem['emp_id'] === auth()->guard('emp')->user()->emp_id) {
                        $matchingLeaveApplications[] = [
                            'leaveRequest' => $leaveRequest,
                            'empId' => $ccItem['emp_id']
                        ];
                        break; // Stop iterating if emp_id matches
                    }
                }
                // Check for applying_to conditions
                foreach ($applyingArray as $applyingItem) {
                    if (isset($applyingItem['manager_id']) && $applyingItem['manager_id'] === auth()->guard('emp')->user()->emp_id) {
                        $matchingLeaveApplications[] = [
                            'leaveRequest' => $leaveRequest,
                            'managerId' => $applyingItem['manager_id']
                        ];
                        break; // Stop iterating if manager_id matches
                    }
                }
            } elseif (!empty($applyingArray)) {
                // Process when only applying_to is present
                foreach ($applyingArray as $applyingItem) {
                    if (isset($applyingItem['manager_id']) && $applyingItem['manager_id'] === auth()->guard('emp')->user()->emp_id) {
                        $matchingLeaveApplications[] = [
                            'leaveRequest' => $leaveRequest,
                            'managerId' => $applyingItem['manager_id']
                        ];
                        break; // Stop iterating if manager_id matches
                    }
                }
            } elseif (!empty($ccArray)) {
                // Process when only cc_to is present
                foreach ($ccArray as $ccItem) {
                    if (isset($ccItem['emp_id']) && $ccItem['emp_id'] === auth()->guard('emp')->user()->emp_id) {
                        $matchingLeaveApplications[] = [
                            'leaveRequest' => $leaveRequest,
                            'empId' => $ccItem['emp_id']
                        ];
                        break; // Stop iterating if emp_id matches
                    }
                }
            }
        }

        // Get the count of matching leave applications
        $this->leaveApplied = $matchingLeaveApplications;
    
        $this->count = count($matchingLeaveApplications);

        //team on leave
        $currentDate = Carbon::today();
        $this->teamOnLeaveRequests = LeaveRequest::with('employee')
            ->where('status', 'approved')
            ->where(function ($query) use ($currentDate) {
                $query->whereDate('from_date', '=', $currentDate)
                    ->orWhereDate('to_date', '=', $currentDate);
            })
            ->get();
        $teamOnLeaveApplications = [];

        foreach ($this->teamOnLeaveRequests as $teamOnLeaveRequest) {
            $applyingToJson = trim($teamOnLeaveRequest->applying_to);
            $applyingArray = is_array($applyingToJson) ? $applyingToJson : json_decode($applyingToJson, true);

            $ccToJson = trim($teamOnLeaveRequest->cc_to);
            $ccArray = is_array($ccToJson) ? $ccToJson : json_decode($ccToJson, true);

            $isManagerInApplyingTo = isset($applyingArray[0]['manager_id']) && $applyingArray[0]['manager_id'] == $employeeId;
            $isEmpInCcTo = isset($ccArray[0]['emp_id']) && $ccArray[0]['emp_id'] == $employeeId;

            if ($isManagerInApplyingTo || $isEmpInCcTo) {
                $teamOnLeaveApplications[] = $teamOnLeaveRequest;
            }
        }
        $this->teamOnLeave = $teamOnLeaveApplications;
      


        // Get the count of matching leave applications
        $this->teamCount = count($teamOnLeaveApplications);

        $this->upcomingLeaveRequests = LeaveRequest::with('employee')
            ->where('status', 'approved')
            ->where(function ($query) use ($currentDate) {
                $query->whereMonth('from_date', Carbon::now()->month); // Filter for the current month
            })
            ->orderBy('created_at', 'desc')
            ->get();
        $this->upcomingLeaveApplications = count($this->upcomingLeaveRequests);




        //team on leave
        $currentDate = Carbon::today();
        $this->teamOnLeaveRequests = LeaveRequest::with('employee')
            ->where('status', 'approved')
            ->where(function ($query) use ($currentDate) {
                $query->whereDate('from_date', '=', $currentDate)
                    ->orWhereDate('to_date', '=', $currentDate);
            })
            ->get();
        $this->absent_employees = EmployeeDetails::where('manager_id', $loggedInEmpId)
            ->select('emp_id', 'first_name', 'last_name')
            ->whereNotIn('emp_id', function ($query) {
                $query->select('emp_id')
                    ->from('swipe_records')
                    ->whereDate('created_at', today());
            })
            ->whereNotIn('emp_id', function ($query) {
                $query->select('emp_id')
                    ->from('leave_applies')
                    ->whereDate('from_date', '>=', today())
                    ->whereDate('to_date', '<=', today());
            })
            ->get();
        $arrayofabsentemployees = $this->absent_employees->toArray();

        $this->absent_employees_count = EmployeeDetails::where('manager_id', $loggedInEmpId)
            ->select('emp_id', 'first_name', 'last_name')
            ->whereNotIn('emp_id', function ($query) {
                $query->select('emp_id')
                    ->from('swipe_records')
                    ->whereDate('created_at', today());
            })
            ->whereNotIn('emp_id', function ($query) {
                $query->select('emp_id')
                    ->from('leave_applies')
                    ->whereDate('from_date', '>=', today())
                    ->whereDate('to_date', '<=', today());
            })
            ->count();
        $employees = EmployeeDetails::where('manager_id', $loggedInEmpId)->select('emp_id', 'first_name', 'last_name')->get();
        $approvedLeaveRequests = LeaveRequest::join('employee_details', 'leave_applies.emp_id', '=', 'employee_details.emp_id')
            ->where('leave_applies.status', 'approved')
            ->whereIn('leave_applies.emp_id', $employees->pluck('emp_id'))
            ->whereDate('from_date', '<=', $currentDate)
            ->whereDate('to_date', '>=', $currentDate)
            ->get(['leave_applies.*', 'employee_details.first_name', 'employee_details.last_name'])
            ->map(function ($leaveRequest) {
                // Calculate the number of days between from_date and to_date
                $fromDate = \Carbon\Carbon::parse($leaveRequest->from_date);
                $toDate = \Carbon\Carbon::parse($leaveRequest->to_date);

                $leaveRequest->number_of_days = $fromDate->diffInDays($toDate) + 1; // Add 1 to include both start and end dates

                return $leaveRequest;
            });
        $this->absent_employees = EmployeeDetails::where('manager_id', $loggedInEmpId)
            ->select('emp_id', 'first_name', 'last_name')
            ->whereNotIn('emp_id', function ($query) use ($loggedInEmpId, $currentDate, $approvedLeaveRequests) {
                $query->select('emp_id')
                    ->from('swipe_records')
                    ->where('manager_id', $loggedInEmpId)
                    ->whereDate('created_at', $currentDate);
            })
            ->whereNotIn('emp_id', $approvedLeaveRequests->pluck('emp_id'))
            ->get();

        $arrayofabsentemployees = $this->absent_employees->toArray();

        $this->absent_employees_count = EmployeeDetails::where('manager_id', $loggedInEmpId)
            ->select('emp_id', 'first_name', 'last_name')
            ->whereNotIn('emp_id', function ($query) use ($loggedInEmpId, $currentDate, $approvedLeaveRequests) {
                $query->select('emp_id')
                    ->from('swipe_records')
                    ->where('manager_id', $loggedInEmpId)
                    ->whereDate('created_at', $currentDate);
            })
            ->whereNotIn('emp_id', $approvedLeaveRequests->pluck('emp_id'))
            ->count();
        $employees = EmployeeDetails::where('manager_id', $loggedInEmpId)->select('emp_id', 'first_name', 'last_name')->get();
        $swipes_early = SwipeRecord::whereIn('id', function ($query) use ($employees, $currentDate) {
            $query->selectRaw('MIN(id)')
                ->from('swipe_records')
                ->whereIn('emp_id', $employees->pluck('emp_id'))
                ->whereDate('created_at', $currentDate)
                ->whereRaw("swipe_time < '10:00:00'") // Add this condition to filter swipes before 10:00 AM
                ->groupBy('emp_id');
        })
            ->join('employee_details', 'swipe_records.emp_id', '=', 'employee_details.emp_id')
            ->select('swipe_records.*', 'employee_details.first_name', 'employee_details.last_name')
            ->get();

        $swipes_early1 = $swipes_early->count();

        $swipes_late = SwipeRecord::whereIn('id', function ($query) use ($employees, $currentDate) {
            $query->selectRaw('MIN(id)')
                ->from('swipe_records')
                ->where('in_or_out', 'IN')
                ->whereIn('emp_id', $employees->pluck('emp_id'))
                ->whereDate('created_at', $currentDate)
                ->whereRaw("swipe_time > '10:00:00'") // Add this condition to filter swipes before 10:00 AM
                ->groupBy('emp_id');
        })
            ->join('employee_details', 'swipe_records.emp_id', '=', 'employee_details.emp_id')
            ->select('swipe_records.*', 'employee_details.first_name', 'employee_details.last_name')
            ->get();

        $swipes_late1 = $swipes_late->count();

        $teamOnLeaveApplications = [];

        foreach ($this->teamOnLeaveRequests as $teamOnLeaveRequest) {
            $applyingToJson = trim($teamOnLeaveRequest->applying_to);
            $applyingArray = is_array($applyingToJson) ? $applyingToJson : json_decode($applyingToJson, true);

            $ccToJson = trim($teamOnLeaveRequest->cc_to);
            $ccArray = is_array($ccToJson) ? $ccToJson : json_decode($ccToJson, true);

            $isManagerInApplyingTo = isset($applyingArray[0]['manager_id']) && $applyingArray[0]['manager_id'] == $employeeId;
            $isEmpInCcTo = isset($ccArray[0]['emp_id']) && $ccArray[0]['emp_id'] == $employeeId;

            if ($isManagerInApplyingTo || $isEmpInCcTo) {
                $teamOnLeaveApplications[] = $teamOnLeaveRequest;
            }
        }
        $this->teamOnLeave = $teamOnLeaveApplications;

        // Get the count of matching leave applications
        $this->teamCount = count($teamOnLeaveApplications);

        $this->upcomingLeaveRequests = LeaveRequest::with('employee')
            ->where('status', 'approved')
            ->where(function ($query) use ($currentDate) {
                $query->whereMonth('from_date', Carbon::now()->month); // Filter for the current month
            })
            ->orderBy('created_at', 'desc')
            ->get();
        $this->upcomingLeaveApplications = count($this->upcomingLeaveRequests);

        $this->swipeDetails = DB::table('swipe_records')
            ->whereDate('created_at', $today)
            ->where('emp_id', $employeeId)
            ->orderBy('created_at', 'desc')
            ->get();
        $this->swipes = DB::table('swipe_records')
            ->whereDate('created_at', $today)
            ->where('emp_id', $employeeId)
            ->orderBy('created_at', 'desc')
            ->first();


        // Assuming $calendarData should contain the data for upcoming holidays
        $currentYear = Carbon::now()->year;
        $today = Carbon::today();

        $this->calendarData = HolidayCalendar::where('date', '>=', $today)
            ->whereYear('date', $currentYear)
            ->orderBy('date')
            ->get();

        // Check if the festivals are empty for any of the retrieved holidays
        foreach ($this->calendarData as $index => $holiday) {
            if (empty($holiday->festivals)) {
                // Find the next holiday if the current one doesn't have festivals specified
                $nextHoliday = HolidayCalendar::where('date', '>', $holiday->date)
                    ->where('id', '!=', $holiday->id) // Exclude the current holiday
                    ->whereYear('date', $currentYear)
                    ->orderBy('date')
                    ->first();

                if ($nextHoliday) {
                    // Replace the current empty festival entry with the next holiday that has festivals
                    $this->calendarData[$index] = $nextHoliday;
                }
            }
        }
        
        $this->holidayCount =$this->calendarData;

        $this->salaryRevision = SalaryRevision::where('emp_id', $employeeId)->get();
        $loggedInEmpId = Auth::guard('emp')->user()->emp_id;

        $isManager = EmployeeDetails::where('manager_id', $loggedInEmpId)->exists();

        $this->showLeaveApplies = $isManager;


        //##################################### pie chart details #########################
        $sal = new SalaryRevision();
        $this->grossPay = $sal->calculateTotalAllowance();
        $this->deductions = $sal->calculateTotalDeductions();
        $this->netPay = $this->grossPay - $this->deductions;

        // Pass the data to the view and return the view instance
        return view('livewire.home', [
            'calendarData' => $this->calendarData,
            'holidayCount' => $this->holidayCount,
            'salaryRevision' => $this->salaryRevision,
            'showLeaveApplies' => $this->showLeaveApplies,
            'count' => $this->count,
            'leaveApplied' => $this->leaveApplied,
            'teamCount' => $this->teamCount,
            'teamOnLeave' => $this->teamOnLeave,
            'matchingLeaveApplications' => $matchingLeaveApplications,
            'upcomingLeaveRequests'  => $this->upcomingLeaveRequests,
            'upcomingLeaveApplications' => $this->upcomingLeaveApplications,
            'ismanager' => $isManager,
            'AbsentEmployees' => $this->absent_employees,
            'CountAbsentEmployees' => $this->absent_employees_count,
            'EarlySwipes' => $swipes_early,
            'CountEarlySwipes' => $swipes_early1,
            'LateSwipes' => $swipes_late,
            'CountLateSwipes' => $swipes_late1,

        ]);
    }
   
}
