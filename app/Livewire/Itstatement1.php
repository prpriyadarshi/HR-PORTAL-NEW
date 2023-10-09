<?php

namespace App\Livewire;
use App\Models\ITStatement;
use Livewire\Component;

class Itstatement1 extends Component
{
    public $itStatements;
  
    public function render()
    {
        $this->itStatements = ITStatement::all();
        return view('livewire.itstatement');
    }
}