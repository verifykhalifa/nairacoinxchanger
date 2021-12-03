@extends('layout.master')

@section('content')
    
<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row" id="main" >
            <div class="col-sm-12 col-md-12 well" id="content" style="padding-left: 75px">
                <br>
                <div style="color: #7b6fff">
                <h4 >Welcome Back,  <span style="color: rgb(233, 236, 16)">{{ Auth::user()->name }} </span></h4>
                {{-- <h1 style="font-size: 40px; padding-left:100px;" ></h1> --}}
                </div>
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
                        <h4 class="card-title">All Orders Record</h4>
                    </div>
                    <div class="card-body pt-0">
                        <div class="transaction-table">
                            <div class="table-responsive">
                                <table class="table mb-0 table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Date</th>
                                            <th>Order #</th>
                                            <th>Type</th>
                                            <th class="text-center">Action</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="cell-1">
                                            <td></td>
                                            <td>2021-11-27</td>
                                            <td>#SO-13487</td>
                                            <td>Buy</td>
                                            <td class="text-center"><a class='btn-sm btn-info' href="#"><i class="fa fa-eye" aria-hidden="true"></i> View</a> <a href="#" class="btn-sm btn-success"><i class="fa fa-check" aria-hidden="true"></i> Mark as Paid</a></td>
                                            
                                        </tr>
                                        <tr class="cell-1">
                                            <td></td>
                                            <td>2021-11-27</td>
                                            <td>#SO-13487</td>
                                            <td>Sell</td>
                                            <td class="text-center"><a class='btn-sm btn-info' href="#"><i class="fa fa-eye" aria-hidden="true"></i> View</a> <a href="#" class="btn-sm btn-success"><i class="fa fa-check" aria-hidden="true"></i> Mark as Paid</a></td>
                                            
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