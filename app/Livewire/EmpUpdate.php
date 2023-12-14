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

        $this->empId = EmployeeDetails::find($this->empId);
         // Set a default value for employee_status if not set
         $this->employee_status = $this->employee_status ?? 'active';
         $this->employee_type = $this->employee_type ?? 'full-time';
         $this->physically_challenge=$this->physically_challenge ?? 'No';
         $this->inter_emp=$this->inter_emp ?? 'no';



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
