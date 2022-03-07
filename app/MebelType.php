<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MebelType extends Model
{
    public function mebels(){
        return $this->hasMany('App\Mebel','mebel_type_id','id');
    }
    protected $guarded = [];
}
