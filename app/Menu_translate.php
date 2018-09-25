<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu_translate extends Model
{
    public $timestamps = false;
    protected $fillable = ['menu_id', 'language_iso', 'translate'];

}
