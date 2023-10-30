<?php

namespace App\Livewire;

use App\Models\Company;
use App\Models\Job;
use Livewire\Component;

class FullJobView extends Component
{
    public $job;
    public $company;
    public function mount($jobId)
    {
        $this->job = Job::find($jobId);
        $this->company = Company::find($this->job->company_id);
    }

    public function render()
    {
        return view('livewire.full-job-view');
    }
}
