<?php

namespace App\Livewire;

use App\Models\Job;
use App\Models\User;
use App\Models\VendorsSubmitCvToHr;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class VendorScreen extends Component
{
    use WithFileUploads;
    public $jobs;
    public $showError = false;
    public $showSuccessMessage = false;
    public $submited_to;
    public $cv = [];


    public function dismissError()
    {
        $this->showError = false;
    }
    public $selectedJob;
    public $userDetails;
    public function dismissMessage()
    {

        $this->showSuccessMessage = false;
    }
    public function showJobApplication($jobId)
    {
        $this->validate([
            'cv'=>'required'
        ]);
        $cvSets = [];
    
        foreach ($this->cv as $pdf) {
            $cvSets[] = ['cv' => $pdf->store()];
        }
    
        // Encode the array of sets into JSON
    
        $this->selectedJob = Job::find($jobId);
        $userId = auth()->guard('web')->user()->user_id;
        $this->userDetails = User::where('user_id', $userId)->first();
    
        VendorsSubmitCvToHr::create([
            'user_id' => $this->userDetails->user_id,
            'company_id' => $this->selectedJob->company_id,
            'submited_to' => $this->selectedJob->contact_email,
            'cv' => $cvSets,
        ]);
    
        $this->showSuccessMessage = true;
    }
    
    
    public function showJobDetails($jobId)
    {
        return redirect()->route('full-job-view', ['jobId' => $jobId]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/emplogin');
    }
    public $user;
    public $totalCvCount;
    public $individualCvCounts;
    public function render()
    {
        $this->user = auth()->user();
        $this->totalCvCount = VendorsSubmitCvToHr::count();
        $this->individualCvCounts = VendorsSubmitCvToHr::select('user_id')->groupBy('user_id')->count();
        $this->jobs = Job::where('created_at', '<=', now())
            ->where(function ($query) {
                $query->whereNull('expire_date')
                    ->orWhere('expire_date', '>', now());
            })
            ->orderBy('created_at', 'desc')
            ->get();
        return view('livewire.vendor-screen');
    }
}
