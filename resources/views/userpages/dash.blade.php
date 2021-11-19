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
                                <h2>Current Rate</h2>
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
                                            <b><span style="color: red">Current rate: </span>&nbsp;&#8358;</b><b id="label"></b><b>/USD</b>
                                        </div>
                                        <div class="mb-3">
                                            <label class="me-sm-2">Currency</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text"><i
                                                            class="fa fa-money"></i></label>
                                                </div>
                                                <select id="mySelect" onchange="copy()" class="form-control">
                                                    <option value="">Select</option>
                                                    @foreach ($rates as $rate)
                                                    <option value="{{$rate->sell}}">{{$rate->coin}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="me-sm-2">Payment Method</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text"><i
                                                            class="fa fa-bank"></i></label>
                                                </div>
                                                <select class="form-control" name="method">
                                                    <option value="">Select</option>
                                                    <option value="bank" href="/verification">Add Bank</option>
                                                    <option value="master">Master Card ***********5458</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="me-sm-2">Enter your amount</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text"><i
                                                            class="fa fa-usd"></i></label>
                                                </div>
                                                <input type="text" id="usdAmount" name="usd_amount" onKeyPress="edValueKeyPress()" class="form-control"
                                                    placeholder="Amount in USD">
                                            </div>
                                            <div class="d-flex justify-content-between mt-3">
                                                <span id="ShowRes">You Receive: </span>
                                            </div>
                                            <div class="d-flex justify-content-between mt-3">
                                                <p class="mb-0">Monthly Limit</p>
                                                <h6 class="mb-0">$49750 remaining</h6>
                                            </div>
                                        </div>
                                        <button type="submit" name="submit"
                                            class="btn btn-success btn-block">Exchange
                                            Now</button>

                                    </form>
                                </div>
                                <div class="tab-pane fade" id="sell">
                                    <form method="post" name="myform" class="currency2_validate">
                                        <div class="mb-3">
                                            <label class="me-sm-2">Currency</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text"><i
                                                            class="fa fa-money"></i></label>
                                                </div>
                                                <select name='currency' class="form-control">
                                                    <option value="">Select</option>
                                                    <option value="bitcoin">Bitcoin</option>
                                                    <option value="litecoin">Litecoin</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="me-sm-2">Payment Method</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text"><i
                                                            class="fa fa-bank"></i></label>
                                                </div>
                                                <select class="form-control" name="method">
                                                    <option value="">Select</option>
                                                    <option value="bank" href="/verification">Add Bank</option>
                                                    <option value="master">Master Card ***********5458</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="me-sm-2">Enter your amount</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text"><i
                                                            class="fa fa-usd"></i></label>
                                                </div>
                                                {{-- <input type="text" name="currency_amount" class="form-control"
                                                    placeholder="0.0214 BTC"> --}}
                                                <input type="text" name="usd_amount" class="form-control"
                                                    placeholder="125.00 USD">
                                            </div>
                                            <div class="d-flex justify-content-between mt-3">
                                                <p class="mb-0">Monthly Limit</p>
                                                <h6 class="mb-0">$49750 remaining</h6>
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
    function copy() { 
        document.getElementById("label").innerHTML=document.getElementById("mySelect").value
    }
</script>
<script>
    function edValueKeyPress() {
    var coinRate = document.getElementById("mySelect");
    var amountRate = document.getElementById("usdAmount");
    var total    = ((coinRate.value * 1) * (amountRate.value * 1));

    var ShowRes = document.getElementById("ShowRes");
    ShowRes.innerText = "You Receive: " + total;
}
</script>
@endsection
