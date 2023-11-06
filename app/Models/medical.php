<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medical extends Model
{
    use HasFactory;
    protected $fillable = [  'emp_id','medical', 'health_checkup', 'Dependant_Parents','total'];
}
