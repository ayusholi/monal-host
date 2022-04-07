<footer class="footer" data-bg-img="{{ asset('assets/img/bg/footer3-bg.png') }}">
    <div class="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-sm-6">
                    <div class="widget widget_about text-white"> <a href="{{ route('home') }}" class="footer-logo"> <h1 class="text-white">Monal Host</h1></a>
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
                                <li><a href="{{ route('about.us') }}">About Us</a></li>
                                <li><a href="{{ route('auth.login') }}">Login</a></li>
                                <li><a href="{{ route('blogs') }}">Blogs</a></li>
                                <li><a href="{{ route('services') }}">Service</a></li>
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
                                <li><a href="{{ route('faqs') }}">FAQ</a></li>
                                <li><a href="{{ route('contact.us') }}">Contact Us</a></li>
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
</footer> <a href="#" class="back-to-top"> <i class="fa fa-angle-up"></i> </a>
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
@yield('custom-script')
</body>

</html>
