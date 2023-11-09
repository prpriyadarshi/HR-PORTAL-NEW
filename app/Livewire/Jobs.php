<?php

namespace App\Livewire;

use App\Models\AppliedJob;
use App\Models\Company;
use App\Models\Job;
use App\Models\JobseekersInterviewDetail;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class Jobs extends Component
{
    use WithFileUploads;
    public $jobs;
    public $name;
    public $email;
    public $address;
    public $resume;
    public $selectedJob;
    public $selectedUser;
    public $userDetails;
    public $showDialog = false;
    public $appliedJobs;
    public $showError = true;
    public $showSuccessMessage = false;
    public $activeTab = "Shorlisted";

    public function open()
    {
        $this->showDialog = true;
    }
    public function close()
    {
        $this->showDialog = false;
    }
    public function createCV()
    {
        return redirect()->to('/CreateCV');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/emplogin');
    }


    public function showJobApplication($jobId)
    {
        $this->selectedJob = Job::find($jobId);
        $userId = auth()->guard('web')->user()->user_id;
        $this->userDetails = User::where('user_id', $userId)->first();

        try {
            AppliedJob::create([
                'job_id' => $this->selectedJob->job_id,
                'job_title' => $this->selectedJob->title,
                'company_name' => $this->selectedJob->company_name,
                'applied_to' => $this->selectedJob->contact_email,
                'user_id' => $this->userDetails->user_id,
                'full_name' => $this->userDetails->full_name,
                'email' => $this->userDetails->email,
                'address' => $this->userDetails->address,
                'resume' => $this->userDetails->resume,
            ]);
            $this->showSuccessMessage = true;
        } catch (QueryException $e) {
            $this->addError('duplicate', 'You have already applied to this job.');
            $this->showError = true; // Show the error message
        }
    }
    public function dismissError()
    {
        $this->showError = false;
    }
    public function dismissMessage()
    {
        $this->showSuccessMessage = false;
    }
    public $company;
    public function showJobDetails($jobId)
    {
        return redirect()->route('full-job-view', ['jobId' => $jobId]);
    }

    public function showShortlisetdJobInterviewDetails($jobId)
    {
        return redirect()->route('job-interview-details', ['jobId' => $jobId]);
    }
    public $selectOrNot;
    public $user;

    public $notificationList;
    public $rejectedJobs;
    public function render()
    {
        $this->jobs = Job::where('created_at', '<=', now())
            ->where(function ($query) {
                $query->whereNull('expire_date')
                    ->orWhere('expire_date', '>', now());
            })
            ->orderBy('created_at', 'desc')
            ->get();
        $this->user = auth()->user();
        $this->notificationList = JobseekersInterviewDetail::with('user', 'job', 'company')
            ->where('user_id', $this->user->user_id)
            ->orderBy('created_at', 'desc')
            ->get();

        $this->appliedJobs = AppliedJob::where('user_id', $this->user->user_id)->get();
        $this->selectOrNot = AppliedJob::where('user_id', $this->user->user_id)
            ->whereIn('application_status', ['Shortlisted', 'Rejected'])
            ->count();
        $this->rejectedJobs = AppliedJob::where('user_id', $this->user->user_id)
            ->whereIn('application_status', ['Rejected'])
            ->get();

        return view('livewire.jobs');
    }
}
