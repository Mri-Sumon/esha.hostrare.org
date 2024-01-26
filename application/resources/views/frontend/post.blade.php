@extends('layouts.FrontendLayout')

@section('content')
<div id="home" class="slider-area" style="margin-top:10px; margin-bottom:50px;">
    <div class="container ">
        <div class="row">
          <div class="col-12 col-lg-12">
            <h3 class="text-center">{{$postContent->title}}</h3>
            <img src="{{URL::to('/')}}/application/storage/app/posts/{{$postContent->picture}}" alt="{{$postContent->title}}" style="width:100%;">
            {!!$postContent->details!!}
          </div>
          
        </div>
    </div>
</div> 
@endsection
