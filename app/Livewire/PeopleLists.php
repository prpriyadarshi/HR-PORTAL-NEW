<?php

namespace App\Livewire;

use App\Models\PeopleList;
use Livewire\Component;

use function Termwind\render;

class PeopleLists extends Component
{
    public $searchTerm = '';
    public $peoples;
    public $selectedPerson = null;
    public $starredPerson = null;
    public $filteredPeoples;
    public $activeTab = 'starred';
    public $peopleFound = true;

    public function selectPerson($personId)
    {
        $this->selectedPerson = $personId;
    }
    public function starMarkedPerson($personId)
    {
        $this->starredPerson = $personId;
    }
    public function mount()
    {
        $firstRecord = PeopleList::first(); 
        $starredRecord = PeopleList::where('is_starred', 1)->first();

        if ($firstRecord || $starredRecord) {
            $this->selectedPerson = $firstRecord->id;
            $this->starredPerson = $starredRecord->id ?? '';
        } else {
        }
    }

    public function filter()
    {
        $trimmedSearchTerm = trim($this->searchTerm);

        $this->filteredPeoples = PeopleList::where('name', 'like', '%' . $trimmedSearchTerm . '%')
            ->orWhere('emp_id', 'like', '%' . $trimmedSearchTerm . '%')
            ->get();

        $this->peopleFound = count($this->filteredPeoples) > 0;
    }

    public function toggleStar($personId)
    {
        $person = PeopleList::find($personId);

        if ($person) {
            $person->update(['is_starred' => !$person->is_starred]);
        }
    }


    public function render()
    {
        $this->peoples = PeopleList::all();
        $peopleData = $this->filteredPeoples ? $this->filteredPeoples : $this->peoples;

        return view('livewire.people-lists', [
            'peopleData' => $peopleData,
        ]);
    }
}
