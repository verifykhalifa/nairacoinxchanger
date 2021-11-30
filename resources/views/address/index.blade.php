@extends('layout.adminsettings')

@section('content')
    
<div class="col-xl-9 col-md-8">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Wallet Addresses</h4>
        </div>
        <div class="card-body">
            <div class="form">
                <ul class="linked_account">
                    @foreach ($address as $addy)
                    <li>
                        <div class="row">
                            <div class="col-9">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                       <b><h4 class="mt-0 mb-1">{{$addy->coin}} :</h4></b>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="mt-0 mb-1">{{$addy->address}}</h5>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p><img src="{{$addy->barcode}}" alt="Wallet Image" style="width: 100px"></p>
                                    </div>
                                    <div class="edit-option">
                                        <a href="{{route('address.edit', $addy->id)}}"><i class="fa fa-pencil"></i></a>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection