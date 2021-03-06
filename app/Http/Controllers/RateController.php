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
        return view('userpages.dash')->with('rates', $rates);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    
        return redirect()->back()->with('success', 'Rates Created');
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
        $rate = Rate::findorfail($id);
        return view('layout.master')->with('rate', $rate);
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

        $rate = Rate::findorfail($id);

        $rate->update($data);

        return redirect()->back()->with('success','Rate has been updated!');
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
