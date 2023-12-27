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
            $this->forIT = HelpDesks::with('emp')
                ->orderBy('created_at', 'desc')
                ->whereIn('category', ['Other Request', 'Database Access Request', 'IT Training Request', 'New Laptop', 'New Mailbox Request', 'Request For IT Accessories', 'Software Installation', 'System Upgrade Request', 'VPN Access Request'])
                ->get();
        } elseif (auth()->guard('hr')->check()) {
            $this->forHR = HelpDesks::with('emp')
                ->orderBy('created_at', 'desc')
                ->whereIn('category', ['Employee Information', 'Hardware Maintenance', 'Incident Report', 'Privilege Access Request', 'Security Access Request', 'Technical Support'])
                ->get();
        } elseif (auth()->guard('finance')->check()) {
            $this->forFinance = HelpDesks::with('emp')
                ->orderBy('created_at', 'desc')
                ->whereIn('category', ['Income Tax', 'Loans', 'Payslip'])
                ->get();
        }

        return view('livewire.auth-checking');
    }
}
