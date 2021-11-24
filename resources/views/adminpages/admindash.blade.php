@extends('layout.master')

@section('content')
    
<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row" id="main" >
            <div class="col-sm-12 col-md-12 well" id="content" style="padding-left: 75px">
                <br>
                <h4 >Welcome Back,  {{ Auth::user()->name }} </h4>
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
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header border-0">
                        <h4 class="card-title">All Activities</h4>
                    </div>
                    <div class="card-body pt-0">
                        <div class="transaction-table">
                            <div class="table-responsive">
                                <table class="table mb-0 table-responsive-sm">
                                    <tbody>
                                        <tr>
                                            <td><span class="sold-thumb"><i class="la la-arrow-down"></i></span>
                                            </td>

                                            <td>
                                                <span class="badge badge-danger">Sold</span>
                                            </td>
                                            <td>
                                                <i class="cc BTC"></i> BTC
                                            </td>
                                            <td>
                                                Using - Bank *******5264
                                            </td>
                                            <td class="text-danger">-0.000242 BTC</td>
                                            <td>-0.125 USD</td>
                                        </tr>
                                        <tr>
                                            <td><span class="buy-thumb"><i class="la la-arrow-up"></i></span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success">Buy</span>
                                            </td>
                                            <td>
                                                <i class="cc LTC"></i> LTC
                                            </td>
                                            <td>
                                                Using - Card *******8475
                                            </td>
                                            <td class="text-success">-0.000242 BTC</td>
                                            <td>-0.125 USD</td>
                                        </tr>
                                        <tr>
                                            <td><span class="sold-thumb"><i class="la la-arrow-down"></i></span>
                                            </td>
                                            <td>
                                                <span class="badge badge-danger">Sold</span>
                                            </td>
                                            <td>
                                                <i class="cc XRP"></i> XRP
                                            </td>
                                            <td>
                                                Using - Card *******8475
                                            </td>
                                            <td class="text-danger">-0.000242 BTC</td>
                                            <td>-0.125 USD</td>
                                        </tr>
                                        <tr>
                                            <td><span class="buy-thumb"><i class="la la-arrow-up"></i></span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success">Buy</span>
                                            </td>
                                            <td>
                                                <i class="cc DASH"></i> DASH
                                            </td>
                                            <td>
                                                Using - Card *******2321
                                            </td>
                                            <td class="text-success">-0.000242 BTC</td>
                                            <td>-0.125 USD</td>
                                        </tr>
                                        <tr>
                                            <td><span class="sold-thumb"><i class="la la-arrow-down"></i></span>
                                            </td>
                                            <td>
                                                <span class="badge badge-danger">Sold</span>
                                            </td>
                                            <td>
                                                <i class="cc BTC"></i> BTC
                                            </td>
                                            <td>
                                                Using - Card *******2321
                                            </td>
                                            <td class="text-danger">-0.000242 BTC</td>
                                            <td>-0.125 USD</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection