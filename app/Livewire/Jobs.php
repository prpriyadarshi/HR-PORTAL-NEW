<?php

namespace App\Livewire;

use App\Models\AppliedJob;
use App\Models\Job;
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
    public $showDialog = false;
    public function close()
    {
        $this->showDialog = false;
    }
    public function applyJob()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'email|required|unique:applied_jobs,email,NULL,id,job_id,' . $this->selectedJob->job_id, // Replace 'your_table_name' and '$job_id' with actual values.
            'address' => 'required',
            'resume' => 'required',
        ], [
            'email.unique' => 'The combination of email and job ID is already in use.',
        ]);

        AppliedJob::create([
            'job_id' => $this->selectedJob->job_id,
            'job_title' => $this->selectedJob->title,
            'company_name' => $this->selectedJob->company_name,
            'applied_to' => $this->selectedJob->contact_email,
            'full_name' => $this->name,
            'email' => $this->email,
            'address' => $this->address,
            'resume' => $this->resume,
        ]);
        return redirect('/Jobs');
    }
    public function showJobApplication($jobId)
    {
        $this->selectedJob = Job::find($jobId);
        $this->showDialog = true;
    }
    public function render()
    {
        $this->jobs = Job::all();
        return view('livewire.jobs');
    }
}
