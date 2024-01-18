<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Delegate;
use App\Models\EmployeeDetails;
use Illuminate\Validation\Rule;

class Delegates extends Component
{
    protected $debug = true;
    public $workflow;
    public $fromDate;
    public $toDate;
    public $delegate;
    public $retrievedData;
    public $employeeDetails;

    protected $rules = [
     
        'workflow' => 'required',
        'fromDate' => 'required|date',
        'toDate' => 'required|date|after_or_equal:fromDate',
        'delegate' => 'required',
    ];

    public function submitForm()
    {
        $this->validate($this->rules);

        Delegate::create([
          
            'workflow' => $this->workflow,
            'from_date' => $this->fromDate,
            'to_date' => $this->toDate,
            'delegate' => $this->delegate,
        ]);
      

        // Clear the form inputs
        $this->resetForm();
    }

    public function resetForm()
    {
        $this->workflow = '';
        $this->fromDate = '';
        $this->toDate = '';
        $this->delegate = '';
    }

    public function render()
    {
        $this->retrievedData = Delegate::all();
        $employeeId = auth()->guard('emp')->user()->emp_id;
        $this->employeeDetails = EmployeeDetails::where('emp_id', $employeeId)->get();

        return view('livewire.delegates', [
            'employees' => $this->employeeDetails,
            'retrievedData' => $this->retrievedData
        ]);
    }
}

