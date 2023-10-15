<?php

namespace App\Livewire;
use Livewire\Component;

class SalaryRevision extends Component
{
    public $salaryRevision;
    public function render()
    {
        $this->salaryRevision = SalaryRevision::where('emp_id',auth()->guard('emp')->user()->emp_id)->get();
         dd($this->salaryRevision);
        return view('livewire.salary-revision');
    }
}
