@extends('layout.master')

@section('content')
    
<div class="content-body">
    <div class="container-fluid">
    <form action="{{route('rates.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12">
                <div class="card balance-widget">
                    @if(count($errors) > 0)
                                    @foreach($errors->all() as $error)
                                    <div class="alert alert-danger" style="width:92%; margin:auto">
                                        {{$error}}</div>
                                    @endforeach
                                    @endif
                                    @if(session('success'))
                                    <div class="alert alert-success" style="width:92%; margin:auto">
                                    {{session('success')}}</div>
                                    @endif
                
                                    @if(session('error'))
                                    <div class="alert alert-danger" style="width:92%; margin:auto">
                                    {{session('error')}}</div>
                                @endif
                    <div class="card-body pt-0">
                            <div class="row">
                                <div class="mb-3 col-xl-3">
                                    <label class="me-sm-2">Coin</label>
                                    <input type="text" name="coin" class="form-control" placeholder="Coin">
                                </div>
                                <div class="mb-3 col-xl-3">
                                    <label class="me-sm-2">Buy Rate</label>
                                    <input type="text" name="buy" class="form-control" placeholder="0.00">
                                </div>
                                <div class="mb-3 col-xl-3">
                                    <label class="me-sm-2">Sell Rate</label>
                                    <input type="text" name="sell" class="form-control" placeholder="0.00">
                                </div>
                                <div class="mb-3 col-xl-3">
                                    <label class="me-sm-2">Coin Image</label>
                                    <input type="file" name="coin_image">
                                </div>
                            </div>
                            <div class="col-6 text-center">
                                <button class="btn btn-success btn-xs waves-effect" type="submit">Update</button>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12">
                <div class="card balance-widget">
                    
                    <div class="card-body pt-0">
                           
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>


@endsection