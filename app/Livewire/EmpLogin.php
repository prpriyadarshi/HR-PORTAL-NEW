<?php

namespace App\Livewire;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EmpLogin extends Component
{
    public $form = [
        'emp_id'=>'',
        'password'=>'',
    ];
    public $error = '';
        public function empLogin()
        {
<<<<<<< HEAD
            session()->flash('Success', "You are Loggedin Successfully!");
            return redirect(route('profile.info'));
        }
        else
        {
            $this->error = "Employee ID or Password Wrong!!";
        }
=======
            $this->validate([
                "form.emp_id"=> 'required',
                "form.password"=> "required"
            ]);
            if (Auth::guard('employee_details')->attempt($this->form))
            {
                session()->flash('Success', "You are Loggedin Successfully!");
                return redirect()->route('profile.info');
            }
            else    
            {
                $this->error = "Employee ID or Password Wrong!!";
            }
>>>>>>> 6ad1c4bd908b8ec983f4fac3b715ecedc05e59d8

        }


    public function render()
    {
        return view('livewire.emp-login');
    }
}
