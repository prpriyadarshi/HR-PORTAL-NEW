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
        'email',
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
        'salary',
        'employee_status',
        'bank_name',
        'account_number',
        'ifsc_code',
        'bank_branch',
        'emergency_contact',
        'password',

    ];
}
