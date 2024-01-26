@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Post
                    <a href="{{URL::to('posts')}}/create" class="btn btn-outline-secondary float-right">Add New Videos</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <form action="{{ route('posts.update',$singleData->id) }}" method="post" enctype="multipart/form-data">@csrf
                            {{ method_field('PUT') }}
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group col-md-12">
                                        <label for="exampleInputTitle" class="h6">Title</label>
                                        <input type="text" class="form-control" id="title" value="{{$singleData->title}}" name="title" placeholder="Post Title">
                                        Permalink: <a href="{{URL::to('/')}}/blog/{{$singleData->slug}}" target="_blank"><small>{{URL::to('/')}}/blog/{{$singleData->slug}}</small></a>
                                    </div>
                                    <!--<div class="form-group col-md-12">-->
                                    <!--    <label for="exampleInputTitle" class="h6">Sub Title</label>-->
                                    <!--    <input type="text" class="form-control" id="subtitle" value="{{$singleData->subtitle}}"  name="subtitle" placeholder="Post Sub Title">-->
                                    <!--</div>-->
                                    <!--<div class="form-group col-md-12">-->
                                    <!--    <label for="exampleInputTitle" class="h6">Details</label>-->
                                    <!--    <textarea name="details" id="tinyMceFull" class="form-control" rows="11">{!!$singleData->detaisl!!}</textarea>-->
                                    <!--</div>-->
                                    <div class="form-group col-md-12">
                                        <label for="exampleInputTitle" class="h6">Links</label>
                                        <input type="text" class="form-control" id="links" value="{{$singleData->links}}"  name="links" placeholder="Post External Link">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="exampleInputTitle" class="h6">Sorting</label>
                                        <input type="number" class="form-control" id="sorts"  value="{{$singleData->sorts}}" name="sorts" value="0" placeholder="Post Reorder">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group col-md-12">
                                    <!--    <label for="exampleInputName" class="h6">Update Client Picture</label>-->
                                        <!--<img src="{{URL::to('/')}}/application/storage/app/posts/{{$singleData->picture}}" class="img-fluid"><br>-->
                                    <!--    <input type="file" class="form-control" id="picture"  name="picture" >-->
                                        @if (session('message'))
                                            <div class="alert alert-danger" role="alert">
                                                {{ session('message') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="exampleInputTitle" class="h6">Add Section</label>                                    
                                        <select name="section" id="section" class="form-control">
                                            <option value="">Select</option>  
                                            <!--<option value="client">Client</option>-->
                                            <option value="video">Video</option>  
                                        </select>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <button class="btn btn-primary btn-block btn-lg" type="submit">Publish</button>
                                    </div>
                                </div>   

                                
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
