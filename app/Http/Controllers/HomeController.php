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

    public function about(){
        return view('userpages.about');
    }

    public function howtobuy(){
        return view('userpages.howtobuy');
    }

    public function howtosell(){
        return view('userpages.howtosell');
    }

    public function terms(){
        return view('userpages.terms');
    }

    public function econfirmation(){
        return view('emails.econfirmation');
    }

    public function sellorder(){
        return view('emails.sellorder');
    }
    public function buyorder(){
        return view('emails.buyorder');
    }

}
