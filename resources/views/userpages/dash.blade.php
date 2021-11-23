@extends('layout.dash')

@section('content')
    
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
                                    <form method="post" name="myform" class="currency_validate">
                                        <div class="d-flex">
                                            <b><span style="color: rgb(255, 196, 0)">Current rate: </span>&nbsp;&#8358;</b><b id="label_buy"></b><b>/USD</b>
                                        </div>
                                        <br>
                                        <div class="mb-3">
                                            {{-- <label class="me-sm-2">Currency</label> --}}
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text"><i
                                                            class="fa fa-money"></i></label>
                                                </div>
                                                <select id="mySelect_buy" onchange="copy_buy()" class="form-control">
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
                                                <select class="form-control" name="method">
                                                    <option value="">Payment Method</option>
                                                    <option value="bank" href="{{__('verification')}}">Add Bank</option>
                                                    <option value="master">Master Card ***********5458</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            {{-- <label class="me-sm-2">Enter your amount</label> --}}
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text"><i
                                                            class="fa fa-usd"></i></label>
                                                </div>
                                                <input type="text" id="val1" onkeyup="myFunction_buy()" class="form-control"
                                                    placeholder="Amount in USD">
                                            </div>
                                            <div class="d-flex justify-content-between mt-3">
                                                <small style="color: rgb(255, 196, 0)" class="text:right"><b><span id="ShowRes"></span></b></small>
                                            </div>
                                            
                                        </div>
                                        <button type="submit" name="submit"
                                            class="btn btn-success btn-block">Exchange
                                            Now</button>

                                    </form>
                                </div>
                                <div class="tab-pane fade" id="sell">
                                    <div class="d-flex">
                                        <b><span style="color: rgb(255, 196, 0)">current rate: </span>&nbsp;&#8358;</b><b id="label_sell"></b><b>/USD</b>
                                    </div>
                                    <br>
                                    <form method="post" name="myform" class="currency2_validate">
                                        <div class="mb-3">
                                            {{-- <label class="me-sm-2">Currency</label> --}}
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text"><i
                                                            class="fa fa-money"></i></label>
                                                </div>
                                                <select id="mySelect_sell" onchange="copy_sell()" class="form-control">
                                                    <option value="">Select Currency</option>
                                                    @foreach ($rates as $rate)
                                                    <option value="{{$rate->sell}}">{{$rate->coin}}</option>
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
                                                <select class="form-control" name="method" onChange="window.location.redirect(this.value)" >
                                                    <option value="">Payment Method</option>
                                                    <option value="/verification">Add Bank</option>
                                                    <option value="master">Master Card ***********5458</option>
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
                                                    <input type="text" id="val2" onkeyup="myFunction_sell()" class="form-control"
                                                    placeholder="Amount in USD">
                                            </div>
                                            <div class="d-flex justify-content-between mt-3">
                                                <small style="color: rgb(255, 196, 0)" class="text:right"><b><span id="ShowSell"></span></b></small>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" name="submit"
                                            class="btn btn-success btn-block">Exchange
                                            Now
                                        </button>
                                        </div>
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
        $('span#ShowRes').text( "You receive: " + first * second + ".00"+ " NGN" );
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
    }
    else {
        $('span#ShowSell').text(" ");
    }
}
</script>
@endsection
