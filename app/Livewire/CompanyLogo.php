<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class CompanyLogo extends Component
{
    public $employeeId;
    public $employee;


    public function render()
    {
        $employeeId = auth()->guard('emp')->user()->emp_id;
        $this->employee = DB::table('employee_details')
            ->join('companies', 'employee_details.company_id', '=', 'companies.company_id')
            ->where('employee_details.emp_id', $employeeId)
            ->select('companies.company_logo')
            ->first();
        return view('livewire.company-logo');
    }
}
