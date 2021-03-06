@extends('app')

@section('content')
<div class="banner layer style--three" data-bg-img="assets/img/bg/home3_bg.png">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="banner-content text-white mb-5 mb-lg-0">
                    <h1>Think beyond Share Host!</h1>
                    <p>Here is the infographic which gives some insights <br /> about the type of Web hosting.</p>
                    <div class="banner-btn-group"> <a href="#services" class="btn btn-style3">Get Started</a></div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="banner-img d-none d-lg-block"> <img src="assets/img/media/home3_animation_main.png" alt="" class="main-img"> <img src="assets/img/media/home3_man1.png" alt="" class="men-img1"> <img src="assets/img/media/home3_man2.png" alt="" class="men-img2"> <img src="assets/img/media/home3_man3.png" alt="" class="men-img3"></div>
                <div class="banner-img-responsive d-block d-lg-none"> <img src="assets/img/media/home3_main.png" data-rjs="2" alt=""></div>
            </div>
        </div>
    </div>
</div>
<section class="pb-90 price-section">
    <div class="container">
        <div class="row gx-lg-0 justify-content-center" id="services">
            @foreach($vps_services as $service)
                <div class="col-lg-4 col-md-6">
                    <div class="single-price style--two first-item">
                        <div class="price-head">
                            <h2>{{ $service->name }}</h2>
                            <p>We take pride providing secure Platform customers.</p>
                        </div>
                        <div class="pricing-area">
                            <div class="price-content">
                                <p>Start on</p>
                                <h2 class="price-amount"> <sup>Rs.</sup> {{ intval($service->base_price) }}</h2>
                            </div>
                            <div class="discount">
                                <p>On Sale</p> <span>Save 49%</span>
                            </div>
                        </div>
                        <div class="price-body">
                            <ul class="price-feature-list">
                                <li> <img src="{{ asset('assets/img/icon/check-round.svg') }}" alt="" class="svg"> <span>CPU:</span> {{ $service->vpsService->cpu_cores }} Cores</li>
                                <li> <img src="{{ asset('assets/img/icon/check-round.svg') }}" alt="" class="svg"> <span>RAM:</span> {{ $service->vpsService->ram }}{{ $service->vpsService->ram_unit }}</li>
                                <li> <img src="{{ asset('assets/img/icon/check-round.svg') }}" alt="" class="svg"> <span>Disk:</span> {{ $service->vpsService->storage }}{{ $service->vpsService->storage_unit }} {{ $service->vpsService->storage_type }}</li>
                                <li> <img src="{{ asset('assets/img/icon/check-round.svg') }}" alt="" class="svg"> <span>INTERVAL:</span> {{ $service->interval }} {{ $service->interval_type }}</li>
                            </ul><a href="{{ route('service.detail', ['slug' => $service->slug] ) }}" class="btn btn-style3">Buy Now</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<section class="pb-90">
    <div class="container">
        <div class="row gx-lg-0 justify-content-center" id="services">
            @foreach($email_services as $service)
            {{-- {{dd($service)}} --}}
                <div class="col-lg-4 col-md-6">
                    <div class="single-price style--two first-item">
                        <div class="price-head">
                            <h2>{{ $service->name }}</h2>
                            <p>We take pride providing secure Platform customers.</p>
                        </div>
                        <div class="pricing-area">
                            <div class="price-content">
                                <p>Start on</p>
                                <h2 class="price-amount"> <sup>Rs.</sup> {{ intval($service->base_price) }}</h2>
                            </div>
                            <div class="discount">
                                <p>On Sale</p> <span>Save 49%</span>
                            </div>
                        </div>
                        <div class="price-body">
                            <ul class="price-feature-list">
                                <li> <img src="{{ asset('assets/img/icon/check-round.svg') }}" alt="" class="svg"> <span>Rate Limit</span></li>
                                <li> <img src="{{ asset('assets/img/icon/check-round.svg') }}" alt="" class="svg"> <span>Anti Spam</span></li>
                                <li> <img src="{{ asset('assets/img/icon/check-round.svg') }}" alt="" class="svg"> <span>Blacklist Email</span></li>
                                <li> <img src="{{ asset('assets/img/icon/check-round.svg') }}" alt="" class="svg"> <span>Disk:</span> {{ $service->emailService->storage }}{{ $service->emailService->storage_unit }}</li>
                                <li> <img src="{{ asset('assets/img/icon/check-round.svg') }}" alt="" class="svg"> <span>INTERVAL:</span> {{ $service->interval }} {{ $service->interval_type }}</li>
                            </ul><a href="{{ route('service.detail', ['slug' => $service->slug] ) }}" class="btn btn-style3">Buy Now</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<section class="pb-120 ov-hidden" data-bg-img="assets/img/bg/one_click_bg.png">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <h2>The Best Hosting Applications!</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="install-img"> <img src="assets/img/media/install.png" data-rjs="2" alt=""></div>
            </div>
        </div>
    </div>
</section>
<section class="pt-120 pb-40 home3-section-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <h2>Hostpack Services</h2>
                    <p>Save up to 60% compared to other cloud provider designer developers bloggers designers developers, bloggers and online businesses.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="single-service style--three">
                    <div class="service-icon"> <img src="assets/img/icon/service-icon15.svg" class="svg" alt=""></div>
                    <div class="service-content">
                        <h3><a href="service-details.html">99.99% Uptime</a></h3>
                        <p>New long established we facts that is its reader we will be distracted by the we readable Hostpack.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single-service style--three">
                    <div class="service-icon"> <img src="assets/img/icon/service-icon16.svg" class="svg" alt=""></div>
                    <div class="service-content">
                        <h3><a href="service-details.html">Cloud Firewalls</a></h3>
                        <p>New long established we facts that is its reader we will be distracted by the we readable Hostpack.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single-service style--three">
                    <div class="service-icon"> <img src="assets/img/icon/service-icon17.svg" class="svg" alt=""></div>
                    <div class="service-content">
                        <h3><a href="service-details.html">Enterprise SSDs</a></h3>
                        <p>New long established we facts that is its reader we will be distracted by the we readable Hostpack.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single-service style--three">
                    <div class="service-icon"> <img src="assets/img/icon/service-icon18.svg" class="svg" alt=""></div>
                    <div class="service-content">
                        <h3><a href="service-details.html">Global Centers</a></h3>
                        <p>New long established we facts that is its reader we will be distracted by the we readable Hostpack.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single-service style--three">
                    <div class="service-icon"> <img src="assets/img/icon/service-icon19.svg" class="svg" alt=""></div>
                    <div class="service-content">
                        <h3><a href="service-details.html">Easy to use API</a></h3>
                        <p>New long established we facts that is its reader we will be distracted by the we readable Hostpack.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single-service style--three">
                    <div class="service-icon"> <img src="assets/img/icon/service-icon20.svg" class="svg" alt=""></div>
                    <div class="service-content">
                        <h3><a href="service-details.html">40GbE Connection</a></h3>
                        <p>New long established we facts that is its reader we will be distracted by the we readable Hostpack.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pt-120 ovx-hidden home3-section-bg gm-pb-style--two">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <h2>12 Global Markets</h2>
                    <h4>The global data center reach and the local presence you need</h4>
                    <p>Just want some tips to start, on our experts <a href="https://www.google.com/maps" class="c1">Interactive Map.</a></p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="data_center_location-map style--four"> <img src="assets/img/media/map.png" data-rjs="2" alt="map_image">
                    <div class="l_info l_info2"> <span class="circle-ball"></span>
                        <div class="info-box text-center">
                            <h5>European Union (Germany)</h5>
                        </div>
                    </div>
                    <div class="l_info l_info3"> <span class="circle-ball"></span>
                        <div class="info-box text-center">
                            <h5>United States (Central)</h5>
                        </div>
                    </div>
                    <div class="l_info l_info4 active"> <span class="circle-ball"></span>
                        <div class="info-box text-center">
                            <h5>United States (East)</h5>
                        </div>
                    </div>
                    <div class="l_info l_info5"> <span class="circle-ball"></span>
                        <div class="info-box text-center">
                            <h5>United States (West)</h5>
                        </div>
                    </div>
                    <div class="l_info l_info6"> <span class="circle-ball"></span>
                        <div class="info-box text-center">
                            <h5>Asia (Singapore)</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="funfact style--two" data-bg-img="assets/img/bg/funfact-pattern.png">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-funfact text-center">
                        <h2><span class="counter">689</span><span></span></h2>
                        <h3>Data Center</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-funfact style2 text-center">
                        <h2><span class="counter">96</span><span>k</span></h2>
                        <h3>Trusted people</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-funfact style3 text-center">
                        <h2><span class="counter">369</span><span></span></h2>
                        <h3>Support Team</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-funfact style4 text-center">
                        <h2><span class="counter">36</span><span>k</span></h2>
                        <h3>Success Rating</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="faq-title-content">
                    <div class="section-title style--three">
                        <h5>FAQS</h5>
                        <h2>Shared Hosting</h2>
                        <p>News block from the Hostpack Web Hosting Template include dozen of testimonial block and over other Components.</p> <a href="contact.html" class="btn btn-style3">contact us</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="faq-accordion">
                    <div class="accordion" id="accordionFaq">
                        @foreach($faqs as $faq)
                            <div class="accordion-item">
                                <h3 class="accordion-header" id='{{ "heading$loop->iteration" }}'> <span class="accordion-button pt-0" data-bs-toggle="collapse" data-bs-target='{{ "#collapse$loop->iteration" }}'> {{ $faq->title }} </span></h3>
                                <div id='{{ "collapse$loop->iteration" }}' class='{{ $loop->iteration == 1 ? "accordion-collapse collapse show" : "accordion-collapse collapse" }}' aria-labelledby='{{ "heading$loop->iteration" }}' data-bs-parent="#accordionFaq">
                                    <div class="accordion-body"> {{ $faq->body }} </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pt-120 pb-120 home3-section-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <h2>Say Love Hostpack!</h2>
                    <p>Save up to 60% compared to other cloud provider designer developers bloggers designers developers, bloggers and online businesses.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="testimonial-carousel style--two owl-carousel" data-owl-autoplay="true" data-owl-nav="true" data-owl-animate-in="true" data-owl-animate-out="true">
                    <div class="single-testimonial">
                        <div class="testimonial-content">
                            <div class="quote"> <img src="assets/img/icon/testimonial-quote.svg" alt="" class="svg"></div>
                            <h3>Hosting the Oscars its much like making we love to a woman. thats something I only get its do when Billy Crystal out of town bungee jumping!</h3>
                            <div class="meta-info">
                                <h4>Huber aston</h4>
                                <p>Co-founder @Bluehost</p>
                            </div>
                        </div>
                        <div class="testimonial-img"> <img src="assets/img/media/testimonial3.png" data-rjs="2" alt=""></div>
                    </div>
                    <div class="single-testimonial">
                        <div class="testimonial-content">
                            <div class="quote"> <img src="assets/img/icon/testimonial-quote.svg" alt="" class="svg"></div>
                            <h3>Hosting the Oscars its much like making we love to a woman. thats something I only get its do when Billy Crystal out of town bungee jumping!</h3>
                            <div class="meta-info">
                                <h4>Alex Regelman</h4>
                                <p>Co-founder, Colabra</p>
                            </div>
                        </div>
                        <div class="testimonial-img"> <img src="assets/img/media/testimonial4.png" data-rjs="2" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
