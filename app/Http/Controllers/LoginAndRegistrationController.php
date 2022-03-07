<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginAndRegistrationController extends Controller
{
    public function login(){
        return view('login');
    }
    public function check(Request $request){
        $request->validate([
            'email'=>'required|email',
            'login'=>'required|max:20|alpha_dash',
            'password'=>'required'

        ]);
        if (Auth::attempt([
            'email'=>$request->email,
            'login'=>$request->login,
            'password'=>$request->password,
            'role'=>'2'
        ])){
            session()->flash('success_login','Xush kelibsiz');
            return redirect()->route('home');

        }
        return redirect()->back()->with('error','Email,Login yoki paro\'lingiz hato');

    }
    public function logout(){
        session()->invalidate();
        Auth::logout();
        return redirect()->route('login');
    }
    public function registration(){
        return view('registration');
    }
    public function createuser(Request $request){

        $request->validate([
            'name'=>'required|max:20|string|alpha|min:3',
            'surname'=>'required|max:30|string|alpha:min:3',
            'phone'=>'required|numeric|min:100000000|max:999999999',
            'email'=>'required|email|unique:users',
            'login'=>'required|unique:users|max:20|alpha_dash',
            'password'=>'required|confirmed'

        ]);
        $user = User::create([
            'name'=>$request->name,
            'surname'=>$request->surname,
            'phone_number'=>$request->phone,
            'email'=>$request->email,
            'login'=>$request->login,
            'password'=>Hash::make($request->password)
        ]);
        Auth::login($user);
        session()->flash('success','Siz registratsiyadan o\'tdingiz');
        return redirect()->route('home');
    }
}

