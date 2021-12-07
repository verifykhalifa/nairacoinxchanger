<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase;
use App\Models\Rate;
use App\Models\History;
use App\Models\Linked;
use Haruncpi\LaravelIdGenerator\IdGenerator;
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

        $orderId = IdGenerator::generate(['table' => 'purchases','field'=>'orderId','length' => 10, 'prefix' =>'INV-']);

        foreach($rateName as $coin => $id){

            $purchases = new Purchase;
            $purchases->btcaddress = $request->btcaddress;
            $purchases->value = $request->value;
            $purchases->orderId = $orderId;
            $purchases->rate = $coin;
            $purchases->type = 'Purchase';
            $purchases->status = 0;
            $purchases->method = $request->method;
            $purchases->total = $request->total;
            $purchases->user_id = auth()->user()->id;

        }
        
        $register = Linked::where('userid', $purchases->user_id)->first();

        if(is_null($register)){

            return back()->with('error','Please click on VERIFICATION PAGE to update your bank details. It is required for refunds if we dont have stocks, and when you sell to us.');

        }elseif($register){

            $purchases->save();

            $data = [
                'orderId'  => $purchases->orderId,
                'type'     => $purchases->type,
                'coin'     => $purchases->rate,
                'status'   => $purchases->status,
                'user_id'  => $purchases->user_id
            ];

            History::create($data);

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
