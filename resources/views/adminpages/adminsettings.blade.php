@extends('layout.adminsettings')

@section('content')
    
<div class="col-xl-9 col-md-8">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Linked Bank Account</h4>
        </div>
        <div class="card-body">
            <div class="form">
                <ul class="linked_account">
                    @foreach ($linked as $items)
                    <li>
                        <div class="row">
                            <div class="col-9">
                                <div class="d-flex">
                                    <span class="me-3"><i class="fa fa-bank"></i></span>
                                    <div class="flex-grow-1">
                                        <h5 class="mt-0 mb-1">{{$items->bankname}}</h5>
                                        <p>{{$items->firstname}}&nbsp; {{$items->lastname}}</p>
                                    </div>
                                    <div class="edit-option">
                                        <a href="{{route('linked.edit', $items->id)}}"><i class="fa fa-pencil"></i></a>
                                        &nbsp;
                                        <a href="/banks/kill/{{$items->id}}">
                                        <i class="fa fa-trash" onclick="return confirm_delete()"></i></a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </li>
                    @endforeach
                   
                   
                 
                </ul>

                <div class="mt-5">
                    <a href="{{ url('/adminverification') }}" class="btn btn-primary px-4 me-3">Add Bank
                        Account</a>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function confirm_delete() {
      return confirm('Are you sure you want to delete bank details?');
    }
</script>
@endsection