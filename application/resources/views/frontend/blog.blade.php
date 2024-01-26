@extends('layouts.FrontendLayout')

@section('content')
<div id="home" class="slider-area" style="margin-top:10px; margin-bottom:50px;">
    <div class="container ">
        <div class="row">
          <div class="col-12 col-lg-12">
            <h3 class="text-left">@settings(name) Articles</h3>
            <div class="row">
              <div class="col-12 col-lg-9">
                @foreach($blogposts as $blogpost)
                <a href="{{URL::to('/')}}/blog/{{$blogpost->slug}}">
                  <div class="row bg-light mb-3 p-3">
                    <div class="col-12 col-lg-3">
                      <img src="{{URL::to('/')}}/application/storage/app/posts/{{$blogpost->picture}}" alt="{{$blogpost->title}}" class="image-responsive img-fluid">
                    </div>
                    <div class="col-12 col-lg-9">
                      <h3>{{$blogpost->title}}</h3>
                      <p>{{$blogpost->subtitle}}</p>
                    </div>
                  </div>
                </a>
                @endforeach
                {{$blogposts->links()}}
              </div>
              <div class="col-12 col-lg-3">
                <h5>Categories</h5>
                <?php $cats=\DB::table('cats')->where('status','active')->get();?>
                <ul>
                  @foreach($cats as $cat)
                  <a href="{{URL::to('/')}}/blogcat/{{$cat->id}}"><li>{{$cat->name}}</li></a>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
          
        </div>
    </div>
</div> 
@endsection
