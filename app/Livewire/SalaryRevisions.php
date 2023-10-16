<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\SalaryRevision;
class SalaryRevisions extends Component
{
    public $salaryRevisions;
    public function render()
    {
        $this->salaryRevisions = SalaryRevision::where('emp_id',auth()->guard('emp')->user()->emp_id)->get();
        //dd($this->salaryRevisions);
        $this->salaryRevisions->each(function ($revision) {
            $previousCtc = $revision->previous_monthly_ctc;
            $latestCtc = $revision->revised_monthly_ctc;
            $lastRevisionDate = $revision->last_revision_period;
            $presentRevisionDate = $revision->present_revision_period;


            if ($previousCtc != 0) {

                $revision->percentageChange = (($latestCtc - $previousCtc) / $previousCtc) * 100;

            } else {

                $revision->percentageChange = 0;
            }

            $lastRevisionDate = \Carbon\Carbon::parse($revision->last_revision_period);
    $presentRevisionDate = \Carbon\Carbon::parse($revision->present_revision_period);

    if ($lastRevisionDate && $presentRevisionDate) {
        $duration = $lastRevisionDate->diffInMonths($presentRevisionDate);
        $revision->duration = $duration;
    } else {
        $revision->duration = 0; // Handle the case where dates are missing or invalid
    }

        });
        return view('livewire.salary-revisions', ['salaryRevisions' => $this->salaryRevisions]);

    }

}


