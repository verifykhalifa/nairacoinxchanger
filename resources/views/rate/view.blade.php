@extends('layout.adminsettings')

@section('content')
    
<div class="col-xl-9 col-md-8">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Coin Rates</h4>
        </div>
        <div class="card-body">
            <div class="form">
                <ul class="linked_account">
                    @if(!empty($rates))
                    @foreach ($rates as $rate)
                    <li>
                        <div class="row">
                            <div class="col-9">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                       <b><h4 class="mt-0 mb-1">{{$rate['coin']}} :</h4></b>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="mt-0 mb-1">BUY: {{$rate['buy']}}</h5>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="mt-0 mb-1">SELL: {{$rate['sell']}}</h5>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p><img src="{{$rate['coin_image']}}" alt="Wallet Image" style="width: 100px"></p>
                                    </div>
                                    <div class="edit-option">
                                        <a href="{{route('rates.edit', $rate['id'])}}"><i class="fa fa-pencil"></i></a>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </li>
                    @endforeach
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection