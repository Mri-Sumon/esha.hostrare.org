@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Add New Product</h4>
                        </div>
                        <div class="col-md-6">
                            <a href="{{route('product')}}" class="btn btn-primary float-right">All Product</a>
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
                    <form action="{{ URL::to('saveproduct') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="col-md-12 control-label">Product Name:<span class="text-danger">*</span></label>
                                    <div class="col-md-8">
                                        <input type="text" value="{{ old('name') }}" class="form-control input-md" placeholder="Product Name" name="name" id="name" />
                                        @error('name')
                                        <p class="alert alert-danger" role="alert">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-12 control-label">Brand Name:</label>
                                    <div class="col-md-8">
                                        <input type="text" value="{{ old('brand') }}" class="form-control input-md" placeholder="Product Brand" name="brand" id="brand" />
                                        @error('brand')
                                        <p class="alert alert-danger" role="alert">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-12 control-label">Product Code:</label>
                                    <div class="col-md-8">
                                        <input type="text" value="{{ old('product_code') }}" class="form-control input-md" placeholder="Product Code" name="product_code" id="product_code" />
                                        @error('product_code')
                                        <p class="alert alert-danger" role="alert">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-12 control-label">Regular Price:</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control input-md" value="{{ old('price') }}" name="price" id="price" placeholder="Price"/>
                                        @error('price')
                                        <p class="alert alert-danger" role="alert">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-12 control-label">Category:</label>
                                    <div class="col-md-8">
                                        @php
                                        $category=DB::table('cats')->get();
                                        @endphp
                                        @foreach($category as $category)
                                            @if($category->parent=='0')
                                                <label><input type="checkbox" name="cat_ids[]" value="{{$category->id}}"> {{$category->name}}</label>
                                                <br>
                                                @php
                                                    $subcategory=DB::table('cats')->where('parent',$category->id)->get();
                                                @endphp
                                                @foreach($subcategory as $subcat)
                                                    <div style="margin-left: 20px;">
                                                        <label><input type="checkbox" name="cat_ids[]" value="{{$subcat->id}}"> {{$subcat->name}}</label>
                                                        <br>
                                                    </div>
                                                @endforeach
                                            @else
                                            @endif
                                        @endforeach
                                            @error('cat_ids')
                                            <p class="alert alert-danger" role="alert">{{$message}}</p>
                                            @enderror
                                    </div>
                                </div>
                                        <div class="form-group">
                                            <label for="" class="col-md-8 control-label">Discount Type:</label>
                                            <div class="col-md-8">
                                            <select class="form-control" name="discount_type">
                                                    <option value="">Select</option>
                                                    <option value="percent">Percent</option>
                                                    <option value="fixed">Fixed</option>
                                                    <option value="no_discount">No Discount</option>
                                                </select>
                                                @error('status')
                                                <p class="alert alert-danger" role="alert">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    
                                        <div class="form-group">
                                            <label for="" class="col-md-8 control-label">Discount Amount:</label>
                                            <div class="col-md-8">
                                                <input type="text" value="{{ old('discount_amount') }}" class="form-control input-md" name="discount_amount" id="discount_amount" placeholder="Discount Amount"/>
                                                @error('discount_amount')
                                                <p class="alert alert-danger" role="alert">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>
                                
                                
                                <div class="form-group">
                                    <label for="" class="col-md-8 control-label">Status:<span class="text-danger">*</span></label>
                                    <div class="col-md-8">
                                    <select class="form-control" name="status">
                                            <option value="0">Select</option>
                                            <option value="1">InStock</option>
                                            <option value="0">Out of Stock</option>
                                        </select>
                                        @error('status')
                                        <p class="alert alert-danger" role="alert">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-8 control-label">Feature Products:</label>
                                    <div class="col-md-8">
                                    <select class="form-control" name="feature_product">
                                            <option value="">Select</option>
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                        @error('feature_product')
                                        <p class="alert alert-danger" role="alert">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-8 control-label">Top Sold Products:</label>
                                    <div class="col-md-8">
                                    <select class="form-control" name="top_product">
                                            <option value="">Select</option>
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                        @error('top_product')
                                        <p class="alert alert-danger" role="alert">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-8 control-label">Sort:</label>
                                    <div class="col-md-8">
                                        <input type="text" value="1" class="form-control input-md" name="sort" id="sort" placeholder="Sort"/>
                                        @error('sort')
                                        <p class="alert alert-danger" role="alert">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-8 control-label">Tags (Comma Seperated Value):</label>
                                    <div class="col-md-8">
                                        <input type="text" value="{{ old('tags') }}" class="form-control input-md" name="tags" id="tags" placeholder="Tags"/>
                                        @error('tags')
                                        <p class="alert alert-danger" role="alert">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="col-md-8 control-label">Image:<span class="text-danger">*</span></label>
                                    <div class="col-md-8">
                                        <input type="file" class="form-control input-md" name="f_pic" id="f_pic"/>
                                        @error('f_pic')
                                        <p class="alert alert-danger" role="alert">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-8 control-label">Images</label>
                                    <div class="col-md-8">
                                        <input type="file" class="form-control input-md" name="pics[]" id="pics" multiple/>
                                        @error('pics')
                                        <p class="alert alert-danger" role="alert">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>        
                        </div>
                            <div class="form-group">
                                <label for="" class="col-md-12 control-label">Brief:</label>
                                <div class="col-md-8">
                                    <!--<textare type="text" class="form-control" name="brief" id="brief" placeholder="Brief"></textarea>-->
                                    <textarea class="form-control" name="brief" id="tinyMceFull" placeholder="Brief">{!! old('brief') !!}</textarea>

                                    @error('brief')
                                    <p class="alert alert-danger" role="alert">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-12 control-label">Description:<span class="text-danger">*</span></label>
                                <div class="col-md-8">
                                <textarea id="tinyMceFull" placeholder=" Description" class="form-control" name="description">{!! old('description') !!}</textarea>
                                    @error('description')
                                    <p class="alert alert-danger" role="alert">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-12 control-label">Brand Description:</label>
                                <div class="col-md-8">
                                <textarea id="tinyMceFull" placeholder=" Description" class="form-control" name="brand_details">{!! old('brand_details') !!}</textarea>
                                    @error('brand_details')
                                    <p class="alert alert-danger" role="alert">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-8 control-label"></label>
                                <div class="col-md-8">
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
