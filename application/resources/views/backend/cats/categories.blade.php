@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Categories</h4>
                        </div>
                        <div class="col-md-6">
                            <a href="{{route('admin.addcategory')}}" class="btn btn-primary float-right">Add New Category</a>
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
                    @if(Session::has('message'))
                        <p class="alert alert-success" role="text">{{Session::get('message')}}</p>
                    @endif
                    <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Category Name</th>
                                <th>Image</th>
                                <th>Parent</th>
                                <th>Status</th>
                                <th>Short</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($category as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td><img src="{{URL::to('/')}}/application/storage/app/product/{{$category->image}}" alt="" width="50"></td>
                                <td>
                                    @if($category->parent=='0')
                                    Parent Category
                                    @else
                                    {{\DB::table('cats')->where('id',$category->parent)->value('name')}}</td>
                                    @endif
                                <td>{{$category->status}}</td>
                                <td>{{$category->sort}}</td>
                                <td>
                                    <a href="{{route('admin.editcategory',['cat_id'=>$category->id])}}" class="btn btn-primary">Edit</a>
                                    <a href="{{route('admin.deletecategory',['cat_id'=>$category->id])}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
