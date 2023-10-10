<?php

namespace App\Livewire;
use Illuminate\Validation\Rule;
use App\Models\EmployeeDetails;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Carbon\Carbon;
class EmpLogin extends Component
{
    public $showDialog = false;
    public $email;
    public $dob;
    public $newPassword;
    public $newPassword_confirmation;
    public $verified = false;

    public $form = [
        'emp_id'=>'',
        'password'=>'',
    ];
    public $error = '';
        public function empLogin()
        {
            $this->validate([
                "form.emp_id"=> 'required',
                "form.password"=> "required"
            ]);
            if (Auth::guard('emp')->attempt($this->form))
            {
                session()->flash('Success', "You are Loggedin Successfully!");
                return redirect()->route('home');
            }else
            {
                $this->error = "Employee ID or Password Wrong!!";
            }

        }

        public function show()
        {
            // $this->resetForm();
            $this->showDialog = true;

        }
        public function remove()
        {
            // $this->resetForm();
            $this->showDialog = false;
        }

public function verifyEmailAndDOB()
    {

        $this->validate([
            'email' => ['required', 'email'],
            'dob' => ['required', 'date'],
        ]);
        // Implement your logic to verify email and DOB here.
        // Example: Check if the email and DOB match a user's stored values in your database.
        $user = EmployeeDetails::where('email', $this->email)->where('date_of_birth', $this->dob)->first();
      if ($user) {
            $this->verified = true;
        } else {
            // Invalid email or DOB, show an error message or handle accordingly.
            $this->addError('email', 'Invalid email or date of birth');
        }
    }

    public function createNewPassword()
    {
     //dd($this->newPassword,$this->newPassword_confirmation);
        $this->validate([
            'newPassword' => ['required', 'min:8', 'max:50', 'confirmed'],
        ]);
       // dd($this->newPassword,$this->newPassword_confirmation);
        // Implement your logic to create a new password here.
        // Example: Update the user's password in your database.
        if ($this->newPassword === $this->newPassword_confirmation) {
            $user = EmployeeDetails::where('email', $this->email)->first();
            if ($user) {
                // Update the user's password in the database.
                $user->update(['password' => bcrypt($this->newPassword)]);
                // Reset form fields and state after successful password update.
                $this->reset(['newPassword', 'newPassword_confirmation', 'verified']);
            }
        } else {
            // Passwords do not match, show an error message.
            $this->addError('newPassword', 'Passwords do not match');
        }
    }

 public function render()
    {
        return view('livewire.emp-login');
    }
}
