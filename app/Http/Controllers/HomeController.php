<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('userpages.home');
    }

    public function rate(){
        return view('userpages.rate');
    }
}
