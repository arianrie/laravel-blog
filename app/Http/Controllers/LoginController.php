<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login.index',[
            "title" => "login",
            "active" => "login"
        ]);
    }

    public function autenticate(Request $request){
       $credentials =  $request->validate([
        "email" => "required|email:dns",
        'password' => "required"
    ]);
     if(Auth::attempt($credentials)){
        $request->session()->regenerate();
        return redirect()->intended('/dashboard');
      }
      return back()->with('loginError', 'login Failed');

    }

    public function logout(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/');
    }
}
