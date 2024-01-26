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