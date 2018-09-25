<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ['name', 'link', 'language_iso', 'active'];

    public function translations ()
    {
        return $this->hasMany('App\Menu_translate');
    }
}
