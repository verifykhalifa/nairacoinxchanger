@extends('layout.adminsettings')

@section('content')
    
<div class="col-xl-5 col-md-6">
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
    <div class="auth-form card">
        <div class="card-header">
            <h4 class="card-title">Add Bank Account</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('linked.store') }}" enctype="multipart/form-data" class="identity-upload">
                @csrf
                <div class="row">
                    <div class="mb-3 col-xl-12">
                        <label class="me-sm-2">First Name </label>
                        <input type="text" name="firstname" class="form-control" placeholder="Enter Your First Name">
                    </div>
                    <div class="mb-3 col-xl-12">
                        <label class="me-sm-2">Last Name </label>
                        <input type="text" name="lastname" class="form-control" placeholder="Enter Your Last Name">
                    </div>
                    <div class="mb-3 col-xl-12">
                        <label class="me-sm-2">Bank Name </label>
                        <select class="form-control" name="bankname">
                            <option value="">Select Bank</option>
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
                        <input type="text" class="form-control" name="acctnumber"  placeholder="Enter Your Account Number">
                    </div>
                    

                    <div class="text-center col-12">
                        <button type="submit" class="btn btn-success ps-5 pe-5">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection