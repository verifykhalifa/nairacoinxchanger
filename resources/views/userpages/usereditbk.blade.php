@extends('layout.settings')

@section('content')
    


<div class="col-xl-5 col-md-6">
    <div class="auth-form card">
        <div class="card-header">
            <h4 class="card-title">Edit Bank Account</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('linked.update', $linked->id)}}" enctype="multipart/form-data" class="identity-upload">
                @csrf
                @method('PUT')
                <div class="text-center">
                    @if(session('success'))
                    <div class="alert alert-success" style="width:92%; margin:auto">
                    {{session('success')}}</div>
                    @endif
                </div>
                    <div class="mb-3 col-xl-12">
                        <label class="me-sm-2">First Name </label>
                        <input type="text" name="firstname" class="form-control" value="{{$linked->firstname}}">
                    </div>
                    <div class="mb-3 col-xl-12">
                        <label class="me-sm-2">Last Name </label>
                        <input type="text" name="lastname" class="form-control" value="{{$linked->lastname}}">
                    </div>
                    <div class="mb-3 col-xl-12">
                        <label class="me-sm-2">Bank Name </label>
                        <select class="form-control" name="bankname">
                            <option value="{{$linked->bankname}}">{{$linked->bankname}}</option>
                            <option value="Access Bank">Access Bank</option>
                            <option value="Citi Bank Nigeria">Citi Bank Nigeria</option>
                            <option value="Diamond Bank">Diamond Bank</option>
                            <option value="Ecobank">Ecobank</option>
                            <option value="Fidelity Bank">Fidelity Bank</option>
                            <option value="First Bank">First Bank of Nigeria</option>
                            <option value="First City Monument Bank">First City Monument Bank</option>
                            <option value="Guaranty Trust Bank">Guaranty Trust Bank</option>
                            <option value="Heritage Bank">Heritage Bank</option>
                            <option value="Keystone Bank">Keystone Bank</option>
                            <option value="Skye Bank">Skye Bank</option>
                            <option value="Stanbic IBTC Bank">Stanbic IBTC Bank</option>
                            <option value="Standard Chartered Bank">Standard Chartered Bank</option>
                            <option value="Sterling Bank">Sterling Bank</option>
                            <option value="Union Bank">Union Bank</option>
                            <option value="United Bank of Africa">United Bank of Africa</option>
                            <option value="Unity Bank">Unity Bank</option>
                            <option value="Wema Bank">Wema Bank</option>
                            <option value="Zenith Bank">Zenith Bank</option>
                                </ul>
                        </select>
                    </div>
                    <div class="mb-3 col-xl-12">
                        <label class="me-sm-2">Account Number </label>
                        <input type="text" class="form-control" name="acctnumber" value="{{$linked->acctnumber}}">
                    </div>
                    

                    <div class="text-center col-12">
                        <button type="submit" class="btn btn-success ps-5 pe-5">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection