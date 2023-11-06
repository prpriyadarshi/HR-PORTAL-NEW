<?php

namespace App\Livewire;

use App\Models\AppliedJob;
use App\Models\Company;
use Livewire\Component;
use Illuminate\Support\Facades\Response;

class JobSeekersAppliedJobs extends Component
{
    public $appliedJobs;
    public $hrDetails;
    public $resumeData;
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
    public $activePreview=null;
    public function previewResumeHTML($fileName,$index)
    {
        $this->activePreview = $index;

        $filePath = public_path('storage/' . $fileName);

        if (file_exists($filePath)) {
            $resumeHtml = file_get_contents($filePath);
            $this->resumeData = $resumeHtml;
        } else {
            $this->resumeData = 'Resume not found';
        }
    }

    public function render()
    {
        $hrEmail = auth()->guard('com')->user()->contact_email;
        $this->hrDetails = Company::where('contact_email', $hrEmail)->first();
        $this->appliedJobs = AppliedJob::with('user')
            ->where('applied_to', '=', $this->hrDetails->contact_email)
            ->get();

        return view('livewire.job-seekers-applied-jobs');
    }
}
