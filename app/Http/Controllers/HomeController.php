<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rate;

class HomeController extends Controller
{
    public function home(){
        $rates = Rate::orderBy('created_at','asc')->get();
        return view('userpages.home')->with('rates', $rates);
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

    public function econfirmcode(){
        return view('emails.econfirmcode');
    }

    public function sellorder(){
        return view('emails.sellorder');
    }
    public function buyorder(){
        return view('emails.buyorder');
    }
    
    public function ewelcome(){
        return view('emails.ewelcome');
    }

    public function everifysuccess(){
        return view('emails.everifysuccess');
    }
}
