<?php

namespace App\Http\Controllers;

use App\Mebel;
use App\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderConfirmationController extends Controller
{
    public function index(){
        $user=Auth::id();
        $total=0;
        $story=Orders::query()->where('user_id','=', $user)->with('mebels')->get();
        // ...........................GET TOTAL AMOUNT ORDERS...................................
        foreach ($story as $value){
            $total+=$value->total_amount;
        }
//        dd($story);
        return view('shop/order_confirmation',compact('story','total'));
    }
}
