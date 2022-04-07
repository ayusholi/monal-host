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
                                <a href="tel:+977-9843386239"> <img src="{{ asset('assets/img/icon/phone.svg') }}" alt="" class="svg"> +977-9843386239 </a>
                            </li>
                            <li>
                                <a href="mailto:support@monalhost.com"> <img src="{{ asset('assets/img/icon/mail.svg') }}" alt="" class="svg"> support@monalhost.com </a>
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
                                <a href="{{ route('contact.us') }}"> <img src="{{ asset('assets/img/icon/support.svg') }}" alt="" class="svg"> Contact Us </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-main love-sticky">
            <div class="container">
                <div class="row align-items-center position-relative">
                    <div class="col-12 d-flex align-items-center justify-content-between position-static">
                        <div class="logo">
                            <a href="{{ route('home') }}"> <h1 class="text-white">Monalhost</h1> </a>
                        </div>
                        <div class="nav-wrapper ms-auto ms-lg-0">
                            <div class="nav-wrap-inner">
                                <ul class="nav">
                                    <li> <a href="{{ route('home') }}" >Home</a></li>
                                    <li> <a href="#">Pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('about.us') }}">About</a></li>
                                            <li><a href="{{ route('contact.us') }}">Contact</a></li>
                                            <li><a href="{{ route('blogs') }}">Blog</a></li>
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
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="header-right d-sm-flex d-none">
                            {{-- <div class="header-btns"> <a href="price.html" class="btn header-btn">Free Trial</a></div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="page-title-wrap ovx-hidden" data-bg-img="{{ asset('assets/img/bg/page-title-bg.png') }}">
        <section class="pb-120 ov-hidden" data-bg-img="assets/img/bg/one_click_bg.png">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="single-price style--two first-item">
                    <h2>Please Confirm Your Payment</h2>
                    <div class="price-body">
                        <ul class="price-feature-list">
                            <li>Service Name: {{ $service->name }}</li>
                            <li>RAM: {{ $service->ram }} {{ $service->ram_unit }}</li>
                            <li>Storage: {{ $service->storage }} {{ $service->storage_unit }} {{ $service->storage_type }}</li>
                            <li>CPU Cores: {{ $service->cpu_cores }} {{ $service->cpu_cores }}</li>
                            <li>Service Interval: {{ $service->interval }} {{ $service->interval_type }}</li>
                            <li>Amount: Rs. {{ $amount }}</li>
                        </ul>
                        <form action="{{ env("CONNECT_IPS_GATEWAY_URL") }}" method="POST" id="connectips-form" ref="connectIpsForm">
                            <input type="hidden" name="MERCHANTID" id="MERCHANTID" value="{{ $form_data['MERCHANTID'] }}"/>
                            <input type="hidden" name="APPID" id="APPID" value="{{ $form_data['APPID'] }}"/>
                            <input type="hidden" name="APPNAME" id="APPNAME" value="{{ $form_data['APPNAME'] }}"/>
                            <input type="hidden" name="TXNID" id="TXNID" value="{{ $form_data['TXNID'] }}"/>
                            <input type="hidden" name="TXNDATE" id="TXNDATE" value="{{ $form_data['TXNDATE'] }}"/>
                            <input type="hidden" name="TXNCRNCY" id="TXNCRNCY" value="{{ $form_data['TXNCRNCY'] }}"/>
                            <input type="hidden" name="TXNAMT" id="TXNAMT" value="{{ $form_data['TXNAMT'] }}"/>
                            <input type="hidden" name="REFERENCEID" id="REFERENCEID" value="{{ $form_data['REFERENCEID'] }}"/>
                            <input type="hidden" name="REMARKS" id="REMARKS" value="{{ $form_data['REMARKS'] }}"/>
                            <input type="hidden" name="PARTICULARS" id="PARTICULARS" value="{{ $form_data['PARTICULARS'] }}"/>
                            <input type="hidden" name="TOKEN" id="TOKEN" value="{{ $form_data['TOKEN'] }}"/>
                            <button type="submit" class="btn btn-style3">Confirm</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    </div>
    <footer class="footer" data-bg-img="{{ asset('assets/img/bg/footer-bg.png') }}">
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-sm-6">
                        <div class="widget widget_about text-white">
                            <a href="index.html" class="footer-logo"> <img src="{{ asset('assets/img/logo.svg') }}" class="svg" alt=""> </a>
                            <div class="menu-container">
                                <p>We are Monalhost 29 years of experience on this field with most talanted peoples and leaders.</p>
                                <ul class="contact-list">
                                    <li> <i class="fas fa-phone-square-alt"></i> <a href="tel:02094857568">+977-9843386239</a></li>
                                </ul>
                                <div class="accept-cards"> <img src="{{ asset('assets/img/media/cards.png') }}" data-rjs="2" alt=""></div>
                                <div class="socials">
                                    <a href="https://www.facebook.com/"> <i class="fab fa-facebook-f"></i> </a>
                                    <a href="https://www.twitter.com/"> <i class="fab fa-twitter"></i> </a>
                                    <a href="https://www.instagram.com/"> <i class="fab fa-instagram"></i> </a>
                                    <a href="https://www.pinterest.com/"> <i class="fab fa-pinterest"></i> </a>
                                    <a href="https://www.youtube.com/"> <i class="fab fa-youtube"></i> </a>
                                </div>
                                <p class="copyright">© 2002-2021 Hostpack inc. all rights reserved</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-6">
                        <div class="widget widget_nav_menu text-white">
                            <h3 class="widget-title">Pages</h3>
                            <div class="menu-container">
                                <ul class="menu">
                                    <li><a href="{{ route('about.us') }}">About Us</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="price.html">Price <span>try me</span></a></li>
                                    <li><a href="service.html">Service</a></li>
                                </ul>
                                <ul class="menu mt-5">
                                    <li class="title">Hosting</li>
                                    <li><a href="shared-hosting.html">Shared Hosting</a></li>
                                    <li><a href="dedicated-hosting.html">Dedicated Hosting </a></li>
                                    <li><a href="reseller-hosting.html">Reseller Hosting</a></li>
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
                                    <li><a href="{{ route('faqs') }}">FAQ <span class="update">Update</span></a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                                <ul class="menu mt-5">
                                    <li class="title">Support</li>
                                    <li><a href="contact.html">Support Center</a></li>
                                    <li><a href="{{ route('faqs') }}">Status Updates</a></li>
                                    <li><a href="contact.html">Knowledgebase</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-sm-6">
                        <div class="widget widget_recent_entries text-white ps-xl-4 ps-0">
                            <h3 class="widget-title">Latest News</h3>
                            <div class="menu-container">
                                <ul>
                                    <li> <a href="blog-details.html" class="posted-on">November 29, 2021</a>
                                        <h4 class="post-title"> <a href="blog-details.html">An artistic Technology turning real here</a></h4>
                                    </li>
                                    <li> <a href="blog-details.html" class="posted-on">November 29, 2021</a>
                                        <h4 class="post-title"> <a href="blog-details.html">better time for buying a web hosting is today</a></h4>
                                    </li>
                                    <li> <a href="blog-details.html" class="posted-on">November 29, 2021</a>
                                        <h4 class="post-title"> <a href="blog-details.html">better time for buying a web hosting is today</a></h4>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="footer-bottom-content text-white text-center text-lg-start justify-content-center justify-content-lg-start mb-4 mb-lg-0">
                            <p>Offers valid for a limited time only hostpack reflect multi annual discounts. Other terms and conditions may apply. <a href="{{ route('terms.of.service') }}">Click Here</a></p>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="certificate text-center text-lg-end"> <img src="{{ asset('assets/img/media/certificate.png') }}" data-rjs="2" alt=""></div>
                    </div>
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
