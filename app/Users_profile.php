<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users_profile extends Model
{
    protected $fillable = [
        'user_id', 'phone', 'address',
    ];

}
