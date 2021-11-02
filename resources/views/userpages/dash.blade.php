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
                                <h2>CURRENT RATE</h2>
                            </div>
                            <ul class="list-unstyled">
                                <li class="d-flex">
                                    <i class="cc BTC me-3"></i>
                                    <div class="flex-grow-1">
                                        <h5 class="m-0">Bitcoin</h6>
                                    </div>
                                    <div class="text-end">
                                        <h5>0.000242 BTC</h5>
                                       
                                    </div>
                                </li>
                                <li class="d-flex">
                                    <i class="cc LTC me-3"></i>
                                    <div class="flex-grow-1">
                                        <h5 class="m-0">Litecoin</h6>
                                    </div>
                                    <div class="text-end">
                                        <h5>0.000242 LTC</h5>
                                       
                                    </div>
                                </li>
                                <li class="d-flex">
                                    <i class="cc XRP me-3"></i>
                                    <div class="flex-grow-1">
                                        <h5 class="m-0">Ripple</h6>
                                    </div>
                                    <div class="text-end">
                                        <h5>0.000242 XRP</h5>
                                        
                                    </div>
                                </li>
                                <li class="d-flex">
                                    <i class="cc PM me-3"></i>
                                    <div class="flex-grow-1">
                                        <h5 class="m-0">Perfect Money</h6>
                                    </div>
                                    <div class="text-end">
                                        <h5>0.000242 XRP</h5>
                                        
                                    </div>
                                </li>
                            </ul>
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
                                        <div class="mb-3">
                                            <label class="me-sm-2">Currency</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text"><i
                                                            class="cc BTC-alt"></i></label>
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
                                                <input type="text" name="currency_amount" class="form-control"
                                                    placeholder="0.0214 BTC">
                                                <input type="text" name="usd_amount" class="form-control"
                                                    placeholder="125.00 USD">
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
                                                            class="cc BTC-alt"></i></label>
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
                                                <input type="text" name="currency_amount" class="form-control"
                                                    placeholder="0.0214 BTC">
                                                <input type="text" name="usd_amount" class="form-control"
                                                    placeholder="125.00 USD">
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
                            </div>
                        </div>

                    </div>
                </div>
                
            </div>
            

            
            
        </div>
        
        
    </div>
</div>

@endsection