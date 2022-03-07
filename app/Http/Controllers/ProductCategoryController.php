<?php

namespace App\Http\Controllers;

use App\Mebel;
use App\MebelCategory;
use App\MebelType;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public function index(Request $request)
    {
        $furniture=Mebel::query()->orderByDesc('id')->paginate('9');
        return view('shop/product_category',compact(['furniture']));
    }
    public function filter(Request $request){
//        dd($request);
        $furniture=Mebel::query()->where([['mebel_cat_id','=',$request->category], ['mebel_type_id','=',$request->type]])->orWhere('mebel_type_id',$request->type)->orWhere('mebel_cat_id',$request->category)->paginate('6');
        return view('shop/product_category',compact(['furniture']));
    }


}
