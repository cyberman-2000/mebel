<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BoxShop extends Model
{
    protected $table='box_shops';
    public function mebel(){
        return $this->belongsTo('App\Mebel','id');
    }
    public function user(){
        return$this->belongsTo('App\User','id');
    }
    protected $guarded = [];

}
