<?php $settings=App\Settings::where('id',1)->first();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@settings(name)</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="@baseurl()/application/storage/app/settings/{{$settings->icon}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="@themedir()/@theme()/lib/animate/animate.min.css" rel="stylesheet">
    <link href="@themedir()/@theme()/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="@themedir()/@theme()/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="@themedir()/@theme()/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="@themedir()/@theme()/css/style.css" rel="stylesheet">
    
    <!--fontawesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!--client slider-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!--video slider-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css">
</head>

<body style="background-color: FFFFFF;">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border position-relative text-primary" style="width: 6rem; height: 6rem;" role="status"></div>
        <i class="fa fa-laptop-code fa-2x text-primary position-absolute top-50 start-50 translate-middle"></i>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <!--<div class="container-fluid bg-light px-0 wow fadeIn" data-wow-delay="0.1s">-->
    <!--    <div class="row gx-0 align-items-center d-none d-lg-flex">-->
    <!--        <div class="col-lg-6 px-5 text-start">-->
    <!--            <ol class="breadcrumb mb-0">-->
    <!--                <li class="breadcrumb-item"><a class="small text-secondary" href="#">Home</a></li>-->
    <!--                <li class="breadcrumb-item"><a class="small text-secondary" href="#">Career</a></li>-->
    <!--                <li class="breadcrumb-item"><a class="small text-secondary" href="#">Terms</a></li>-->
    <!--                <li class="breadcrumb-item"><a class="small text-secondary" href="#">Privacy</a></li>-->
    <!--            </ol>-->
    <!--        </div>-->
    <!--        <div class="col-lg-6 px-5 text-end">-->
    <!--            <small>Follow us:</small>-->
    <!--            <div class="h-100 d-inline-flex align-items-center">-->
    <!--                <a class="btn-square text-primary border-end rounded-0" href=""><i class="fab fa-facebook-f"></i></a>-->
    <!--                <a class="btn-square text-primary border-end rounded-0" href=""><i class="fab fa-twitter"></i></a>-->
    <!--                <a class="btn-square text-primary border-end rounded-0" href=""><i class="fab fa-linkedin-in"></i></a>-->
    <!--                <a class="btn-square text-primary pe-0" href=""><i class="fab fa-instagram"></i></a>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- Topbar End -->


    <!-- Brand & Contact Start -->
    <style>
        @media only screen and (max-width: 426px) {
            .topbar{
                visibility: hidden;
                height: 0px !important;
                padding: 0px !important;
                margin: 0px !important
            }
        }
    </style>
    <?php $settings=App\Settings::where('id',1)->first();?>
    
    <div class="container-fluid py-4 px-5 wow fadeIn topbar" data-wow-delay="0.1s">
        <div class="row align-items-center top-bar">
            <div class="col-lg-12 col-md-12 text-center text-lg-start">
                <div class="row">
                    <div class="col-12 col-md-2"></div>
                    <div class="col-12 col-md-8">
                        <a href="@baseurl()" class="navbar-brand m-0 p-0">
                            <!--<h1 class="fw-bold text-primary m-0"><i class="fa fa-laptop-code me-3"></i>DGcom</h1>-->
                             <center><img src="{{URL::to('/')}}/application/storage/app/settings/{{$settings->logo}}" alt="Logo" width="180" height="60"></center>
                        </a>
                    </div>
                    <div class="col-12 col-md-2">
                        <p>
                          <button type="button" class="btn btn-default btn-sm">
                            <i class="fa-solid fa-mobile-retro"></i> &nbsp @settings(mobile) 
                          </button>
                        </p>
                    </div>
                </div>
            </div>
            <!--<div class="col-lg-8 col-md-7 d-none d-lg-block">-->
            <!--    <div class="row">-->
            <!--        <div class="col-4">-->
            <!--            <div class="d-flex align-items-center justify-content-end">-->
            <!--                <div class="flex-shrink-0 btn-lg-square border rounded-circle">-->
            <!--                    <i class="far fa-clock text-primary"></i>-->
            <!--                </div>-->
            <!--                <div class="ps-3">-->
            <!--                    <p class="mb-2">Opening Hour</p>-->
            <!--                    <h6 class="mb-0">Mon - Fri, 8:00 - 9:00</h6>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--        <div class="col-4">-->
            <!--            <div class="d-flex align-items-center justify-content-end">-->
            <!--                <div class="flex-shrink-0 btn-lg-square border rounded-circle">-->
            <!--                    <i class="fa fa-phone text-primary"></i>-->
            <!--                </div>-->
            <!--                <div class="ps-3">-->
            <!--                    <p class="mb-2">Call Us</p>-->
            <!--                    <h6 class="mb-0">+012 345 6789</h6>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--        <div class="col-4">-->
            <!--            <div class="d-flex align-items-center justify-content-end">-->
            <!--                <div class="flex-shrink-0 btn-lg-square border rounded-circle">-->
            <!--                    <i class="far fa-envelope text-primary"></i>-->
            <!--                </div>-->
            <!--                <div class="ps-3">-->
            <!--                    <p class="mb-2">Email Us</p>-->
            <!--                    <h6 class="mb-0">info@example.com</h6>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
        </div>
    </div>
    <!-- Brand & Contact End -->




    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top py-lg-0 px-lg-5 wow fadeIn bg-light" data-wow-delay="0.1s" style="margin-bottom: 5px;">
        <a href="#" class="navbar-brand ms-3 d-lg-none" style="color: black;"><img src="{{URL::to('/')}}/application/storage/app/settings/{{$settings->logo}}" alt="Logo" width="80" height="40"></a>
        <button type="button" class="navbar-toggler me-3" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" style="color: black;">
            <span class="navbar-toggler-icon bg-dark"></span>
        </button>
        
        
        
        
        
        <?php $parentpages=\DB::table('pages')->where('parent_page',0)->where('status',1)->orderBy('sorts','asc')->get();?>
        <?php $cats=\DB::table('cats')->where('parent','0')->get();?>
        
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav me-auto p-3 p-lg-0">
                <div class="nav-item">
                	<a href="@baseurl()" class="nav-link" style="color:black">Home</a>
                </div>
                
                
                
                <!--Category start here-->
                @if(count($cats)>0)
                <div class="nav-item dropdown">
                	<a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" style="color:black">Product</a>
                	<div class="dropdown-menu border-0 rounded-0 rounded-bottom m-0" style="background-color: #F8F8F8;">
                	    @foreach($cats as $cat)
                		    <a href="{{URL::to('/')}}/productSubCategory/{{$cat->id}}" class="dropdown-item">{{$cat->name}}</a>
                		@endforeach
                		<!--<a href="testimonial.html" class="dropdown-item">Testimonial</a>-->
                		<!--<a href="404.html" class="dropdown-item">404 Page</a>-->
                	</div>
                </div>
                @endif
                <!--Category end here-->
                
                
                
                
                
                <!--page start here-->
                @foreach($parentpages as $parentpage)
                    <?php $subpages=\DB::table('pages')->where('parent_page',$parentpage->id)->where('status',1)->orderBy('sorts','asc')->get();?>
                    @if(count($subpages)>0)
                    <div class="nav-item dropdown">
                    @endif
                        <a 
                            @if($parentpage->links!='')
                                href="{{$parentpage->links}}"
                            @else
                                href="@baseurl()/page/{{$parentpage->slug}}"
                            @endif
                            
                            @if(count($subpages)>0)
                                class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                            @else
                                class="nav-item nav-link"
                            @endif
                            style="color:black"
                        >
                            {{$parentpage->name}}
                        </a>
                        
                        @if(count($subpages)>0)
                            <div class="dropdown-menu border-0 rounded-0 rounded-bottom m-0">
                                @foreach($subpages as $subpage)
                                    <a 
                                        @if($subpage->links!='')
                                            href="{{$subpage->links}}"
                                        @else
                                            href="@baseurl()/page/{{$subpage->slug}}"
                                        @endif
                                        class="dropdown-item"
                                        style="color:black"
                                    >
                                        {{$subpage->name}}
                                    </a>
                                    <!--<a href="team.html" class="dropdown-item">Our Team</a>-->
                                    <!--<a href="testimonial.html" class="dropdown-item">Testimonial</a>-->
                                    <!--<a href="404.html" class="dropdown-item">404 Page</a>-->
                                @endforeach
                            </div>
                        @endif
                    @if(count($subpages)>0)
                    </div>
                    @endif
                @endforeach
                <!--page end here-->
                
            </div>
            
            
            
            
            
            
            <form action="{{URL::to('/')}}/searchingresult" class="d-flex" style="padding: 12px;" method="get">
                @csrf
                <input class="form-control me-2" name="keyword" type="search" placeholder="Search" aria-label="Search" required>
                <button type="submit" class="btn btn-outline-success">Search</button>
            </form> &nbsp &nbsp







            @if(Auth::check())
                <div class="dropdown">
                  <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">{{Auth::user()->name}}</a>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="{{URL::to('/')}}/dashboard">Dashboard</a>
                        <a class="dropdown-item" href="{{route('logout')}}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="color: gray; padding-left: 16px !important;">
                            Sign Out
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                    <!--<li><a class="dropdown-item" href="#">Another action</a></li>-->
                    <!--<li><a class="dropdown-item" href="#">Something else here</a></li>-->
                  </ul>
                </div>
            @else
                <a href=" {{URL::to('login')}}" class="btn btn-sm btn-primary rounded-pill py-2 px-4 d-none d-lg-block">Login</a>
            @endif
            
        </div>
    </nav>
    <!-- Navbar End -->
    
    
    
    
    
    
    
    
    


    <!-- product single view Start -->
        <style>
            @media only screen and (max-width: 426px) {
                .singleImage{
                    height: auto;
                }
            }
            
            .singleDiv{
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }
        </style>
        <div class="container-fluid py-5">
            <div class="container-fluid">
                <div class="row g-4 bg-light singleDiv">
                    <div class="col-md-6 col-lg-6 col-12">
                        <div class="my-3 mx-3">
                            <img class="@themedir()/@theme()/img-fluid rounded mb-4 mt-2 singleImage" src="{{URL::to('/')}}/application/storage/app/product/{{$singleShow->image}}" alt="" width='100%' height="auto">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-12 bg-light">
                        <div class="my-3 mx-3" style="margin-top: 10px;">
                            <h3>{{$singleShow->name}}</h3>
                            <p>
                                {!!$singleShow->description!!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- product single view end -->
    













    <!-- Our Products Start -->
    
    
    <!--<div class="container-fluid py-5">-->
    <!--    <div class="container-fluid">-->
    <!--        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">-->
    <!--            <h3 class="section-title bg-white text-center text-primary px-3">ALL PRODUCTS</h3>-->
    <!--        </div>-->
    <!--        <?php $cats=\DB::table('cats')->where('parent','0')->get();?>-->
    <!--        <div class="row g-4">-->
    <!--            @foreach($cats as $cat)-->
    <!--                <div class="col-12 col-lg-3 col-md-3 wow fadeInUp" data-wow-delay="0.1s">-->
    <!--                    <a class="service-item d-block rounded text-center h-100 p-4" href="{{URL::to('/')}}/productSubCategory/{{$cat->id}}">-->
    <!--                        <img class="@themedir()/@theme()/img-fluid rounded mb-4 mt-2" src="{{URL::to('/')}}/application/storage/app/product/{{$cat->image}}" alt="" width='100%' height="auto">-->
    <!--                        <h6 class="mb-0">{{$cat->name}}</h6>-->
    <!--                    </a>-->
    <!--                </div>-->
    <!--            @endforeach-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    
    <style>
        div.subCategory{
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
    </style>
    <div class="container-fluid py-5">
        <div class="container-fluid">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h3 class="section-title bg-white text-center text-primary px-3">ALL CATEGORY</h3>
            </div>
            <?php $cats=\DB::table('cats')->where('parent','0')->get();?>
            <div class="row g-4">
                @foreach ($cats as $cat)
                    <div class="col-12 col-lg-4 col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="subCategory">
                            <a class="service-item d-block rounded text-center h-100 p-4" href="{{URL::to('/')}}/productSubCategory/{{$cat->id}}" style="padding: 0px !important;">
                                <img class="@themedir()/@theme()/img-fluid rounded mb-4 mt-2" src="{{URL::to('/')}}/application/storage/app/product/{{$cat->image}}" alt="" width='100%' height="auto" style="margin: 0px !important; border-radius: 0px !important;">
                                <div class="my-3">
                                    <h6>{{$cat->name}}</h6>
                                    <span>Click to see details</span>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Our Products End -->
















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
  





















<!-- Footer Start -->
    <!--<div class="container-fluid bg-dark text-body footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">-->
    <!--<div class="container-fluid text-body footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">-->
    <hr>
    <div class="container-fluid text-body footer wow fadeIn" data-wow-delay="0.1s" style="padding: 0px !important;">
        <div class="container-fluid py-5" style="padding: 30px !important;">
            <div class="row g-5">
                <!--<div class="col-lg-3 col-md-6">-->
                <!--    <h5 class="text-light mb-4">Address</h5>-->
                    <!--<p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>-->
                    <!--<p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>-->
                    <!--<p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>-->
                    
                    <!--<div class="d-flex pt-2">-->
                    <!--    <a class="btn btn-square btn-outline-secondary rounded-circle me-1" href=""><i class="fab fa-twitter"></i></a>-->
                    <!--    <a class="btn btn-square btn-outline-secondary rounded-circle me-1" href=""><i class="fab fa-facebook-f"></i></a>-->
                    <!--    <a class="btn btn-square btn-outline-secondary rounded-circle me-1" href=""><i class="fab fa-youtube"></i></a>-->
                    <!--    <a class="btn btn-square btn-outline-secondary rounded-circle me-0" href=""><i class="fab fa-linkedin-in"></i></a>-->
                    <!--</div>-->
                <!--</div>-->
                <div class="col-lg-3 col-md-3">
                    <h5 class="text-light mb-4" style="color: black !important;">Quick Links</h5>
                    <?php $pages=\DB::table('pages')->where('parent_page','0')->where('status',1)->orderBy('sorts','asc')->get();?>
                        @foreach($pages as $page)
                            <!--<a class="btn btn-link" href="">About Us</a>-->
                            <!--<a class="btn btn-link" href="">Contact Us</a>-->
                            <!--<a class="btn btn-link" href="">Our Services</a>-->
                            <!--<a class="btn btn-link" href="">Terms & Condition</a>-->
                            <!--<a class="btn btn-link" href="">Support</a>-->
                            <a class="btn btn-link" style="color: black !important;"
                                @if($page->links!='')
                                    href="{{$page->links}}"
                                @else
                                    href="{{URL::to('/')}}/page/{{$page->slug}}"
                                @endif
                            >
                                <span class="text p-relative" style="text-transform:uppercase!important;">{{$page->name}}</span>
                            </a>
                        @endforeach
                </div>
                <div class="col-lg-6 col-md-6">
                    <!--<h5 class="text-light mb-4">Gallery</h5>-->
                    <div class="row g-2">
                        <!--<div class="col-4">-->
                        <!--    <img class="@themedir()/@theme()/img-fluid rounded" src="@themedir()/@theme()/img/project-1.jpg" alt="Image">-->
                        <!--</div>-->
                        <!--<div class="col-4">-->
                        <!--    <img class="@themedir()/@theme()/img-fluid rounded" src="@themedir()/@theme()/img/project-2.jpg" alt="Image">-->
                        <!--</div>-->
                        <!--<div class="col-4">-->
                        <!--    <img class="@themedir()/@theme()/img-fluid rounded" src="@themedir()/@theme()/img/project-3.jpg" alt="Image">-->
                        <!--</div>-->
                        <!--<div class="col-4">-->
                        <!--    <img class="@themedir()/@theme()/img-fluid rounded" src="@themedir()/@theme()/img/project-4.jpg" alt="Image">-->
                        <!--</div>-->
                        <!--<div class="col-4">-->
                        <!--    <img class="@themedir()/@theme()/img-fluid rounded" src="@themedir()/@theme()/img/project-5.jpg" alt="Image">-->
                        <!--</div>-->
                        <!--<div class="col-4">-->
                        <!--    <img class="@themedir()/@theme()/img-fluid rounded" src="@themedir()/@theme()/img/project-6.jpg" alt="Image">-->
                        <!--</div>-->
                        <div class="d-flex pt-2 d-flex justify-content-center">
                            <a class="btn btn-square btn-outline-secondary rounded-circle me-1" href="@settings(link2)" style="color: black !important;"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-outline-secondary rounded-circle me-1" href="@settings(link1)" style="color: black !important;"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-outline-secondary rounded-circle me-1" href="@settings(link6)" style="color: black !important;"><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-square btn-outline-secondary rounded-circle me-0" href="@settings(link3)" style="color: black !important;"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <h5 class="text-light mb-4" style="color: black !important;">Head Office</h5>
                    <!--<p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>-->
                    <!--<div class="position-relative mx-auto" style="max-width: 400px;">-->
                    <!--    <input class="form-control bg-transparent border-secondary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">-->
                    <!--    <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>-->
                    <!--</div>-->
                    <span style="color: black !important;">@settings(address)</span>
                </div>
            </div>
        </div>
        <!--<div class="container-fluid copyright">-->
        <div class="container-fluid copyright" style="padding: 0px !important;">
            <style>
                .imagediv {
                  position: relative;
                }
                
                .bottomleft {
                  position: absolute;
                  bottom: 8px;
                  left: 16px;
                }
                .bottomright {
                  position: absolute;
                  bottom: 8px;
                  right: 16px;
                }
                
                @media only screen and (max-width: 426px) {
                    
                    .center1 {
                      position: absolute;
                      top: 50%;
                      width: 100%;
                      text-align: center;
                      margin-left: 0px !important;
                    }
                    .center2 {
                      position: absolute;
                      top: 50%;
                      width: 100%;
                      text-align: center;
                      margin-top: 20px !important;
                    }
                    .footerimage{
                        visibility:hidden;
                    }
                    
                    .copyright{
                        color: black !important;
                    }
                    
                    .developer{
                        color: black !important;
                    }
                }
            </style>
            
            <style>
                .copyright{
                      padding-top: 0px !important;
                      padding-right: 0px !important;
                      padding-bottom:0px !important;
                      padding-left: 0px !important;
                      border: none !important;
                }
            </style>
            
            <div class="imagediv" style="padding: 0px !important;">
                <img class="img-fluid footerimage" src="@themedir()/@theme()/img/footer_image.png" alt="image">
                <div class="bottomleft center1 col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <span class="copyright" style="color: white; font-size: 12px !important;">@settings(copyright)</span>
                </div>
                <div class="bottomright center2" style="color: white;">
                    <span class="developer" style="color: white; font-size: 12px !important;">Developed By Hostrare Limited</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


<!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="@themedir()/@theme()/js/wow/wow.min.js"></script>
    <script src="@themedir()/@theme()/js/easing/easing.min.js"></script>
    <script src="@themedir()/@theme()/js/waypoints/waypoints.min.js"></script>
    <script src="@themedir()/@theme()/js/counterup/counterup.min.js"></script>
    <script src="@themedir()/@theme()/js/owlcarousel/owl.carousel.min.js"></script>
    <script src="@themedir()/@theme()/js/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="@themedir()/@theme()/js/main.js"></script>
    
    
    <!--client slider-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        $('.client').slick({
          dots: true,
          infinite: false,
          speed: 300,
          slidesToShow: 6,
          slidesToScroll: 1,
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ]
        });
        		
    </script>
    <script type="text/javascript">
        $('.videos').slick({
          centerMode: true,
          centerPadding: '60px',
          slidesToShow: 3,
          responsive: [
            {
              breakpoint: 768,
              settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 3
              }
            },
            {
              breakpoint: 480,
              settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
              }
            }
          ]
        });
    </script>
    
    <!--video slider-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            rtl:true,
            loop:true,
            margin:10,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:4
                }
            }
        })
    </script>
    
    
    <!--see more button-->
    <script>
        function myFunction() {
          var dots = document.getElementById("dots");
          var moreText = document.getElementById("more");
          var btnText = document.getElementById("myBtn");
        
          if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "See more"; 
            moreText.style.display = "none";
          } else {
            dots.style.display = "none";
            btnText.innerHTML = "See less"; 
            moreText.style.display = "inline";
          }
        }
    </script>
</body>
</html>