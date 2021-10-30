<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dcontroller extends Controller
{
        public function superdash(){
            return view('layout.master');
        }

        public function pref(){
            return view('pages.pref');
        }

        public function linked(){
            return view('pages.linked');
        }

        public function settings(){
            return view('pages.settings');
        }

        public function transaction(){
            return view('pages.transaction');
        }

}
