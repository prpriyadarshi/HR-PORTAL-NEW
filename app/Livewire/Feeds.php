<?php

namespace App\Livewire;

use App\Models\Comment;
use App\Models\EmployeeDetails;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Http\Request; 

use App\Models\Employee;




class Feeds extends Component
{
    public $selectedEmoji;
    public $employees;
    public $combinedData;
    public $monthAndDay;

    public $comments=[];
    public $newComment = '';
    public $isSubmitting = false;
  



public function mount()
{
    $companyId = Auth::user()->company_id;
    $this->employees = EmployeeDetails::where('company_id', $companyId)->get();
    $this->combinedData = $this->combineAndSortData($this->employees);
    $this->comments = Comment::all();
}


public function add_comment($emp_id)
{
    $employee = EmployeeDetails::where('emp_id', $emp_id)->firstOrFail();
    $this->isSubmitting = true;
   
    $comment = new Comment();
    $comment->emp_id = $emp_id;
    $comment->first_name = $employee->first_name; // Assuming the employee details have first_name field
    $comment->last_name = $employee->last_name;   // Assuming the employee details have last_name field
    $comment->comment = $this->newComment;
    $comment->save();

    

    // Clear the input field after adding the comment
    $this->reset(['newComment']);
    $this->isSubmitting = false; 
    session()->flash('success', 'Comment added successfully.');
}




    // Refresh the Livewire component after comment submission
 
    public function render()
    {
        $this->comments = Comment::all();
        $comment=comment::all();
        return view('livewire.feeds',['comment' => $this->comments],);
    }
  
    private function combineAndSortData($employees)
    {
        $combinedData = [];

        foreach ($employees as $employee) {
            if ($employee->date_of_birth) {
                $combinedData[] = [
                    'date' => Carbon::parse($employee->date_of_birth)->format('m-d'),
                    'type' => 'date_of_birth',
                    'employee' => $employee,
                ];
            }

            if ($employee->hire_date) {
                $combinedData[] = [
                    'date' => Carbon::parse($employee->hire_date)->format('m-d'),
                    'type' => 'hire_date',
                    'employee' => $employee,
                ];
            }
        }

        usort($combinedData, function ($a, $b) {
            return $b['date'] <=> $a['date']; // Sort in descending order
        });

        return $combinedData;
    }
}
