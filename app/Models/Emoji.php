<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Livewire\Feeds;

class Emoji extends Model
{
    use HasFactory;
 // Replace 'your_table' with the actual table name

    protected $fillable = ['selected_emoji'];
}
