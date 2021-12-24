@extends('layout.dash')

@section('content')
    
<div class="content-body">
    <div class="container-fluid">
        <div class="row" >
            <div class="d-flex justify-content-center align-items-center">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="buyer-seller">
                                <div class="d-flex justify-center">
                                    <div class="buyer-info">
                                        
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <h3>Order Id: {{ $history->orderId }}</h3>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>Customer Name</td>
                                                <td align="center">{{ $history->firstname}} - {{ $history->lastname}}</td>
                                            </tr>
                                            <tr>
                                                <td>Coin Type</td>
                                                <td align="center">{{ $history->coin }}</td>
                                            </tr>
                                            <tr>
                                                <td>Transaction Type</td>
                                                <td align="center">{{ $history->type }}</td>
                                            </tr>
                                            <tr>
                                                @if($history->type == "Sell")
                                                <td>Account To Fund</td>
                                                <td align="center">Bank Name: {{ $history->bankname}}<br>Acct Number: {{ $history->acctnumber}}<br>Acct Name: {{ $history->firstname}}&nbsp;{{ $history->lastname}}</td>
                                                @else
                                                
                                                @endif
                                            </tr>
                                            <tr>
                                                @if($history->type == "Sell")
                                                <td>Amount To Send</td>
                                                @else
                                                <td>Amount To Receive</td>
                                                @endif
                                                <td align="center"><span> &#x20A6;</span>@money($history->total)</td>
                                            </tr>
                                            {{-- <tr>
                                                @if($history->type == "Sell")
                                                <td>Amount To Receive</td>
                                                @else
                                                <td>Amount of coin to send</td>
                                                @endif
                                                <td align="center"> ${{ $history->value }} Dollars worth of bitcoin</td>
                                            </tr> --}}
                                        </tbody>
                                    </table>
                                    {{-- <div class="d-flex justify-content-center align-items-center">
                                        <input type="submit" class="btn btn-primary px-4 me-3" value="Accept"> 
                                    </div> --}}
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