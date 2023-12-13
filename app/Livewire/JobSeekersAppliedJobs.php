<?php

namespace App\Livewire;

use App\Models\AppliedJob;
use App\Models\Company;
use App\Models\JobseekersExamDetails;
use App\Models\JobseekersInterviewDetail;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
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

        try {
            JobseekersExamDetails::create([
                'user_id' => $this->selectedJobApplicationId->user->user_id,
                'job_id' => $this->selectedJobApplicationId->job->job_id,
                'exam_date' => $this->date,
                'exam_time' => $this->time,
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
        } catch (QueryException $e) {
            $this->isOpen = false;
            $this->addError('duplicate', 'You have already shortlisted to this CV.');
            $this->showError = true; // Show the error message
        }
    }
    public $examPopUp, $examLinkSent = false;
    public $selectedJobseeker;
    public $examLink;
    public $showExaminationMessage = false;
    public function sendExamLink()
    {
        $this->validate([
            'examLink' => 'required'
        ]);
        $examLink = JobseekersExamDetails::where('job_id', $this->selectedJobseeker->job_id)->first();

        if ($examLink) {
            $examLink->update([
                'exam_link' => $this->examLink,
            ]);
        }
        $this->examPopUp = false;

        $this->showExaminationMessage = true;
    }
    public function dismissExamMessage()
    {
        $this->showExaminationMessage = false;
    }
    public $examDate;
    public $examTime;

    public function openExamPopUp($jobApplicationId)
    {
        $this->selectedJobseeker = JobseekersExamDetails::where('job_id', $jobApplicationId)->first();
        $this->examDate = $this->selectedJobseeker->exam_date;
        $this->examTime = $this->selectedJobseeker->exam_time;
        $this->examPopUp = true;
        $this->examLinkSent = true;
    }

    public $interviewPopup = false;
    public function openInterview($jobApplicationId)
    {
        $this->interviewPopup = true;
        $this->selectedJobseeker = JobseekersExamDetails::where('job_id', $jobApplicationId)->first();
    }

    public function closeInterview()
    {
        $this->interviewPopup = false;
    }
    public function closeExamPopUp()
    {
        $this->examPopUp = false;
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

    public $interviewExamData;
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
