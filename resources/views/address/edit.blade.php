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
        <form action="{{route('address.update', $address->id )}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="card-body pt-0">
                            <label>Wallet Address</label>
                            <input type="text" id="address" name="address" value="{{$address->address}}" class="form-control mb-3">
                        </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="card-body pt-0">
                        <label>Select Coin</label>
                        <select name="coin" class="form-control">
                            <option value="{{$c_id}}">{{$c_name}}</option>
                            @foreach ($rates as $rate)
                            <option value="{{$rate->id}}">
                                {{$rate->coin}}
                            </option>
                            @endforeach
                        </select>
                    </div>
            </div>
            </div>
            <div class="row">
                <div class="col-xl-5 col-lg-6 col-md-12">
                    <div class="card-body pt-0">
                        <label>Barcode</label>
                        <input type="file" id="barcode" name="barcode" accept="Barcode/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                    </div>
                    <div><img id="output" style="width:100px" src="{{$address->barcode}}"></div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-12">
                <div class="card-body">
                    <input type="submit" id="submit" value="Update address" class="btn btn-success btn-sm">
                </div>
            </div>
        </div>
        </form>
</div>
@endsection