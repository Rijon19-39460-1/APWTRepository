<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class teamsController extends Controller
{
    public function teamsView(){
        return view('teams');
    }
}
