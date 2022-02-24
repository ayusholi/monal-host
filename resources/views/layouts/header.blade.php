<!DOCTYPE html>
<html lang="en">

<head>
    <title>Monal Host</title>
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
    <div class="offcanvas_menu">
        <div class="offcanvas-overlay fixed-top w-100 h-100"></div>
        <div class="offcanvas-wrapper style--two fixed-top h-100">
            <div class="offcanvas-close position-absolute"> <i class="fa fa-times"></i></div>
            <div class="offcanvas-content">
                <div class="widget widget_logo"> <a href="#"><img src="{{ asset('img/sticky-logo.svg') }}" class="svg" alt=""></a></div>
                <div class="widget widget_about">
                    <h3 class="widget-title">About us</h3>
                    <p>It takes more than a private internet browser to go incognito. We’ll make your real IP address.</p>
                </div>
                <div class="widget widget_ip">
                    <h3 class="widget-title">Your IP Address:</h3>
                    <ul>
                        <li>103.237.76.105</li>
                    </ul>
                </div>
                <div class="widget widget_about">
                    <h3 class="widget-title">Your ISP:</h3>
                    <p>KS Network Limited</p>
                </div>
                <div class="widget widget_contact">
                    <h3 class="widget-title">Get In Touch</h3>
                    <ul>
                        <li> <span class="icon"> <i class="fa fa-envelope"></i> </span> <a href="mailto:Your@gmail.com">Your@gmail.com</a></li>
                        <li> <span class="icon"> <i class="fa fa-phone"></i> </span> <a href="callto:(202)2555421">(202) 255 5421</a></li>
                        <li> <span class="icon"> <i class="fa fa-map-signs"></i> </span>27 Division St, New York NY 10002, USA</li>
                    </ul>
                </div>
                <div class="widget widget_social_links">
                    <h3 class="widget-title">Follow Us On:</h3>
                    <div class="socials"> <a href="https://www.facebook.com/"> <i class="fab fa-facebook-f"></i> </a> <a href="https://www.twitter.com/"> <i class="fab fa-twitter"></i> </a> <a href="https://www.instagram.com/"> <i class="fab fa-instagram"></i> </a> <a href="https://www.pinterest.com/"> <i class="fab fa-pinterest"></i> </a> <a href="https://www.youtube.com/"> <i class="fab fa-youtube"></i> </a></div>
                </div>
            </div>
        </div>
    </div>
    <header class="header style--three">
        <div class="header-top">
            <div class="hp-container">
                <div class="row align-items-center">
                    <div class="col-sm-7">
                        <ul class="info-list justify-content-center justify-content-sm-start">
                            <li> <a href="tel:8884014678"> <img src="{{ asset('img/icon/phone.svg') }}" alt="" class="svg"> 888-401-4678 </a></li>
                            <li> <a href="mailto:info@hostpack.com"> <img src="{{ asset('img/icon/mail.svg') }}" alt="" class="svg"> info@hostpack.com </a></li>
                        </ul>
                    </div>
                    <div class="col-sm-5">
                        <ul class="info-list text-uppercase justify-content-center justify-content-sm-end">
                            @auth
                                <li> <a href="{{ route('user.dashboard') }}"> <img src="{{ asset('img/icon/login.svg') }}" alt="" class="svg"> Dashboard </a></li>
                            @endauth

                            @guest
                                <li> <a href="{{ route('auth.login') }}"> <img src="{{ asset('img/icon/login.svg') }}" alt="" class="svg"> Login </a></li>
                            @endguest
                            <li> <a href="contact.html"> <img src="{{ asset('img/icon/support.svg') }}" alt="" class="svg"> Support </a></li>
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
                            <a href="index.html">
                                <!-- <img src="{{ asset('img/logo.svg') }}" class="main-logo svg" alt=""> <img src="{{ asset('img/sticky-logo.svg') }}" class="sticky-logo svg" alt=""> -->
                                <h2 class="text-white">Monalhost</h2>
                            </a>
                        </div>
                        <div class="nav-wrapper ms-auto ms-lg-0">
                            <div class="nav-wrap-inner">
                                <ul class="nav">
                                    <li> <a href="#" class="current-menu-parent">Home</a>
                                        <ul class="sub-menu">
                                            <li><a href="index.html">Home V1</a></li>
                                            <li><a href="home-1.html">Home V2</a></li>
                                            <li><a href="home-2.html" class="current-menu-children">Home V3</a></li>
                                            <li><a href="home-3.html">Home V4</a></li>
                                        </ul>
                                    </li>
                                    <li> <a href="#">Pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                            <li><a href="faq.html">FAQ</a></li>
                                            <li><a href="terms.html">Terms of Service</a></li>
                                            <li><a href="privacy.html">Privacy Policy</a></li>
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="404.html">404</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="http://billing.ywhmcs.com/?systpl=hostpack">WHMCS</a></li>
                                    <li> <a href="#">Hosting</a>
                                        <ul class="sub-menu">
                                            <li><a href="shared-hosting.html">Shared Hosting</a></li>
                                            <li><a href="dedicated-hosting.html">dedicated hosting</a></li>
                                            <li><a href="reseller-hosting.html">reseller hosting</a></li>
                                            <li><a href="private-hosting.html">private hosting</a></li>
                                        </ul>
                                    </li>
                                    <li> <a href="#">Services</a>
                                        <ul class="sub-menu">
                                            <li><a href="service.html">Service One</a></li>
                                            <li><a href="service2.html">Service Two</a></li>
                                            <li><a href="service3.html">Service Three</a></li>
                                            <li><a href="service-details.html">Service Details</a></li>
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
