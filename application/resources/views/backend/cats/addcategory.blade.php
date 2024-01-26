@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Add New Categories</h4>
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
                    <form action="{{ URL::to('saveCategory') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Category Icon Code:</label>
                                <div class="col-md-4">
                                    <input type="text" value="{{ old('faicon') }}" class="form-control input-md" placeholder="Category Icon Code" name="faicon" id="faicon" />
                                    @error('faicon')
                                        <p class="text-danger" role="alert">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Category Name:</label>
                                <div class="col-md-4">
                                    <input type="text" value="{{ old('name') }}" class="form-control input-md" placeholder="Category Name" name="name" id="name" />
                                    @error('name')
                                        <p class="text-danger" role="alert">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Parent:</label>
                                <div class="col-md-4">
                                    <select name="parent" id="parent" class="form-control">
                                        <option value="">Select</option>
                                        @php
                                        $cat=DB::table('cats')->where('parent','0')->get();
                                        @endphp
                                        @foreach($cat as $cats)
                                            <?php $subcats=DB::table('cats')->where('parent',$cats->id)->get();?>
                                          <option value="{{$cats->id}}">{{$cats->name}}</option>
                                            @if(count($subcats)>0)
                                                @foreach($subcats as $subcat)
                                                <option value="{{$subcat->id}}">&nbsp;&nbsp;|_{{$subcat->name}}</option>
                                                @endforeach
                                            @endif
                                        @endforeach
                                        <option value="0">Insert As Parent</option>
                                    </select>
                                    @error('parent')
                                        <p class="text-danger" role="alert">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Status:</label>
                                <div class="col-md-4">
                                    <select name="status" id="status" class="form-control">
                                        <option value="">Select</option>
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                    </select>
                                    @error('status')
                                        <p class="text-danger" role="alert">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Image:</label>
                                <div class="col-md-4">
                                    <input type="file" class="form-control" id="image"  name="image">
                                    @error('image')
                                        <p class="text-danger" role="alert">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Sort:</label>
                                <div class="col-md-4">
                                    <input type="text" value="{{ old('sort') }}" class="form-control input-md" name="sort" id="sort" placeholder="Sort"/>
                                    @error('sort')
                                        <p class="text-danger" role="alert">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="" class="col-md-12 control-label">Description:</label>
                                <div class="col-md-8">
                                <textarea id="tinyMceFull" placeholder=" Description" class="form-control" name="description">{!! old('description') !!}</textarea>
                                    @error('description')
                                    <p class="alert alert-danger" role="alert">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
