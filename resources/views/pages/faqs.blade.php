<!DOCTYPE html>
<html lang="en">

<head>
    <title>Monalhost</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="shortcut icon" href="favicon.png" />
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,400&amp;family=Open+Sans:wght@400;600;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/owlcarousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/magnific-popup/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" />
</head>

<body>
    <div class="preloader">
        <div class="spinner-grow" role="status"> <span class="sr-only">Loading...</span></div>
    </div>
    <header class="header style--five">
        <div class="header-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-7">
                        <ul class="info-list justify-content-center justify-content-sm-start">
                            <li>
                                <a href="tel:8884014678"> <img src="{{ asset('assets/img/icon/phone.svg') }}" alt="" class="svg"> 888-401-4678 </a>
                            </li>
                            <li>
                                <a href="mailto:info@monalhost.com"> <img src="{{ asset('assets/img/icon/mail.svg') }}" alt="" class="svg"> info@monalhost.com </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-5">
                        <ul class="info-list text-uppercase justify-content-center justify-content-sm-end">
                            @auth
                                <li> <a href="{{ route('user.dashboard') }}"> <img src="{{ asset('assets/img/icon/login.svg') }}" alt="" class="svg"> Dashboard </a></li>
                            @endauth

                            @guest
                                <li> <a href="{{ route('auth.login') }}"> <img src="{{ asset('assets/img/icon/login.svg') }}" alt="" class="svg"> Login </a></li>
                            @endguest
                            <li>
                                <a href="contact.html"> <img src="{{ asset('assets/img/icon/support.svg') }}" alt="" class="svg"> Support </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-main love-sticky">
            <div class="hp-container">
                <div class="row align-items-center position-relative">
                    <div class="col-12 d-flex align-items-center justify-content-between position-static">
                        <div class="logo">
                            <a href="{{ route('home') }}">
                                <h2 class="text-white">Monalhost</h2>
                            </a>
                        </div>
                        <div class="nav-wrapper ms-auto ms-lg-0">
                            <div class="nav-wrap-inner">
                                <ul class="nav">
                                    <li> <a href="{{ route('home') }}" >Home</a></li>
                                    <li> <a href="#">Pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('about.us') }}">About</a></li>
                                            <li><a href="{{ route('contact.us') }}">Contact</a></li>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="{{ route('faqs') }}">FAQ</a></li>
                                            <li><a href="{{ route('terms.of.service') }}">Terms of Service</a></li>
                                            <li><a href="{{ route('privacy.policy') }}">Privacy Policy</a></li>
                                        </ul>
                                    </li>
                                    <li> <a href="#">Services</a>
                                        <ul class="sub-menu">
                                            @foreach ($services as $service)
                                                <li><a href="{{ route('service.detail', ['slug' => $service->slug]) }}">{{ $service->name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li> <a href="#">Pricing</a>
                                        <ul class="sub-menu">
                                            <li><a href="price.html">Pricing Plan 1</a></li>
                                            <li><a href="price2.html">Pricing Plan 2</a></li>
                                            <li><a href="price3.html">Pricing Plan 3</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="header-right d-sm-flex d-none">
                            {{-- <div class="header-btns"> <a href="price.html" class="btn header-btn btn-style3">Try 7-Day Free</a></div> --}}
                            <div class="search-toggle"> <button class="search-toggle-btn p-0"> <img src="{{ asset('img/icon/search.svg') }}" alt="" class="svg"> </button>
                                <div class="full-page-search"> <button class="search-close-btn"><i class="fa fa-times"></i></button>
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-8">
                                                <div class="search-form p-5">
                                                    <form action="#">
                                                        <div class="input-wrapper"> <input type="text" placeholder="Enter Your Keyword" name="s" required=""> <span class="input-icon"> <i class="fa fa-search"></i> </span></div>
                                                        <div class="btn-wrap"> <button type="submit" class="btn btn-style3">Search Now</button></div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="offcanvas-trigger ml-3 d-lg-none d-xl-block"> <img src="{{ asset('img/icon/humberger.svg') }}" alt="" class="svg"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="page-title-wrap ovx-hidden" data-bg-img="assets/img/bg/page-title-bg.png">
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <div class="page-title text-center">
                        <h2>FAQs</h2>
                        <ul class="nav justify-content-center">
                            <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                            <li class="active">Frequently Asked Questions</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h2>Frequently Asked Questions</h2>
                        <p>Save up to 60% compared to other cloud provider designer developers bloggers designers
                            developers, bloggers and online businesses.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($faqs as $faq)
                <div class="col-md-12 mb-2">
                    <div class="ts-content">
                        <h3>{{ $faq->title }}</h3>
                        <p>{{ $faq->body }}</p>
                    </div>
                </div>
                <hr>
                @endforeach
            </div>
        </div>
    </section>

    <footer class="footer" data-bg-img="{{ asset('assets/img/bg/footer-bg.png') }}">
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-sm-6">
                        <div class="widget widget_about text-white">
                            <div class="menu-container">
                                <ul class="contact-list">
                                    <li> <i class="fas fa-phone-square-alt"></i> <a href="tel:+977-9843386239">+977-9843386239</a></li>
                                </ul>
                                <div class="accept-cards"> <img src="{{ asset('assets/img/payments/ConnectIPSfull.png') }}" alt="" style="height: 100px; width: 150px;"><img src="{{ asset('assets/img/payments/IMEPay.jpg') }}" alt="" style="height: 100px; width: 120px;"></div>
                                <div class="socials"> <a href="https://www.facebook.com/"> <i class="fab fa-facebook-f"></i> </a> <a href="https://www.twitter.com/"> <i class="fab fa-twitter"></i> </a> <a href="https://www.instagram.com/"> <i class="fab fa-instagram"></i> </a> <a href="https://www.pinterest.com/"> <i class="fab fa-pinterest"></i> </a> <a href="https://www.youtube.com/"> <i class="fab fa-youtube"></i> </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-6">
                        <div class="widget widget_nav_menu text-white">
                            <h3 class="widget-title">Pages</h3>
                            <div class="menu-container">
                                <ul class="menu">
                                    <li><a href="{{ route('about-us') }}">About Us</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="price.html">Price <span class="style2">try me</span></a></li>
                                    <li><a href="service.html">Service</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-6">
                        <div class="widget widget_nav_menu text-white ps-xl-4 ps-0">
                            <h3 class="widget-title">Security</h3>
                            <div class="menu-container">
                                <ul class="menu">
                                    <li><a href="{{ route('terms.of.service') }}">Terms of Service</a></li>
                                    <li><a href="{{ route('privacy.policy') }}">Privacy Policy</a></li>
                                    <li><a href="{{ route('faqs') }}">FAQ <span class="style2">Update</span></a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="align-items-center">
                    <p class="copyright text-white">© {{ date('Y') }} Monal Host all rights reserved</p>
                </div>
            </div>
        </div>
    </footer>
    <a href="#" class="back-to-top"> <i class="fa fa-angle-up"></i> </a>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/menu.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/retinajs/retina.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/counterup/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/typed/typed.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjkssBA3hMeFtClgslO2clWFR6bRraGz0"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>
</html>
