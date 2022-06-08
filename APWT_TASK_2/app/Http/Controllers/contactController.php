<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;

class contactController extends Controller
{
    
    public function contact(){
        return view('contact');
    }
    public function contactSubmitted(Request $request){
        $validate = $request->validate([
            "name"=>"required|min:5|max:20",
            'email'=>'email',
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'subject'=>'required'
        ],
        ['phone.regex'=>"Please use number or valid phone format"]
    );
        $con = new  contact();
        $con->name = $request->name;
        $con->email = $request->email;
        $con->phone = $request->phone;
        $con->subject = $request->subject;
        $con->save();

        $success = "Successfully send"; 
        return $success;
    }
}
