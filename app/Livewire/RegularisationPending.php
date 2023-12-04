<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Regularisations;
class RegularisationPending extends Component
{
    public $data;
    public $view_regularisation_date;
    public $view_regularisation_status;
    public $view_regularisation_remarks;
    public $view_regularisation_createdat;
    public $leaveRequest;
    public function mount($leaveRequestId)
    {
        // Fetch leave request details based on $leaveRequestId with employee details
        $this->leaveRequest = Regularisations::with('employee')->find($leaveRequestId);

        // $this->leaveRequest->from_date = Carbon::parse($this->leaveRequest->from_date);
        // $this->leaveRequest->to_date = Carbon::parse($this->leaveRequest->to_date);
    }
    public function viewStudentDetails($id)
    {
        $student = Regularisations::where('id', $id)->first();

        $this->view_regularisation_date= $student->regularisation_date;
        $this->view_regularisation_status = $student->status;
        $this->view_regularisation_remarks = $student->remarks;
        $this->view_regularisation_createdat = $student->created_at;

        // $this->dispatchBrowserEvent('show-view-student-modal');
    }
    public function render()
    {
        $this->data=Regularisations::where('is_withdraw',0)->get();
        dd( $this->leaveRequest);
        return view('livewire.regularisation-pending');
    }
}
