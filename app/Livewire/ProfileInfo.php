<?php

namespace App\Livewire;

use App\Models\EmpBankDetail;
use App\Models\EmployeeDetails;
use App\Models\ParentDetail;
use Livewire\Component;

class ProfileInfo extends Component
{
    public $parentDetails;
    public $empBankDetails;

    public $employeeDetails;
    public function render()
    {

        $emp_id = session('emp_id');
       //$emp_id = session()->get('emp_id');
       // dd($emp_id);
       // dd(session()->has('emp_id'));
        if (session()->has('emp_id')) {
         //$this->employeeDetails = EmployeeDetails::where('emp_id',auth()->guard('emp')->user()->emp_id)->get();
         $this->employeeDetails = EmployeeDetails::where('emp_id',$emp_id)->get();
         $this->parentDetails = ParentDetail::where('emp_id',$emp_id)->get();
         $this->empBankDetails = EmpBankDetail::where('emp_id',$emp_id)->get();
         return view('livewire.profile-info');
        } else
        {
            $this->employeeDetails = [];
            $this->parentDetails = [];
            $this->empBankDetails = [];

    // You can also flash a message to be displayed on the view
    session()->flash('error', 'Employee details not found. Please log in.');

    // Or, you can redirect to a different page
      return redirect('emplogin');
        }
    }
}
