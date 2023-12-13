<?php

namespace App\Livewire;

use App\Models\EmployeeDetails;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;

class Tasks extends Component
{
    use WithFileUploads;
    public $status = false;
    public $searchTerm = '';
    public $showDialog = false;
    public $employeeDetails;
    public $emp_id;
    public $task_name;
    public $assignee;
    public $priority;
    public $due_date;
    public $tags;
    public $followers;
    public $subject;
    public $description;
    public $file_path;
    public $image;
    public $peoples;
    public $records;
    public $filteredPeoples;
    public $assigneeList;
    public $peopleFound = true;
    public $activeTab = 'open';
    public $employeeIdToComplete;
    public $record;


    public $followersList = false;
    public $selectedPeopleNames = [];
    public $selectedPeopleNamesForFollowers = [];

    public function forAssignee()
    {
        $this->assigneeList = true;
    }
    public function closeAssignee()
    {
        $this->assigneeList = false;
    }

    public function forFollowers()
    {
        $this->followersList = true;
    }
    public function closeFollowers()
    {
        $this->followersList = false;
    }

    public $showRecipients = false;
    public $selectedPeople = [];
    public function selectPerson($personId)
    {
        $selectedPerson = $this->peoples->where('emp_id', $personId)->first();

        if ($selectedPerson) {
            if (in_array($personId, $this->selectedPeople)) {
                $this->selectedPeopleNames[] = $selectedPerson->first_name . ' #(' . $selectedPerson->emp_id . ')';
            } else {
                $this->selectedPeopleNames = array_diff($this->selectedPeopleNames, [$selectedPerson->first_name . ' #(' . $selectedPerson->emp_id . ')']);
            }

            $this->assignee = implode(', ', array_unique($this->selectedPeopleNames));
            $this->showRecipients = count($this->selectedPeopleNames) > 0;
        }
    }

    public $showFollowers = false;
    public $selectedPeopleForFollowers = [];
    public function selectPersonForFollowers($personId)
    {
        $selectedPerson = $this->peoples->where('emp_id', $personId)->first();

        if ($selectedPerson) {
            if (in_array($personId, $this->selectedPeopleForFollowers)) {
                $this->selectedPeopleNamesForFollowers[] = $selectedPerson->first_name . ' #(' . $selectedPerson->emp_id . ')';
            } else {
                $this->selectedPeopleNamesForFollowers = array_diff($this->selectedPeopleNamesForFollowers, [$selectedPerson->first_name . ' #(' . $selectedPerson->emp_id . ')']);
            }

            $this->followers = implode(', ', array_unique($this->selectedPeopleNamesForFollowers));
            $this->showFollowers = count($this->selectedPeopleNamesForFollowers) > 0;
        }
    }
    public function openForTasks($taskId)
    {
        $task = Task::find($taskId);

        if ($task) {
            $task->update(['status' => 'Completed']);
        }
        return redirect()->to('/tasks');
    }

    public function closeForTasks($taskId)
    {
        $task = Task::find($taskId);

        if ($task) {
            $task->update(['status' => 'Open']);
        }
        return redirect()->to('/tasks');
    }

    public function submit()
    {
        $this->validate([
            'followers' => 'required',
            'tags' => 'required',
            'due_date' => 'required',
            'priority' => 'required',
            'assignee' => 'required',
            'subject' => 'required',
            'description' => 'required',
            'file_path' => 'nullable|image|mimes:pdf,xls,xlsx,doc,docx,txt,ppt,pptx,gif,jpg,jpeg,png|max:2048',
            'task_name' => 'required',
            'image' => 'image|max:2048',
        ]); // Validate the image file
        if ($this->image) {
            $fileName = uniqid() . '_' . $this->image->getClientOriginalName();

            $this->image->storeAs('public/tasks-images', $fileName);

            $this->image = 'tasks-images/' . $fileName;
        }
        $employeeId = auth()->guard('emp')->user()->emp_id;
        $this->employeeDetails = EmployeeDetails::where('emp_id', $employeeId)->first();

        Task::create([
            'emp_id' => $this->employeeDetails->emp_id,
            'task_name' => $this->task_name,
            'assignee' => $this->assignee,
            'priority' => $this->priority,
            'due_date' => $this->due_date,
            'tags' => $this->tags,
            'followers' => $this->followers,
            'subject' => $this->subject,
            'description' => $this->description,
            'file_path' => $this->image,
        ]);
        $this->reset();
        return redirect()->to('/tasks');
    }

    public function show()
    {
        $this->showDialog = true;
    }

    public function close()
    {
        $this->showDialog = false;
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
        $this->record = Task::all();
        $employeeName = auth()->user()->first_name . ' #(' . $employeeId . ')';

        $this->records = Task::with('emp')
            ->where(function ($query) use ($employeeId, $employeeName) {
                $query->where('emp_id', $employeeId)
                    ->orWhere('assignee', 'LIKE', "%$employeeName%");
            })
            ->orderBy('created_at', 'desc')
            ->get();
        return view('livewire.tasks', [
            'peopleData' => $peopleData,
        ]);
    }
}
