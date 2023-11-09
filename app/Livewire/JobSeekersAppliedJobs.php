<?php

namespace App\Livewire;

use App\Models\AppliedJob;
use App\Models\Company;
use App\Models\JobseekersInterviewDetail;
use Illuminate\Database\QueryException;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Illuminate\Support\Facades\Response;

class JobSeekersAppliedJobs extends Component
{
    public $isOpen = false;
    public $appliedJobs;
    public $hrDetails;
    public $date;
    public $time;
    public $location_link;
    public $instructions;
    public $company_website;
    public $showError = false;
    public $showSuccessMessage = false;
    public $selectedJobApplicationId;
    public $selectedAction;
    public function dismissError()
    {
        $this->showError = false;
    }
    public function dismissMessage()
    {
        $this->showSuccessMessage = false;
    }
    public function submit()
    {
        $this->validate([
            'date' => 'required',
            'time' => 'required',
            'location_link' => 'required',
            'instructions' => 'required',
            'company_website' => 'required',
        ]);

        JobseekersInterviewDetail::create([
            'user_id' => $this->selectedJobApplicationId->user->user_id,
            'job_id' => $this->selectedJobApplicationId->job->job_id,
            'interview_date' => $this->date,
            'interview_time' => $this->time,
            'instructions' => $this->instructions,
            'company_website' => $this->company_website,
            'location_link' => $this->location_link,
        ]);
        $this->jobApplication = AppliedJob::find($this->selectedJobApplicationId->id);

        if ($this->jobApplication) {
            $this->jobApplication->update([
                'application_status' => 'Shortlisted',
            ]);
        }
        $this->isOpen = false;
        $this->showSuccessMessage = true;
    }
    public function logout()
    {
        auth()->guard('com')->logout();
        return redirect('/Login&Register');
    }
    public function downloadResumeHTML($fileName)
    {
        $filePath = public_path('storage/' . $fileName);
        if (file_exists($filePath)) {
            return Response::download($filePath, 'resume.html');
        } else {
            return 'Resume not found';
        }
    }
    public $activePreview = null;

    public $appliedJobId;
    public function open($jobApplicationId)
    {
        $this->appliedJobId = $jobApplicationId;
        $this->selectedJobApplicationId = AppliedJob::find($jobApplicationId);
        $this->isOpen = true;
    }
    public function close()
    {
        $this->isOpen = false;
    }
    public $jobApplication;
    public function reject($jobApplicationId)
    {
        $this->selectedJobApplicationId = $jobApplicationId;
        $this->selectedAction = 'Rejected';
        if ($this->selectedJobApplicationId && $this->selectedAction) {
            $this->jobApplication = AppliedJob::find($this->selectedJobApplicationId);
            if ($this->jobApplication) {
                $this->jobApplication->update([
                    'application_status' => $this->selectedAction,
                ]);
            }
        }
        return redirect('/JobSeekersAppliedJobs');
    }

    public function render()
    {
        $hrEmail = auth()->guard('com')->user()->contact_email;
        $this->hrDetails = Company::where('contact_email', $hrEmail)->first();
        $this->appliedJobs = AppliedJob::with('user', 'job')
            ->where('applied_to', '=', $this->hrDetails->contact_email)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('livewire.job-seekers-applied-jobs');
    }
}
