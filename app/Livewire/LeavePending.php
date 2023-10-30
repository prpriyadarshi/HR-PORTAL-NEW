<?php

namespace App\Livewire;

use Livewire\Component;

class LeavePending extends Component
{
    public $selectedOption;
    public $message;

    public function showMessage()
    {
        // Show a message based on the selected option
        switch ($this->selectedOption) {
            case 'loss':
                $this->message = 'Sorry to hear about your loss.';
                break;
            case 'sick':
                $this->message = 'Get well soon!';
                break;
            default:
                $this->message = null; // Clear the message if no option is selected
                break;
        }
    }
    public function render()
    {
        return view('livewire.leave-pending');
    }
}
