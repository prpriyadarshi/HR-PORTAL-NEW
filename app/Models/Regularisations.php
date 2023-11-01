<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regularisations extends Model
{
    use HasFactory;
    protected $fillable = ['emp_id','from', 'to', 'reason','status','approved_by','is_withdraw'];
    public function employee()
    {
        return $this->belongsTo(EmployeeDetails::class, 'emp_id', 'emp_id');
    }
}
