<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Regularisations;
class RegularisationPending extends Component
{
    public $data;
    public function render()
    {
        $this->data=Regularisations::where('status','pending')->get();
      
        return view('livewire.regularisation-pending');
    }
}
