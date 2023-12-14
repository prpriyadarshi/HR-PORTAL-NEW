<?php

namespace App\Livewire;

use App\Models\EmployeeDetails;
use Livewire\Component;

use Livewire\WithFileUploads;

use Illuminate\Support\Facades\Hash;
use App\Models\Company;
use App\Models\EmpBankDetail;
use App\Models\Job;

class EmpUpdate extends Component
{
    use WithFileUploads;
    public $companieIds, $managerIds;
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
    public $department;
    public $job_title;
    public $manager_id;
    public $report_to;

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
    public $experience;
    public $pan_no;
    public $aadhar_no;
    public $pf_no;
    public $employee_status;

    public $nick_name;
    public $time_zone;
    public $biography;
    public $facebook;
    public $twitter;
    public $linked_in;
    public $company_id;
    public $is_starred;
    public $skill_set;
    public $savedImage;

    public $companies;
    public $hrDetails;
   public $empId;
   public $selectedId;
   public $reportTos, $selectedEmployees;
    public function mount($empId){

        $selectedEmployee = EmployeeDetails::find($empId);

if($selectedEmployee){
    $this->first_name = $selectedEmployee->first_name;
    $this->last_name = $selectedEmployee->last_name;
    $this->date_of_birth = $selectedEmployee->date_of_birth;
    $this-> gender = $selectedEmployee->gender;
    $this-> email = $selectedEmployee->email;
    $this-> company_name = $selectedEmployee->company_name;
    $this-> company_email = $selectedEmployee->company_email;
    $this-> mobile_number = $selectedEmployee->mobile_number;
    $this-> alternate_mobile_number = $selectedEmployee->alternate_mobile_number;
    $this-> address = $selectedEmployee->address;
    $this-> city = $selectedEmployee->city;
    $this->state = $selectedEmployee->state;
    $this->postal_code = $selectedEmployee->postal_code;
    $this->country = $selectedEmployee->country;
    $this->hire_date = $selectedEmployee->hire_date;
    $this->employee_type = $selectedEmployee->employee_type;
    $this->manager_id = $selectedEmployee->manager_id;
    $this->report_to = $selectedEmployee->report_to;
    $this->department = $selectedEmployee->department;
    $this->job_title = $selectedEmployee->job_title;
    $this->employee_status = $selectedEmployee->employee_status;
    $this->emergency_contact = $selectedEmployee->emergency_contact;
    $this->password = $selectedEmployee->password;
    $this->image =  $selectedEmployee->imagePath; // Example storage for image upload
    $this->blood_group = $selectedEmployee->blood_group;
    $this->nationality = $selectedEmployee->nationality;
    $this->religion = $selectedEmployee->religion;
    $this->marital_status = $selectedEmployee->marital_status;
    $this->spouse = $selectedEmployee->spouse;
    $this->physically_challenge = $selectedEmployee->physically_challenge;
    $this->inter_emp = $selectedEmployee->inter_emp;
    $this->job_location = $selectedEmployee->job_location;
    $this->education = $selectedEmployee->education;
    $this->experience = $selectedEmployee->experience;
    $this->pan_no = $selectedEmployee->pan_no;
    $this->aadhar_no = $selectedEmployee->aadhar_no;
    $this->pf_no = $selectedEmployee->pf_no;
    $this->nick_name = $selectedEmployee->nick_name;
    $this->time_zone = $selectedEmployee->time_zone;
    $this->biography = $selectedEmployee->biography;
    $this->facebook = $selectedEmployee->facebook;
    $this->twitter = $selectedEmployee->twitter;
    $this->linked_in = $selectedEmployee->linked_in;
    $this->company_id = $selectedEmployee->company_id;
    $this->is_starred = $selectedEmployee->is_starred;
    $this->skill_set = $selectedEmployee->skill_set;
}



    }
    public function update()
    {
        $this->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'gender' => 'required|in:Male,Female',
            'email' => 'required|email|unique:employee_details',
            'company_name' => 'required|string|max:255',
            'company_email' => 'required|email|unique:employee_details',
            'mobile_number' => 'required|string|max:15',
            'alternate_mobile_number' => 'nullable|string|max:15',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'postal_code' => 'required|string|max:20',
            'country' => 'required|string|max:255',
            'hire_date' => 'required|date',
            'department' => 'required|string|max:255',
            'company_id' => 'required|string|max:255',
            'job_title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'inter_emp' => 'required',
            'marital_status' => 'required',
            'employee_type'=>'required',
            'nationality'=>'required',
            'religion'=>'required',
            'blood_group'=>'required',
            'job_location'=>'required'
        ]);

        $imagePath = $this->image->store('employee_image', 'public');
        $this->savedImage = $imagePath;

        if($this->selectedEmployee){
            
            $this->selectedEmployee->update([
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
                'manager_id' => $this->manager_id,
                'report_to' => $this->report_to,
                'department' => $this->department,
                'job_title' => $this->job_title,
                'employee_status' => $this->employee_status,
                'emergency_contact' => $this->emergency_contact,
                'password' => $this->password,
                'image' => $imagePath, // Example storage for image upload
                'blood_group' => $this->blood_group,
                'nationality' => $this->nationality,
                'religion' => $this->religion,
                'marital_status' => $this->marital_status,
                'spouse' => $this->spouse,
                'physically_challenge' => $this->physically_challenge,
                'inter_emp' => $this->inter_emp,
                'job_location' => $this->job_location,
                'education' => $this->education,
                'experience' => $this->experience,
                'pan_no' => $this->pan_no,
                'aadhar_no' => $this->aadhar_no,
                'pf_no' => $this->pf_no,
                'nick_name' => $this->nick_name,
                'time_zone' => $this->time_zone,
                'biography' => $this->biography,
                'facebook' => $this->facebook,
                'twitter' => $this->twitter,
                'linked_in' => $this->linked_in,
                'company_id' => $this->company_id,
                'is_starred' => $this->is_starred,
                'skill_set' => $this->skill_set,
            ]);

        }


    session()->flash('emp_success', 'Employee registered successfully!');

    // Clear the form fields
    $this->reset();
}





    public function selectedCompany()
    {
        if ($this->company_id) {
            $this->selectedId = Company::find($this->company_id);
            $this->company_name = $this->selectedId->company_name;
            $this->selectedEmployees = EmployeeDetails::where('company_id', $this->company_id)->first();
            if($this->selectedEmployees->emp_id!=null){
                $this->managerIds = EmployeeDetails::where('emp_id', $this->selectedEmployees->emp_id)->get();
            }
            if ($this->manager_id != null) {
                $this->reportTos = EmployeeDetails::where('emp_id', $this->manager_id)->first();
                $this->report_to = $this->reportTos->first_name . ' ' . $this->reportTos->last_name.' '.$this->reportTos->emp_id;
            }
        }
    }

    public function render()
    {
        $this->companieIds = Company::all();

        $hrEmail = auth()->guard('com')->user()->contact_email;
        $hrCompanies = Company::where('contact_email', $hrEmail)->get();
        $hrDetails = Company::where('contact_email', $hrEmail)->first();
        $this->companies = $hrCompanies;
        $this->hrDetails = $hrDetails;
        return view('livewire.emp-update');
    }



}
