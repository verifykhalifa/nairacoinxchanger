@extends('layout.dash')

@section('content')
    
<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row" id="main" >
            <div class="col-sm-12 col-md-12 well" id="content" style="padding-left: 75px">
                <br>
                <div style="color: #7b6fff">
                <h4>Welcome Back,  <span style="color: rgb(233, 236, 16)">{{ Auth::user()->name }}</span></h4>
                </div>
                <br>
                <div class="text-center">
                     @if(session('error'))
                        <div class="alert alert-danger" style="width:92%; margin:auto">
                       <b>{!!session('error')!!}</b></div>
                    @endif
                </div>
                {{-- <h1 style="font-size: 40px; padding-left:100px;" ></h1> --}}
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>

<div class="content-body">
    <div class="container-fluid">
        <div class="row">

            <div class="col-xl-5 col-lg-5 col-md-12">
                <div class="card balance-widget">
                    <div class="card-body pt-0">
                        <div class="balance-widget">
                            <div class="total-balance">
                                <h2>Our Prices</h2>
                            </div>
                            <table class="table table-striped table-dark">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Coin</th>
                                    <th scope="col">Buy</th>
                                    <th scope="col">Sell</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($rates as $rate)
                                    <tr>
                                        <th scope="row"><img src="{{$rate->coin_image}}" alt="Coin Image" 
                                            style ="width:25px;border:none"></th>
                                        <td>{{$rate->coin}}</td>
                                        <td>{{$rate->buy}}</td>
                                        @if(empty($rate->sell))
                                        <td>---</td>
                                        @else
                                        <td>{{$rate->sell}}</td>
                                        @endif
                                      </tr>
                                    @endforeach
                                </tbody>
                              </table>
                        </div>
                    </div>
                </div>
            </div>

           <div class="col-xl-7 col-lg-7 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="buy-sell-widget">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab"
                                        href="#buy">Buy</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#sell">Sell</a>
                                </li>
                            </ul>
                            <div class="tab-content tab-content-default">
                                <div class="tab-pane fade show active" id="buy" role="tabpanel">
                                    <form action="{{ route('purchases.store')}}" method="post" name="myform" id="buyCoins" class="currency_validate">
                                        @csrf
                                        <div class="d-flex">
                                            <b><span style="color: rgb(233, 236, 16)">Current rate: </span>&nbsp;&#8358;</b><b id="label_buy"></b><b>/USD</b>
                                        </div>
                                        <br>
                                        <div class="mb-3">
                                            {{-- <label class="me-sm-2">Currency</label> --}}
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text"><i
                                                            class="fa fa-money"></i></label>
                                                </div>
                                                <select id="mySelect_buy" name="rate" onchange="copy_buy()" class="form-control">
                                                    <option value="">Select Currency</option>
                                                    @foreach ($rates as $rate)
                                                    <option value="{{$rate->buy}}">{{$rate->coin}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            {{-- <label class="me-sm-2">Payment Method</label> --}}
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text"><i
                                                            class="fa fa-bank"></i></label>
                                                </div>
                                                <select class="form-control" name="method" id="method">
                                                    <option value="">Select Payment Method</option>
                                                    <option value="bank" >Bank Transfer</option>
                                                    <option value="master">Cash Deposit</option>
                                                </select>
                                            </div>
                                        </div>
                                        {{-- <div class="mb-3">
                                            <label class="me-sm-2">Bank Choice</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text"><i
                                                            class="fa fa-bank"></i></label>
                                                </div>
                                                <select class="form-control" name="method">
                                                    <option value="">Select Bank Choice</option>
                                                    <option value="bank" >Gtb</option>
                                                    <option value="master">ACCESSBANK</option>
                                                </select>
                                            </div>
                                        </div> --}}
                                        <div class="mb-3">
                                            {{-- <label class="me-sm-2">Receiving Bitcoin Address</label> --}}
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text"><i
                                                            class="fa fa-bank"></i></label>
                                                </div>
                                                <input type="text" id="btcaddress" name="btcaddress"  class="form-control"
                                                    placeholder="Receiving BTC Address">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            {{-- <label class="me-sm-2">Enter your amount</label> --}}
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text"><i
                                                            class="fa fa-usd"></i></label>
                                                </div>
                                                <input type="text" id="val1" name="value" onkeyup="myFunction_buy()" class="form-control"
                                                    placeholder="Amount in USD">
                                            </div>
                                            <div class="d-flex justify-content-between mt-3">
                                                <small style="color: rgb(233, 236, 16)" class="text:right"><b><span id="ShowRes"></span></b></small>
                                                <input type="text" id="InputRes" hidden="hidden" name="total">
                                            </div>
                                            
                                        </div>
                                        <button type="submit" id="insert" class="btn btn-success btn-block" style="text-">Place Order
                                        </button>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="sell">
                                    <div class="d-flex">
                                        <b><span style="color: rgb(233, 236, 16)">current rate: </span>&nbsp;&#8358;</b><b id="label_sell"></b><b>/USD</b>
                                    </div>
                                    <br>
                                    <form action="{{ route('sales.store')}}" method="post" class="currency2_validate">
                                        @csrf
                                        <input type="text" hidden="hidden" name="rate_id" value="{{ $rate->id}}">
                                        <div class="mb-3">
                                            {{-- <label class="me-sm-2">Currency</label> --}}
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text"><i
                                                            class="fa fa-money"></i></label>
                                                </div>
                                                <select id="mySelect_sell" name="rate_sell" onchange="copy_sell()" class="form-control">
                                                    <option value="">Select Currency</option>
                                                    @foreach ($rates as $rate)
                                                    <option value="{{$rate->sell}}">{{$rate->coin}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="mb-3">
                                            {{-- <label class="me-sm-2">Enter your amount</label> --}}
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text"><i
                                                            class="fa fa-usd"></i></label>
                                                </div>
                                                {{-- <input type="text" name="currency_amount" class="form-control"
                                                    placeholder="0.0214 BTC"> --}}
                                                    <input type="text" id="val2" name="value_sell" onkeyup="myFunction_sell()" class="form-control"
                                                    placeholder="Amount in USD">
                                            </div>
                                            <div class="d-flex justify-content-between mt-3">
                                                <small style="color: rgb(233, 236, 16)" class="text:right"><b><span id="ShowSell"></span></b></small>
                                                <input type="text" id="InputSell" hidden="hidden" name="total">
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit"
                                            class="btn btn-success btn-block">Submit
                                        </button>
                                        </div>
                                        <br>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<script>
    function copy_buy() { 
        document.getElementById("label_buy").innerHTML=document.getElementById("mySelect_buy").value
    }
</script>
<script>
    function myFunction_buy() {
    first = Number($('#val1').val());
    second = Number($('#mySelect_buy').val());
    if(first && second && !isNaN(first) && !isNaN(second)){
        //console.log(first * second + ".00"+ " NGN");
        $('span#ShowRes').text( "You receive: " + first * second + ".00"+ " NGN" );
        $('input#InputRes').val(first * second);
    }
    else {
        $('span#ShowRes').text(" ");
    }
}
</script>
<script>
    function copy_sell() { 
        document.getElementById("label_sell").innerHTML=document.getElementById("mySelect_sell").value
    }
</script>
<script>
    function myFunction_sell() {
    first = Number($('#val2').val());
    second = Number($('#mySelect_sell').val());
    if(first && second && !isNaN(first) && !isNaN(second)){
        $('span#ShowSell').text( "You receive: " + first * second + ".00"+ " NGN" );
        $('input#InputSell').val(first * second);
    }
    else {
        $('span#ShowSell').text(" ");
    }
}
</script>

{{-- <script>
    $(document).ready(function(){
        $('#buyCoins').on('submit',function(event){
            event.preventDefault();
            let btcaddress = $('#btcaddress').val();
            let value = $('#val1').val();
            let rate = $("#mySelect_buy option:selected").text();
            let method = $('#method').val();
            let total = $('#InputRes').val();
            $.ajax({
                url: "{{ route('purchases.store')}}",
                method: "post",
                data:{
                        "_token": "{{ csrf_token() }}",
                        btcaddress:btcaddress,
                        value:value,
                        rate:rate,
                        method:method,
                        total:total
                    }, 
                beforeSend:function(){
                  $('#insert').val("Placing Order...");
              },
                success:function(data){
                  //console.log(data);
                window.location = ;
                }
            });
        });
    });
  </script> --}}
@endsection
