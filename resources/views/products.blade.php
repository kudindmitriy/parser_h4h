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
        <section class="breadcrumb-area about-page" data-overlay="5" style="background-image: url(img/products_hero.jpeg); background-position: center;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-wrapper text-center">
                            <h3>СПОРЯДЖЕННЯ</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Banner Area -->
       <section class="package-area pt-110 pb-118">
            <div class="container">
                <div class="section-title text-center pb-80">
                    <p>Замовити спорядження – просто написати нам замовлення в соціальних мережах або на месенджери. Все підготуємо і передамо особисто в руки. Ціна одиниці спорядження вказана за день користування.</p>
                </div>
                <div class="row flex-md-wrap-reverse">
                    <div class="col-lg-12 md-space">
                        <div class="tab-content package-style" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"><div class="row">
                                @foreach($products as $product)
                                    <div class="col-lg-3 col-md-3">
                                        <div class="single-package mb-50">
                                            <div class="package-img">
                                                <img src="{{asset('storage/' . $product['image'])}}" alt="{{$product['title']}}">
                                                <div class="package-cost">{{$product['price']}} грн.</div>
                                            </div>
                                            <h5>
                                                <span>{{$product['title']}}</span>
                                            </h5>
                                            <p>{{$product['description']}}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
