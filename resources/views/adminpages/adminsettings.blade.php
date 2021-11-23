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
                                        <p>{{$items->firstname}}&nbsp; {{$items->firstname}}</p>
                                    </div>
                                    <div class="edit-option">
                                        
                                        <a href="{{('linked/'.$items->userid.'/edit')}}" class="btn btn-sm btn-primary">Edit</a>
                                        
                                        <form action="{{url( 'linked/'.$items->userid)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <Button type="submit" name="Delete" class="btn btn-sm btn-primary">Delete</Button>
                                        </form>
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

@endsection