@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Page Info
                    <a href="{{URL::to('pages')}}" class="btn btn-outline-secondary float-right">Back to List</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <form action="{{ route('slider.update',$singleData->id) }}" method="post" enctype="multipart/form-data">@csrf
                            {{ method_field('PUT') }}
                            <div class="form-group col-md-7">
                                <img src="{{URL::to('/')}}/application/storage/app/product/{{$singleData->img}}" class="img-fluid"><br>
                                <label for="exampleInputName" class="h6">img</label>
                                <input type="file" value="{{$singleData->img}}" class="form-control" id="nimg"  name="nimg" >
                            </div>
                            
                            <div class="form-group col-md-7">
                                <label for="exampleInputTitle" class="h6">Alt</label>
                                <input type="text" value="{{$singleData->alt}}" class="form-control" id="alt"  name="alt">
                            </div>
                            <button class="btn btn-primary btn-lg ml-3" type="submit">Update</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
