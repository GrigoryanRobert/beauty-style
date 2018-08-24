<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servise_translate extends Model
{
    protected $fillable = [
        'servise_id', 'language_id', 'name', 'desc',
    ];
}
