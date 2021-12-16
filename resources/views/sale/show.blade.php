@extends('layout.dash')

@section('content')
    
<div class="content-body">
    <div class="container-fluid">
        <div class="row" >
            <div class="d-flex justify-content-center align-items-center">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{route('buyMail')}}" method="POST">
                                @csrf
                                <div class="text-center">
                                    @if(session('success'))
                                    <div class="alert alert-success" style="width:92%; margin:auto">
                                    {{session('success')}}</div>
                                    @endif
                                </div>
                                <br>
                            <div class="buyer-seller">
                                <div class="d-flex justify-center">
                                    <div class="buyer-info">
                                        <div class="d-flex align-items-center">
                                            
                                            <div class="flex-grow-1">
                                                <h3>Order Id: {{ $sale->orderId }}</h3>
                                                <h3>Transaction: {{ $barcode->coin }} Sales</h3> 
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td><span class="text-danger">Notice </span></td>
                                                <td align="center"><span class="text-danger">Send with Priority fees or high charges to avoid delay payment from {{ $barcode->coin }} Network</span></td>
                                            </tr>
                                            <tr>
                                                <td>Processing Time</td>
                                                <td align="center">Wallet Expire Within 60hrs (HOUR)</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td align="center">Please Send <span>$</span>{{ $sale->value}} to this address <span><b>&#8595;</b></span></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><div id="container" style="height: 250px;">
                                                    <img src="{{$barcode->barcode}}" width="250px" style="margin-left:150px;" alt="barcode" />
                                                </div></td>
                                            </tr>
                                            <tr class="flex">
                                                <td>Address</td>
                                                <td align="center">{{$barcode->address}}</td>
                                            </tr>
                                            <tr>
                                                <td>Amount To Recieve</td>
                                                <td><span> &#x20A6;</span>@money($sale->total)</td>
                                            </tr>
                                            <tr>
                                                <td> </td>
                                                <td> This is automatic direction.
                                                    After receiving 1 confirmation from the {{ $barcode->coin }} network, your funds move to requistes specified in the order details with prepresently ( {{ $barcode->coin }} ) to dollar($) convert Naira (#) Rate is fixed at 3 minutes recalculated {{ $barcode->coin }} network Payment will be sent to  <span><b>&#8595;</b></span></td>
                                            </tr>
                                            <tr>
                                                <td>Recieving Account</td>
                                                <td>
                                                    <div class="text-danger"></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td align="center">Click on "CONFIRM" after payment. We will recieve a notification and check the receipt of funds</td>
                                            </tr>    
                                        </tbody>
                                    </table>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <input type="text" name="linkId" value="{{ $sale->id }}" hidden='hidden'>
                                        <input type="text" name="orderId" value="{{ $sale->orderId }}" hidden='hidden'>
                                        <input type="submit" class="btn btn-primary px-4 me-3" value="Confirm">
                                    </div>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    
    </div>
</div>


@endsection