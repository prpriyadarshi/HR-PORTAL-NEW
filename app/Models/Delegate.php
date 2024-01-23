<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delegate extends Model
{  use HasFactory;

    protected $fillable = ['emp_id', 'workflow', 'from_date', 'to_date', 'delegate'];  use HasFactory;
}
