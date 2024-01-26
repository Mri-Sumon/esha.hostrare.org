@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Themes
                    <a href="{{URL::to('/')}}/themes/create" class="btn btn-primary float-right"><i class="fa fa-upload"></i> Upload New Theme </a>
                </div>

                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            @foreach($data as $item)
                            <div class="col-12 col-lg-4">
                                <div class="card">
                                    <h5 class="card-header">{{$item->name}}</h5>
                                    <img src="{{URL::to('/')}}/application/storage/app/themes/{{$item->thumbs}}" class="card-img-top" alt="{{$item->name}}">
                                    <div class="card-body">
                                        <p class="card-text">{{$item->details}}</p>
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                @if($item->isdefault=='active')
                                                <span class="badge badge-success text-capitalize">{{$item->isdefault}}</span>
                                                @else
                                                <a href="{{URL::to('/')}}/theme_activate/{{$item->id}}" style="cursor: pointer;">
                                                <span class="badge badge-warning text-capitalize">Activate Now!</span>
                                                </a>
                                                @endif
                                            </div>
                                            @if($item->isdefault!='active')
                                            <div class="col-12 col-md-6">
                                                <form action="{{ route('themes.destroy', $item->id) }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn btn-danger btn-sm text-white" onclick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash"></i> Delete</button>
                                                </form>
                                            </div>
                                            @else
                                            <div class="col-12 col-md-6">
                                                <a href="{{URL::to('/')}}/theme_inactivate/{{$item->id}}" style="cursor: pointer;">
                                                    <span class="badge badge-warning text-capitalize">Inactive Now!</span>
                                                </a>
                                            </div>
                                            @endif
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    
                        {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
