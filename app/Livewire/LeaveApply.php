<?php

namespace App\Livewire;

use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\LeaveRequest;
use App\Models\EmployeeDetails;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class LeaveApply extends Component
{
    use WithFileUploads, WithPagination;

    public $leave_type;
    public $from_date;
    public $from_session;
    public $to_session;
    public $to_date;
    public $applying_to;
    public $contact_details;
    public $reason;
    public $reportTo;
    public $managerId;
    public $employeeId;
    public $attachment_path;
     public $attachment_paths=[];
    public $defaultApplyingTo;
    public $cc_to ;
    public $searchTerm = '';
    public $selectedPeopleNames = [];
    public $selectedPeople = [];
    public $first_name;
    public $employeeDetails = [];
    public $ccRecipients =[];
    public $isOpen = false;
    public function mount()
    {
        $employeeId = auth()->guard('emp')->user()->emp_id;
        $this->applying_to = EmployeeDetails::where('emp_id', $employeeId)->first();
        if ($this->applying_to) {
            // Concatenate both report_to and manager_id
            // $this->defaultApplyingTo = $this->applying_to->report_to . ' ' . $this->applying_to->manager_id;
    
            // Or display them separately
            $this->reportTo = $this->applying_to->report_to;
            $this->managerId = $this->applying_to->manager_id;
            
        }
        $this->searchEmployees(); 
        $this->searchCCRecipients(); 
        
    }
    // Add this method to your Livewire component
    public function searchEmployees()
    {
        // Fetch employees based on the search term
        $this->employeeDetails = EmployeeDetails::where('company_id', $this->applying_to->company_id)
            ->where(function ($query) {
                $query->where('company_name', 'like', '%' . $this->searchTerm . '%')
                    ->orWhere('emp_id', 'like', '%' . $this->searchTerm . '%');
            })
            
            ->select(
                'manager_id',
                DB::raw('MIN(report_to) as report_to'),
                DB::raw('MIN(image) as image'),
                DB::raw('MIN(emp_id) as emp_id'),
                DB::raw('MIN(CONCAT(first_name, " ", last_name)) as full_name')
            )
            ->groupBy('manager_id')
            ->get();
    }
    public function searchCCRecipients()
    {
        // Fetch employees based on the search term for CC To
        $employeeId = auth()->guard('emp')->user()->emp_id;
        $this->ccRecipients = EmployeeDetails::where('company_id', $this->applying_to->company_id)
            ->where('emp_id', '!=', $employeeId) // Exclude the current user
            ->where(function ($query) {
                $query->where('company_name', 'like', '%' . $this->searchTerm . '%')
                    ->orWhere('emp_id', 'like', '%' . $this->searchTerm . '%');
            })
            ->groupBy('emp_id')
            ->select(
                'emp_id',
                DB::raw('MIN(CONCAT(first_name, " ", last_name)) as full_name')
            )
            ->get();
    }
    
   
    public function leaveApply()
    {
    
    try {
           
        $employeeId = auth()->guard('emp')->user()->emp_id;
        $this->employeeDetails = EmployeeDetails::where('emp_id', $employeeId)->first();
       
        $this->validate([
            'leave_type' => 'required|string|max:255',
            // Add other validation rules for other attributes
        ]);
      
     
        dd('Applying To:', $this->applying_to);
        dd('CC To:', $this->cc_to);
        dd('Contact Details:', $this->contact_details);
        dd('Reason:', $this->reason);
   LeaveRequest::create([
        'emp_id' => $this->employeeDetails->emp_id,
        'leave_type' => $this->leave_type,
        'from_date' => $this->from_date,
        'from_session' => $this->from_session,
        'to_session' => $this->to_session,
        'to_date' => $this->to_date,
        'applying_to' => $this->reportTo,
        'cc_to' =>$this->employeeDetails->emp_id,
        'contact_details' => $this->contact_details,
        'reason' => $this->reason,
    
    ]);
  
  
    $this->reset();
 
    dd('Data stored successfully!');
} catch (\Exception $e) {
    // Display the exception message
    dd('Error: ' . $e->getMessage());

    // If you're using transactions, rollback
    \DB::rollBack();
}
}

    
    public function render()
    {
      
        return view('livewire.leave-apply');
    }

 
}

