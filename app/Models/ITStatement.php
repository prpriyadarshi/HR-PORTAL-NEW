<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ITStatement extends Model
{
    
    use HasFactory;

    protected $table = 'i_tstatements';

    protected $fillable = [
        'emp_id',
        'total',
        'Jan 2023',
        'Feb 2023',
        'Mar 2023',
        'Apr 2023',
        'May 2023',
        'Jun 2023',
        'Jul 2023',
        'Aug 2023',
        'Sep 2023',
        'Oct 2023',
        'Nov 2023',
        'Dec 2023',
    ];
}

