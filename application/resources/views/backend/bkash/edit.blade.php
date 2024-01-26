@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Page Info
                    <a href="{{URL::to('bkashs')}}" class="btn btn-outline-secondary float-right">Back to List</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <form action="{{ route('bkashs.update',$singleData->id) }}" method="post" enctype="multipart/form-data">@csrf
                            {{ method_field('PUT') }}
                            <div class="form-group col-md-7">
                                <label for="exampleInputName" class="h6">Name</label>
                                <input type="text" value="{{$singleData->number}}" class="form-control" id="number"  name="number" >
                                @if (session('message'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ session('message') }}
                                    </div>
                                @endif
                            </div>
                            <button class="btn btn-primary btn-lg ml-3" type="submit">Update</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
