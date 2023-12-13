<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobseekersInterviewDetail extends Model
{
    use HasFactory;
    protected $table = 'jobseekers_interview_details';

    protected $fillable = [
        'user_id',
        'job_id',
        'interview_date',
        'interview_time',
        'instructions',
        'company_website',
        'location_link',
    ];
      public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
    public function job()
    {
        $this->data = json_decode($this->jsonData, true);

        return $this->belongsTo(Job::class, 'job_id', 'job_id');
    }

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id', 'company_id');
    }
}
