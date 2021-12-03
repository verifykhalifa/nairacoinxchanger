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
                                            <th>Type</th>
                                            <th>status</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="cell-1">
                                            <td></td>
                                            <td>2021-11-27</td>
                                            <td>#SO-13487</td>
                                            <td>Buy</td>
                                            <td>
                                                <i class="btn-sm btn-danger">Pending</i> 
                                             </td>
                                           
                                        </tr>
                                        <tr class="cell-1">
                                            <td></td>
                                            <td>2021-11-27</td>
                                            <td>#SO-13487</td>
                                            <td>Sell</td>
                                            <td>
                                                <i class="btn-sm btn-success">Completed</i> 
                                             </td>
                                            
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