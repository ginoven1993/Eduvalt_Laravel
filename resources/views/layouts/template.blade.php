<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Eduvalt - @yield('title') </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.png')}}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/flaticon-eduvalt.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/default-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/odometer.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/spacing.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/tg-cursor.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
</head>

<body>

    @if (Session::has('flash_message_error'))
    <script type="text/javascript" src="{{asset('assets/js/sweetalert2.all.min.js')}}"></script>
    <script type="text/javascript">;
    Swal.fire({
    position: 'center',
    icon: 'error',
    title: "{{ session('flash_message_error') }}",
    showConfirmButton: false,
    timer: 100000
    });
    </script>
    @endif
    @if (Session::has('flash_message_success'))
    <script type="text/javascript" src="{{asset('assets/js/sweetalert2.all.min.js')}}"></script>
    <script type="text/javascript">;
    Swal.fire({
    position: 'center',
    icon: 'success',
    title: "{{ session('flash_message_success') }}",
    showConfirmButton: false,
    timer: 100000
    });
    </script>
@endif

    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner">
            <div class="rect1"></div>
            <div class="rect2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
        </div>
    </div>
    <!-- Preloader-end -->

    <!-- Scroll-top -->
    <button class="scroll__top scroll-to-target" data-target="html">
        <i class="tg-flaticon-arrowhead-up"></i>
    </button>
    <!-- Scroll-top-end-->

      <!-- header-area -->
      <div id="header-fixed-height"></div>
      <header class="tg-header__style-two">
          <div id="sticky-header" class="tg-header__area">
              <div class="container custom-container">
                  <div class="row">
                      <div class="col-12">
                          <div class="mobile-nav-toggler"><i class="tg-flaticon-menu-1"></i></div>
                          <div class="tgmenu__wrap">
                              <nav class="tgmenu__nav">
                                  <div class="logo" >
                                      <a href="index-2.html"><img src="{{asset('assets/img/logo/logo.png')}}" alt="Logo"></a>
                                  </div>
                                  <div class="tgmenu__navbar-wrap tgmenu__main-menu d-none d-xl-flex"  style="margin-left: 200px;">
                                      <ul class="navigation">
                                          <li class="active menu-item"><a href="/">Accueil</a></li>
                                          <li class="menu-item"><a href="courses.php">Cours</a></li>
                                          <li class="menu-item"><a href="contact.php">contact</a></li>
                                          <li class="menu-item"><a href="/upload_courses">Upload</a></li>
                                      </ul>
                                  </div>
                                  <div class="tgmenu__categories d-none d-md-block">
                                      <div class="dropdown">
                                          <button class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                              <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M12 12H6.85714V6.85714H12V12ZM5.14286 12H0V6.85714H5.14286V12ZM12 5.14286H6.85714V0H12V5.14286ZM5.14286 5.14286H0V0H5.14286V5.14286Z" fill="currentcolor" />
                                              </svg>
                                              Browse Categories
                                          </button>
                                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                              <li><a class="dropdown-item" href="courses.html">Business</a></li>
                                              <li><a class="dropdown-item" href="courses.html">Data Science</a></li>
                                              <li><a class="dropdown-item" href="courses.html">Art & Design</a></li>
                                              <li><a class="dropdown-item" href="courses.html">Marketing</a></li>
                                              <li><a class="dropdown-item" href="courses.html">Finance</a></li>
                                          </ul>
                                      </div>
                                  </div>
                                  <div class="tgmenu__action">
                                      <ul class="list-wrap">
                                          <li class="mini-cart-icon">
                                              <a href="{{route('shop.details')}}" class="cart-count">
                                                  <img src="{{asset('assets/img/icons/cart.svg')}}" alt="cart">
                                                  <span class="mini-cart-count" id="cart-count">{{ count((array) session('cart')) }}</span> 
                                              </a>
                                          </li>                                       
                                      </ul>
                                  </div>
                              </nav>
                          </div>
                          <!-- Mobile Menu  -->
                          <div class="tgmobile__menu">
                              <nav class="tgmobile__menu-box">
                                  <div class="close-btn"><i class="tg-flaticon-close-1"></i></div>
                                  <div class="nav-logo">
                                      <a href="index-2.html"><img src="{{asset('assets/img/logo/logo.png')}}" alt="Logo"></a>
                                  </div>
                                  <div class="tgmobile__search">
                                      <form action="#">
                                          <input type="text" placeholder="Search here...">
                                          <button><i class="fas fa-search"></i></button>
                                      </form>
                                  </div>
                                  <div class="tgmobile__menu-outer">
                                      <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                  </div>
                                  <div class="tgmenu__action">
                                      <ul class="list-wrap">
                                          <li class="header-btn login-btn"><a href="#" class="btn">Log in</a></li>
                                          <li class="header-btn"><a href="#" class="btn">Try For Free</a></li>
                                      </ul>
                                  </div>
                                  <div class="social-links">
                                      <ul class="list-wrap">
                                          <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                          <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                          <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                          <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                          <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                      </ul>
                                  </div>
                              </nav>
                          </div>
                          <div class="tgmobile__menu-backdrop"></div>
                          <!-- End Mobile Menu -->
                      </div>
                  </div>
              </div>
          </div>
      </header>
      <!-- header-area-end -->

       <!-- main-area -->
        <main class="main-area fix">
            @yield('content')
        </main>
        <!-- main-area-end -->



<!-- footer-area -->
<footer class="footer-bg" data-bg-color="var(--tg-common-color-dark)">
    <div class="footer__top-wrap">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="footer-widget">
                        <div class="footer__about">
                            <div class="footer__logo logo">
                                <a href="index-2.html"><img src="{{asset('assets/img/logo/secondary_logo.png')}}" alt="img"></a>
                            </div>
                            <p>when an unknown printer took galley of type and scrambled it to make pspecimen bookt has.</p>
                            <ul class="list-wrap m-0 p-0">
                                <li class="address">463 7th Ave, NY 10018, USA</li>
                                <li class="number">+123 88 9900 456</li>
                                <li class="socials">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="footer-widget widget_nav_menu">
                        <h4 class="fw-title">Resources</h4>
                        <ul class="list-wrap">
                            <li><a href="about-us.html">About</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="contact.html">Help Center</a></li>
                            <li><a href="#">Refund</a></li>
                            <li><a href="#">Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="footer-widget widget_nav_menu">
                        <h4 class="fw-title">Courses</h4>
                        <ul class="list-wrap">
                            <li><a href="courses.html">Life Coach</a></li>
                            <li><a href="courses.html">Business Coach</a></li>
                            <li><a href="courses.html">Health Coach</a></li>
                            <li><a href="courses.html">Development</a></li>
                            <li><a href="courses.html">Web Design</a></li>
                            <li><a href="courses.html">SEO Optimize</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="footer-widget">
                        <h4 class="fw-title">Subscribe Newsletter</h4>
                        <div class="footer__newsletter">
                            <p class="desc">Known printer took galley type and
                            scrambled it to make.</p>
                            <form action="#">
                                <input type="email" placeholder="Enter your email">
                                <button type="submit"><i class="fas fa-arrow-right"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright__wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="copyright__text">
                        <p>Copyright © 2023 eduvalt. All rights reserved.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="copyright__menu">
                        <ul class="list-wrap d-flex flex-wrap justify-content-center justify-content-lg-end">
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer-area-end -->




<!-- JS here -->
<script src="{{asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.odometer.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.appear.js')}}"></script>
<script src="{{asset('assets/js/tween-max.min.js')}}"></script>
<script src="{{asset('assets/js/select2.min.js')}}"></script>
<script src="{{asset('assets/js/slick.min.js')}}"></script>
<script src="{{asset('assets/js/slick-animation.min.js')}}"></script>
<script src="{{asset('assets/js/tg-cursor.min.js')}}"></script>
<script src="{{asset('assets/js/vivus.min.js')}}"></script>
<script src="{{asset('assets/js/ajax-form.js')}}"></script>
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<script src="{{asset('assets/js/aos.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/sweetalert2.all.min.js')}}"></script>

</body>


</html>
