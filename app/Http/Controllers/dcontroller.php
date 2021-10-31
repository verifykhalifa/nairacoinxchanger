<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dcontroller extends Controller
{


        public function dashboard()
        {
            if(Auth::user()->hasRole('admin')){
                return view('layout.master');
            }elseif(Auth::user()->hasRole('user')){
                    return view('userpages.dash');
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
}
