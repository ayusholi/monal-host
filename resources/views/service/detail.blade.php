@extends('app')

@section('content')
    <div class="page-title-wrap ovx-hidden" data-bg-img="assets/img/bg/page-title-bg.png') }}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <div class="page-title text-center">
                        <h2>Service Details</h2>
                        <ul class="nav justify-content-center">
                            <li><a href="index.html"><i class="fas fa-home"></i> Home</a></li>
                            <li class="active">Service Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="pt-120 pb-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h2>Meet Hostpack</h2>
                        <p>Save up to 60% compared to other cloud provider designer developers bloggers <br /> designers developers, bloggers and online businesses.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="meet-hostpack-img text-center"> <img src="{{ asset('/img/media/meet-hostpack.png') }}" data-rjs="2" alt=""></div>
                </div>
            </div>
        </div>
    </section>
    <section class="cta pt-120 pb-120" data-bg-img="assets/img/bg/call_to_action_bg.png') }}"> <img src="{{ asset('/img/bg/cta_top.png') }}" alt="" class="cta-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="cta-content text-center text-white">
                        <h2>Ready to work with hostpack? register today.</h2>
                        <form action="https://themelooks.us13.list-manage.com/subscribe/post?u=79f0b132ec25ee223bb41835f&amp;id=f4e0e93d1d" class="newsletter-form">
                            <div class="input-group"> <input class="form-control" type="email" placeholder="Subscribe Newsletter"> <button type="submit" class="btn hover-style-two"> <span>Subscribe Now</span> <img src="{{ asset('/img/icon/btn-arrow.svg') }}" alt="" class="svg"> </button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonial4-slider pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h2>Our Client Say</h2>
                        <p>Save up to 60% compared to other cloud provider designer developers bloggers designers developers, bloggers and online businesses.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="testimonial-carousel style--three dot-style--two v2 owl-carousel" data-owl-autoplay="true" data-owl-margin="30" data-owl-items="3" data-owl-dots="true" data-owl-responsive='{"0": {"items": "1"}, "767": {"items": "2"}, "992": {"items": "3"}}'>
                        <div class="single-testimonial-wrap">
                            <div class="single-testimonial"> <img src="{{ asset('/img/icon/testimonial-quote2.svg') }}" alt="" class="svg testimonial-quote-icon">
                                <div class="testimonial-img"> <img src="{{ asset('/img/media/testimonial5.png') }}" data-rjs="2" alt=""></div>
                                <div class="testimonial-content">
                                    <div class="meta-info">
                                        <h4>Huber aston</h4>
                                        <p>Charman @Bluehost</p>
                                    </div>
                                    <p>You submit the transfer through our web site. We send the confirmations your email specified.</p>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial-wrap">
                            <div class="single-testimonial"> <img src="{{ asset('/img/icon/testimonial-quote2.svg') }}" alt="" class="svg testimonial-quote-icon">
                                <div class="testimonial-img"> <img src="{{ asset('/img/media/testimonial6.png') }}" data-rjs="2" alt=""></div>
                                <div class="testimonial-content">
                                    <div class="meta-info">
                                        <h4>Nancy aston</h4>
                                        <p>Co-founder @GoDaddy</p>
                                    </div>
                                    <p>You submit the transfer through our web site. We send the confirmations your email specified.</p>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial-wrap">
                            <div class="single-testimonial"> <img src="{{ asset('/img/icon/testimonial-quote2.svg') }}" alt="" class="svg testimonial-quote-icon">
                                <div class="testimonial-img"> <img src="{{ asset('/img/media/testimonial7.png') }}" data-rjs="2" alt=""></div>
                                <div class="testimonial-content">
                                    <div class="meta-info">
                                        <h4>Smith aston</h4>
                                        <p>Founder @Namechep</p>
                                    </div>
                                    <p>You submit the transfer through our web site. We send the confirmations your email specified.</p>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial-wrap">
                            <div class="single-testimonial"> <img src="{{ asset('/img/icon/testimonial-quote2.svg') }}" alt="" class="svg testimonial-quote-icon">
                                <div class="testimonial-img"> <img src="{{ asset('/img/media/testimonial6.png') }}" data-rjs="2" alt=""></div>
                                <div class="testimonial-content">
                                    <div class="meta-info">
                                        <h4>Nancy aston</h4>
                                        <p>Co-founder @GoDaddy</p>
                                    </div>
                                    <p>You submit the transfer through our web site. We send the confirmations your email specified.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pricing-plan pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center text-white">
                        <h2>Hosting Plans</h2>
                        <p>With nearly 20 years of hosting experience, we focus on successful sites for web <br /> designers developers, bloggers and online businesses.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="table-responsive">
                        <table class="pricing-table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>
                                        <div class="price-head"> <span class="plan">Basic Plan</span> <span class="price"> <sup>$</sup> 2.95 <span>/mo</span> </span>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="price-head"> <span class="plan">Choice Plus</span> <span class="price"> <sup>$</sup> 5.45 <span>/mo</span> </span>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="price-head"> <span class="plan">Pro Plus Plan</span> <span class="price"> <sup>$</sup> 13.95 <span>/mo</span> </span>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Website</th>
                                    <td>20 Website</td>
                                    <td>30 Website</td>
                                    <td>50 Website</td>
                                </tr>
                                <tr>
                                    <th>SSD Storage</th>
                                    <td>1gb</td>
                                    <td>2gb</td>
                                    <td>3gb</td>
                                </tr>
                                <tr>
                                    <th>Spam Expert</th>
                                    <td><img src="{{ asset('/img/icon/cross.svg') }}" alt="" class="svg"></td>
                                    <td><img src="{{ asset('/img/icon/cross.svg') }}" alt="" class="svg"></td>
                                    <td><img src="{{ asset('/img/icon/check.svg') }}" alt="" class="svg"></td>
                                </tr>
                                <tr>
                                    <th>Included Domain</th>
                                    <td>01</td>
                                    <td>02</td>
                                    <td>03</td>
                                </tr>
                                <tr>
                                    <th>Parked Domains</th>
                                    <td>05</td>
                                    <td>10</td>
                                    <td>15</td>
                                </tr>
                                <tr>
                                    <th>Domain Privacy</th>
                                    <td><img src="{{ asset('/img/icon/cross.svg') }}" alt="" class="svg"></td>
                                    <td><img src="{{ asset('/img/icon/check.svg') }}" alt="" class="svg"></td>
                                    <td><img src="{{ asset('/img/icon/check.svg') }}" alt="" class="svg"></td>
                                </tr>
                                <tr>
                                    <th>Bandwidth</th>
                                    <td>128bg</td>
                                    <td>256gb</td>
                                    <td>512gb</td>
                                </tr>
                                <tr>
                                    <th>Site Backup</th>
                                    <td><img src="{{ asset('/img/icon/check.svg') }}" alt="" class="svg"></td>
                                    <td><img src="{{ asset('/img/icon/check.svg') }}" alt="" class="svg"></td>
                                    <td><img src="{{ asset('/img/icon/check.svg') }}" alt="" class="svg"></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th></th>
                                    <td>
                                        <a href="price.html" class="btn hover-style-two"> <span>Buy Now</span> <img src="{{ asset('/img/icon/btn-arrow.svg') }}" alt="" class="svg"> </a>
                                    </td>
                                    <td>
                                        <a href="price.html" class="btn hover-style-two"> <span>Buy Now</span> <img src="{{ asset('/img/icon/btn-arrow.svg') }}" alt="" class="svg"> </a>
                                    </td>
                                    <td>
                                        <a href="price.html" class="btn hover-style-two"> <span>Buy Now</span> <img src="{{ asset('/img/icon/btn-arrow.svg') }}" alt="" class="svg"> </a>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="price-bottom-content text-center">
                        <p> 30-Day Money Back Guarantee For New Purchases​ <br /> For all hosting plan
                            <a href="contact.html"><img src="{{ asset('/img/icon/chat.svg') }}" alt="" class="svg"> Live Chat</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
