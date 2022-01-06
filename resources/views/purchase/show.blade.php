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
                            <form action="{{route('sellMail')}}" method="POST">
                                @csrf
                                <div class="text-center">
                                    @if(session('success'))
                                    <div class="alert alert-success" style="width:92%; margin:auto">
                                    {{session('success')}}</div>
                                    @endif
                                </div>
                                <br>
                                <div class="event-content p-4">
                                    <h5 class="mt-0 mb-3 font-18">  Order Id: {{ $purchase->orderId }}</h5>
                                    <div>
                                        <h5><span class="text-danger">Notice:</span></h5>
                                        <p><span class="text-danger">Please Pay directly from your registerd bank account, or else it will not be treated.</span></p>
                                    </div>
                                    <div>
                                        <h5><span>Amount To Send</span></h5>
                                        <p><span> &#x20A6;</span>@money($purchase->total)</p>
                                    </div>
                                    <div>
                                        <h5><span>Account To Fund</span></h5>
                                        <p><strong>Bank Name: {{ $adminBank->bankname}}<br>Acct Number: {{ $adminBank->acctnumber}}<br>Acct Name: {{ $adminBank->firstname}}&nbsp;{{ $adminBank->lastname}}</strong></p>
                                    </div>
                                    <br>
                                    <div>
                                        <h5><span></span></h5>
                                        <p><span>Write "{{ $purchase->orderId }} order" in the remark for reference when sending.</span></p>
                                    </div>
                                    <div>
                                        <h5><span class="text-danger">NOTE </span></h5>
                                        <p><span class="text-danger">Please DO NOT Write BITCOIN or ETHEREUM or any related words on narration ( Bank will block both sender and receiver account),  Please Comply!</span></p>
                                    </div>
                                    <div>
                                        <h5></h5>
                                        <p><b>Your transaction will be made as soon as we confirm your Payment!</b></p>
                                    </div>
                                    <div>
                                        <h5></span></h5>
                                        <p>Click on "CONFIRM" after payment. We will recieve a notification and check the receipt of funds</p>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <input type="text" name="orderId" value="{{ $purchase->orderId }}" hidden='hidden'>
                                        <input type="text" name="total" value="{{ $purchase->total }}" hidden='hidden'>
                                        <input type="text" name="value" value="{{ $purchase->value }}" hidden='hidden'>
                                        <input type="text" name="bankname" value="{{ $adminBank->bankname }}" hidden='hidden'>
                                        <input type="text" name="acctnumber" value="{{ $adminBank->acctnumber }}" hidden='hidden'>
                                        <input type="text" name="firstname" value="{{ $adminBank->firstname }}" hidden='hidden'>
                                        <input type="text" name="lastname" value="{{ $adminBank->lastname }}" hidden='hidden'>
                                        <input type="text" name="email" value="{{ $authEmail }}" hidden='hidden'>
                                        <input type="submit" class="btn btn-success px-4 me-3" value="Confirm"> 
                                    </div>
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