<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class SalaryRevision extends Model
{
    use HasFactory;
    protected $table = 'salary_revisions'; // Set the table name if it's not the default "salary_revisions"

    protected $primaryKey = 'emp_id'; // Set the primary key if it's not "id"

    public $incrementing = false; // Set to false to indicate that "emp_id" is not auto-incrementing

    protected $keyType = 'string'; // Set the data type for the primary key

    protected $fillable = [
        'emp_id',
        'salary',
        'last_revision_period',
        'present_revision_period',
        'previous_monthly_ctc',
        'revised_monthly_ctc',
    ];

    // Define the relationship to the Employee model
    public function employee()
    {
        return $this->belongsTo(EmployeeDetails::class, 'emp_id', 'emp_id');
    }

}
