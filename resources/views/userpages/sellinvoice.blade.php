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
                                                <td align="center"><span class="text-danger">Send with Priority fees or high charges to avoid delay payment from BITCOIN Network</span></td>
                                            </tr>
                                            <tr>
                                                <td>Processing Time</td>
                                                <td align="center">Wallet Expire Within 60hrs (HOUR)</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td align="center">Please Send $387 to this address <span><b>&#8595;</b></span></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><div id="container" style="height: 250px;">
                                                    <img src="something.jpg" alt="" />
                                                </div></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td align="center">BTC Address</td>
                                            </tr>
                                            <tr>
                                                <td>Amount To Recieve</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td> </td>
                                                <td  align="center"> This is automatic direction.
                                                    After receiving 1 confirmation from the Bitcoin network, your funds move to requistes specified in the order details with prepresently ( Bitcoin Rate ) to dollae($) convert Naira (#) Rate is fixed at 3 minutes recalculated Bitcoin network Payment will be sent to  <span><b>&#8595;</b></span></td>
                                            </tr>
                                            <tr>
                                                <td>Recieving Account</td>
                                                <td>
                                                    <div class="text-danger"></div>
                                                </td>
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