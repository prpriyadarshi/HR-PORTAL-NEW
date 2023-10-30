<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppliedJob extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'job_id',
        'job_title',
        'company_name',
        'applied_to',
    ];
}
