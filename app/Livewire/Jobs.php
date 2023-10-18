<?php

namespace App\Livewire;

use App\Models\AppliedJob;
use App\Models\Job;
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
    public $showSuccessMessage=false;
  
    public function open(){
        $this->showDialog=true;
    }
    public function close(){
        $this->showDialog=false;
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
    public function render()
    {
        $this->jobs = Job::all();
        $user = auth()->user();
        $this->appliedJobs = AppliedJob::where('user_id', $user->user_id)->get();
        return view('livewire.jobs');
    }
}
