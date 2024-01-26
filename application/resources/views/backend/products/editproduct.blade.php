@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Update Product</h4>
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
                    <form action="{{ route('admin.updateproduct',['id'=>$singleData->id]) }}" class="form-horizontal" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="col-md-12 control-label">Product Name:<span class="text-danger">*</span></label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control input-md" value="{{$singleData->name}}" placeholder="Product Name" name="name" id="name" />
                                        @error('name')
                                        <p class="alert alert-danger" role="alert">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-12 control-label">Brand Name:</label>
                                    <div class="col-md-8">
                                        <input type="text" value="{{ old('brand') }}" value="{{$singleData->brand}}" class="form-control input-md" placeholder="Product Brand" name="brand" id="brand" />
                                        @error('brand')
                                        <p class="alert alert-danger" role="alert">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-12 control-label">Product Code:</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control input-md" value="{{$singleData->product_code}}" placeholder="Product Code" name="product_code" id="product_code" />
                                        @error('product_code')
                                        <p class="alert alert-danger" role="alert">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-12 control-label">Regular Price:</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control input-md" value="{{$singleData->price}}" name="price" id="price" placeholder="Price"/>
                                        @error('price')
                                        <p class="alert alert-danger" role="alert">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-12 control-label">Category:</label>
                                    <div class="col-md-8">
                                        @php
                                        $categorys=DB::table('cats')->get();
                                        $cat_id=explode(',',$singleData->cat_ids);
                                        @endphp
                                        @foreach($cat_id as $c_id)
                                        @foreach($categorys as $category)
                                            @if($category->id==$c_id)
                                                @if($category->parent=='0')
                                                    <label><input type="checkbox" name="cat_ids[]" value="{{$category->id}}" checked> {{$category->name}}</label>
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
                                                @endif
                                            @else
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
                                                    @endif
                                            @endif
                                            @endforeach
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
                                                @if($singleData->discount_type=='percent')
                                                    <option>Select</option>
                                                    <option value="percent" selected>Percent</option>
                                                    <option value="fixed">Fixed</option>
                                                    <option value="no_discount">No Discount</option>
                                                @elseif($singleData->discount_type=='fixed')
                                                    <option>Select</option>
                                                    <option value="percent" >Percent</option>
                                                    <option value="fixed" selected>Fixed</option>
                                                    <option value="no_discount">No Discount</option>
                                                @else
                                                    <option>Select</option>
                                                    <option value="percent" >Percent</option>
                                                    <option value="fixed">Fixed</option>
                                                    <option value="no_discount" selected>No Discount</option>
                                                @endif
                                                </select>
                                                @error('status')
                                                <p class="alert alert-danger" role="alert">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    
                                        <div class="form-group">
                                            <label for="" class="col-md-8 control-label">Discount Amount:</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control input-md" value="{{$singleData->discount_amount}}" name="discount_amount" id="discount_amount" placeholder="Discount Amount"/>
                                                @error('discount_amount')
                                                <p class="alert alert-danger" role="alert">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>
                                
                                
                                <div class="form-group">
                                    <label for="" class="col-md-8 control-label">Status:<span class="text-danger">*</span></label>
                                    <div class="col-md-8">
                                    <select class="form-control" name="status">
                                        @if($singleData->status=='1')
                                            <option>Select</option>
                                            <option value="1" selected>InStock</option>
                                            <option value="0">Out of Stock</option>
                                        @elseif($singleData->status=='0')
                                            <option>Select</option>
                                            <option value="1">InStock</option>
                                            <option value="0" selected>Out of Stock</option>
                                        @else
                                            <option>Select</option>
                                            <option value="1">InStock</option>
                                            <option value="0">Out of Stock</option>
                                        @endif
                                        </select>
                                        @error('status')
                                        <p class="alert alert-danger" role="alert">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-8 control-label">Feature Products:</label>
                                    <div class="col-md-8">
                                    <select class="form-control" value="{{$singleData->feature_product}}" name="feature_product">
                                        @if($singleData->feature_product=='1')
                                            <option value="0">Select</option>
                                            <option value="1" selected>Yes</option>
                                            <option value="0">No</option>
                                        @elseif($singleData->feature_product=='0')
                                            <option value="0">Select</option>
                                            <option value="1">Yes</option>
                                            <option value="0" selected>No</option>
                                        @else
                                            <option value="0">Select</option>
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                        @endif
                                            
                                        </select>
                                        @error('feature_product')
                                        <p class="alert alert-danger" role="alert">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-8 control-label">Top Sold Products:</label>
                                    <div class="col-md-8">
                                    <select class="form-control" value="{{$singleData->top_product}}" name="top_product">
                                        @if($singleData->top_product=='1')
                                            <option value="0">Select</option>
                                            <option value="1" selected>Yes</option>
                                            <option value="0">No</option>
                                        @elseif($singleData->top_product=='0')
                                            <option value="0">Select</option>
                                            <option value="1">Yes</option>
                                            <option value="0" selected>No</option>
                                        @else
                                            <option value="0">Select</option>
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                        @endif
                                            
                                        </select>
                                        @error('top_product')
                                        <p class="alert alert-danger" role="alert">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-8 control-label">Sort:</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control input-md" @if($singleData->sort) value="{{$singleData->sort}}" @else value="1" @endif name="sort" id="sort" placeholder="Sort"/>
                                        @error('sort')
                                        <p class="alert alert-danger" role="alert">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-8 control-label">Tags (Comma Seperated Value):</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control input-md" value="{{$singleData->tags}}" name="tags" id="tags" placeholder="Tags"/>
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
                                        @if($singleData->f_pic)
                                        <a href="{{URL::to('/')}}/removefeaturedproductpic/{{$singleData->id}}"><svg width="20px" height="20px" style="position: absolute; right: 20px; top: 5px; background: white; padding: 1px; border-radius: 50px;" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>cross-circle</title> <desc>Created with Sketch Beta.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage"> <g id="Icon-Set" sketch:type="MSLayerGroup" transform="translate(-568.000000, -1087.000000)" fill="#000000"> <path d="M584,1117 C576.268,1117 570,1110.73 570,1103 C570,1095.27 576.268,1089 584,1089 C591.732,1089 598,1095.27 598,1103 C598,1110.73 591.732,1117 584,1117 L584,1117 Z M584,1087 C575.163,1087 568,1094.16 568,1103 C568,1111.84 575.163,1119 584,1119 C592.837,1119 600,1111.84 600,1103 C600,1094.16 592.837,1087 584,1087 L584,1087 Z M589.717,1097.28 C589.323,1096.89 588.686,1096.89 588.292,1097.28 L583.994,1101.58 L579.758,1097.34 C579.367,1096.95 578.733,1096.95 578.344,1097.34 C577.953,1097.73 577.953,1098.37 578.344,1098.76 L582.58,1102.99 L578.314,1107.26 C577.921,1107.65 577.921,1108.29 578.314,1108.69 C578.708,1109.08 579.346,1109.08 579.74,1108.69 L584.006,1104.42 L588.242,1108.66 C588.633,1109.05 589.267,1109.05 589.657,1108.66 C590.048,1108.27 590.048,1107.63 589.657,1107.24 L585.42,1103.01 L589.717,1098.71 C590.11,1098.31 590.11,1097.68 589.717,1097.28 L589.717,1097.28 Z" id="cross-circle" sketch:type="MSShapeGroup"> </path> </g> </g> </g></svg></a>
                                        <img src="{{URL::to('/')}}/application/storage/app/product/{{$singleData->f_pic}}" class="img-fluid"><br>
                                        @endif
                                        <input type="file" class="form-control input-md" name="f_pic" id="f_pic"/>
                                        @error('f_pic')
                                        <p class="alert alert-danger" role="alert">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-8 control-label">Images</label>
                                    <div class="col-md-8">
                                        @if($singleData->pics)
                                        @php
                                        $images=explode(',',$singleData->pics);
                                        @endphp
                                        @foreach($images as $image)
                                            @if($image)
                                            <a href="{{URL::to('/')}}/removesingleproductpic/{{$singleData->id}}/{{$image}}">
                                                <svg width="20px" height="20px" style="position: relative; right: 20px; top: 5px; background: white; padding: 1px; border-radius: 50px;" 
                                                viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" 
                                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#000000">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier"> <title>cross-circle</title> <desc>Created with Sketch Beta.</desc> <defs> </defs> 
                                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage"> 
                                                    <g id="Icon-Set" sketch:type="MSLayerGroup" transform="translate(-568.000000, -1087.000000)" fill="#000000"> 
                                                    <path d="M584,1117 C576.268,1117 570,1110.73 570,1103 C570,1095.27 576.268,1089 584,1089 C591.732,1089 598,1095.27 598,1103 C598,1110.73 591.732,1117 584,1117 L584,1117 Z M584,1087 C575.163,1087 568,1094.16 568,1103 C568,1111.84 575.163,1119 584,1119 C592.837,1119 600,1111.84 600,1103 C600,1094.16 592.837,1087 584,1087 L584,1087 Z M589.717,1097.28 C589.323,1096.89 588.686,1096.89 588.292,1097.28 L583.994,1101.58 L579.758,1097.34 C579.367,1096.95 578.733,1096.95 578.344,1097.34 C577.953,1097.73 577.953,1098.37 578.344,1098.76 L582.58,1102.99 L578.314,1107.26 C577.921,1107.65 577.921,1108.29 578.314,1108.69 C578.708,1109.08 579.346,1109.08 579.74,1108.69 L584.006,1104.42 L588.242,1108.66 C588.633,1109.05 589.267,1109.05 589.657,1108.66 C590.048,1108.27 590.048,1107.63 589.657,1107.24 L585.42,1103.01 L589.717,1098.71 C590.11,1098.31 590.11,1097.68 589.717,1097.28 L589.717,1097.28 Z" id="cross-circle" sketch:type="MSShapeGroup"> </path> </g> </g> </g></svg></a>
                                            <img src="{{URL::to('/')}}/application/storage/app/product/{{$image}}" width="100" class="img-fluid">
                                            @endif
                                        @endforeach
                                        @endif
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
                                    <textarea class="form-control" name="brief" id="tinyMceFull" placeholder="Brief">{!!$singleData->brief!!}</textarea>

                                    @error('brief')
                                    <p class="alert alert-danger" role="alert">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-12 control-label">Description:<span class="text-danger">*</span></label>
                                <div class="col-md-8">
                                <textarea id="tinyMceFull" placeholder=" Description" class="form-control" name="description">{!!$singleData->description!!}</textarea>
                                    @error('description')
                                    <p class="alert alert-danger" role="alert">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-12 control-label">Brand Description:</label>
                                <div class="col-md-8">
                                <textarea id="tinyMceFull" placeholder=" Description" class="form-control" name="brand_details">{!!$singleData->brand_details!!}</textarea>
                                    @error('brand_details')
                                    <p class="alert alert-danger" role="alert">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-8 control-label"></label>
                                <div class="col-md-8">
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
