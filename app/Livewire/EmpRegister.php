<?php

namespace App\Livewire;

use App\Models\EmployeeDetails;
use Livewire\Component;
use Livewire\WithFileUploads;
class EmpRegister extends Component
{

    use WithFileUploads;
     public $emp_id;
    public $first_name;
    public $last_name;
    public $date_of_birth;
    public $gender;
    public $email;
    public $company_name;
    public $company_email;
    public $mobile_number;
    public $alternate_mobile_number;
    public $address;
    public $city;
    public $state;
    public $postal_code;
    public $country;
    public $hire_date;
    public $employee_type;
   public  $department;
    public $job_title;
    public $manager_id;
    public $report_to;
    public $employee_status;
    public $emergency_contact;
    public $password;
    public $image;
    public $blood_group;
    public $nationality;
    public $religion;
    public $marital_status;
    public $spouse;
    public $physically_challenge;
    public $inter_emp;
    public $job_location;
    public $education;
    public $experince;
    public $pan_no;
    public $adhar_no;
    public $pf_no;
    public $nick_name;
    public $time_zone;
    public $biography;
    public $facebook;
    public $twitter;
    public $linked_in;
    public $company_id;

public function resetForm()
    {
        $this->reset([
            'emp_id',
            'first_name',
            'last_name',
            'date_of_birth',
            'gender',
            'email',
            'company_name',
            'company_email',
            'mobile_number',
            'alternate_mobile_number',
            'address',
            'city',
            'state',
            'postal_code',
            'country',
            'hire_date',
            'employee_type',
            'department',
            'job_title',
            'manager_id',
            'report_to',
            'employee_status',
            'emergency_contact',
            'password',
            'image',
            'blood_group',
            'nationality',
            'religion',
            'marital_status',
            'spouse',
            'physically_challenge',
            'inter_emp',
            'job_location',
            'education',
            'experince',
            'pan_no',
            'adhar_no',
            'pf_no',
            'nick_name',
            'time_zone',
            'biography',
            'facebook',
            'twitter',
            'linked_in',
            'company_id',
        ]);
    }



    protected $rules = [
            'emp_id' => 'required|numeric',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'gender' => 'required|in:Male,Female,Other',
            'email' => 'required|email|unique:employees,email',
            'company_name' => 'required|string|max:255',
            'company_email' => 'required|email|unique:employees,company_email',
            'mobile_number' => 'required|string|max:15',
            'alternate_mobile_number' => 'nullable|string|max:15',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'postal_code' => 'required|string|max:20',
            'country' => 'required|string|max:255',
            'hire_date' => 'required|date',
            'employee_type' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'job_title' => 'required|string|max:255',
            'manager_id' => 'nullable|numeric',
            'report_to' => 'nullable|string|max:255',
            'employee_status' => 'required|in:Active,Inactive',
            'emergency_contact' => 'required|string|max:255',
            'password' => 'required|string|min:6',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'blood_group' => 'nullable|string|max:10',
            'nationality' => 'nullable|string|max:255',
            'religion' => 'nullable|string|max:255',
            'marital_status' => 'nullable|in:Single,Married,Divorced,Widowed',
            'spouse' => 'nullable|string|max:255',
            'physically_challenge' => 'nullable|boolean',
            'inter_emp' => 'nullable|string|max:255',
            'job_location' => 'nullable|string|max:255',
            'education' => 'nullable|string|max:255',
            'experience' => 'nullable|string|max:255',
            'pan_no' => 'nullable|string|max:20',
            'adhar_no' => 'nullable|string|max:20',
            'pf_no' => 'nullable|string|max:20',
            'nick_name' => 'nullable|string|max:255',
            'time_zone' => 'nullable|string|max:255',
            'biography' => 'nullable|string',
            'facebook' => 'nullable|url|max:255',
            'twitter' => 'nullable|url|max:255',
            'linked_in' => 'nullable|url|max:255',
            'company_id' => 'required|numeric',


    ];

    public function submit()
    {
        $this->validate();

        if ($this->image) {
            $imagePath = $this->image->store('public/employee-images');
            $this->image = str_replace('public/', '', $imagePath);
        }
        $passwordHash = password_hash($this->password, PASSWORD_DEFAULT);
        EmployeeDetails::create([
            'emp_id' => $this->emp_id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'date_of_birth' => $this->date_of_birth,
            'gender' => $this->gender,
            'email' => $this->email,
            'company_name' => $this->company_name,
            'company_email' => $this->company_email,
            'mobile_number' => $this->mobile_number,
            'alternate_mobile_number' => $this->alternate_mobile_number,
            'address' => $this->address,
            'city' => $this->city,
            'state' => $this->state,
            'postal_code' => $this->postal_code,
            'country' => $this->country,
            'hire_date' => $this->hire_date,
            'employee_type' => $this->employee_type,
            'department' => $this->department,
            'job_title' => $this->job_title,
            'manager_id' => $this->manager_id,
            'report_to' => $this->report_to,
            'employee_status' => $this->employee_status,
            'emergency_contact' => $this->emergency_contact,
            'password' => $passwordHash,
            'image' => $this->image,
            'blood_group' => $this->blood_group,
            'nationality' => $this->nationality,
            'religion' => $this->religion,
            'marital_status' => $this->marital_status,
            'spouse' => $this->spouse,
            'physically_challenge' => $this->physically_challenge,
            'inter_emp' => $this->inter_emp,
            'job_location' => $this->job_location,
            'education' => $this->education,
            'experince' => $this->experince,
            'pan_no' => $this->pan_no,
            'adhar_no' => $this->adhar_no,
            'pf_no' => $this->pf_no,
            'nick_name' => $this->nick_name,
            'time_zone' => $this->time_zone,
            'biography' => $this->biography,
            'facebook' => $this->facebook,
            'twitter' => $this->twitter,
            'linked_in' => $this->linked_in,
            'company_id' => $this->company_id,
        ]);


        // Reset form fields
        $this->resetForm();


        // Optionally, you can show a success message
        session()->flash('emp_success', 'employee Registered Successfully.');
        return redirect()->to('/empregister');
    }

    public function logout()
    {
        auth()->guard('com')->logout();
        return redirect('/Login&Register');
    }
   public function render()
    {
        return view('livewire.emp-register');
    }
}
