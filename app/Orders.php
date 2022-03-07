<?php

namespace App;
use DateTime;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use IntlDateFormatter;
class Orders extends Model
{
    protected $table="orders";
    public function user(){
        return $this->belongsTo('App\User','id');
    }
    public function mebels(){
        return $this->belongsTo('App\Mebel','mebel_id','id');
    }
    public function setCartDataAttribute($value)
    {
       return $this->attributes['cart_data'] = serialize($value);
    }

    public function getCartDataAttribute($value)
    {
        return unserialize($value);
    }
    public function getOrderDate(){
        $formatter= new \IntlDateFormatter('uz_Uz',\IntlDateFormatter::FULL,\IntlDateFormatter::FULL);
        $formatter->setPattern('d MMM y');
        return $formatter->format(new DateTime($this->created_at));
    }
    protected $guarded = [];

}
