<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Authenticatable
{
    use HasFactory;
    protected $primaryKey = 'company_id';
    public $incrementing = false;
    protected $fillable = [
        'company_id',
        'company_name',
        'company_address1',
        'company_address2',
        'company_registration_date',
        'company_logo',
        'password',
        'contact_email',
        'contact_phone'
        // Add other fields that you want to be fillable here
    ];
}
