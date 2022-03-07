<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $table='users';
    protected $fillable = [
        'name','surname', 'phone_number', 'email', 'password','login','password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    //..........Relation ships............
    public function role(){
        return $this->belongsTo('App\Roles','id');
    }
    public function boxshop(){
        return $this->hasMany('App\BoxShop','user_id');
    }
    public function comment(){
        return $this->hasMany('App\Comments','user_id');
    }
    public function order(){
        return $this->hasMany('App\Orders','user_id','id');
    }
    public function questions(){
        return $this->hasMany('App\Questions','user_id');
    }
    protected $guarded = [];


}
