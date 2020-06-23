<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ['name','parent_ID'];

    public function nodes() {
        return $this->hasMany('App\Menu','parent_ID','menu_ID') ;
    }
}
