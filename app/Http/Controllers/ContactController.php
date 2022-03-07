<?php

namespace App\Http\Controllers;

use App\Questions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ContactController extends Controller
{
    public function index(){
        return view('contact');
    }
    public function message(Request $request){
//        dd($request);
        $request->validate([
            'name'=>'required|max:20|string|alpha|min:3',
            'tel'=>'required|numeric|min:100000000|max:999999999',
            'subject'=>'required|max:50|string|min:3',
            'message'=>'required|max:256|string|min:3',
        ]);
        $user = Questions::create([
            'name'=>$request->name,
            'phone_number'=>$request->tel,
            'subject'=>$request->subject,
            'word'=>$request->message,
        ]);
        session()->flash('success','Xabaringiz yuborildi');
        return redirect()->back();

    }
}
