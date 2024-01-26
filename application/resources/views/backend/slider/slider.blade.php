@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Products</h4>
                        </div>
                        <div class="col-md-6">
                            <a href="{{route('admin.addproduct')}}" class="btn btn-primary float-right">Add New Slider</a>
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
                                <th>Feature Image</th>
                                <th>Name</th>
                                <!--<th>Short Description</th>-->
                                <th>Price</th>
                                <th>Cats Id</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                             @foreach($products as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td><img src="{{URL::to('/')}}/application/storage/app/product/{{$product->f_pic}}" class="" style="width:80px;"></td>
                                <td>{{$product->name}}</td>
                                <!--<td>{{$product->brief}}</td>-->
                                <td>$ {{$product->price}}</td>
                                <td>{{$product->cat_ids}}</td>
                                <td>{{$product->status}}</td>
                                <td>
                                    <a href="{{route('admin.editproduct',['product_id'=>$product->id])}}" class="btn btn-primary">Edit</a>
                                    <a href="{{route('admin.deleteproduct',['product_id'=>$product->id])}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                    
                </div>
                <div style="text-align:center;margin-left: auto;margin-right: auto;">{{$products->links()}}</div>
            </div>
        </div>
    </div>
</div>
@endsection
