@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Upload New Picture
                    <a href="{{URL::to('medias')}}" class="btn btn-outline-secondary float-right">Back to List</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <form action="{{ route('medias.store') }}" method="post" enctype="multipart/form-data">@csrf
                            <div class="form-group col-md-7">
                                <label for="exampleInputName" class="h6">Title</label>
                                <input type="text" class="form-control" id="name"  name="name" placeholder="Title">
                            </div>
                            <div class="form-group col-md-7">
                                <label for="exampleInputName" class="h6">2nd Title</label>
                                <input type="text" class="form-control" id="sec_title"  name="sec_title" placeholder="2nd Title">
                            </div>
                            <div class="form-group col-md-7">
                                <label for="exampleInputName" class="h6">Section</label>
                                <?php $sections=\DB::table('sections')->get();?>
                                <select class="form-control" name="link_id">
                                    <option value="">Select</option>
                                    @foreach($sections as $section)
                                    <option value="{{$section->slug}}">{{$section->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-7">
                                <label for="exampleInputName" class="h6">Browser Picture</label>
                                <input type="file" class="form-control" id="picture"  name="picture" placeholder="Browser Picture">
                            </div>
                            <div class="form-group col-md-7">
                                <label for="exampleInputName" class="h6">Picture Link</label>
                                <input type="text" class="form-control" id="link"  name="link" placeholder="Picture Link">
                            </div>
                            <div class="form-group col-md-7">
                                <label for="exampleInputName" class="h6">Picture Sorting Order</label>
                                <input type="number" class="form-control" id="sort"  name="sort" placeholder="Picture Sorting Order">
                            </div>
                            <button class="btn btn-primary btn-lg ml-3" type="submit">Save</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
