<?php

namespace App\Livewire;

use App\Models\EmployeeDetails;
use App\Models\PeopleList;
use Livewire\Component;
use App\Models\HelpDesks;
use Livewire\WithFileUploads;

class HelpDesk extends Component
{
    use WithFileUploads;
    public $searchTerm = '';

    public $isRotated = false;
    public $selectedPerson = null;
    public $peoples;
    public $activeTab = 'active';
    public $filteredPeoples;
    public $peopleFound = true;
    public $category;
    public $subject;
    public $description;
    public $file_path;
    public $cc_to;
    public $priority;
    public $records;
    public $image;
    public $selectedPeopleNames = [];
    public $employeeDetails;
    public $showDialog = false;
    public function toggleRotation()
    {
        $this->isRotated = true;
    }
    protected function resetInputFields()
    {
        $this->category = '';
        $this->subject = '';
        $this->description = '';
        $this->file_path = '';
        $this->cc_to = '';
        $this->priority = '';
    }


    protected function addErrorMessages($messages)
    {
        foreach ($messages as $field => $message) {
            $this->addError($field, $message[0]);
        }
    }

    protected $rules = [
        'category' => 'required|string|max:255',
        'subject' => 'required|string|max:255',
        'description' => 'required|string',
        'file_path' => 'nullable|file|mimes:pdf,xls,xlsx,doc,docx,txt,ppt,pptx,gif,jpg,jpeg,png|max:2048',
        'cc_to' => 'nullable|string|max:255',
        'priority' => 'required|in:High,Medium,Low',
    ];

    public function submit()
    {
        $this->validate([
            'image' => 'image|max:2048', // Validate the image file
        ]);

        if ($this->image) {
            $fileName = uniqid() . '_' . $this->image->getClientOriginalName();

            $this->image->storeAs('public/help-desk-images', $fileName);

            $this->image = 'help-desk-images/' . $fileName;
        }
        $employeeId = auth()->guard('emp')->user()->emp_id;
        $this->employeeDetails = EmployeeDetails::where('emp_id', $employeeId)->first();

        HelpDesks::create([
            'emp_id' =>$this->employeeDetails->emp_id,
            'category' => $this->category,
            'subject' => $this->subject,
            'description' => $this->description,
            'file_path' => $this->image,
            'cc_to' => $this->cc_to,
            'priority' => $this->priority,
        ]);

        $this->reset();

    }


    public function open()
    {
        $this->showDialog = true;
    }
    public function close()
    {
        $this->showDialog = false;
    }
    public function selectPerson($personId)
    {
        $selectedPerson = $this->peoples->where('id', $personId)->first();
    
        if ($selectedPerson) {
            $this->selectedPeopleNames[] = $selectedPerson->name;
    
            $this->cc_to = implode(', ', array_unique($this->selectedPeopleNames));
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

    public function render()
    {
        $this->records = HelpDesks::all();
        $this->peoples = PeopleList::all();
        $peopleData = $this->filteredPeoples ? $this->filteredPeoples : $this->peoples;

        return view('livewire.help-desk', [
            'peopleData' => $peopleData,
        ]);
    }
}
