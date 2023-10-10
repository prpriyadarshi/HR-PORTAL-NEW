<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\EmployeeDetails;


class LeaveRequest extends Model
{
    use HasFactory;
    protected $fillable = [
        'emp_id',
        'leave_type',
        'from_date',
        'session',
        'to_date',
        'applying_to',
        'cc_to',
        'contact_details',
        'reason',
        'attachment_path',
        'casual_leave',
        'sick_leave'
        // Add other fields that you want to be fillable here
    ];

    public function employee()
    {
        return $this->belongsTo(EmployeeDetails::class, 'emp_id', 'emp_id');
    }
}
