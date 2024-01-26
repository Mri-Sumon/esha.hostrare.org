@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Slider</h4>
                        </div>
                        <div class="col-md-6">
                            <a href="{{route('admin.addslider')}}" class="btn btn-primary float-right">Add New slider</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(Session::has('delete_message'))
                        <p class="alert alert-danger" role="text">{{Session::get('delete_message')}}</p>
                    @endif
                    <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Alt</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                             @foreach($sliders as $slider)
                            <tr>
                                <td>{{$slider->id}}</td>
                                <td>{{$slider->title}}</td>
                                <td><img src="{{URL::to('/')}}/application/storage/app/product/{{$slider->img}}" class="" style="width:80px;"></td>
                                <td>{{$slider->alt}}</td>
                                <td>
                                    <a href="{{route('admin.editslider',['slider_id'=>$slider->id])}}" class="btn btn-primary">Edit</a>
                                    <a href="{{route('admin.deleteslider',['slider_id'=>$slider->id])}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
                <!--<div style="text-align:center;margin-left: auto;margin-right: auto;">{{$slider->links()}}</div>-->
            </div>
        </div>
    </div>
</div>
@endsection
