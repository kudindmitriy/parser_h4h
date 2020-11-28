<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Головна - МАМА, Я В ГОРАХ</title>
        <meta name="description" content="Вітаємо, друже, в нашій туристичній Fam! Обирай свою пригоду, будемо раді зустрітись в горах! Айда у подорож!">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('img/logo.png')}}">
        <!-- Place favicon.ico in the root directory -->
		<!-- CSS here -->
        <!-- CSS here -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('css/fontawesome-all.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/meanmenu.css')}}">
        <link rel="stylesheet" href="{{asset('css/icofont.css')}}">
        <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
        <link rel="stylesheet" href="{{asset('css/default.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
        <!-- Start Header Area -->
        <header class="header-area">
            <div class="container">
                  <div class="header-top separator d-none d-md-block">
                    <div class="row">
                        <div class="col-lg-6 col-md-8">
                            <div class="call-to-action">
                                <span>Телефони :</span>
                                <i class="fas fa-phone"></i>
                                +380970950227
                                +380991063108
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-2">
                            <div class="header-social-icon f-right">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-menu">
                    <div class="row">
                        <div class="col-lg-3 d-flex align-items-center">
                            <div class="logo">
                                <a href="/">
                                    <img src="{{asset('img/logo.png')}}" alt="logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="basic-menu f-right">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li>
                                            <a href="/">ГОЛОВНА</a>
                                        </li>
                                        <li>
                                            <a href="/routes">МАРШРУТИ</a>
                                        </li>
                                        <li>
                                            <a href="/campaigns">ГРАФIК ПОХОДЕНЬОК</a>
                                        </li>
                                        <li>
                                            <a href="/about">ХТО МИ Є?
                                                <i class="icofont icofont-rounded-down"></i>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="/contact">КОНТАКТИ</a>
                                                </li>
                                            </ul>
                                        </li>

                                    </ul>
                                </nav>
                            </div>
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End Header Area -->

        <!-- Start Banner Area -->
        <section class="breadcrumb-area about-page" data-overlay="5" style="background-image: url(img/bg/about-breadcrumb.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-wrapper text-center">
                            <h3>PACKAGE DETAILS</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active">Tours Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Banner Area -->
       <section class="package-area pt-110 pb-118">
            <div class="container">
                <div class="row flex-md-wrap-reverse">
                    <div class="col-lg-4">
                        <div class="widget">
                            <h3 class="book-now-title">FIND YOUR TRIP</h3>
                            <div class="sidebar-booking">
                                <div class="form-action">
                                    <ul class="select-bar">
                                        <li class="location clearfix">
                                            <select name="location" class="location-here">
                                                <option value="Dhaka">Location </option>
                                                <option value="Rajshahi">Rajshahi</option>
                                                <option value="Chitagong">Chitagong</option>
                                                <option value="SKhulna">SKhulna</option>
                                            </select>
                                        </li>
                                        <li class="location clearfix">
                                            <select name="location" class="location-here member">
                                                <option value="Dhaka">Hotel</option>
                                                <option value="Rajshahi">Rajshahi</option>
                                                <option value="Chitagong">Chitagong</option>
                                                <option value="SKhulna">SKhulna</option>
                                            </select>
                                        </li>
                                        <li class="location clearfix">
                                            <form class="icon" action="#">
                                                <input class="datepicker" type="text" placeholder="Check in">
                                            </form>
                                        </li>
                                        <li class="location clearfix">
                                            <form class="icon" action="#">
                                                <input class="datepicker" type="text" placeholder="Checkout">
                                            </form>
                                        </li>
                                    </ul>
                                    <div class="filter-part">
                                        <div class="range-wrapper">
                                            <label for="amount">Budget Now :</label>
                                            <div class="range-input">
                                                <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                                            </div>
                                            <div id="slider-range"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-button">
                                    <button type="submit">SEARCH NOW</button>
                                </div>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="advertise-area">
                                <a href="#"><img src="img/blog/ads.jpg" alt="advertise-img"></a>
                            </div> <!-- end ad area -->
                        </div>
                    </div> <!-- end widget area -->
                    <div class="col-lg-8 md-space">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="service-details mb-40">
                                    <img class="mb-30" src="img/service/details/tl.jpg" alt="">
                                    <h3>Thailand – All Stunning Places</h3>
                                    <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore mage aliquami erat volpate
                                        Ut wisi enim ad minim veniam, quis nostrud exerci tation corper suscipit lobortis nisl ut aliquip ex ea comcon
                                        sequat. Duis autem velue eum iriure dolor in hendrerit in vulputate velitesse molestie consequat .</p>
                                    <p>Fonsec tetuer adipiscing elitsed diam nonummy nibh euismod tincidunt ut laoreet dolore mage aliquami erat volpate
                                        Ut wisi enim ad minim.</p>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="service-details mb-40">
                                            <h3>Why you choose this package</h3>
                                            <p>Consectetuer adipiscing elit, sed diam nonumy nibh euismod tincidunt ut laoreet dolore mage aliquami
                                                erat volpate Ut wisi enim ad minim veniam, quis nostrud exerci tation corper cipit lobortis nisl
                                                ut aliquip ex ea comcon sequat. Duis autem velue eum iriure dolor in hendrerit in vulputate velitesse
                                                consequat .</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="s-details-img mb-30">
                                            <img src="img/service/details/t1.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="s-details-img mb-30">
                                            <img src="img/service/details/t2.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="service-details mb-40">
                                            <h3>Low cost awesome tour</h3>
                                            <p>Consectetuer adipiscing elit, sed diam nonumy nibh euismod tincidunt ut laoreet dolore mage aliquami
                                                erat volpate Ut wisi enim ad minim veniam, quis nostrud exerci tation corper cipit lobortis nisl
                                                ut aliquip ex ea comcon sequat. Duis autem velue eum iriure dolor in hendrerit in vulputate velitesse
                                                consequat .</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-details mb-30">
                                    <h3>Exclusive Service to build your house</h3>
                                    <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                                        in voluptate velit esse cillum dolore eu fugiat nulla pariatu cepteusint occaecat cupidatat non proident,
                                        sunt in culpa qui officia deserunt mollit anim laborum. Curatur pretium tincidunt lacus. Nulla gravida orci
                                        a odio. Nullam varius, turpis et commodo pharetra est eros bibendum elit nec luctus magna felis sollicitudin
                                        mauris. Integer in mauris nibh euismod gravida. Duis ac tellus et risus vulputate vehicula.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Start Promote Area -->
        <section class="promote-area gray-bg pt-110 pb-120">
            <div class="container">
                <div class="promote-content text-center">
                    <h2>GET DISCOUNT <span>10-20% </span>OFF ANY TOUR PACKAGE</h2>
                    <h4>WHEN YOU PURCHASE ANY PACKAGE & GET NEXT TOUR</h4>
                    <a class="btn-1" href="#">START YOUR TRIP NOW</a>
                </div>
            </div>
        </section>
        <!-- End Promote Area -->
        <!-- footer start -->
        <footer class="footer-area">
            <div class="footer-top-area pt-50 pb-50">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-5 ">
                            <div class="footer-widget mb-30">
                                <h4 class="white">Соцiальнi сторiнки</h4>
                                <ul class="footer-social-icon">
                                    <li>
                                        <a href="https://www.facebook.com/mama.ya.v.gorah/">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/mama_ya_v_gorah/">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-7">
                            <div class="footer-widget mb-30">
                                <ul class="footer-link">
                                    <li>
                                        <a href="/">ГОЛОВНА</a>
                                    </li>
                                    <li>
                                        <a href="/routes">МАРШРУТИ</a>
                                    </li>
                                    <li>
                                        <a href="/campaigns">ГРАФIК ПОХОДЕНЬОК</a>
                                    </li>
                                        <li>
                                        <a href="/about">ХТО МИ Є?</a>
                                    </li>
                                    <li>
                                        <a href="/contact">КОНТАКТИ</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer end -->

        <!-- JS here -->
        <script src="{{asset('js/vendor/modernizr-3.5.0.min.js')}}"></script>
        <script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
        <script src="{{asset('js/popper.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
        <script src="{{asset('js/slick.min.js')}}"></script>
        <script src="{{asset('js/ajax-form.js')}}"></script>
        <script src="{{asset('js/jquery-ui.js')}}"></script>
        <script src="{{asset('js/waypoint.js')}}"></script>
        <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('js/plugins.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>
    </body>
</html>
