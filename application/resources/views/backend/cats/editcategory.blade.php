@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Update Categories</h4>
                        </div>
                        <div class="col-md-6">
                            <a href="{{route('category')}}" class="btn btn-primary float-right">All Category</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(Session::has('message'))
                        <p class="alert alert-success" role="text">{{Session::get('message')}}</p>
                    @endif
                    <form action="{{ route('admin.updataecategory',['cat_id'=>$singleData->id]) }}" class="form-horizontal" method="post" enctype="multipart/form-data">
                        @csrf
                         <div class="form-group">
                                <label for="" class="col-md-4 control-label">Category Icon Code:</label>
                                <div class="col-md-4">
                                    <input type="text" value="{{$singleData->faicon}}" class="form-control input-md" placeholder="Category Icon Code" name="faicon" id="faicon" />
                                    @error('faicon')
                                        <p class="text-danger" role="alert">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Category Name:</label>
                                <div class="col-md-4">
                                    <input type="text" value="{{$singleData->name}}" class="form-control input-md" placeholder="Category Name" name="name" id="name" />
                                    @error('name')
                                        <p class="text-danger" role="alert">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Parent:</label>
                                <div class="col-md-4">
                                    <input type="text" value="{{$singleData->parent}}" class="form-control input-md" name="parent" id="parent" placeholder="Parent ID"/>
                                @error('parent')
                                        <p class="text-danger" role="alert">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Status:</label>
                                <div class="col-md-4">
                                    <select name="status" id="status" value="{{$singleData->status}}" class="form-control">
                                        @if($singleData->status=='active')
                                        <option value="">Select</option>
                                        <option value="active" selected>Active</option>
                                        <option value="inactive">Inactive</option>
                                        @else
                                        <option value="">Select</option>
                                        <option value="active" >Active</option>
                                        <option value="inactive" selected>Inactive</option>
                                        @endif
                                    </select>
                                     @error('status')
                                        <p class="text-danger" role="alert">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Image:</label>
                                <div class="col-md-4">
                                    <img src="{{URL::to('/')}}/application/storage/app/product/{{$singleData->image}}" class="img-fluid"><br>
                                    <input type="file" class="form-control" id="image"  name="image">
                                    @error('image')
                                        <p class="text-danger" role="alert">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Sort:</label>
                                <div class="col-md-4">
                                    <input type="text" value="{{$singleData->sort}}" class="form-control input-md" name="sort" id="sort" placeholder="Sort"/>
                                     @error('sort')
                                        <p class="text-danger" role="alert">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-12 control-label">Description:</label>
                                <div class="col-md-8">
                                <textarea id="tinyMceFull" placeholder=" Description" class="form-control" name="description">{{$singleData->description}}</textarea>
                                    @error('description')
                                    <p class="alert alert-danger" role="alert">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
