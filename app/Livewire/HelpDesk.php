<?php

namespace App\Livewire;

use App\Models\EmployeeDetails;
use App\Models\PeopleList;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
    public $record;
    public $activeTab='active';
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

    public function submit()
    {
        $this->validate([
            'category' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'description' => 'required|string',
            'file_path' => 'nullable|file|mimes:pdf,xls,xlsx,doc,docx,txt,ppt,pptx,gif,jpg,jpeg,png|max:2048',
            'cc_to' => 'nullable|string|max:255',
            'priority' => 'required|in:High,Medium,Low',
            'image' => 'image|max:2048',
        ]);
        if ($this->image) {
            $fileName = uniqid() . '_' . $this->image->getClientOriginalName();

            $this->image->storeAs('public/help-desk-images', $fileName);

            $this->image = 'help-desk-images/' . $fileName;
        }
        $employeeId = auth()->guard('emp')->user()->emp_id;
        $this->employeeDetails = EmployeeDetails::where('emp_id', $employeeId)->first();

        HelpDesks::create([
            'emp_id' => $this->employeeDetails->emp_id,
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
    public function closePeoples(){
        $this->isRotated=false;
    }
    public function selectPerson($personId)
    {
        $selectedPerson = $this->peoples->where('emp_id', $personId)->first();

        if ($selectedPerson) {
            $this->selectedPeopleNames[] = $selectedPerson->first_name;

            $this->cc_to = implode(', ', array_unique($this->selectedPeopleNames));
        }
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

    public function render()
    {
        $employeeId = auth()->guard('emp')->user()->emp_id;
        $companyId = Auth::user()->company_id;

        $this->peoples = EmployeeDetails::where('company_id', $companyId)->get();
        $peopleData = $this->filteredPeoples ? $this->filteredPeoples : $this->peoples;
        $this->record = HelpDesks::all();
        $this->records = DB::table('help_desks')
            ->where('emp_id', $employeeId)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('livewire.help-desk', [
            'peopleData' => $peopleData,
        ]);
    }
}
