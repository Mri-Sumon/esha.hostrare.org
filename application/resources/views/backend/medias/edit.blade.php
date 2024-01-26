@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Page Info
                    <a href="{{URL::to('pages')}}" class="btn btn-outline-secondary float-right">Back to List</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <form action="{{ route('pages.update',$singleData->id) }}" method="post" enctype="multipart/form-data">@csrf
                            {{ method_field('PUT') }}
                            <div class="form-group col-md-7">
                                <label for="exampleInputName" class="h6">Name</label>
                                <input type="text" value="{{$singleData->name}}" class="form-control" id="name"  name="name" placeholder="Page Name/Menu">
                            </div>
                            <div class="form-group col-md-7">
                                <label for="exampleInputName" class="h6">Parent Menu (Optional)</label>
                                <select class="form-control" id="parent_page" name="parent_page">
                                    <option value="0">Select Parent Menu</option>
                                    @forelse($parentMenus as $parentMenu)
                                    <option value="{{$parentMenu->id}}" @if($singleData->parent_page==$parentMenu->id) selected @endif>{{$parentMenu->name}}</option>
                                    <?php $subpage=App\Pages::where('parent_page',$parentMenu->id)->get();?>
                                        @if(count($subpage)>0)
                                            @forelse($subpage as $subpageItem)
                                            <option value="{{$subpageItem->id}}" @if($singleData->parent_page==$subpageItem->id) selected @endif>&nbsp;&nbsp;-{{$subpageItem->name}}</option>
                                            @empty
                                            @endforelse
                                        @endif
                                    @empty
                                    @endforelse
                                </select>
                            </div>
                            <div class="form-group col-md-7">
                                <label for="exampleInputTitle" class="h6">Title</label>
                                <input type="text" value="{{$singleData->title}}" class="form-control" id="title"  name="title" placeholder="Page Title">
                            </div>
                            <div class="form-group col-md-9">
                                <label for="exampleInputDetails" class="h6">Details</label>
                                <textarea name="details" id="editable" class="form-control" rows="11">{{$singleData->details}}</textarea>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="exampleInputTitle" class="h6">Page Serial</label>
                                <input type="number" class="form-control" value="{{$singleData->sorts}}" id="sorts"  name="sorts" placeholder="Page Serial">
                            </div>
                            <div class="form-group col-md-7">
                                <label for="exampleInputTitle" class="h6">Page Link</label>
                                <input type="text" value="{{$singleData->links}}" class="form-control" id="links"  name="links" placeholder="Page Link">
                            </div>
                            <button class="btn btn-primary btn-lg ml-3" type="submit">Update</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
