<?php

namespace App\Livewire;

use App\Models\EmployeeDetails;
use App\Models\Regularisations;
use Carbon\Carbon;
use Livewire\Component;

class ViewPendingRegularisation extends Component
{



    public $loggedInEmpId;

    public $employees;

    public $employee;
    public $employeeDetails;
    public $employees_name;
    public $s2;

    
    public $s3;
    public function mount()
    {
         $loggedInEmpId=auth()->guard('emp')->user()->emp_id;
         $employee=EmployeeDetails::where('emp_id',auth()->guard('emp')->user()->emp_id)->get();
        
         $this->employees=EmployeeDetails::where('manager_id',$loggedInEmpId)->select('emp_id')->get();
        
         $this->employees_name=EmployeeDetails::where('emp_id',$loggedInEmpId)->select('first_name','last_name')->get();
       
    }
    public function reject($id)
    {
      
       
        $regularisation_reject=Regularisations::find($id);
       
        $regularisation_reject->status='rejected';
        $regularisation_reject->rejected_date=Carbon::now();
       
     
       
      
  
        $regularisation_reject->rejected_by ='Shivam Tiwari';
       

        session()->flash('faliure', 'You have successfully rejected the application');
        // dd($regularisation_reject->rejected_by);
        
    }
    public function approve()
    {
        
    }
    public function render()
    {
      
    
        $regularisationRequests = Regularisations::select('regularisations.*', 'employee_details.first_name', 'employee_details.last_name')
        ->join('employee_details', 'regularisations.emp_id', '=', 'employee_details.emp_id')
        ->whereIn('regularisations.emp_id', $this->employees)
        ->where('regularisations.status', 'pending')
        ->where('is_withdraw',0)
        ->get();
        
        return view('livewire.view-pending-regularisation',['regularisationRequests'=>$regularisationRequests]);
    }
}
