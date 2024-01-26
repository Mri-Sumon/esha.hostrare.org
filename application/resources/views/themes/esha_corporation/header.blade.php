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
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    