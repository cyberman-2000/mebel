<?php

namespace App\Http\Controllers;

use App\Mebel;
use App\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ShoppingCartController extends Controller
{
    public function index(){

        $sessionId=Session::getId();
        \Cart::session($sessionId);
        $cart = \Cart::getContent();
//        dd($cart);
        $sum=\Cart::getTotal('price');
        $count=\Cart::getTotalQuantity('quantity');

        return view('shop/shopping_cart',compact('cart','sessionId','sum','count'));
    }
    public function addCart(Request $request){
        $mebel=Mebel::query()->where('id','=',$request->id)->first();
        $sessionId=Session::getId();

        \Cart::session($sessionId)->add([
            'id' => $mebel->id,
            'name' => $mebel->mebel_name,
            'price' => $mebel->mebel_price,
            'quantity' => $request->qty ?? 1,
            'attributes' => [
                'image'=>$mebel->img
            ],
        ]);
        $cart = \Cart::getContent();

        return redirect()->back();
    }
        public function remove_to_cart($id)
        {
            $sessionId=Session::getId();
            \Cart::session($sessionId);
            $cart = \Cart::getContent();
// Unset the first index (or provide an index)
            \Cart::remove($id);
            return back();
        }

    public function makeOrder(Request $request){
//        dd($request);
        $user=Auth::user();
        $sessionId=Session::getId();
        \Cart::session($sessionId);
        $cart = \Cart::getContent();
        $sum=\Cart::getTotal('price');
//        dd($cart);
        $count=1;
        foreach ($cart as $mebel){


            $orders = new Orders([
                'order_kod'=>Hash::make(Date::now()),
                'user_id'=>$user->id,
                'mebel_id'=>$mebel->id,
                'count_order'=>$request->$count,
                'total_amount'=>$mebel->price*$mebel->quantity,
            ]);
            $count++;
            $orders->save();
            \Cart::remove($mebel->id);
        }
        return redirect()->route('order_confirmation');
    }
}
