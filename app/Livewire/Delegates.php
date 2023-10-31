<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Delegate;
use App\Models\EmployeeDetails;

class Delegates extends Component
{
    protected $debug = true;
    public $workflow;
    public $fromDate;
    public $toDate;
    public $delegate;
    public $retrievedData ;
    public $employeeDetails;


    public $formattedFromDate;
    public $formattedToDate;
    
   

    protected $rules = [
       
        'workflow' => 'required',
        'fromDate' => 'required|date',
        'toDate' => 'required|date',
        'delegate' => 'required',
    ];
    public function submitForm()
    {
        $this->validate();

        // Assuming 'Delegate' is the correct model name
        Delegate::create([
            'workflow' => $this->workflow,
            'from_date' => $this->fromDate,
            'to_date' => $this->toDate,
            'delegate' => $this->delegate,
        ]);

        // Retrieve and set the data to $retrievedData
        // $this->retrievedData = Delegate::all();
     
        // Clear the form inputs
        $this->workflow = '';
        $this->fromDate = '';
        $this->toDate = '';
        $this->delegate = '';
    }
    public function formatDate($field)
    {
        // Get the value from the date input
        $dateValue = $this->$field;
        
        // Check if the date is not empty
        if (!empty($dateValue)) {
            // Parse the date and format it to dd/mm/yyyy
            $formattedDate = date('d/m/Y', strtotime($dateValue));
            
            // Set the formatted date to the corresponding property
            $this->formattedFromDate = $field === 'fromDate' ? $formattedDate : $this->formattedFromDate;
            $this->formattedToDate = $field === 'toDate' ? $formattedDate : $this->formattedToDate;
        } else {
            // If the date is empty, set the formatted date to empty
            $this->formattedFromDate = '';
            $this->formattedToDate = '';
        }
    }
    public function render()
    {
        $this->retrievedData = Delegate::all();
        $employeeId = auth()->guard('emp')->user()->emp_id;
        $this->employeeDetails =  EmployeeDetails::where('emp_id', $employeeId)->get();
        return view('livewire.delegates', ['employees' => $this->employeeDetails], ['retrievedData' => $this->retrievedData]);
    }
}
