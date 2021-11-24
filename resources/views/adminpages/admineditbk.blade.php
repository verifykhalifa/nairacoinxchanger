@extends('layout.adminsettings')

@section('content')
    


<div class="col-xl-5 col-md-6">
    <div class="auth-form card">
        <div class="card-header">
            <h4 class="card-title">Add Bank Account</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="{{url('linked/'.$linked['id'])}}" enctype="multipart/form-data" class="identity-upload">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="mb-3 col-xl-12">
                        <label class="me-sm-2">First Name </label>
                        <input type="text" name="firstname" class="form-control" value="{{$linked['firstname']}}">
                    </div>
                    <div class="mb-3 col-xl-12">
                        <label class="me-sm-2">Last Name </label>
                        <input type="text" name="lastname" class="form-control" value="{{$linked['lastname']}}">
                    </div>
                    <div class="mb-3 col-xl-12">
                        <label class="me-sm-2">Bank Name </label>
                        <select class="form-control" name="bankname">
                            <option value="{{$linked['bankname']}}">Select Bank</option>
                            <option value="Access Bank|044|ABP">Access Bank</option>
                            <option value="Citi Bank Nigeria|023|CITI">Citi Bank Nigeria</option>
                            <option value="Diamond Bank|063|DBP">Diamond Bank</option>
                            <option value="Ecobank|050|ECO">Ecobank</option>
                            <option value="Fidelity Bank|070|FBP">Fidelity Bank</option>
                            <option value="First Bank|011|FBN">First Bank of Nigeria</option>
                            <option value="First City Monument Bank|214|FCMB">First City Monument Bank</option>
                            <option value="Guaranty Trust Bank|058|GTB">Guaranty Trust Bank</option>
                            <option value="Heritage Bank|030|HTG">Heritage Bank</option>
                            <option value="Keystone Bank|082|KEYSTONE">Keystone Bank</option>
                            <option value="Skye Bank|076|SKYE">Skye Bank</option>
                            <option value="Stanbic IBTC Bank|221|STANBIC">Stanbic IBTC Bank</option>
                            <option value="Standard Chartered Bank|068|SCB">Standard Chartered Bank</option>
                            <option value="Sterling Bank|232|SBP">Sterling Bank</option>
                            <option value="Union Bank|032|UBN">Union Bank</option>
                            <option value="United Bank of Africa|033|UBA">United Bank of Africa</option>
                            <option value="Unity Bank|215|UNITY">Unity Bank</option>
                            <option value="Wema Bank|035|WEMA">Wema Bank</option>
                            <option value="Zenith Bank|057|ZIB">Zenith Bank</option>
                                </ul>
                        </select>
                    </div>
                    <div class="mb-3 col-xl-12">
                        <label class="me-sm-2">Account Number </label>
                        <input type="text" class="form-control" name="acctnumber" value="">
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