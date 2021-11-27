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
                                                <h3>Order # </h3>
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
                                                <td align="center">#728090.00 NGN</td>
                                            </tr>
                                            <tr>
                                                <td>Account To Fund</td>
                                                <td align="center">Bank Name:       Acct Number:      Acct Name:    </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td align="center">Write "57679 order" in the remark or reference when sending.</td>
                                            </tr>
                                            <tr>
                                                <td><span class="text-danger">NOTE </span></td>
                                                <td align="center"><span class="text-danger">Please DO NOT Write BITCOIN or ETHERIUM or any related words on narration ( Bank will block both sender and receiver account). Please Comply</span></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td align="center">$890 will be sent to 1DLDY3sgYUjJtkH7CwVhqpXWfkNyrbsZ4E as soon as we confirm your Payment</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td align="center">Click on "CONFIRM" after payment. We will recieve a notification and check the receipt of funds</td>
                                            </tr>
                                        
                                          
                                            
                                        </tbody>
                                    </table>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <a href="#" class="btn btn-primary px-4 me-3">Confirm</a>
                                        
                                    </div>
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