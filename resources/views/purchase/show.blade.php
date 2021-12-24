@extends('layout.dash')

@section('content')
    
<div class="content-body">
    <div class="container-fluid">
        <div class="row" >
            <div class="d-flex justify-content-center align-items-center">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{route('sellMail')}}" method="POST">
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
                                                <h3>Order Id: {{ $purchase->orderId }}</h3>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td><span class="text-danger">Notice </span></td>
                                                <td align="center"><span class="text-danger">Please Pay directly from your registerd bank account, or else it will not be treated.</span></td>
                                            </tr>
                                          
                                            
                                            <tr>
                                                <td>Amount To Send</td>
                                                <td align="center"><span> &#x20A6;</span>@money($purchase->total)</td>
                                            </tr>
                                            <tr>
                                                <td>Account To Fund</td>
                                                <td align="center">Bank Name: {{ $adminBank->bankname}}<br>Acct Number: {{ $adminBank->acctnumber}}<br>Acct Name: {{ $adminBank->firstname}}&nbsp;{{ $adminBank->lastname}}</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td align="center">Write "{{ $purchase->orderId }} order" in the remark or reference when sending.</td>
                                            </tr>
                                            <tr>
                                                <td><span class="text-danger">NOTE </span></td>
                                                <td align="center"><span class="text-danger">Please DO NOT Write BITCOIN or ETHERIUM or any related words on narration ( Bank will block both sender and receiver account). Please Comply</span></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td align="center">" <span>$</span>{{ $purchase->value }} " will be sent to " {{ $purchase->btcaddress }} " as soon as we confirm your Payment</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td align="center">Click on "CONFIRM" after payment. We will recieve a notification and check the receipt of funds</td>
                                            </tr>
                                        
                                          
                                            
                                        </tbody>
                                    </table>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <input type="text" name="orderId" value="{{ $purchase->orderId }}" hidden='hidden'>
                                        <input type="text" name="total" value="{{ $purchase->total }}" hidden='hidden'>
                                        <input type="text" name="value" value="{{ $purchase->value }}" hidden='hidden'>
                                        <input type="text" name="bankname" value="{{ $adminBank->bankname }}" hidden='hidden'>
                                        <input type="text" name="acctnumber" value="{{ $adminBank->acctnumber }}" hidden='hidden'>
                                        <input type="text" name="firstname" value="{{ $adminBank->firstname }}" hidden='hidden'>
                                        <input type="text" name="lastname" value="{{ $adminBank->lastname }}" hidden='hidden'>
                                        <input type="text" name="email" value="{{ $authEmail }}" hidden='hidden'>
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