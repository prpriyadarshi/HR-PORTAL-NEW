<?php

namespace App\Livewire;

use App\Models\EmpBankDetail;
use App\Models\EmployeeDetails;
use App\Models\ParentDetail;
use Livewire\Component;
use Illuminate\Support\Facades\Session;

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
    //    if (Session::has('emp_id')) {
    //     // Value exists, you can use it here
    //     echo "Employee ID: " . $emp_id;
    // } else {
    //     // 'emp_id' has expired or does not exist
    //     echo "Employee ID has expired or is not set in the session.";
    // }

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
