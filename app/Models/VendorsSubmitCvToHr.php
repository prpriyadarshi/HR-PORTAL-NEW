<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorsSubmitCvToHr extends Model
{
    use HasFactory;
    protected $casts = [

        'cv' => 'array',
    ];
    protected $table = 'vendors_submit_cv_to_hr';
    protected $fillable = ['user_id', 'job_id', 'submited_to', 'cv'];
}
