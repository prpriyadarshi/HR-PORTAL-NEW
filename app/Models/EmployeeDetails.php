<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeDetails extends Model
{
    use HasFactory;
    protected $fillable = [
        'emp_id',
        'first_name',
        'last_name',
        'date_of_birth',
        'gender',
        'father_name',
        'mother_name',
        'parent_dob',
        'parent_gender',
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
        'salary',
        'employee_status',
        'bank_name',
        'bank_branch',
        'account_number',
        'ifsc_code',
        'emergency_contact',
        'password',
        'image',
        'blood_group',
        'parent_bld_group',
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
    ];

}