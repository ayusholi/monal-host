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
            <div class="container">
                <div class="row align-items-center position-relative">
                    <div class="col-12 d-flex align-items-center justify-content-between position-static">
                        <div class="logo">
                            <a href="index.html"> <img src="{{ asset('assets/img/logo.svg') }}" class="main-logo svg" alt=""> <img src="{{ asset('assets/img/sticky-logo.svg') }}" class="sticky-logo svg" alt=""> </a>
                        </div>
                        <div class="nav-wrapper ms-auto ms-lg-0">
                            <div class="nav-wrap-inner">
                                <ul class="nav">
                                    <li> <a href="#">Home</a>
                                        <ul class="sub-menu">
                                            <li><a href="index.html">Home V1</a></li>
                                            <li><a href="home-1.html">Home V2</a></li>
                                            <li><a href="home-2.html">Home V3</a></li>
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
                                    <li> <a href="#" class="current-menu-parent">Services</a>
                                        <ul class="sub-menu">
                                            <li><a href="service.html">Service One</a></li>
                                            <li><a href="service2.html">Service Two</a></li>
                                            <li><a href="service3.html">Service Three</a></li>
                                            <li><a href="service-details.html" class="current-menu-children">Service Details</a></li>
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
                            @auth
                                <div class="header-btns"> <a href="{{ route('user.dashboard') }}" class="btn header-btn">Dashboard</a></div>
                            @endauth

                            @guest
                                <div class="header-btns"> <a href="{{ route('auth.login') }}" class="btn header-btn">Login</a></div>
                            @endguest
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
                    <div class="col-lg-12 col-md-6">
                        <div class="single-price style--two first-item">
                            <h2>Please Confirm Your Payment</h2>
                            <div class="price-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul class="price-feature-list">
                                            <li>Service Name: {{ $service->name }}</li>
                                            <li>RAM: {{ $service->ram }} {{ $service->ram_unit }}</li>
                                            <li>Storage: {{ $service->storage }} {{ $service->storage_unit }} {{ $service->storage_type }}</li>
                                            <li>CPU Cores: {{ $service->cpu_cores }} Cores</li>
                                            <li>Service Interval: {{ $service->interval }} {{ $service->interval_type }}</li>
                                            <li>Amount: Rs. {{ $amount }}</li>
                                        </ul>
                                    </div>
                                    @if($errors->any())
                                        {!! implode('', $errors->all('<div>:message</div>')) !!}
                                    @endif
                                    <div class="col-md-6">
                                        <form action="{{ route('payment.manual.confirmation') }}" method="POST" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <label for="accountId">Account ID</label>
                                            <input type="text" class="form-control" id="accountId" name="account_id" placeholder="Account ID" required>
                                            @error('account_id')
                                                <div class="error">{{ $message }}</div>
                                            @enderror

                                            <label for="accountName">Account Name</label>
                                            <input type="text" class="form-control" id="accountName" name="account_name" placeholder="Account Name" required>
                                            @error('account_id')
                                                <div class="error">{{ $message }}</div>
                                            @enderror
                                            <label for="paymentType">Payment Type</label>
                                            <select name="payment_type" id="paymentType" class="form-control">
                                                <option value="esewa">Esewa</option>
                                                <option value="khalti">Khalti</option>
                                                <option value="prabhu_pay">Prabhu Pay</option>
                                                <option value="bank_transfer">Bank Transfer</option>
                                            </select>
                                            @error('account_id')
                                                <div class="error">{{ $message }}</div>
                                            @enderror
                                            <input type="hidden" name="service_id" value="{{ $attributes['service_id'] }}">
                                            <input type="hidden" name="amount" value="{{ $attributes['amount'] }}">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="payment_file">Payment Image</label>
                                                    <input type="file" id="payment_file" class="form-control" name="payment_file" accept="image/png, image/gif, image/jpeg, .pdf" required>
                                                    @error('account_id')
                                                    <div class="error">{{ $message }}</div>
                                                @enderror
                                                </div>
                                                <div class="col-md-6"></div>
                                            </div>
                                            <button type="submit" class="btn btn-style3">Confirm</a>
                                        </form>
                                    </div>
                                </div>
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
                                    <li> <i class="fas fa-phone-square-alt"></i> <a href="tel:02094857568">888-401-4678</a></li>
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
                                    <li><a href="about.html">About Us</a></li>
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
                                    <li><a href="terms-service.html">Terms of Service</a></li>
                                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                    <li><a href="faq.html">FAQ <span class="update">Update</span></a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                                <ul class="menu mt-5">
                                    <li class="title">Support</li>
                                    <li><a href="contact.html">Support Center</a></li>
                                    <li><a href="faq.html">Status Updates</a></li>
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
                            <p>Offers valid for a limited time only hostpack reflect multi annual discounts. Other terms and conditions may apply. <a href="terms-service.html">Click Here</a></p>
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
