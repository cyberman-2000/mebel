<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mebel extends Model
{
    protected $table='mebels';
    public function category(){
        return $this->belongsTo('App\MebelCategory','id');
    }
    public function type(){
        return $this->belongsTo('App\MebelType','id');
    }
    public function boxshop(){
        return $this->hasMany('App\Box_shop','mebel_id','id');
    }
    public function comments()
    {
        return $this->hasMany('App\Comments','mebel_id','id');
    }
    public function orders(){
        return $this->hasMany('App\Orders','mebel_id','id');
    }

    protected $guarded = [];
}
