<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Linked;
use App\Models\Role;
use DB;

class LinkedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('adminpages.adminsettings');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());

        $validatedData = $request->validate([
            
            'firstname' => 'required',
            'lastname' => 'required',
            'bankname' => 'required',
            'acctnumber' => 'required|max:10'
        ]);

        $save = new Linked();
        $save->firstname            = $request->input('firstname');
        $save->lastname             = $request->input('lastname');
        $save->bankname             = $request->input('bankname');
        $save->acctnumber           = $request->input('acctnumber');
        $save->userid               = Auth::user()->id;
       
        //dd($save);

        if($save->save()){

            notify()->success("Bank account added!","Success");

            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $linked = Linked::find($id);
        //dd($linked);
        if($admin = Auth::user()->hasRole('admin')){
            return view('adminpages.admineditbk', compact('linked'));
         }else if($user = Auth::user()->hasRole('user')){
            return view('userpages.usereditbk', compact('linked'));
         }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $linked = Linked::find($id);
        $linked->firstname            = $request->input('firstname');
        $linked->lastname             = $request->input('lastname');
        $linked->bankname             = $request->input('bankname');
        $linked->acctnumber           = $request->input('acctnumber');
        $linked->userid               = Auth::id();
       

        $linked->save();
         if($admin = Auth::user()->hasRole('admin')){
            return view('adminpages.adminconfirm');
         }else if($user = Auth::user()->hasRole('user')){
            notify()->success("Bank Account Updated!","Success");
            return back();
         }
            
    

    }

    public function banks_kill($id)
       {
           Linked::find($id)->delete();
           return back();
       }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     $Linked = Linked::where('id',$id)->first();
       
    //     if( $Linked==null)
    //     {
    //         session()->flash('message', 'Deletion failed');
    //     }
    //         else
    //     {
    //         $Linked ->delete();
    //         session()->flash('message', 'Delete Successfully');
    //     }
    

    //     return redirect()->back();
    // }

}
