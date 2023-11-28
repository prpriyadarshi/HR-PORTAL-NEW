<?php

namespace App\Livewire;

use App\Models\EmployeeDetails;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

use App\Models\Employee;

class Feeds extends Component
{
    public $employees;
    public $combinedData;
    public $monthAndDay;

    public function mount()
    {
        $companyId = Auth::user()->company_id;
        $this->employees = EmployeeDetails::where('company_id', $companyId)->get();
        $this->combinedData = $this->combineAndSortData($this->employees);
    }

    public $peoples;
    public function render()
    {
        $companyId = Auth::user()->company_id;
        $this->peoples = EmployeeDetails::where('company_id', $companyId)->get();
        return view('livewire.feeds');
    }
    private function combineAndSortData($employees)
    {

        $combinedData = [];

        $currentDate = Carbon::now()->format('m-d');

        foreach ($employees as $employee) {

            if ($employee->date_of_birth) {

                $dobDate = date('m-d', strtotime($employee->date_of_birth));

                if ($dobDate <= $currentDate) {

                    $combinedData[] = [

                        'date' => $dobDate,

                        'type' => 'date_of_birth',

                        'employee' => $employee,

                    ];
                }
            }

            if ($employee->hire_date) {

                $hireDate = Carbon::parse($employee->hire_date)->format('m-d');

                if ($hireDate <= $currentDate) {

                    $combinedData[] = [

                        'date' => $hireDate,

                        'type' => 'hire_date',

                        'employee' => $employee,

                    ];
                }
            }
        }

        usort($combinedData, function ($a, $b) {

            return $b['date'] <=> $a['date']; // Sort in descending order

        });

        return $combinedData;
    }
}
