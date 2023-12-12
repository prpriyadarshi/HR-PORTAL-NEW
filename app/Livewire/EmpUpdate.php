<?php

namespace App\Livewire;

use App\Models\EmployeeDetails;
use Livewire\Component;

class EmpUpdate extends Component
{
   public $empId;

    public function mount($empId){

        $this->empId = EmployeeDetails::find($this->empId);
        
    }
    public function render()
    {
        return view('livewire.emp-update');
    }
}
