<?php

namespace App\Livewire;

use App\Models\EmployeeDetails;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Peoples extends Component
{
    public $searchTerm = '';
    public $peoples;
    public $selectedPerson = null;
    public $starredPerson = null;
    public $filteredPeoples;
    public $activeTab = 'starred';
    public $peopleFound = true;

    public function starMarkedPerson($personId)
    {
        $person = EmployeeDetails::find($personId);

        if ($person) {
            $person->update(['is_starred' => !$person->is_starred]);
            $this->starredPerson = $person->id;
        }
    }

    public function selectPerson($empId)
    {
        $this->selectedPerson = EmployeeDetails::where('emp_id', $empId)->first();
    }
    

    public function mount()
    {
        $firstRecord = EmployeeDetails::first();
        $starredRecord = EmployeeDetails::where('is_starred', 1)->first();

        $this->selectedPerson = $firstRecord ? $firstRecord->emp_id : null;
        $this->starredPerson = $starredRecord ? $starredRecord->emp_id : null;
    }

    public function filter()
    {
        $companyId = Auth::user()->company_id;
        $trimmedSearchTerm = trim($this->searchTerm);

        $this->filteredPeoples = EmployeeDetails::where('company_id', $companyId)
            ->where(function ($query) use ($trimmedSearchTerm) {
                $query->where(DB::raw("CONCAT(first_name, ' ', last_name)"), 'like', '%' . $trimmedSearchTerm . '%')
                    ->orWhere('emp_id', 'like', '%' . $trimmedSearchTerm . '%');
            })
            ->get();

        $this->peopleFound = count($this->filteredPeoples) > 0;
    }

    public function toggleStar($personId)
    {
        $person = EmployeeDetails::find($personId);

        if ($person) {
            $person->update(['is_starred' => !$person->is_starred]);
        }
        return redirect()->to('/PeoplesList');
    }

    public function render()
    {
        $companyId = Auth::user()->company_id;
        $this->peoples = EmployeeDetails::where('company_id', $companyId)->get();

        $peopleData = $this->filteredPeoples ?: $this->peoples;

        return view('livewire.peoples', [
            'peopleData' => $peopleData,
        ]);
    }
}
