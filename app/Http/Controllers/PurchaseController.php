<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase;
use App\Models\Rate;
use Uuid;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

            'btcaddress' => 'required',
            'value' => 'required',
            'rate' => 'required',
            'method' => 'required',
            'total' => 'required'

        ]);

        $rateName = Rate::where('buy', $request->rate)->pluck('id','coin');
        //dd($rateName);

        $orderId = Uuid::generate();

        foreach($rateName as $coin => $id){

            $purchases = new Purchase;
            $purchases->btcaddress = $request->btcaddress;
            $purchases->value = $request->value;
            $purchases->orderId = $orderId;
            $purchases->rate = $coin;
            $purchases->method = $request->method;
            $purchases->total = $request->total;
            $purchases->user_id = auth()->user()->id;

        }
        
        if($purchases->save()){

            return redirect()->route('purchases.show', $purchases->id);
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
        $purchase = Purchase::findorfail($id);
        return view('purchase.show')->with('purchase', $purchase);
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
