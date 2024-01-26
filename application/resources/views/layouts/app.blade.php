<?php $setting=DB::table('settings')->first(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name') }} </title>
    <link rel="icon" type="image/x-icon" href="{{ URL::to('/') }}/application/storage/app/settings/525967.png"/>
    <link href="{{ asset('public/backend/assets/css/loader.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('public/backend/assets/js/loader.js') }}"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset('public/backend/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/backend/assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{ asset('public/backend/plugins/apex/apexcharts.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/backend/assets/css/dashboard/dash_1.css') }}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <!----FONT AWESOME--->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="path/to/numberToWords.js"></script>
</head>
<body>
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <div class="header-container fixed-top">
        <header class="header navbar navbar-expand-sm">

            <ul class="navbar-item theme-brand flex-row  text-center">
                <li class="nav-item theme-logo">
                    <a href="{{URL::to('/')}}">
                        <img src="@settings(iconurl)" class="navbar-logo" alt="logo">
                    </a>
                </li>
                <li class="nav-item theme-text">
                    <a href="{{URL::to('/')}}" class="nav-link"> {{ config('app.name') }} </a>
                </li>
            </ul>

            <ul class="navbar-item flex-row ml-md-0 ml-auto">
                <li class="nav-item align-self-center search-animated">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search toggle-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                    <form class="form-inline search-full form-inline search" role="search">
                        <div class="search-bar">
                            <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Search...">
                        </div>
                    </form>
                </li>
            </ul>

            <ul class="navbar-item flex-row ml-md-auto">

                <li class="nav-item dropdown language-dropdown d-none">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="language-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ asset('public/backend/assets/img/ca.png')}}" class="flag-width" alt="flag">
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="language-dropdown">
                        <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="{{ asset('public/backend/assets/img/de.png')}}" class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;German</span></a>
                        <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="{{ asset('public/backend/assets/img/jp.png')}}" class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;Japanese</span></a>
                        <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="{{ asset('public/backend/assets/img/fr.png')}}" class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;French</span></a>
                        <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="{{ asset('public/backend/assets/img/ca.png')}}" class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;English</span></a>
                    </div>
                </li>

                <li class="nav-item dropdown message-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="messageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="messageDropdown">
                        <div class="">
                        <!--    <a class="dropdown-item">-->
                        <!--        <div class="">-->

                        <!--            <div class="media">-->
                        <!--                <div class="user-img">-->
                        <!--                    <div class="avatar avatar-xl">-->
                        <!--                        <span class="avatar-title rounded-circle">KY</span>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--                <div class="media-body">-->
                        <!--                    <div class="">-->
                        <!--                        <h5 class="usr-name">Kara Young</h5>-->
                        <!--                        <p class="msg-title">ACCOUNT UPDATE</p>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--            </div>-->

                        <!--        </div>-->
                        <!--    </a>-->
                        <!--    <a class="dropdown-item">-->
                        <!--        <div class="">-->
                        <!--            <div class="media">-->
                        <!--                <div class="user-img">-->
                        <!--                    <img src="{{ asset('public/backend/assets/img/90x90.jpg')}}" class="img-fluid mr-2" alt="avatar">-->
                        <!--                </div>-->
                        <!--                <div class="media-body">-->
                        <!--                    <div class="">-->
                        <!--                        <h5 class="usr-name">Daisy Anderson</h5>-->
                        <!--                        <p class="msg-title">ACCOUNT UPDATE</p>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--            </div>                                    -->
                        <!--        </div>-->
                        <!--    </a>-->
                        <!--    <a class="dropdown-item">-->
                        <!--        <div class="">-->

                        <!--            <div class="media">-->
                        <!--                <div class="user-img">-->
                        <!--                    <div class="avatar avatar-xl">-->
                        <!--                        <span class="avatar-title rounded-circle">OG</span>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--                <div class="media-body">-->
                        <!--                    <div class="">-->
                        <!--                        <h5 class="usr-name">Oscar Garner</h5>-->
                        <!--                        <p class="msg-title">ACCOUNT UPDATE</p>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--            </div>-->
                                    
                        <!--        </div>-->
                        <!--    </a>-->
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown notification-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg><span class="badge badge-success"></span>
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="notificationDropdown">
                        <div class="notification-scroll">
                        <?php
                        $order=DB::table('order_items')->orderBy('id','DESC')->take(3)->get();
                        ?>
                        @foreach($order as $orders)
                            <?php
                            $date = Carbon\Carbon::parse($orders->created_at);
                            $elapsed = $date->diffForHumans(Carbon\Carbon::now());
                            $product_id=$orders->product_id;
                            $products=DB::table('products')->where('id',$product_id)->orderBy('id','DESC')->get();
                            ?>
                            @foreach($products as $product)
                            <div class="dropdown-item">
                                <div class="media server-log">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-server"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6" y2="6"></line><line x1="6" y1="18" x2="6" y2="18"></line></svg>
                                    <div class="media-body">
                                        <div class="data-info">
                                            <h6 class="">{{$product->name}}</h6>
                                            <p class="">{{$elapsed}}</p>
                                        </div>

                                        <div class="icon-status">
                                            <!--<a href="{{URL::to('/')}}/admin/view/orderdetails/{{$orders->id}}">Details</a>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @endforeach
                            <!--<div class="dropdown-item">-->
                            <!--    <div class="media ">-->
                            <!--        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>-->
                            <!--        <div class="media-body">-->
                            <!--            <div class="data-info">-->
                            <!--                <h6 class="">Licence Expiring Soon</h6>-->
                            <!--                <p class="">8 hrs ago</p>-->
                            <!--            </div>-->

                            <!--            <div class="icon-status">-->
                            <!--                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->

                            <!--<div class="dropdown-item">-->
                            <!--    <div class="media file-upload">-->
                            <!--        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>-->
                            <!--        <div class="media-body">-->
                            <!--            <div class="data-info">-->
                            <!--                <h6 class="">Kelly Portfolio.pdf</h6>-->
                            <!--                <p class="">670 kb</p>-->
                            <!--            </div>-->

                            <!--            <div class="icon-status">-->
                            <!--                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown user-profile-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <img src="{{ asset('public/backend/assets/img/90x90.jpg')}}" alt="avatar">
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                        <div class="">
                            <div class="dropdown-item">
                                <a class="" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> {{Auth::user()->name}}</a>
                            </div>
                            <!--<div class="dropdown-item">-->
                            <!--    <a class="" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path></svg> Inbox</a>-->
                            <!--</div>-->
                            <div class="dropdown-item">
                                <a href="{{URL::to('/')}}" target="_blank"> 
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                     Site Home
                                </a>
                            </div>
                            <div class="dropdown-item">
                                <a class="" href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> Sign Out</a>
                                 
                                        

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN NAVBAR  -->
    <div class="sub-header-container">
        <header class="header navbar navbar-expand-sm">
            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a>

            <ul class="navbar-nav flex-row">
                <li>
                    <div class="page-header">

                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span></span></li>
                            </ol>
                        </nav>

                    </div>
                </li>
            </ul>
            <ul class="navbar-nav flex-row ml-auto ">
                <li class="nav-item more-dropdown">
                   <?php 
                       $userType = auth()->user()->utype;
                    ?>
                    @if($userType == 'ADM')
                    <div class="dropdown  custom-dropdown-icon">
                        <a class="dropdown-toggle btn" href="#" role="button" id="customDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>Settings</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown">
                            <a class="dropdown-item" data-value="Settings" href="{{URL::to('settings')}}">Settings</a>
                            <!--<a class="dropdown-item" data-value="Mail" href="javascript:void(0);">Mail</a>-->
                            <!--<a class="dropdown-item" data-value="Print" href="javascript:void(0);">Print</a>-->
                            <!--<a class="dropdown-item" data-value="Download" href="javascript:void(0);">Download</a>-->
                            <!--<a class="dropdown-item" data-value="Share" href="javascript:void(0);">Share</a>-->
                        </div>
                    </div>
                    
                   @endif
                    
                </li>
            </ul>
        </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <div class="sidebar-wrapper sidebar-theme">
            
            <nav id="sidebar">
                <div class="shadow-bottom"></div>
                <ul class="list-unstyled menu-categories" id="accordionExample">
                    @include('backend.partials.sidenavbar')
                    
                </ul>
                
            </nav>

        </div>
        <!--  END SIDEBAR  -->
        
        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="row layout-top-spacing">

                    
                @yield('content')
                    

                </div>

            </div>
            <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright  &copy; {{date("Y")}} <a target="_blank" href="https://hostrare.com">Hostrare Limited</a>, All rights reserved.</p>
                </div>
                <div class="footer-section f-section-2">
                    <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
                </div>
            </div>
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('public/backend/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{ asset('public/backend/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{ asset('public/backend/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('public/backend/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{ asset('public/backend/assets/js/app.js')}}"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{ asset('public/backend/assets/js/custom.js')}}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    {{-- <script src="{{ asset('public/backend/plugins/apex/apexcharts.min.js')}}"></script> --}}
    {{-- <script src="{{ asset('public/backend/assets/js/dashboard/dash_1.js')}}"></script> --}}
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{URL::to('/')}}/public/backend/tinymce/tinymce.min.js"></script>
  <script src="{{URL::to('/')}}/public/backend/tinymce/themes/modern/theme.js"></script>
  <script>
      tinymce.init({
          selector: 'textarea#tinyMceBasic',
          height: 180,
          width: 480,
          menubar: false,
          relative_urls : false,
          remove_script_host : false,
          convert_urls : false,
          plugins: [
              'advlist autolink lists link image charmap print preview anchor',
              'searchreplace visualblocks code fullscreen',
              'insertdatetime media table paste code help wordcount textcolor'
          ],
          toolbar: 'bold italic underline | alignleft aligncenter ' +
          'alignright alignjustify | forecolor',
          content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
      });
  </script>
  <script>
      tinymce.init({
          selector: 'textarea#tinyMceFull',
          height: 300,
          menubar: true,
          relative_urls : false,
          remove_script_host : false,
          convert_urls : false,
          plugins: 'textcolor print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap emoticons',
          imagetools_cors_hosts: ['picsum.photos'],
          menubar: 'file edit view insert format tools table help',
          toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl | forecolor backcolor',
          toolbar_sticky: true,
          autosave_ask_before_unload: true,
          autosave_interval: '30s',
          autosave_prefix: '{path}{query}-{id}-',
          autosave_restore_when_empty: false,
          autosave_retention: '2m',
          image_advtab: true,
          content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
      });
  </script>

</body>
</html>