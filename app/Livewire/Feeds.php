<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\EmployeeDetails;
use Carbon\Carbon;
use App\Models\Employee;
class Feeds extends Component
{
    public $employees;
    public $employees_data;
    public $currentMonthDay;
    public $employeesWithMatchingDOB;
    public $employeesWithHireDate;

    public function mount()
    {
        $this->currentMonthDay = Carbon::now()->format('m-d');

        $this->employeesWithMatchingDOB = EmployeeDetails::orderBy('date_of_birth', 'desc')
        ->get();
        $this->employeesWithHireDate = EmployeeDetails::orderBy('hire_date', 'desc')
        ->get();

    
    
    return view('livewire.feeds', );
}
}