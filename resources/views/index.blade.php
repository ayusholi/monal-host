@extends('app')

@section('content')
<div class="banner layer style--three" data-bg-img="assets/img/bg/home3_bg.png">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="banner-content text-white mb-5 mb-lg-0">
                    <h1>Think beyond Share Host!</h1>
                    <p>Here is the infographic which gives some insights <br /> about the type of Web hosting.</p>
                    <div class="banner-btn-group"> <a href="price.html" class="btn btn-style3">get Started</a> <a href="https://www.youtube.com/watch?v=ni5hRK1ehzk" class="mfp-iframe video-btn"> <span class="svg-wrap"><img src="assets/img/icon/play.svg" alt="" class="svg"></span> How it work </a></div>
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
        <div class="row gx-lg-0 justify-content-center">
            @foreach($services as $service)
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
                                <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>CPU:</span> {{ $service->cpu_cores }} Cores</li>
                                <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>RAM:</span> {{ $service->ram }}{{ $service->ram_unit }}</li>
                                <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>Disk:</span> {{ $service->storage }}{{ $service->storage_unit }} {{ $service->storage_type }}</li>
                                <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>INTERVAL:</span> {{ $service->interval }} {{ $service->interval_type }}</li>
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
{{-- <section class="pt-120 pb-120 ovx-hidden">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <h2>How do our shared web hosting <br /> plans stack up?</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="hosting-price">
                    <nav>
                        <div class="nav"> <button class="active" data-bs-toggle="tab" data-bs-target="#nav-basic"> <span class="dot"></span> <span>Basic Plan</span> </button> <button data-bs-toggle="tab" data-bs-target="#nav-starter"> <span class="dot"></span> <span>Starter Plan</span> </button> <button data-bs-toggle="tab" data-bs-target="#nav-enterprise"> <span class="dot"></span> <span>Enterprise Plan</span> </button> <button data-bs-toggle="tab" data-bs-target="#nav-business"> <span class="dot"></span> <span>Business Plan</span> </button> <button data-bs-toggle="tab" data-bs-target="#nav-pro"> <span class="dot"></span> <span>Pro Plan</span> </button></div>
                    </nav>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="nav-basic">
                            <div class="provider-tab">
                                <nav>
                                    <div class="nav"> <button class="active" data-bs-toggle="tab" data-bs-target="#nav-godaddy">GoDaddy</button> <button data-bs-toggle="tab" data-bs-target="#nav-bluehost">BlueHost</button> <button data-bs-toggle="tab" data-bs-target="#nav-hostgator">HostGator</button> <button data-bs-toggle="tab" data-bs-target="#nav-namecheap">NameCheap</button> <button data-bs-toggle="tab" data-bs-target="#nav-hostinger">HostinGer</button></div>
                                </nav>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="nav-godaddy">
                                        <div class="hz-price-box">
                                            <div class="hz-price-box-inner d-flex justify-content-between">
                                                <ul>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>CPU:</span> 2 Cores</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>RAM:</span> 4GB</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>Disk:</span> (128GB + 256GB) SSD</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>UPLINK:</span> 1Gbps - 20TB</li>
                                                </ul>
                                                <div class="hz-price-box-right d-flex align-items-center">
                                                    <div class="price">$12.69</div> <a href="price.html" class="btn btn-style3">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-bluehost">
                                        <div class="hz-price-box">
                                            <div class="hz-price-box-inner d-flex justify-content-between">
                                                <ul>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>CPU:</span> 2 Cores</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>RAM:</span> 4GB</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>Disk:</span> (128GB + 256GB) SSD</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>UPLINK:</span> 1Gbps - 20TB</li>
                                                </ul>
                                                <div class="hz-price-box-right d-flex align-items-center">
                                                    <div class="price">$12.69</div> <a href="price.html" class="btn btn-style3">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-hostgator">
                                        <div class="hz-price-box">
                                            <div class="hz-price-box-inner d-flex justify-content-between">
                                                <ul>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>CPU:</span> 2 Cores</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>RAM:</span> 4GB</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>Disk:</span> (128GB + 256GB) SSD</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>UPLINK:</span> 1Gbps - 20TB</li>
                                                </ul>
                                                <div class="hz-price-box-right d-flex align-items-center">
                                                    <div class="price">$12.69</div> <a href="price.html" class="btn btn-style3">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-namecheap">
                                        <div class="hz-price-box">
                                            <div class="hz-price-box-inner d-flex justify-content-between">
                                                <ul>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>CPU:</span> 2 Cores</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>RAM:</span> 4GB</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>Disk:</span> (128GB + 256GB) SSD</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>UPLINK:</span> 1Gbps - 20TB</li>
                                                </ul>
                                                <div class="hz-price-box-right d-flex align-items-center">
                                                    <div class="price">$12.69</div> <a href="price.html" class="btn btn-style3">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-hostinger">
                                        <div class="hz-price-box">
                                            <div class="hz-price-box-inner d-flex justify-content-between">
                                                <ul>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>CPU:</span> 2 Cores</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>RAM:</span> 4GB</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>Disk:</span> (128GB + 256GB) SSD</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>UPLINK:</span> 1Gbps - 20TB</li>
                                                </ul>
                                                <div class="hz-price-box-right d-flex align-items-center">
                                                    <div class="price">$12.69</div> <a href="price.html" class="btn btn-style3">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-starter">
                            <div class="provider-tab">
                                <nav>
                                    <div class="nav"> <button class="active" data-bs-toggle="tab" data-bs-target="#nav-godaddy1">GoDaddy</button> <button data-bs-toggle="tab" data-bs-target="#nav-bluehost1">BlueHost</button> <button data-bs-toggle="tab" data-bs-target="#nav-hostgator1">HostGator</button> <button data-bs-toggle="tab" data-bs-target="#nav-namecheap1">NameCheap</button> <button data-bs-toggle="tab" data-bs-target="#nav-hostinger1">HostinGer</button></div>
                                </nav>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="nav-godaddy1">
                                        <div class="hz-price-box">
                                            <div class="hz-price-box-inner d-flex justify-content-between">
                                                <ul>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>CPU:</span> 2 Cores</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>RAM:</span> 4GB</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>Disk:</span> (128GB + 256GB) SSD</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>UPLINK:</span> 1Gbps - 20TB</li>
                                                </ul>
                                                <div class="hz-price-box-right d-flex align-items-center">
                                                    <div class="price">$12.69</div> <a href="price.html" class="btn btn-style3">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-bluehost1">
                                        <div class="hz-price-box">
                                            <div class="hz-price-box-inner d-flex justify-content-between">
                                                <ul>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>CPU:</span> 2 Cores</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>RAM:</span> 4GB</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>Disk:</span> (128GB + 256GB) SSD</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>UPLINK:</span> 1Gbps - 20TB</li>
                                                </ul>
                                                <div class="hz-price-box-right d-flex align-items-center">
                                                    <div class="price">$12.69</div> <a href="price.html" class="btn btn-style3">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-hostgator1">
                                        <div class="hz-price-box">
                                            <div class="hz-price-box-inner d-flex justify-content-between">
                                                <ul>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>CPU:</span> 2 Cores</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>RAM:</span> 4GB</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>Disk:</span> (128GB + 256GB) SSD</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>UPLINK:</span> 1Gbps - 20TB</li>
                                                </ul>
                                                <div class="hz-price-box-right d-flex align-items-center">
                                                    <div class="price">$12.69</div> <a href="price.html" class="btn btn-style3">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-namecheap1">
                                        <div class="hz-price-box">
                                            <div class="hz-price-box-inner d-flex justify-content-between">
                                                <ul>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>CPU:</span> 2 Cores</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>RAM:</span> 4GB</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>Disk:</span> (128GB + 256GB) SSD</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>UPLINK:</span> 1Gbps - 20TB</li>
                                                </ul>
                                                <div class="hz-price-box-right d-flex align-items-center">
                                                    <div class="price">$12.69</div> <a href="price.html" class="btn btn-style3">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-hostinger1">
                                        <div class="hz-price-box">
                                            <div class="hz-price-box-inner d-flex justify-content-between">
                                                <ul>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>CPU:</span> 2 Cores</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>RAM:</span> 4GB</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>Disk:</span> (128GB + 256GB) SSD</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>UPLINK:</span> 1Gbps - 20TB</li>
                                                </ul>
                                                <div class="hz-price-box-right d-flex align-items-center">
                                                    <div class="price">$12.69</div> <a href="price.html" class="btn btn-style3">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-enterprise">
                            <div class="provider-tab">
                                <nav>
                                    <div class="nav"> <button class="active" data-bs-toggle="tab" data-bs-target="#nav-godaddy2">GoDaddy</button> <button data-bs-toggle="tab" data-bs-target="#nav-bluehost2">BlueHost</button> <button data-bs-toggle="tab" data-bs-target="#nav-hostgator2">HostGator</button> <button data-bs-toggle="tab" data-bs-target="#nav-namecheap2">NameCheap</button> <button data-bs-toggle="tab" data-bs-target="#nav-hostinger2">HostinGer</button></div>
                                </nav>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="nav-godaddy2">
                                        <div class="hz-price-box">
                                            <div class="hz-price-box-inner d-flex justify-content-between">
                                                <ul>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>CPU:</span> 2 Cores</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>RAM:</span> 4GB</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>Disk:</span> (128GB + 256GB) SSD</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>UPLINK:</span> 1Gbps - 20TB</li>
                                                </ul>
                                                <div class="hz-price-box-right d-flex align-items-center">
                                                    <div class="price">$12.69</div> <a href="price.html" class="btn btn-style3">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-bluehost2">
                                        <div class="hz-price-box">
                                            <div class="hz-price-box-inner d-flex justify-content-between">
                                                <ul>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>CPU:</span> 2 Cores</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>RAM:</span> 4GB</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>Disk:</span> (128GB + 256GB) SSD</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>UPLINK:</span> 1Gbps - 20TB</li>
                                                </ul>
                                                <div class="hz-price-box-right d-flex align-items-center">
                                                    <div class="price">$12.69</div> <a href="price.html" class="btn btn-style3">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-hostgator2">
                                        <div class="hz-price-box">
                                            <div class="hz-price-box-inner d-flex justify-content-between">
                                                <ul>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>CPU:</span> 2 Cores</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>RAM:</span> 4GB</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>Disk:</span> (128GB + 256GB) SSD</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>UPLINK:</span> 1Gbps - 20TB</li>
                                                </ul>
                                                <div class="hz-price-box-right d-flex align-items-center">
                                                    <div class="price">$12.69</div> <a href="price.html" class="btn btn-style3">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-namecheap2">
                                        <div class="hz-price-box">
                                            <div class="hz-price-box-inner d-flex justify-content-between">
                                                <ul>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>CPU:</span> 2 Cores</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>RAM:</span> 4GB</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>Disk:</span> (128GB + 256GB) SSD</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>UPLINK:</span> 1Gbps - 20TB</li>
                                                </ul>
                                                <div class="hz-price-box-right d-flex align-items-center">
                                                    <div class="price">$12.69</div> <a href="price.html" class="btn btn-style3">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-hostinger2">
                                        <div class="hz-price-box">
                                            <div class="hz-price-box-inner d-flex justify-content-between">
                                                <ul>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>CPU:</span> 2 Cores</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>RAM:</span> 4GB</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>Disk:</span> (128GB + 256GB) SSD</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>UPLINK:</span> 1Gbps - 20TB</li>
                                                </ul>
                                                <div class="hz-price-box-right d-flex align-items-center">
                                                    <div class="price">$12.69</div> <a href="price.html" class="btn btn-style3">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-business">
                            <div class="provider-tab">
                                <nav>
                                    <div class="nav"> <button class="active" data-bs-toggle="tab" data-bs-target="#nav-godaddy3">GoDaddy</button> <button data-bs-toggle="tab" data-bs-target="#nav-bluehost3">BlueHost</button> <button data-bs-toggle="tab" data-bs-target="#nav-hostgator3">HostGator</button> <button data-bs-toggle="tab" data-bs-target="#nav-namecheap3">NameCheap</button> <button data-bs-toggle="tab" data-bs-target="#nav-hostinger3">HostinGer</button></div>
                                </nav>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="nav-godaddy3">
                                        <div class="hz-price-box">
                                            <div class="hz-price-box-inner d-flex justify-content-between">
                                                <ul>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>CPU:</span> 2 Cores</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>RAM:</span> 4GB</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>Disk:</span> (128GB + 256GB) SSD</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>UPLINK:</span> 1Gbps - 20TB</li>
                                                </ul>
                                                <div class="hz-price-box-right d-flex align-items-center">
                                                    <div class="price">$12.69</div> <a href="price.html" class="btn btn-style3">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-bluehost3">
                                        <div class="hz-price-box">
                                            <div class="hz-price-box-inner d-flex justify-content-between">
                                                <ul>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>CPU:</span> 2 Cores</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>RAM:</span> 4GB</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>Disk:</span> (128GB + 256GB) SSD</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>UPLINK:</span> 1Gbps - 20TB</li>
                                                </ul>
                                                <div class="hz-price-box-right d-flex align-items-center">
                                                    <div class="price">$12.69</div> <a href="price.html" class="btn btn-style3">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-hostgator3">
                                        <div class="hz-price-box">
                                            <div class="hz-price-box-inner d-flex justify-content-between">
                                                <ul>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>CPU:</span> 2 Cores</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>RAM:</span> 4GB</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>Disk:</span> (128GB + 256GB) SSD</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>UPLINK:</span> 1Gbps - 20TB</li>
                                                </ul>
                                                <div class="hz-price-box-right d-flex align-items-center">
                                                    <div class="price">$12.69</div> <a href="price.html" class="btn btn-style3">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-namecheap3">
                                        <div class="hz-price-box">
                                            <div class="hz-price-box-inner d-flex justify-content-between">
                                                <ul>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>CPU:</span> 2 Cores</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>RAM:</span> 4GB</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>Disk:</span> (128GB + 256GB) SSD</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>UPLINK:</span> 1Gbps - 20TB</li>
                                                </ul>
                                                <div class="hz-price-box-right d-flex align-items-center">
                                                    <div class="price">$12.69</div> <a href="price.html" class="btn btn-style3">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-hostinger3">
                                        <div class="hz-price-box">
                                            <div class="hz-price-box-inner d-flex justify-content-between">
                                                <ul>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>CPU:</span> 2 Cores</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>RAM:</span> 4GB</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>Disk:</span> (128GB + 256GB) SSD</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>UPLINK:</span> 1Gbps - 20TB</li>
                                                </ul>
                                                <div class="hz-price-box-right d-flex align-items-center">
                                                    <div class="price">$12.69</div> <a href="price.html" class="btn btn-style3">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-pro">
                            <div class="provider-tab">
                                <nav>
                                    <div class="nav"> <button class="active" data-bs-toggle="tab" data-bs-target="#nav-godaddy4">GoDaddy</button> <button data-bs-toggle="tab" data-bs-target="#nav-bluehost4">BlueHost</button> <button data-bs-toggle="tab" data-bs-target="#nav-hostgator4">HostGator</button> <button data-bs-toggle="tab" data-bs-target="#nav-namecheap4">NameCheap</button> <button data-bs-toggle="tab" data-bs-target="#nav-hostinger4">HostinGer</button></div>
                                </nav>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="nav-godaddy4">
                                        <div class="hz-price-box">
                                            <div class="hz-price-box-inner d-flex justify-content-between">
                                                <ul>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>CPU:</span> 2 Cores</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>RAM:</span> 4GB</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>Disk:</span> (128GB + 256GB) SSD</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>UPLINK:</span> 1Gbps - 20TB</li>
                                                </ul>
                                                <div class="hz-price-box-right d-flex align-items-center">
                                                    <div class="price">$12.69</div> <a href="price.html" class="btn btn-style3">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-bluehost4">
                                        <div class="hz-price-box">
                                            <div class="hz-price-box-inner d-flex justify-content-between">
                                                <ul>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>CPU:</span> 2 Cores</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>RAM:</span> 4GB</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>Disk:</span> (128GB + 256GB) SSD</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>UPLINK:</span> 1Gbps - 20TB</li>
                                                </ul>
                                                <div class="hz-price-box-right d-flex align-items-center">
                                                    <div class="price">$12.69</div> <a href="price.html" class="btn btn-style3">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-hostgator4">
                                        <div class="hz-price-box">
                                            <div class="hz-price-box-inner d-flex justify-content-between">
                                                <ul>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>CPU:</span> 2 Cores</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>RAM:</span> 4GB</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>Disk:</span> (128GB + 256GB) SSD</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>UPLINK:</span> 1Gbps - 20TB</li>
                                                </ul>
                                                <div class="hz-price-box-right d-flex align-items-center">
                                                    <div class="price">$12.69</div> <a href="price.html" class="btn btn-style3">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-namecheap4">
                                        <div class="hz-price-box">
                                            <div class="hz-price-box-inner d-flex justify-content-between">
                                                <ul>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>CPU:</span> 2 Cores</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>RAM:</span> 4GB</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>Disk:</span> (128GB + 256GB) SSD</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>UPLINK:</span> 1Gbps - 20TB</li>
                                                </ul>
                                                <div class="hz-price-box-right d-flex align-items-center">
                                                    <div class="price">$12.69</div> <a href="price.html" class="btn btn-style3">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-hostinger4">
                                        <div class="hz-price-box">
                                            <div class="hz-price-box-inner d-flex justify-content-between">
                                                <ul>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>CPU:</span> 2 Cores</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>RAM:</span> 4GB</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>Disk:</span> (128GB + 256GB) SSD</li>
                                                    <li> <img src="assets/img/icon/check-round.svg" alt="" class="svg"> <span>UPLINK:</span> 1Gbps - 20TB</li>
                                                </ul>
                                                <div class="hz-price-box-right d-flex align-items-center">
                                                    <div class="price">$12.69</div> <a href="price.html" class="btn btn-style3">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="price-bottom-content text-center">
                    <p> 30-Day Money Back Guarantee For New Purchases​ <br /> For all hosting plan <a href="contact.html"><img src="assets/img/icon/chat.svg" alt="" class="svg"> Live Chat</a></p>
                </div>
            </div>
        </div>
    </div>
</section> --}}
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
                    <div class="l_info l_info"> <span class="circle-ball"></span>
                        <div class="info-box text-center">
                            <h5>indonesia</h5>
                        </div>
                    </div>
                    <div class="l_info l_info2"> <span class="circle-ball"></span>
                        <div class="info-box text-center">
                            <h5>Australia</h5>
                        </div>
                    </div>
                    <div class="l_info l_info3"> <span class="circle-ball"></span>
                        <div class="info-box text-center">
                            <h5>England</h5>
                        </div>
                    </div>
                    <div class="l_info l_info4 active"> <span class="circle-ball"></span>
                        <div class="info-box text-center">
                            <h5>Norway</h5>
                        </div>
                    </div>
                    <div class="l_info l_info5"> <span class="circle-ball"></span>
                        <div class="info-box text-center">
                            <h5>Russia</h5>
                        </div>
                    </div>
                    <div class="l_info l_info6"> <span class="circle-ball"></span>
                        <div class="info-box text-center">
                            <h5>Australia</h5>
                        </div>
                    </div>
                    <div class="l_info l_info7"> <span class="circle-ball"></span>
                        <div class="info-box text-center">
                            <h5>Japan</h5>
                        </div>
                    </div>
                    <div class="l_info l_info8"> <span class="circle-ball"></span>
                        <div class="info-box text-center">
                            <h5>Italy</h5>
                        </div>
                    </div>
                    <div class="l_info l_info9"> <span class="circle-ball"></span>
                        <div class="info-box text-center">
                            <h5>Spain</h5>
                        </div>
                    </div>
                    <div class="l_info l_info10"> <span class="circle-ball"></span>
                        <div class="info-box text-center">
                            <h5>Brazil</h5>
                        </div>
                    </div>
                    <div class="l_info l_info11"> <span class="circle-ball"></span>
                        <div class="info-box text-center">
                            <h5>Quatar</h5>
                        </div>
                    </div>
                    <div class="l_info l_info12"> <span class="circle-ball"></span>
                        <div class="info-box text-center">
                            <h5>Australia</h5>
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
{{-- <section class="pt-120 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="faq-title-content">
                    <div class="section-title style--three">
                        <h5 class="mb-n1">Blog</h5>
                        <h2>Get News Feeds</h2>
                        <p>News block from the Hostpack Web Hosting Template include dozen of testimonial block and over other Components.</p> <a href="blog.html" class="btn btn-style3">View all post</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row justify-content-center mx-xl-0">
                    <div class="col-sm-6">
                        <div class="single-post-item style--two"> <a href="blog-details.html" class="post-thumbnail"> <img src="assets/img/post/post4.png" data-rjs="2" alt=""> </a>
                            <div class="post-content">
                                <ul class="post-meta">
                                    <li class="posted-on"><a href="blog-details.html">25 May, 2021</a></li>
                                    <li class="posted-by"><a href="blog-details.html">Abraum Jonah</a></li>
                                </ul>
                                <h3 class="post-title"> <a href="blog-details.html">Hosting services that will settle your online life</a></h3> <a href="blog-details.html" class="btn-inline"> <img src="assets/img/icon/post-arrow.svg" alt="" class="svg"> Read More </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="single-post-item style--two"> <a href="blog-details.html" class="post-thumbnail"> <img src="assets/img/post/post5.png" data-rjs="2" alt=""> </a>
                            <div class="post-content">
                                <ul class="post-meta">
                                    <li class="posted-on"><a href="blog-details.html">29 May, 2021</a></li>
                                    <li class="posted-by"><a href="blog-details.html">Abraum Jonah</a></li>
                                </ul>
                                <h3 class="post-title"> <a href="blog-details.html">Better time of buying at web hosting ready today.</a></h3> <a href="blog-details.html" class="btn-inline"> <img src="assets/img/icon/post-arrow.svg" alt="" class="svg"> Read More </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
@endsection
