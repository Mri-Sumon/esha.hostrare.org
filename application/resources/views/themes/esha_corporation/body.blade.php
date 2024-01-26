    <!-- Carousel Start -->
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          
         <div class="carousel-inner">
            <style>
                @media only screen and (max-width: 426px) {
                    .mainslider{
                        height: 220px;
                    }
                }
            </style>
            <?php $sliders=DB::table('medias')->where('link_id','slider')->orderBy('id','desc')->limit(3)->latest()->get();?>
            @if($sliders)
                @foreach($sliders as $key=>$slider)
                    @if ($key == 0)
                        <div class="carousel-item active mainslider" data-bs-interval="10000">
                          <img src="{{URL::to('/')}}/application/storage/app/{{$slider->source}}" class="d-block w-100" alt="..." alt="" width="100%">
                          <div class="carousel-caption d-none d-md-block">
                            <!--<h5>{{$slider->name}}</h5>-->
                            <!--<p>{{$slider->sec_title}}</p>-->
                          </div>
                        </div>
                    @elseif($key == 1)
                        <div class="carousel-item mainslider" data-bs-interval="2000">
                            <img src="{{URL::to('/')}}/application/storage/app/{{$slider->source}}" class="d-block w-100" alt="..." alt="" width="100%">
                            <div class="carousel-caption d-none d-md-block">
                                <!--<h5>{{$slider->name}}</h5>-->
                                <!--<p>{{$slider->sec_title}}</p>-->
                            </div>
                        </div>}
                    @else
                        <div class="carousel-item mainslider">
                          <img src="{{URL::to('/')}}/application/storage/app/{{$slider->source}}" class="d-block w-100" alt="..." alt="" width="100%">
                          <div class="carousel-caption d-none d-md-block">
                            <!--<h5>{{$slider->name}}</h5>-->
                            <!--<p>{{$slider->sec_title}}</p>-->
                          </div>
                        </div>
                    @endif
                @endforeach
            @endif
        </div>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
        </div>
    <!-- Carousel End -->

    <!--Facts Start -->
    <!--<div class="container-xxl py-5">-->
    <!--    <div class="container">-->
    <!--        <div class="row g-4">-->
    <!--            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">-->
    <!--                <div class="fact-item bg-light rounded text-center h-100 p-5">-->
    <!--                    <i class="fa fa-certificate fa-4x text-primary mb-4"></i>-->
    <!--                    <h5 class="mb-3">Years Experience</h5>-->
    <!--                    <h1 class="display-5 mb-0" data-toggle="counter-up">1234</h1>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">-->
    <!--                <div class="fact-item bg-light rounded text-center h-100 p-5">-->
    <!--                    <i class="fa fa-users-cog fa-4x text-primary mb-4"></i>-->
    <!--                    <h5 class="mb-3">Team Members</h5>-->
    <!--                    <h1 class="display-5 mb-0" data-toggle="counter-up">1234</h1>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">-->
    <!--                <div class="fact-item bg-light rounded text-center h-100 p-5">-->
    <!--                    <i class="fa fa-users fa-4x text-primary mb-4"></i>-->
    <!--                    <h5 class="mb-3">Satisfied Clients</h5>-->
    <!--                    <h1 class="display-5 mb-0" data-toggle="counter-up">1234</h1>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">-->
    <!--                <div class="fact-item bg-light rounded text-center h-100 p-5">-->
    <!--                    <i class="fa fa-check fa-4x text-primary mb-4"></i>-->
    <!--                    <h5 class="mb-3">Projects Done</h5>-->
    <!--                    <h1 class="display-5 mb-0" data-toggle="counter-up">1234</h1>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
     <!--Facts End -->


    <!-- About Start -->
    <!--<div class="container-xxl py-5">-->
    <!--    <div class="container">-->
    <!--        <div class="row g-5">-->
    <!--            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">-->
    <!--                <div class="@themedir()/@theme()/img-border">-->
    <!--                    <img class="@themedir()/@theme()/img-fluid" src="@themedir()/@theme()/img/about.jpg" alt="">-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">-->
    <!--                <div class="h-100">-->
    <!--                    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>-->
    <!--                    <h1 class="display-6 mb-4">#1 Digital Solution With <span class="text-primary">10 Years</span> Of Experience</h1>-->
    <!--                    <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>-->
    <!--                    <p class="mb-4">Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No stet est diam rebum amet diam ipsum. Clita clita labore, dolor duo nonumy clita sit at, sed sit sanctus dolor eos.</p>-->
    <!--                    <div class="d-flex align-items-center mb-4 pb-2">-->
    <!--                        <img class="flex-shrink-0 rounded-circle" src="@themedir()/@theme()/img/team-1.jpg" alt="" style="width: 50px; height: 50px;">-->
    <!--                        <div class="ps-4">-->
    <!--                            <h6>Jhon Doe</h6>-->
    <!--                            <small>SEO & Founder</small>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <a class="btn btn-primary rounded-pill py-3 px-5" href="">Read More</a>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- About End -->


    <!-- Our Products Start -->
    <!--<div class="container-xxl py-5">-->
    <!--<div class="container-fluid py-5">-->
    <!--    <div class="container-fluid" style="margin-top: 3rem;">-->
    <!--        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">-->
    <!--            <h3 class="section-title bg-white text-center text-primary px-3">OUR PRODUCTS</h3>-->
                <!--<h1 class="display-6 mb-4">We Focuse On Making The Best In All Sectors</h1>-->
    <!--        </div>-->
            
    <!--        <style>-->
    <!--            .categoryCard {-->
    <!--              box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);-->
    <!--            }-->
                
    <!--            .categoryDiv {-->
    <!--              position: relative;-->
    <!--              text-align: center;-->
    <!--              color: white;-->
    <!--            }-->
    
    <!--            .top-right {-->
    <!--              position: absolute;-->
    <!--              top: 50px;-->
    <!--              right: 50px;-->
    <!--            }-->
                
    <!--        </style>.-->
            
    <!--        <style>-->
    <!--            @media only screen and (max-width: 1025px) {-->
    <!--                .categoryName{-->
    <!--                    font-size: 10px;-->
    <!--                }-->
    <!--            }-->
    <!--        </style>-->
            
    <!--        <?php $cats=\DB::table('cats')->where('parent','0')->orderBy('id','desc')->limit(6)->latest()->get();?>-->
    <!--        <div class="row g-4">-->
    <!--            @foreach($cats as $cat)-->
    <!--                <div class="col-12 col-lg-6 col-md-6 wow fadeInUp categoryDiv" data-wow-delay="0.1s">-->
    <!--                    <a class="service-item d-block rounded text-center h-100 p-4 categoryCard" href="{{URL::to('/')}}/productSubCategory/{{$cat->id}}" style="background-color: #EDEDED;">-->
    <!--                        <img class="@themedir()/@theme()/img-fluid rounded mb-4 mt-2" src="{{URL::to('/')}}/application/storage/app/product/{{$cat->image}}" alt="" width='100%' height="100%">-->
                            <!--<h6 class="mb-0">{{$cat->name}}</h6>-->
                            <!--<div class="top-right"><h5 class="categoryName">Provided by Esha Corporation</h5></div>-->
    <!--                    </a>-->
    <!--                </div>-->
    <!--            @endforeach-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- Our Products End -->
    
    
    <!--See more buttons-->
    <style>
        #more {display: none;}
    </style>
    
    <div class="container-fluid">
        <div class="container-fluid">
            <center>
                <div>
                    <div class="text-center mx-auto my-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                        <h3 class="section-title bg-white text-center text-primary px-3">OUR PRODUCTS</h3>
                    </div>
                    <style>
                        .categoryCard{
                            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                        }
                    </style>
                    
                    <?php $cats=\DB::table('cats')->where('parent','0')->orderBy('id','asc')->limit(6)->latest()->get();?>
                    <div class="row g-4 mb-3">
                        @foreach($cats as $cat)
                            <div class="col-12 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <a class="service-item d-block rounded text-center h-100 p-4 categoryCard" href="{{URL::to('/')}}/productSubCategory/{{$cat->id}}" style="background-color: #EDEDED; padding: 0px !important;">
                                    <img class="@themedir()/@theme()/img-fluid rounded mb-4" src="{{URL::to('/')}}/application/storage/app/product/{{$cat->image}}" alt="" width='100%' height="100%">
                                    <!--<h6 class="mb-0">{{$cat->name}}</h6>-->
                                    <!--<div class="top-right"><h5 class="categoryName">Provided by Esha Corporation</h5></div>-->
                                </a>
                            </div>
                        @endforeach
                    </div>

                    <span id="dots">..............</span>
                    <span id="more" style="padding-top: 15px;">
                        <?php $categories=\DB::table('cats')->where('parent','0')->orderBy('id','desc')->latest()->get();?>
                        <div class="row g-4" style="padding-top: 10px !important;">
                            @foreach($categories as $key=>$cat)
                                @php 
                                    $arrLength = count($categories);
                                @endphp 
                                @if($key > 5)
                                    <!--@php echo $key; echo $arrLength; @endphp-->
                                    <div class="col-12 col-lg-6 col-md-6 wow fadeInUp @if($key >= $arrLength-2) mb-3 @endif" data-wow-delay="0.1s">
                                        <a class="service-item d-block rounded text-center h-100 p-4 categoryCard" href="{{URL::to('/')}}/productSubCategory/{{$cat->id}}" style="background-color: #EDEDED; padding: 0px !important;">
                                            <img class="@themedir()/@theme()/img-fluid rounded mb-4" src="{{URL::to('/')}}/application/storage/app/product/{{$cat->image}}" alt="" width='100%' height="100%">
                                            <!--<h6 class="mb-0">{{$cat->name}}</h6>-->
                                            <!--<div class="top-right"><h5 class="categoryName">Provided by Esha Corporation</h5></div>-->
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                            <span>.........</span>
                        </div>
                    </span>
                </div>
                <a class="my-5" onclick="myFunction()" id="myBtn" style="cursor: pointer;">See more</a>
            </center>
        </div>
    </div>
    <!--See more buttons-->


    <!--Feature Start -->
    <!--<div class="container-xxl py-5">-->
    <!--    <div class="container">-->
    <!--        <div class="row g-5">-->
    <!--            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">-->
    <!--                <div class="h-100">-->
    <!--                    <h6 class="section-title bg-white text-start text-primary pe-3">Why Choose Us</h6>-->
    <!--                    <h1 class="display-6 mb-4">Why People Trust Us? Learn About Us!</h1>-->
    <!--                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>-->
    <!--                    <div class="row g-4">-->
    <!--                        <div class="col-12">-->
    <!--                            <div class="skill">-->
    <!--                                <div class="d-flex justify-content-between">-->
    <!--                                    <p class="mb-2">Digital Marketing</p>-->
    <!--                                    <p class="mb-2">85%</p>-->
    <!--                                </div>-->
    <!--                                <div class="progress">-->
    <!--                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="col-12">-->
    <!--                            <div class="skill">-->
    <!--                                <div class="d-flex justify-content-between">-->
    <!--                                    <p class="mb-2">SEO & Backlinks</p>-->
    <!--                                    <p class="mb-2">90%</p>-->
    <!--                                </div>-->
    <!--                                <div class="progress">-->
    <!--                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="col-12">-->
    <!--                            <div class="skill">-->
    <!--                                <div class="d-flex justify-content-between">-->
    <!--                                    <p class="mb-2">Design & Development</p>-->
    <!--                                    <p class="mb-2">95%</p>-->
    <!--                                </div>-->
    <!--                                <div class="progress">-->
    <!--                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">-->
    <!--                <div class="@themedir()/@theme()/img-border">-->
    <!--                    <img class="@themedir()/@theme()/img-fluid" src="@themedir()/@theme()/img/feature.jpg" alt="">-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!--Feature End -->
     
     
    <!-- Our Videos Start -->
    <div class="container-fluid mt-5">
        <div class="container-fluid">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h3 class="section-title bg-white text-center text-primary px-3">OUR VIDEOS</h3>
            </div>
            <div class="owl-carousel owl-theme" style="margin-bottom: 3rem; margin-top: 3rem;">
                <?php $videos=DB::table('posts')->where('section','video')->orderBy('id','desc')->limit(12)->latest()->get();?>
                @if($videos)
                    @foreach($videos as $video)
                        <div class="item card" style="height: 300px !important;">
                            <object data='{{$video->links}}' style="width: 100%; height: 100%;"></object>
                            <div style="height: 100px;">
                                <h6 style="text-align: center; margin-top: 10px;">{{$video->title}}</h6>
                            </div>
                        </div>
                        <!--<div class="item"><img src="https://www.w3schools.com/css/img_fjords.jpg" alt=""></div>-->
                        <!--<div class="item"><img src="https://www.w3schools.com/css/img_fjords.jpg" alt=""></div>-->
                        <!--<div class="item"><img src="https://www.w3schools.com/css/img_fjords.jpg" alt=""></div>-->
                        <!--<div class="item"><img src="https://www.w3schools.com/css/img_fjords.jpg" alt=""></div>-->
                        <!--<div class="item"><img src="https://www.w3schools.com/css/img_fjords.jpg" alt=""></div>-->
                        <!--<div class="item"><img src="https://www.w3schools.com/css/img_fjords.jpg" alt=""></div>-->
                        <!--<div class="item"><img src="https://www.w3schools.com/css/img_fjords.jpg" alt=""></div>-->
                        <!--<div class="item"><img src="https://www.w3schools.com/css/img_fjords.jpg" alt=""></div>-->
                        <!--<div class="item"><img src="https://www.w3schools.com/css/img_fjords.jpg" alt=""></div>-->
                        <!--<div class="item"><img src="https://www.w3schools.com/css/img_fjords.jpg" alt=""></div>-->
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    <!-- Our Videos End -->
    

    <!--our client start-->
    <style>
        .slick-initialized{
            margin: 10px !important;
        }
    </style>
    <?php $clients=DB::table('medias')->where('link_id','client')->orderBy('id','desc')->latest()->get();?>
    @if($clients)
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h3 class="section-title bg-white text-center text-primary px-3">OUR CLIENTS</h3>
        </div>
        <div class="container-fluid py-5" style="background-color: #555555; margin-bottom: 3rem; margin-top: 3rem;">
            <div class="container-fluid">
                <div class="row client">
                    @foreach($clients as $client)
                        <img src="{{URL::to('/')}}/application/storage/app/{{$client->source}}" alt="" width="200" height="100" style="border: 3px solid white; margin-top: 10px;">
                    @endforeach
                </div>

            </div>
        </div>
    @endif
    <!--our clients end-->
  