<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = ['nhs_number','email', 'phone', 'f_name', 'm_name', 'l_name', 'postcode', 'dob', 'user_id'];
}
