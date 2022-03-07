<?php

namespace App\Http\Controllers;

use App\Comments;
use App\Mebel;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SingleProductController extends Controller
{
    protected function index($id)
    {
        //....................GET RATING.......................
        $rating=Comments::query()->where('mebel_id','=',$id)->get();
        $rating_count=Comments::query()->where('mebel_id','=',$id)->count();
//        dd($rating_count);
        $first=0;
        $second=0;
        $third=0;
        $fouth=0;
        $fifth=0;
        foreach ($rating as $i){
            if ($i->ball==1){
                $first++;
            }
            if ($i->ball==2){
                $second++;
            }
            if ($i->ball==3){
                $third++;
            }
            if ($i->ball==4){
                $fouth++;
            }
            if ($i->ball==5){
                $fifth++;
            }
        }
        $overall=($first*1+$second*2+$third*3+$fouth*4+$fifth*5)/($rating_count ? : 1 ?? $rating_count);
//        dd($first);
        //.............Productni faqat o'zini olish uchun..................
        $prod=Mebel::query()->where('id','=',$id)->get();
        $user=User::all();
        //.......................................GET COMMENTS...........................................
        $comments = Mebel::query()->find($id)->comments()->get();
//        $comments_prod= Comments::query()->where('mebel_id','=',$sel->id);
//        dd($comments);
        return view('shop/product_details', compact([
            'prod',
            'comments',
            'user',
            'rating',
            'rating_count',
            'first',
            'second',
            'third',
            'fouth',
            'fifth',
            'overall'
        ]));
    }
    public function comment(Request $request){
//        dd($request);
        $user=Auth::id();
        $request->validate([

            'comment'=>'required|min:2|max:250|string',
        ]);
        $comment = Comments::create([
            'mebel_id'=>$request->mebel_id,
            'user_id'=>$user,
            'comment'=>$request->comment,
            'ball'=>$request->rating,
        ]);
        session()->flash('success','Kamentariyangiz qabul qilindi');
        return redirect()->back();
    }
    public function get_rating(){

    }
}
