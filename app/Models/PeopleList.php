<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeopleList extends Model
{
    use HasFactory;
    protected $fillable=[
        'image',
        'name',
        'emp_id'
    ];
}
