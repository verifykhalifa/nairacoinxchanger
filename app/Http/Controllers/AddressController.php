<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;
use Illuminate\Support\Str;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $address = Address::orderBy('created_at','asc')->get();
        //dd($address);
        return view('address.index')->with('address', $address);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('address.create');
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
         $this->validate($request,[
            'barcode'=> 'image|required|max:1999',
            'address' => 'required',
            'coinname'=> 'required'
        ]);


        $data = [
            'barcode'=> $request->get('barcode'),
            'address'=> $request->get('address'),
            'coinname'=> $request->get('coinname')
        ];

        if ($request->has('barcode')) {
            $name = Str::random(4).time().$request->file('barcode')->getClientOriginalName();
            $extension = $request->file('barcode')->getClientOriginalExtension();
            $destination = public_path().'/Barcodes';
            $path='/Barcodes/'.$name;
            $request->file('barcode')->move($destination, $name);
            $data['barcode'] = $path;
        }

        Address::create($data);
    
        return redirect()->back()->with('success', 'BTC Address Added!');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
