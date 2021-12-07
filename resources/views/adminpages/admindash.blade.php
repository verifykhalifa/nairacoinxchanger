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
                                            <th>Customer</th>
                                            <th>Order #</th>
                                            <th>Transaction</th>
                                            <th>Type</th>
                                            <th class="text-center">Action</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($historyies as $history)
                                        <tr class="cell-1">
                                            <td></td>
                                            <td>{{ $history['created_at']->toFormattedDateString() }}</td>
                                            <td>{{ $history->users->name}}&nbsp;&nbsp;{{ $history->users->last_name}}</td>
                                            <td>{{ $history->orderId}}</td>
                                            <td>{{ $history->coin}}</td>
                                            <td>{{ $history->type}}</td>
                                            <td class="text-center">
                                            <a class='btn-sm btn-primary' href="#"><i class="fa fa-eye" aria-hidden="true"></i> View</a>
                                            @if($history->status == 0)
                                             <a href="{{ route('accept_payment', $history->id) }}" class="btn-sm btn-danger"><i class="fa fa-check" aria-hidden="true">
                                            </i> Mark as Paid</a>
                                            @else
                                            <a href="#" class="btn-sm btn-success"><i class="fa fa-check" aria-hidden="true">
                                            </i>Paid</a>
                                            @endif
                                        </td>    
                                        </tr>
                                        @endforeach    
                                    </tbody>
                                </table>
                                {{-- {{$historyies->links()}} --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection