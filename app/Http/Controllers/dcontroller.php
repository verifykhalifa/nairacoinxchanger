<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Rate;

class dcontroller extends Controller
{


        public function dashboard()
        {
            if(Auth::user()->hasRole('admin')){
                
                return view('adminpages.admindash');
            }elseif(Auth::user()->hasRole('user')){
                $rates = Rate::orderBy('created_at','asc')->get();
                return view('userpages.dash')->with('rates', $rates);
            }
            
        }

        public function pref(){
            return view('userpages.pref');
        }

        public function linked(){
            return view('userpages.linked');
        }

        public function settings(){
            return view('userpages.settings');
        }

        public function transaction(){
            return view('userpages.transaction');
        }

        public function verification(){
            return view('userpages.verification');
        }

        public function admindash(){
            return view('adminpages.admindash');
        }

        public function rate(){
            return view('adminpages.rate');
        }

}
