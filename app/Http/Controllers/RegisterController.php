<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index',[
            "title" => "register",
            "active" => "register"
        ]);
    }
    public function store(Request $request){
        $validateData = $request->validate([
            'name' => 'required|max:25',
            'username' => ['unique:users', 'required', 'min:3'],
            'email' => 'unique:users|required|max:50',
            'password' => 'required'
        ]);
        $validateData['password'] = Hash::make($validateData['password']);
        User::create($validateData);
        $request->session()->flash('success', 'Register successful!');

        return redirect('/login');

       
    }
}
