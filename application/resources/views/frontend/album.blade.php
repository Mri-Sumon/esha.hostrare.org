@extends('layouts.Home0Layout')

@section('content')
<div id="home" class="slider-area" style="margin-top:120px; margin-bottom:50px;">
    <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
                @if(\Request::segment(3)=='still_structure')
              <h2>Still Structures</h2>
              @elseif(\Request::segment(3)=='kasimpur')
              <h2>Kasimpur</h2>
              @elseif(\Request::segment(3)=='iftar')
              <h2>Ifftar Party</h2>
              @elseif(\Request::segment(3)=='banglo')
              <h2>Banglo</h2>
              @elseif(\Request::segment(3)=='kara_convention')
              <h2>Kara Convention</h2>
              @elseif(\Request::segment(3)=='product')
              <h2>Equipments</h2>
              @else
              
              @endif
            </div>
          </div>
          <div class="col-md-12 col-sm-12 col-xs-12 text-left">
              @foreach($pics as $pic)
              <div class="col-xs-12 col-sm-6 col-md-4 text-center">
                  <a class="gal" href="{{URL::to('/')}}/application/storage/app/{{$pic->source}}"><img data-gallery="{{$pic->name}}" src="{{URL::to('/')}}/application/storage/app/{{$pic->source}}" style="width:100%; height:260px;"></a>
              <h6 style="text-transform:capitalize; display:none;">{{$pic->name}}</h6></div>
              @endforeach
          </div>
        </div>
    </div>
</div>
 
        </div>
      </div>
    </div>
  </div>
  <!-- End Contact Area -->

@endsection
