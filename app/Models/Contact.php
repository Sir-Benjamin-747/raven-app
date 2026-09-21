<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable =[
        'full_name',
        'cumpass_email',
        'department',
        'message',
    ];
}
