@extends('layouts.FrontendBttexLayout')
@section('script')
<meta property="og:url"  content="{{URL::to('/')}}/details/{{$product_details->id}}" />
<meta property="og:type"     content="website" />
<meta property="og:title"    content="{{$product_details->name}}" />
<meta property="og:description"   content="" />
<meta property="og:image"     content="{{URL::to('/')}}/application/storage/app/product/{{$product_details->f_pic}}" />

<! BOOTSTRAP CSS AND JAVASCRIPT LINK---->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<style>
    .card-information{
        margin-top:25px!important;
    }
.nav2 ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 245px;
    background-color: #fff;
    /* position: fixed; */
    z-index: 2!important;
    

}
.nav2 ul li {min-width: 200px; font-size:14px;}
.nav2 ul li a {display: block; color: #000; text-decoration: none; padding: 10px 0 10px 10px; font-size:12px;}
.nav2 ul li:hover > a {color: red; background-color: #fff; }

.nav2 .dropdown-content {
	min-width: 150px;
    display: none;
	left: 245px;
    float:left;
    position: absolute;
	font-size:14px;
	margin-top: -48px;
	box-shadow: 0 3px 18px 2px rgb(0 0 0 / 20%);
	border-radius:10px!important;
	padding-top:10px;
	padding-bottom:10px;
}
.nav2 .dropdown-content a {
    background-color: #fff;
    color: black;
    text-decoration: none;
    display: block;
    text-align: left;
	padding: 10px 0 10px 10px;
	text-transform:uppercase!important
}
.nav2 .dropdown:hover > .dropdown-content {
    display: inline-block;
}
@media only screen and (max-width: 426px) {
    .nav2 .block-categories-slider{
        display:none!important;
    }
}
.mtabs .nav-item.show .nav-link, .nav-tabs .nav-link.active
    background-color: red!important;
    color: white!important;
}

</style>

@section('content')
<?php $settings=App\Settings::where('id',1)->first();?>
<div style="background-color: E7EDEC; margin-left: 5%; margin-right: 5%; padding: 10px;">
    <a href="{{URL::to('/')}}">Home</a> / <a href="{{URL::to('/')}}/shop">Products</a> / {{$product_details->name}}
</div>
<div class="row" style="margin-top:5px; margin-left: 5%; margin-right: 5%;">
    <div class="col-12 col-lg-2 col-md-2 card" style="background-color: E7EDEC;">
        <h3 style="font-family: oswald;">Product Categories</h1>
        <?php $cats=\DB::table('cats')->where('parent','0')->get();?>
                        <nav class="nav2">
                            <ul>
                                @foreach($cats as $cat)
                                <?php $subcats=\DB::table('cats')->where('parent',$cat->id)->get();?>
                            	<li @if(count($subcats)>0) class="dropdown" @endif> 
                            	<a href="{{URL::to('/')}}/shop/cat/{{$cat->id}}" style=" text-transform:uppercase!important;"> 
                            	<table border="0">
                            	    <tr>
                            	        <td>@if($cat->faicon!='')<i class="fa {{$cat->faicon}}" aria-hidden="true" style="font-size:20px;"></i>@endif  </td>
                            	        <td style="font-size: 14px; padding-left: 8px;">{{$cat->name}} </td>
                            	        <td>
                            	            @if(count($subcats)>0)
                                        	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false" role="presentation" style="color:#000!important;" class="icon icon-caret"><path d="M 7.75 1.34375 L 6.25 2.65625 L 14.65625 12 L 6.25 21.34375 L 7.75 22.65625 L 16.75 12.65625 L 17.34375 12 L 16.75 11.34375 Z"></path></svg>
                                        	@endif
                            	        </td>
                            	    </tr>
                            	</table>
                            	
                            	
                            	
                            	</a>
                            	    @if(count($subcats)>0)
                            		<ul class="">
                            		    @foreach($subcats as $subcat)
                            			<li class="dropdown"><a href="{{URL::to('/')}}/shop/cat/{{$subcat->id}}" style="font-size:16px!important; padding-left: 40px!important;">- {{$subcat->name}}</a>
                            				<!--<ul class="dropdown-content">-->
                            				<!--	<li class="dropdown"><a href="">Menu item 111</a>-->
                            				<!--		<ul class="dropdown-content">-->
                            				<!--			<li class="dropdown"><a href="">Menu item 1111</a>-->
                            				<!--				<ul class="dropdown-content">-->
                            				<!--					<li class="dropdown"><a href="">Menu item 11111</a>-->
                            				<!--					</li>-->
                            				<!--					<li>-->
                            				<!--						<a href="">Menu item 11112</a>-->
                            				<!--					</li>-->
                            				<!--					<li>-->
                            				<!--						<a href="">Menu item 11113</a>-->
                            				<!--					</li>-->
                            				<!--					<li>-->
                            				<!--						<a href="">Menu item 11114</a>-->
                            				<!--					</li>-->
                            				<!--				</ul>-->
                            				<!--			</li>-->
                            				<!--			<li class="dropdown"><a href="">Menu item 1112</a>-->
                                <!--            <ul class="dropdown-content">-->
                                <!--              <li class="dropdown"><a href="">Menu item 11121</a>-->
                                <!--              </li>-->
                                <!--              <li>-->
                                <!--                <a href="">Menu item 11122</a>-->
                                <!--              </li>-->
                                <!--              <li>-->
                                <!--                <a href="">Menu item 11123</a>-->
                                <!--              </li>-->
                                <!--              <li>-->
                                <!--                <a href="">Menu item 11124</a>-->
                                <!--              </li>-->
                                <!--            </ul>                -->
                            				<!--			</li>-->
                            				<!--		</ul>-->
                            				<!--	</li>-->
                            				<!--	<li>-->
                            				<!--		<a href="">Menu item 112</a>-->
                            				<!--	</li>-->
                            				<!--	<li>-->
                            				<!--		<a href="">Menu item 113</a>-->
                            				<!--	</li>-->
                            				<!--</ul>-->
                            			</li>
                            			@endforeach
                            		</ul>
                            		@endif
                            	</li>
                            	@endforeach
                              
                            </ul>
                            </nav>
    </div>
    <div class="col-12 col-lg-10 col-md-10 mb-5" style="margin-padding: 15px !important;">
        <div class="row">
            <div class="col-12 col-lg-6 col-md-6">
                <?php $ppics=explode(',',$product_details->pics);?>
                <div class="slider-for row p-3" style="height: 578px !important;">
                    <img src="{{URL::to('/')}}/application/storage/app/product/{{$product_details->f_pic}}" style="height: 570px; margin: 0 auto;">
                    @foreach($ppics as $ppic)
                    @if($ppic!='')
                    <img src="{{URL::to('/')}}/application/storage/app/product/{{$ppic}}" style="height: 650px !important; margin: 0 auto;">
                    @endif
                    @endforeach
                </div>
                <div class="slider-nav row p-2" style="height: 150px !important;">
                    <img src="{{URL::to('/')}}/application/storage/app/product/{{$product_details->f_pic}}" style="height: 150px; padding:10px;">
                    @foreach($ppics as $ppic)
                    @if($ppic!='')
                    <img src="{{URL::to('/')}}/application/storage/app/product/{{$ppic}}" style="height: 150px; padding:10px;">
                    @endif
                    @endforeach
                </div>
                <br>
            </div>
            <div class="col-12 col-lg-6 col-md-6 p-3">
                <h2 style="font-family: oswald;" class="mb-3">{{$product_details->name}}</h2>
                <span style="font-family: oswald;" class="mt-5">{!!$product_details->brief!!}</span><br>
                <!--<hr>-->
                <form action="{{URL::to('/')}}/addtocart/{{$product_details->id}}" method="post">
                    @csrf
                    <input type="hidden" value="{{$product_details->id}}" name="product_id">
                    <input type="hidden" value="{{$product_details->price}}" name="product_price">
                    <input type="number" id="quantity" name="quantity" min="1" value="1" style="width:80px; height: 33px; float:left; border-radius: 25px; padding-left: 25px; padding-right: 10px; background-color: red; color:white; border-style:none;"> &nbsp
                    <button type="submit" class="btn btn-info btn-lg" style="border-radius: 25px; color: white;">Add to quotation</button><br>
                </form>
                <a href="tel:{{$settings->mobile}}">
                <div style="border-radius: 25px; background-color: #2B547E; color: white; padding: 5px; margin:15px;">
                    <center>
                        Call Now <br>
                        <span style="font-size:25px;">{{$settings->mobile}}</span>
                    </center>
                </div>
                </a>
                <br>
                <p style="font-family: oswald; font-size:15px;">SKU: <span class="text-primary">{{$product_details->product_code}}</span></p>
                <?php $cat_ids=explode(',', $product_details->cat_ids);?>
                <p style="font-family: oswald; font-size:15px;">Category: 
                @foreach($cat_ids as $cat_id)
                <a href="{{URL::to('/')}}/shop/cat/{{$cat_id}}" class="text-primary">{{\DB::table('cats')->where('id',$cat_id)->value('name')}}</a>
                @endforeach
                </p>
                <?php $tags=explode(',', $product_details->tags);?>
                <p style="font-family: oswald; font-size:15px;">Tags:
                @foreach($tags as $tag)
                <a href="#" class="text-primary">{{$tag}}</a>
                @endforeach
                </p>
            </div>
            <div class="col-12 col-lg-12 col-md-12 mt-3">
                <ul class="nav nav-tabs mtabs" id="myTab" role="tablist">
                  <li class="nav-item" role="presentation" style="font-size: 22px;">
                    <button class="nav-link active button1" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true" style="background-color: white; color: red; button1:hover{background-color: red; color: white;} !important;">Description</button>
                  </li>
                  <li class="nav-item" role="presentation"  style="font-size: 22px;">
                    <button class="nav-link button2" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false" style="background-color: white; color: red;">Brand</button>
                  </li>
                  <li class="nav-item" role="presentation"  style="font-size: 22px;">
                    <button class="nav-link button3" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false" style="background-color: white; color: red;">Review</button>
                  </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active p-3" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <br>
                        <p style="font-family: oswald;"></p>{!!$product_details->description!!}</p>
                    </div>
                    <div class="tab-pane fade p-3" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <br>
                        <br>
                        <p style="font-family: oswald;">{!!$product_details->brand_details!!}</p>
                        <br>
                    </div>
                    <div class="tab-pane fade p-3" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <br>
                        <br>
                        <div class="fb-comments" data-href="https://bttexweb.hostrare.org/" data-width="100%" data-numposts="20"></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-12 col-md-12 p-3">
                <h2 style="font-family: oswald;">Related Products:{{$cat_ids[0]}}</h2>
                <?php $rps=\App\Product::whereRaw("find_in_set($cat_ids[0],cat_ids)")->where('id','!=',$product_details->id)->latest()->limit(12)->get();?>
                <div class="relatedproduct row">
                    @foreach($rps as $rp)
                    <div class="col-2 card">
                        <img src="{{URL::to('/')}}/application/storage/app/product/{{$rp->f_pic}}">
                        <a href="{{URL::to('/')}}/shop/cat/{{$rp->id}}" class="text-center">{{$rp->name}}</a>
                    </div>
                    @endforeach
                </div>
            </div>
            
            </div>
        </div>
    
</div>
@endsection