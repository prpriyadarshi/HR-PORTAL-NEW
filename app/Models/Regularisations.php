<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regularisations extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = ['emp_id','from', 'to', 'reason','status','approved_by','is_withdraw','regularisation_date','applied_date','applied_day'];
    public function employee()
    {
        return $this->belongsTo(EmployeeDetails::class, 'emp_id', 'emp_id');
    }
}
