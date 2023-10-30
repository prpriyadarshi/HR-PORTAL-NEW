<?php

namespace App\Livewire;
use App\Models\AppliedJob;
use Livewire\Component;

class AppliedJobs extends Component
{
    public $appliedJobs;

    public function render()
    {
        $user = auth()->user();

        $appliedJobs = AppliedJob::where('user_id', $user->user_id)->get();

        $this->appliedJobs = $appliedJobs;

        return view('livewire.applied-jobs');
    }
}
