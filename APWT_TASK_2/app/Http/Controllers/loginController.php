<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\registration;

class loginController extends Controller
{
    public function login(){
        return view('login');
    }
    public function loginSubmitted(Request $request){
        $validate = $request->validate([
            'username'=>'required',
            'password'=>'required|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$@!%&*?])[A-Za-z\d#$@!%&*?]{5,20}$/|min:5|max:20'
        ],
        ['password.regex'=>"Please use atleast 1 uppercase, 1 lowercase, 1 special charactee, 1 number"]
    );
    $login = registration::where('username', $request->username)->first();
    if($request->username === $login->username && $request->password === $login->password){
        return  redirect()->route('welcome');
    }
    else{
        $error = "Please Enter proper username and password"; 
        return $error;
    }
    }
}
