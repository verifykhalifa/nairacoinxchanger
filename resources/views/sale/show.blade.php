<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Vertical Timeline with lines - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css" integrity="sha256-nwNjrH7J9zS/Ti4twtWX7OsC5QdQHCIKTv5cLMsGo68=" crossorigin="anonymous" />

<div class="container">
<div class="row">
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <div class="card-title mb-5 text-center">
                <img  src="../assets/img/nairacoinr.png" style="width: 80px; height: 95px;">
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <ul class="verti-timeline list-unstyled" dir="ltr">
                        <li class="event-list">
                            <form action="{{route('buyMail')}}" method="POST">
                                @csrf
                                <div class="text-center">
                                    @if(session('success'))
                                    <div class="alert alert-success" style="width:92%; margin:auto">
                                    {{session('success')}}</div>
                                    @endif
                                </div>
                                <div class="event-content p-4">
                                    <h5 class="mt-0 mb-3 font-18">  Order Id: {{ $sale->orderId }}</h5>
                                    <div>
                                        <h5><span class="text-danger">Notice:</span></h5>
                                        <p><span class="text-danger">Send with Priority fees or high charges to avoid delay payment from {{ $sale->rate }} Network</span></p>
                                    </div>
                                    <div>
                                        <h5><span>Processing Time:</span></h5>
                                        <p><span>Wallet Expire Within 60hrs (HOUR)</span></p>
                                    </div>
                                    <div>
                                        <h5><span></span></h5>
                                        <p><strong>Please Send <span>$</span>{{ $sale->value}} to this address <span><b>&#8595;</b></span></strong></p>
                                        <span><img src="{{$barcode->barcode}}" width="150px" alt="barcode" /></span>
                                    </div>
                                    <br>
                                    <div>
                                        <h5><span>Address:</span></h5>
                                        <p><span>{{$barcode->address}}</span></p>
                                    </div>
                                    <div>
                                        <h5><span>Amount To receive:</span></h5>
                                        <p><span> &#x20A6;</span>@money($sale->total)</p>
                                    </div>
                                    <div>
                                        <h5></h5>
                                        <p>This is automatic direction.
                                            After receiving 1 confirmation from the {{ $sale->rate }} network, your funds move to requistes specified in the order details with prepresently ( {{ $sale->rate }} ) to dollar($) convert Naira (&#x20A6;) Rate is fixed at 3 minutes recalculated {{ $sale->rate }} network Payment will be sent to  <span><b>&#8595;</b></span></p>
                                    </div>
                                    <div>
                                        <h5><span>Recieving Account:</span></h5>
                                        <p><b>Bank Name: {{ $usAct['bankname'] }}<br>Acct Number: {{ $usAct['acctnumber'] }}<br>Acct Name: {{ $usAct['firstname']}}&nbsp;{{ $usAct['lastname']}}</b></p>
                                    </div>
                                    <div>
                                        <h5><span></span></h5>
                                        <p><span>Click on "CONFIRM" after payment. We will recieve a notification and check the receipt of funds</span></p>
                                    </div>
                                    @auth
                                        @role('admin')
                                        <div class="d-flex justify-content-center align-items-center">
                                            <input type="text" name="orderId" value="{{ $sale->orderId }}" hidden='hidden'>
                                            <input type="text" name="linkId" value="{{ $sale->id }}" hidden='hidden'>
                                            {{-- <input type="submit" class="btn btn-primary px-4 me-3" value="Confirm" hidden='hidden'>  --}}
                                        </div>
                                        @endrole
                                        @role('user')
                                        <div class="d-flex justify-content-center align-items-center">
                                            <input type="text" name="orderId" value="{{ $sale->orderId }}" hidden='hidden'>
                                            <input type="text" name="linkId" value="{{ $sale->id }}" hidden='hidden'>
                                            <input type="submit" class="btn btn-success px-4 me-3" value="Confirm"> 
                                        </div>
                                        @endrole
                                        @endauth
                                </div>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- end row -->
        </div>
    </div>
    <!-- end card -->
</div>
</div>

<style type="text/css">
body{
    background:#3a3361;
    margin-top:20px;
}
.verti-timeline {
    /* border-left: 3px dashed #e9ecef; */
    margin: 0 10px;
}
.verti-timeline .event-list {
    position: relative;
    padding: 40px 15px 40px;
    /* border-top: 3px solid #e9ecef; */
}
.verti-timeline .event-list .event-date {
    position: absolute;
    right: 0;
    top: -2px;
    padding: 12px;
    color: #fff;
    border-radius: 0 0 7px 7px;
    text-align: center;
}
.verti-timeline .event-list .event-content {
    position: relative;
    border: 2px solid #e9ecef;
    border-radius: 7px;
    text-align: center;
}
.verti-timeline .event-list .event-content::before {
    content: "";
    position: absolute;
    height: 40px;
    width: 75%;
    top: -42px;
    left: 0;
    right: 0;
    margin: 0 auto;
    /* border-left: 12px double #e9ecef;
    border-right: 12px double #e9ecef; */
}
.verti-timeline .event-list .timeline-icon {
    position: absolute;
    left: -14px;
    top: -10px;
}
.verti-timeline .event-list .timeline-icon i {
    display: inline-block;
    width: 23px;
    height: 23px;
    line-height: 23px;
    font-size: 20px;
    border-radius: 50%;
    text-align: center;
    color: #fff;
}
.verti-timeline .event-list:last-child {
    padding-bottom: 0;
}
@media (min-width: 769px) {
    .verti-timeline {
        margin: 0 60px;
    }
    .verti-timeline .event-list {
        padding: 40px 90px 60px 40px;
    }
}
@media (max-width: 576px) {
    .verti-timeline .event-list .event-date {
        right: -20px;
    }
}
.card {
    border: none;
    margin-bottom: 24px;
    -webkit-box-shadow: 0 0 13px 0 rgba(236,236,241,.44);
    box-shadow: 0 0 13px 0 rgba(236,236,241,.44);
}
</style>

<script type="text/javascript">

</script>
</body>
</html>