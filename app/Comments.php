<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    public function mebel(){
        return $this->belongsTo('App\Mebel','id');
    }
    public function user(){
        return $this->belongsTo('App\User','id');
    }
    protected $table='comments';
    public $fillable=['mebel_id','user_id','comment','ball'];
}
