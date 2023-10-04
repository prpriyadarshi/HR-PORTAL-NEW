<?php

namespace App\Livewire;

use App\Models\EmployeeDetails;
use App\Models\PeopleList;
use Livewire\Component;

class Settings extends Component
{
    public $nickName;
    public $wishMeOn;
    public $selectedTimeZone;
    public $timeZones;
    public $biography;
    public $faceBook;
    public $twitter;
    public $linkedIn;
    public $editingNickName = false;
    public $editingTimeZone = false;
    public $editingBiography = false;
    public $editingSocialMedia = false;

    public $employeeDetails;
    public function editBiography()
    {
        $this->editingBiography = true;
        $this->biography=$this->employeeDetails->biography;
    }

    public function cancelBiography()
    {        
        $this->editingBiography = false;
    }

    public function saveBiography()
    {
     
        $this->employeeDetails = EmployeeDetails::first();
        $this->employeeDetails->biography = $this->biography;
        $this->employeeDetails->save();

        $this->editingBiography = false;
    }
    public function editSocialMedia()
    {
        $this->editingSocialMedia = true;
        $this->faceBook=$this->employeeDetails->facebook;
        $this->twitter=$this->employeeDetails->twitter;
        $this->linkedIn=$this->employeeDetails->linked_in;

    }

    public function cancelSocialMedia()
    {        
        $this->editingSocialMedia = false;
    }

    public function saveSocialMedia()
    {
     
        $this->employeeDetails = EmployeeDetails::first();
        $this->employeeDetails->facebook = $this->faceBook;
        $this->employeeDetails->twitter = $this->twitter;
        $this->employeeDetails->linked_in = $this->linkedIn;
        $this->employeeDetails->save(); 
        $this->editingSocialMedia = false;
    }
    public function editProfile()
    {
        $this->editingNickName = true;
        $this->nickName=$this->employeeDetails->nick_name;
        $this->wishMeOn=$this->employeeDetails->date_of_birth;

    }

    public function cancelProfile()
    {        
        $this->editingNickName = false;
    }
    public function saveProfile()
    {
     
        $this->employeeDetails = EmployeeDetails::first();
        $this->employeeDetails->nick_name = $this->nickName;
        $this->employeeDetails->date_of_birth = $this->wishMeOn;
        $this->employeeDetails->save(); 
        $this->editingNickName = false;
    }

    public function editTimeZone()
    {
        $this->editingTimeZone = true;
        $this->selectedTimeZone=$this->employeeDetails->time_zone;

    }

    public function cancelTimeZone()
    {        
        $this->editingTimeZone = false;
    }

    public function saveTimeZone()
    {
     
        $this->employeeDetails = EmployeeDetails::first();
        $this->employeeDetails->time_zone = $this->selectedTimeZone;
        $this->employeeDetails->save(); 
        $this->editingTimeZone = false;
    }
    public $showAlertDialog=false;
    public $showDialog=false;

    public function open(){
        $this->showAlertDialog=true;
    }
    public function show(){
        $this->showDialog=true;
    }
    public function remove(){
        $this->showDialog=false;
    }
    public function close(){
        $this->showAlertDialog=false;
    }
    public function render()
    {
        $this->timeZones = timezone_identifiers_list();
        $this->employeeDetails = EmployeeDetails::first();
        return view('livewire.settings', ['employees' =>  $this->employeeDetails]);
    }
    
}
