<?php

namespace App\Livewire;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\LeaveRequest;
use App\Models\EmployeeDetails;
use Livewire\Component;

class LeaveApply extends Component
{
    use WithFileUploads;

    public $leave_type;
    public $from_date;
    public $session;
    public $to_date;
    public $applying_to;
    public $contact_details;
    public $reason;
    public $attachment;
    public $defaultApplyingTo;
    public $cc_to = [];
    public $searchTerm = '';

    public function mount()
    {
        // Fetch default values based on the logged-in user's ID
        $employeeId = auth()->guard('emp')->user()->emp_id;
        $this->applying_to = EmployeeDetails::where('emp_id', $employeeId)->first();
       
        if ($this->applying_to) {
            $this->defaultApplyingTo = $this->applying_to->report_to; // Set the default value
        }
    }
       

    public function store()
   
    {
        // Validate the form data
        $this->validate([
            'leave_type' => 'required|in:casual,maternity,loss_of_pay,sick_leave',
            'from_date' => 'required|date',
            'session' => 'required|in:session_1,session_2',
            'to_date' => 'required|date',
            'applying_to' => 'required|string',
            'cc_to' => 'nullable|string',
            'contact_details' => 'required|string',
            'reason' => 'required|string',
            'attachment' => 'nullable|mimes:pdf,xls,xlsx,doc,docx,txt,ppt,pptx,gif,jpg,jpeg,png|max:2048',
        ]);

        // Handle file attachment if provided
        $attachmentPath = null;
        if ($this->attachment) {
            $attachmentPath = $this->attachment->store('attachments');
        }

        // Create a new leave application and associate it with the employee
        LeaveApply::create([
            'emp_id' => $employeeId,
            'leave_type' => $this->leave_type,
            'from_date' => $this->from_date,
            'session' => $this->session,
            'to_date' => $this->to_date,
            'applying_to' => $this->applying_to,
            'cc_to' => $this->cc_to,
            'contact_details' => $this->contact_details,
            'reason' => $this->reason,
            'attachment_path' => $attachmentPath,
        ]);

        // Redirect to a success page or emit an event as needed
        session()->flash('message', 'Leave application submitted successfully.');
        $this->resetFormFields(); // Optionally, reset the form fields

        // Refresh the Livewire component to update the UI
        $this->refresh();
    }
    
    public function render()
    {
        $employees = [];

        if ($this->searchTerm) {
            // Fetch employees based on the search term and company_id
            $employees = EmployeeDetails::where('company_name', auth()->user()->company_id)
                ->where('name', 'like', '%' . $this->searchTerm . '%')
                ->get();
        }

        return view('livewire.leave-apply', [
            'employees' => $employees,
        ]);
    }
    private function resetFormFields()
    {
        // Reset the form fields to their initial state
        $this->leave_type = null;
        $this->from_date = null;
        $this->session = null;
        $this->to_date = null;
        $this->applying_to = null;
        $this->cc_to = null;
        $this->contact_details = null;
        $this->reason = null;
        $this->attachment = null;
    }

    public function applyPage(){
         return redirect()->to('/leave-page');
    }
}
