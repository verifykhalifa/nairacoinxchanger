<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Rate;
use App\Models\User;
use App\Models\Linked;
use App\Models\History;

class dcontroller extends Controller
{


        public function dashboard()
        {
            if(Auth::user()->hasRole('admin')){
                $historyies = History::orderBy('created_at','desc')->get();
                return view('adminpages.admindash')->with('historyies', $historyies);
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

            $historyies = History::orderBy('created_at','desc')->get();
            //dd($historyies);
            return view('userpages.transaction')->with('historyies', $historyies);
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
            $auth = auth()->user()->id;
            $linked = Linked::where('userid',$auth)->get();
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

        public function buyinvoice(){
            return view('userpages.buyinvoice');
        }

        public function sellinvoice(){
            return view('userpages.sellinvoice');
        }

        public function addbk(){
            $auth = auth()->user()->id;
            $adminds = Linked::where('userid',$auth)->get();
            //dd($adminds);
            return view('userpages.addbk')->with('adminds', $adminds);
            
        }

        public function acceptPayment($id){
            History::find($id)->update(['status'=> 1]);
            return back()->with('success','Payment Confirmed');
        }

        public function verifyUser(Request $request){
            $token = User::where('code', $request->code)->update(['verify_user'=> 1]);
            return redirect()->route('login')->with('success','Your account has been verified, you can now login.');
        } 
        
        public function verifyPage(){   
            return view('auth.verify_code');
        }
}
