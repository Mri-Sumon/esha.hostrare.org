@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Create New Bkash
                    <a href="{{URL::to('bkashs')}}" class="btn btn-outline-secondary float-right">Back to List</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                        <form action="{{ route('bkashs.store') }}" method="post" enctype="multipart/form-data">@csrf
                            <div class="form-group col-md-7">
                                <label for="exampleInputName" class="h6">Number</label>
                                <input type="text" class="form-control" id="number"  name="number" placeholder="+880XXXXXXXXX">
                                @if (session('message'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ session('message') }}
                                    </div>
                                @endif
                            </div>
                            <button class="btn btn-primary btn-lg ml-3" type="submit">Save</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
