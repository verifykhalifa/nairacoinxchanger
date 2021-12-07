@extends('layout.dash')

@section('content')
    
<div class="content-body">
    <div class="container-fluid">
        
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header border-0">
                        <h4 class="card-title">History</h4>
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
                                            <th>Coin</th>
                                            <th>Type</th>
                                            <th>status</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($historyies as $history)
                                        <tr class="cell-1">
                                            <td></td>
                                            <td>{{$history['created_at']->toFormattedDateString()}}</td>
                                            <td>{{$history->orderId}}</td>
                                            <td>{{$history->coin}}</td>
                                            <td>{{$history->type}}</td>
                                            @if($history->status == 0)
                                            <td><i class="btn-sm btn-danger">Pending</i> 
                                            </td>
                                            @else
                                            <td>
                                                <i class="btn-sm btn-success">Completed</i>
                                            </td>
                                            @endif   
                                        </tr>  
                                        @endforeach    
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