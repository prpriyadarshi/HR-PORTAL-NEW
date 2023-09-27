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
        $this->validate([
            "form.emp_id"=> 'required',
            "form.password"=> "required"
        ]);
        if (Auth::guard('emp')->attempt($this->form))
        {
            session()->flash('Success', "You are Loggedin Successfully!");
            return redirect()->to('/Home');
        }
        else
        {
            $this->error = "Employee ID or Password Wrong!!";
        }

    }


    public function render()
    {
        return view('livewire.emp-login');
    }
}
