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
    <link rel="preconnect" href="//fonts.googleapis.com">
    <link rel="preconnect" href="//fonts.gstatic.com" crossorigin>
    <link href="//fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="//cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="@themedir()/@theme()/lib/animate/animate.min.css" rel="stylesheet">
    <link href="@themedir()/@theme()/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="@themedir()/@theme()/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="@themedir()/@theme()/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="@themedir()/@theme()/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-primary text-white d-none d-lg-flex">
        <div class="container py-3">
            <div class="d-flex align-items-center">
                <a href="@baseurl()">
                    <h2 class="text-white fw-bold m-0">@settings(logo)</h2>
                </a>
                <div class="ms-auto d-flex align-items-center">
                    <small class="ms-4"><i class="fa fa-map-marker-alt me-3"></i>@settings(address)</small>
                    <small class="ms-4"><i class="fa fa-envelope me-3"></i>@settings(email)</small>
                    <small class="ms-4"><i class="fa fa-phone-alt me-3"></i>@settings(tel) | @settings(mobile)</small>
                    <div class="ms-3 d-flex">
                        <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href="@settings(link1)" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href="@settings(link2)" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href="@settings(link3)"  target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-white sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
                <a href="@baseurl()" class="navbar-brand d-lg-none">
                    <h1 class="fw-bold m-0"><img src="@baseurl()/application/storage/app/settings/{{$settings->logo}}" style="height: 50px;"></h1>
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php $parentpages=\DB::table('pages')->where('parent_page',0)->where('status',1)->orderBy('sorts','asc')->get();?>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <!--<a href="@baseurl()" class="nav-item nav-link active">Home</a>-->
                        <!--<a href="about.html" class="nav-item nav-link">About</a>-->
                        <!--<a href="service.html" class="nav-item nav-link">Services</a>-->
                        <!--<a href="project.html" class="nav-item nav-link">Projects</a>-->
                        @foreach($parentpages as $parentpage)
                        <?php $subpages=\DB::table('pages')->where('parent_page',$parentpage->id)->where('status',1)->orderBy('sorts','asc')->get();?>
                         @if(count($subpages)>0)
                        <div class="nav-item dropdown">
                        @endif
                            <a @if($parentpage->links!='') href="{{$parentpage->links}}" @else href="@baseurl()/page/{{$parentpage->slug}}" @endif @if(count($subpages)>0) class="nav-link dropdown-toggle" data-bs-toggle="dropdown" @else class="nav-item nav-link"  @endif>{{$parentpage->name}}</a>
                                @if(count($subpages)>0)
                                    <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                                        @foreach($subpages as $subpage)
                                        <a @if($subpage->links!='') href="{{$subpage->links}}" @else href="@baseurl()/page/{{$subpage->slug}}" @endif class="dropdown-item">{{$subpage->name}}</a>
                                        @endforeach
                                    </div>
                                @endif
                         @if(count($subpages)>0)
                        </div>
                        @endif
                        @endforeach
                        <!--<a href="contact.html" class="nav-item nav-link">Contact</a>-->
                    </div>
                    <div class="ms-auto d-none d-lg-block">
                        <a href="//suchanaengr.com/webmail" class="btn btn-primary rounded-pill py-2 px-3" target="_blank">Webmail Login</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->