<?php

namespace App\Livewire;

use App\Models\PeopleList;
use Livewire\Component;

class PeoplesList extends Component
{ public $peoples;
    public $searchTerm = '';
    public function render()
    {
            $this->peoples = PeopleList::where('name', 'like', '%' . $this->searchTerm . '%')
                ->orWhere('emp_id', 'like', '%' . $this->searchTerm . '%');
        return view('livewire.peoples-list');
    }
}
