@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Upload New Theme
                    <a href="{{URL::to('themes')}}" class="btn btn-outline-secondary float-right">Back to List</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <form action="{{ route('themes.store') }}" method="post" enctype="multipart/form-data">@csrf
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group col-md-12">
                                        <label for="exampleInputTitle" class="h6">Theme Name</label>
                                        <input type="text" class="form-control" id="name"  name="name" placeholder="Theme Name">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="exampleInputTitle" class="h6">Details</label>
                                        <textarea name="details" class="form-control" rows="11"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group col-md-12">
                                        <label for="exampleInputName" class="h6">Theme Thumbnail (.jpg/.png allowed)</label>
                                        <input type="file" class="form-control" id="thumbs"  name="thumbs" >
                                        @if (session('message'))
                                            <div class="alert alert-danger" role="alert">
                                                {{ session('message') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="exampleInputName" class="h6">Theme File (.zip allowed)</label>
                                        <input type="file" class="form-control" id="themefile"  name="themefile" >
                                        @if (session('message'))
                                            <div class="alert alert-danger" role="alert">
                                                {{ session('message') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <button class="btn btn-primary btn-block btn-lg" type="submit">Upload</button>
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
