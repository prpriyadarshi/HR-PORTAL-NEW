<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Salaryslip;
use App\Models\EmployeeDetails;
use App\Models\SalaryRevision;

class SalarySlips extends Component
{
    public $employeeDetails;
    public $salaryRevision;
public function render()
{
    $employeeId = auth()->guard('emp')->user()->emp_id;
    $this->employeeDetails =  EmployeeDetails::where('emp_id', $employeeId)->get();
    $this->salaryRevision =  SalaryRevision::where('emp_id', $employeeId)->get();

    return view('livewire.salary-slips', ['employees' => $this->employeeDetails],['salaryRevision' => $this->salaryRevision]);
}
}
