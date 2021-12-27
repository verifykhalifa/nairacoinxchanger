@extends('layout.adminsettings')

@section('content')

<div class="col-xl-6 col-md-6">
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
    <br>
    
        <form action="{{route('rates.update', $rates->id )}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="card-body pt-0">
                            <label>Coin Name</label>
                            <input type="text" id="address" name="coin" value="{{$rates->coin}}" class="form-control mb-3" disabled>
                        </div>
                </div>
                <div class="mb-3 col-xl-3">
                    <div class="card-body pt-0">
                        <label>Buy Rate</label>
                        <input type="text" id="address" name="buy" value="{{$rates->buy}}" class="form-control mb-3">
                    </div>
                </div>
                <div class="mb-3 col-xl-3">
                    <div class="card-body pt-0">
                        <label>Sell Rate</label>
                        <input type="text" id="address" name="sell" value="{{$rates->sell}}" class="form-control mb-3">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-5 col-lg-6 col-md-12">
                    <div class="card-body pt-0">
                        <label>Coin Image</label>
                        <input type="file" name="coin_image" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])" hidden>
                    </div>
                    <div><img id="output" style="width:100px" src="{{$rates->coin_image}}"></div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-12">
                <div class="card-body">
                    <input type="submit" id="submit" value="Update Rate" class="btn btn-success btn-sm">
                </div>
            </div>
        </div>
        </form>
   
</div>
@endsection