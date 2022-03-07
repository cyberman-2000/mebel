<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MebelCategory extends Model
{
    protected $table='mebel_categories';
    public function mebels(){
        return $this->hasMany('App\Mebel','mebel_cat_id','id');
    }
    protected $guarded = [];
}
