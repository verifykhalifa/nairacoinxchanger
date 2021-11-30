<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;
use App\Models\Rate;
use App\Models\Address;
use Uuid;

class SalesController extends Controller
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

            'value_sell' => 'required',
            'rate_sell' => 'required',
            'total' => 'required'
        ]);

        $rateName = Rate::where('sell', $request->rate_sell)->pluck('id','coin');

        $orderId = Uuid::generate();

        foreach($rateName as $coin => $id){

            $sale = new Sale;
            $sale->value = $request->value_sell;
            $sale->orderId = $orderId;
            $sale->rate = $coin;
            $sale->total = $request->total;
            $sale->user_id = auth()->user()->id;
        }

        if($sale->save()){

            return redirect()->route('sales.show', $sale->id);
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
        $sale = Sale::findorfail($id);
        $barcode = Address::where('coin', $sale->rate)->first();
        return view('sale.show')->with('sale', $sale)
                                ->with('barcode',$barcode);
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
