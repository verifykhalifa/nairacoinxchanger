<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Rate;
use App\Models\Linked;

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

        public function adminsettings(){
            $linked = Linked::orderBy('created_at', 'asc')->get();
            //dd($linked);
            return view('adminpages.adminsettings', compact('linked'));
        }


        public function addbtc(){
            return view('adminpages.addbtc');
        }


        public function editbtc(){
            return view('adminpages.editbtc');
        }
    
        public function adminverification(){
            return view('adminpages.adminverification');
        }

        public function adminconfirm(){
            return view('adminpages.adminconfirm');
        }

        public function admineditbk(){
            
            return view('adminpages.admineditbk');
        }
}
