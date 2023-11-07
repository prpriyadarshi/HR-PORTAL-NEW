<?php

namespace App\Livewire;

use App\Models\EmployeeDetails;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Feeds extends Component
{
    public $employees;
    public $combinedData;

    public function mount()
    {
        $companyId = Auth::user()->company_id;
        $this->employees = EmployeeDetails::where('company_id', $companyId)->get();
        $this->combinedData = $this->combineAndSortData($this->employees);
    }

    public function render()
    {
        return view('livewire.feeds', ['combinedData' => $this->combinedData]);
    }

    private function combineAndSortData($employees)
    {
        $combinedData = [];

        foreach ($employees as $employee) {
            if ($employee->date_of_birth) {
                $combinedData[] = [
                    'date' => Carbon::parse($employee->date_of_birth)->format('m-d'),
                    'type' => 'date_of_birth',
                    'employee' => $employee,
                ];
            }

            if ($employee->hire_date) {
                $combinedData[] = [
                    'date' => Carbon::parse($employee->hire_date)->format('m-d'),
                    'type' => 'hire_date',
                    'employee' => $employee,
                ];
            }
        }

        usort($combinedData, function ($a, $b) {
            return $b['date'] <=> $a['date']; // Sort in descending order
        });

        return $combinedData;
    }
}
