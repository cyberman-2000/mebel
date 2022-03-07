<?php

namespace App\Http\Controllers;

use App\BoxShop;
use App\Mebel;
use App\MebelCategory;
use App\MebelType;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
//        $user=User::query()->find(1);
//        $boxshop=$user->boxshop;
        //.............Home carousel START.........
        $carousel=Mebel::query()->where('mebel_type_id','=','1')->limit('5')->get();
        //.............Home carousel END.........

        $shop=Mebel::query()->where('id','>',1)->limit('8')->offset(1)->get();


        //................Yangi Mebellar qismi..............
        $new=Mebel::query()->orderBy('created_at','ASC')->get();


        return view('home',compact(['carousel','shop','new']));
    }
}

