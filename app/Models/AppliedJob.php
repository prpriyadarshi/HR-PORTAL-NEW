<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppliedJob extends Model
{
    use HasFactory;
    protected $fillable=[
        'job_id',
        'job_title',
        'company_name',
        'applied_to',
        'full_name',
        'email',
        'address',
        'resume'
    ];
}
