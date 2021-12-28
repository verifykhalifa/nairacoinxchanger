<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rate;
use Illuminate\Support\Str;

class RateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {

        $rates = Rate::orderBy('created_at', 'asc')->get();
        return view('rate.view')->with('rates', $rates);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('rate.create');

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
            'coin_image'=> 'image|required|max:1999',
            'coin' => 'required',
            'buy' => 'nullable',
            'sell' => 'nullable'
        ]);


        $data = [
            'coin_image'=> $request->get('coin_image'),
            'coin'=> $request->get('coin'),
            'buy' => $request->get('buy'),
            'sell' => $request->get('sell')
        ];

        if ($request->has('coin_image')) {
            $name = Str::random(4).time().$request->file('coin_image')->getClientOriginalName();
            $extension = $request->file('coin_image')->getClientOriginalExtension();
            $destination = public_path().'/CoinImages';
            $path='/CoinImages/'.$name;
            $request->file('coin_image')->move($destination, $name);
            $data['coin_image'] = $path;
        }

        Rate::create($data);
    
        notify()->success("Rates Created!","Success");

        return redirect()->back();
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
        $rates = Rate::findorfail($id);
        //dd($rates);
        return view('rate.edit')->with('rates', $rates);
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
        $data = $request->except(['_method','_token']);

        //dd($data);
        if ($request->has('coin_image')) {
            $name = Str::random(4).time().$request->file('coin_image')->getClientOriginalName();
            $extension = $request->file('coin_image')->getClientOriginalExtension();
            $destination = public_path().'/CoinImages';
            $path='/CoinImages/'.$name;
            $request->file('coin_image')->move($destination, $name);
            $data['coin_image'] = $path;
        }

        $rate = Rate::find($id);
        //dd($rate);

        $rate->update($data);

        notify()->success("Rate has been updated!","Success");

        return redirect()->back();
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
