<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\registration;

class regController extends Controller
{
    public function reg(){
        return view('reg');
    }
    public function registrationSubmitted(Request $request){
        $validate = $request->validate([
            "fname"=>"required|min:5|max:20",
            "lname"=>"required|min:5|max:20",
            "gender"=>"required",
            'dob'=>'required',
            'religion'=>'required',
            'Preaddress'=>'required',
            'Peraddress'=>'required',
            'email'=>'email',
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'username'=>'required',
            'password'=>'required|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$@!%&*?])[A-Za-z\d#$@!%&*?]{5,20}$/|min:5|max:20'
        ],
        ['password.regex'=>"Please use atleast 1 uppercase, 1 lowercase, 1 special charactee, 1 number",
        'phone.regex'=>"Please use number or valid phone format"]
    );
        $reg = new  registration();
        $reg->fname = $request->fname;
        $reg->lname = $request->lname;
        $reg->gender = $request->gender;
        $reg->dob = $request->dob;
        $reg->religion = $request->religion;
        $reg->Preaddress = $request->Preaddress;
        $reg->Peraddress = $request->Peraddress;
        $reg->email = $request->email;
        $reg->phone = $request->phone;
        $reg->username = $request->username;
        $reg->password = $request->password;
        $reg->save();

        return redirect()->route('login');
    }
}
