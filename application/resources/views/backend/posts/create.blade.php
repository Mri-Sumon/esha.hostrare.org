@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Add New Videos
                    <a href="{{URL::to('posts')}}" class="btn btn-outline-secondary float-right">Back to List</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">@csrf
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group col-md-12">
                                        <label for="exampleInputTitle" class="h6">Title</label>
                                        <input type="text" class="form-control" id="title"  name="title" placeholder="Post Title">
                                    </div>
                                    <!--<div class="form-group col-md-12">-->
                                    <!--    <label for="exampleInputTitle" class="h6">Sub Title</label>-->
                                    <!--    <input type="text" class="form-control" id="subtitle"  name="subtitle" placeholder="Post Sub Title">-->
                                    <!--</div>-->
                                    <!--<div class="form-group col-md-12">-->
                                    <!--    <label for="exampleInputTitle" class="h6">Details</label>-->
                                    <!--    <textarea name="details" id="tinyMceFull" class="form-control" rows="11"></textarea>-->
                                    <!--</div>-->
                                    <div class="form-group col-md-12">
                                        <label for="exampleInputTitle" class="h6">Links</label>
                                        <input type="text" class="form-control" id="links"  name="links" placeholder="Post External Link">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="exampleInputTitle" class="h6">Sorting</label>
                                        <input type="number" class="form-control" id="sorts"  name="sorts" value="0" placeholder="Post Reorder">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group col-md-12">
                                    <!--    <label for="exampleInputName" class="h6">Add Client Picture</label>-->
                                    <!--    <input type="file" class="form-control mb-3" id="picture"  name="picture" >-->
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
