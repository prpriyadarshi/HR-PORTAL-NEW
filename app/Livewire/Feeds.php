<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\EmployeeDetails;
use Carbon\Carbon;
use App\Models\Employee;
class Feeds extends Component
{
    public $employeesWithYearsCompleted; // Use the correct variable name here
    public $employeeDetails;
    protected $table = 'employee_details';

    public function render()
    {
        $currentMonthDay = Carbon::now()->format('m-d');
    
        // Construct a raw SQL query to filter employees with both joining date and date of birth equal to the current date and month
        $employeeDetails = EmployeeDetails::whereRaw("DATE_FORMAT(date_of_birth, '%m-%d') = ?", [$currentMonthDay])
            ->whereRaw("DATE_FORMAT(hire_date, '%m-%d') = ?", [$currentMonthDay])
            ->get();
    
        $employeesWithYearsCompleted = [];
    
        foreach ($employeeDetails as $employeeDetail) {
            $joiningDate = Carbon::parse($employeeDetail->hire_date);
            $yearsCompleted = $joiningDate->diffInYears(Carbon::now());
    
            $employeesWithYearsCompleted[] = [
                'employee' => $employeeDetail,
                'yearsCompleted' => $yearsCompleted,
            ];
        }
    
        return view('livewire.feeds', [
            'employees' => $employeesWithYearsCompleted, // Use the correct variable name here
        ]);
    }
}