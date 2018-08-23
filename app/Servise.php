<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servise extends Model
{
    protected $fillable = [
        'name', 'image', 'desc', 'link',
    ];

}
