<?php

namespace App\Livewire;

use App\Models\HelpDesks;
use Livewire\Component;

class AuthChecking extends Component
{
    public $activeTab = 'active';
    public $records;


    public function openForDesks($taskId)
    {
        $task = HelpDesks::find($taskId);

        if ($task) {
            $task->update(['status' => 'Completed']);
        }
        return redirect()->to('/HelpDesk');
    }

    public function closeForDesks($taskId)
    {
        $task = HelpDesks::find($taskId);

        if ($task) {
            $task->update(['status' => 'Open']);
        }
        return redirect()->to('/HelpDesk');
    }
    public function pendingForDesks($taskId)
    {
        $task = HelpDesks::find($taskId);

        if ($task) {
            $task->update(['status' => 'Pending']);
        }
        return redirect()->to('/HelpDesk');
    }
    public $forIT, $forHR, $forFinance;

    public function render()
    {
        if (auth()->guard('it')->check()) {
            $companyId = auth()->guard('it')->user()->company_id;
            $this->forIT = HelpDesks::with('emp')
                ->whereHas('emp', function ($query) use ($companyId) {
                    $query->where('company_id', $companyId);
                })
                ->orderBy('created_at', 'desc')
                ->whereIn('category', ['Other Request', 'Database Access Request', 'IT Training Request', 'New Laptop', 'New Mailbox Request', 'Request For IT Accessories', 'Software Installation', 'System Upgrade Request', 'VPN Access Request'])
                ->get();
        } elseif (auth()->guard('hr')->check()) {
            $companyId = auth()->guard('hr')->user()->company_id;

            $this->forHR = HelpDesks::with('emp')
                ->whereHas('emp', function ($query) use ($companyId) {
                    $query->where('company_id', $companyId);
                })
                ->orderBy('created_at', 'desc')
                ->whereIn('category', ['Employee Information', 'Hardware Maintenance', 'Incident Report', 'Privilege Access Request', 'Security Access Request', 'Technical Support'])
                ->get();
        } elseif (auth()->guard('finance')->check()) {
            $companyId = auth()->guard('finance')->user()->company_id;

            $this->forFinance = HelpDesks::with('emp')
                ->whereHas('emp', function ($query) use ($companyId) {
                    $query->where('company_id', $companyId);
                })
                ->orderBy('created_at', 'desc')
                ->whereIn('category', ['Income Tax', 'Loans', 'Payslip'])
                ->get();
        }

        return view('livewire.auth-checking');
    }
}
