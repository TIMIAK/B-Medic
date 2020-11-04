@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
 <!-- banner-section -->
 <section class="banner-section bg-color-1">
    <div class="pattern-layer" style="background-image: url({{asset('images/shape/shape-2.png')}});"></div>
    <div class="auto-container">
        <div class="row align-items-center clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content-box">
                    <h1>Find Nearest Doctor.</h1>
                    <p>Search and make appointment with various medical professionals or clinic all over the world.</p>
                    <div class="form-inner">
                        <form action="/search" method="GET">
                            {{-- @csrf --}}
                            {{-- @method('post') --}}
                            <div class="form-group">
                                <input type="text" name="name" placeholder="Ex. Name, Specialization..." required="">
                                <button type="submit"><i class="icon-Arrow-Right"></i></button>
                            </div>
                            <ul class="select-box clearfix">
                                <li>
                                    <div class="single-checkbox">
                                        <input type="radio" name="type" id="check1" checked="" value="all">
                                        <label for="check1"><span></span>All</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-checkbox">
                                        <input type="radio" name="type" id="check2" value="doctor">
                                        <label for="check2"><span></span>Doctor</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-checkbox">
                                        <input type="radio" name="type" id="check3" value="clinic">
                                        <label for="check3"><span></span>Clinic</label>
                                    </div>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image-box js-tilt">
                    <figure class="image clearfix wow fadeInRight animated animated" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="{{asset('images/banner/banner-image-1.png')}}" alt=""></figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner-section end -->
<!-- feature-section -->
<section class="feature-section centred bg-color-3">
    <div class="pattern-layer">
        <div class="pattern-1" style="background-image: url({{asset('images/shape/shape-13.png')}});"></div>
        <div class="pattern-2" style="background-image: url({{asset('images/shape/shape-14.png')}});"></div>
    </div>
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                <div class="feature-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="pattern">
                            <div class="pattern-1" style="background-image: url({{asset('images/shape/shape-5.png')}});"></div>
                            <div class="pattern-2" style="background-image: url({{asset('images/shape/shape-9.png')}});"></div>
                        </div>
                        <figure class="icon-box"><img src="{{asset('images/icons/icon-1.png')}}" alt=""></figure>
                        <p>Appointment With</p>
                        <h3>Nearest Clinic</h3>
                        <div class="link"><a href="appointment.html"><i class="icon-Arrow-Right"></i></a></div>
                        <div class="btn-box"><a href="appointment.html" class="theme-btn-one">Get Started<i class="icon-Arrow-Right"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                <div class="feature-block-one wow fadeInUp animated animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="pattern">
                            <div class="pattern-1" style="background-image: url({{asset('images/shape/shape-6.png')}});"></div>
                            <div class="pattern-2" style="background-image: url({{asset('images/shape/shape-10.pn')}}g);"></div>
                        </div>
                        <figure class="icon-box"><img src="{{asset('images/icons/icon-2.png')}}" alt=""></figure>
                        <p>Live Chat With</p>
                        <h3>Doctor</h3>
                        <div class="link"><a href="appointment.html"><i class="icon-Arrow-Right"></i></a></div>
                        <div class="btn-box"><a href="appointment.html" class="theme-btn-one">Get Started<i class="icon-Arrow-Right"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                <div class="feature-block-one wow fadeInUp animated animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="pattern">
                            <div class="pattern-1" style="background-image: url({{asset('images/shape/shape-7.png')}});"></div>
                            <div class="pattern-2" style="background-image: url({{asset('images/shape/shape-11.png')}});"></div>
                        </div>
                        <figure class="icon-box"><img src="{{asset('images/icons/icon-3.png')}}" alt=""></figure>
                        <p>Appoinment With Top</p>
                        <h3>Specialist</h3>
                        <div class="link"><a href="appointment.html"><i class="icon-Arrow-Right"></i></a></div>
                        <div class="btn-box"><a href="appointment.html" class="theme-btn-one">Get Started<i class="icon-Arrow-Right"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                <div class="feature-block-one wow fadeInUp animated animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="pattern">
                            <div class="pattern-1" style="background-image: url({{asset('images/shape/shape-8.png')}});"></div>
                            <div class="pattern-2" style="background-image: url({{asset('images/shape/shape-12.png')}});"></div>
                        </div>
                        <figure class="icon-box"><img src="{{asset('images/icons/icon-4.png')}}" alt=""></figure>
                        <p>24/7 Active Support</p>
                        <h3>Help Support</h3>
                        <div class="link"><a href="appointment.html"><i class="icon-Arrow-Right"></i></a></div>
                        <div class="btn-box"><a href="appointment.html" class="theme-btn-one">Get Started<i class="icon-Arrow-Right"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- feature-section end -->


<!-- about-section -->
<section class="about-section">
    <div class="auto-container">
        <div class="row align-items-center clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image_block_1">
                    <div class="image-box">
                        <div class="pattern">
                            <div class="pattern-1" style="background-image: url({{asset('images/shape/shape-15.png')}});"></div>
                            <div class="pattern-2"></div>
                            <div class="pattern-3" style="background-image: url({{asset('images/shape/shape-16.png')}});"></div>
                        </div>
                        <figure class="image clearfix"><img src="{{asset('images/resource/about-1.png')}}" alt=""></figure>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_1">
                    <div class="content-box">
                        <div class="sec-title">
                            <p>About B-Medic</p>
                            <h2>Bring care to your home with one click</h2>
                        </div>
                        <div class="text">
                            <p>We assit hospitals and doctors in connecting with patients all over the world. </p>
                        </div>
                        {{-- <ul class="list-style-one clearfix">
                            <li>Associates Insurance</li>
                            <li>Pina & Insurance</li>
                        </ul> --}}
                        <div class="btn-box"><a href="about.html" class="theme-btn-one">Read More<i class="icon-Arrow-Right"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-section end -->


<!-- process-section -->
<section class="process-section bg-color-2">
    <div class="pattern-layer">
        <div class="pattern-1" style="background-image: url({{asset('images/shape/shape-17.png')}});"></div>
        <div class="pattern-2" style="background-image: url({{asset('images/shape/shape-18.png')}});"></div>
        <div class="pattern-3" style="background-image: url({{asset('images/shape/shape-19.png')}});"></div>
        <div class="pattern-4" style="background-image: url({{asset('images/shape/shape-20.png')}});"></div>
    </div>
    <div class="auto-container">
        <div class="sec-title light centred">
            <p>Process</p>
            <h2>Appointment Process</h2>
        </div>
        <div class="inner-content">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 processing-block">
                    <div class="processing-block-one">
                        <div class="inner-box">
                            <figure class="icon-box">
                                <img src="{{asset('images/icons/icon-5.png')}}" alt="">
                                <span>01</span>
                            </figure>
                            <h3>Search Best Online Professional</h3>
                            <p>Lorem ipsum dolor sit amet consectur adipiscing elit sed eiusmod ex tempor incididunt.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 processing-block">
                    <div class="processing-block-one">
                        <div class="inner-box">
                            <figure class="icon-box">
                                <img src="{{asset('images/icons/icon-6.png')}}" alt="">
                                <span>02</span>
                            </figure>
                            <h3>View Professional Profile</h3>
                            <p>Lorem ipsum dolor sit amet consectur adipiscing elit sed eiusmod ex tempor incididunt.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 processing-block">
                    <div class="processing-block-one">
                        <div class="inner-box">
                            <figure class="icon-box">
                                <img src="{{asset('images/icons/icon-7.png')}}" alt="">
                                <span>03</span>
                            </figure>
                            <h3>Get Instant Doctor Appoinment</h3>
                            <p>Lorem ipsum dolor sit amet consectur adipiscing elit sed eiusmod ex tempor incididunt.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- process-section end -->


<!-- testimonial-section -->
<section class="testimonial-section bg-color-3">
    <div class="bg-layer" style="background-image: url({{asset('images/background/testimonial-1.jpg')}});"></div>
    <div class="pattern-layer">
        <div class="pattern-1" style="background-image: url({{asset('images/shape/shape-22.png')}});"></div>
        <div class="pattern-2" style="background-image: url({{asset('images/shape/shape-23.png')}});"></div>
    </div>
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-xl-7 col-lg-12 col-md-12 inner-column">
                <div class="testimonial-inner">
                    <div class="pattern" style="background-image: url(assets/images/shape/shape-21.png);"></div>
                    <div class="sec-title">
                        <p>Testimonials</p>
                        <h2>What client’s say?</h2>
                    </div>
                    <div class="single-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                        <div class="testimonial-block-one">
                            <div class="inner-box">
                                <div class="text">
                                    <p>“ Lorem ipsum dolor sit amet consectetur adipic  eksed do eiusmod tempor incid unt labore dolore magna Aliqua.enim minim veniam, quis nostrud. “</p>
                                </div>
                                <div class="author-info">
                                    <figure class="author-thumb"><img src="{{asset('images/resource/testimonial-1.png')}}" alt=""></figure>
                                    <h3>Amelia Anna</h3>
                                    <span class="designation">Amelia Anna</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-block-one">
                            <div class="inner-box">
                                <div class="text">
                                    <p>“ Lorem ipsum dolor sit amet consectetur adipic  eksed do eiusmod tempor incid unt labore dolore magna Aliqua.enim minim veniam, quis nostrud. “</p>
                                </div>
                                <div class="author-info">
                                    <figure class="author-thumb"><img src="{{asset('images/resource/testimonial-1.png')}}" alt=""></figure>
                                    <h3>Amelia Anna</h3>
                                    <span class="designation">Amelia Anna</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-block-one">
                            <div class="inner-box">
                                <div class="text">
                                    <p>“ Lorem ipsum dolor sit amet consectetur adipic  eksed do eiusmod tempor incid unt labore dolore magna Aliqua.enim minim veniam, quis nostrud. “</p>
                                </div>
                                <div class="author-info">
                                    <figure class="author-thumb"><img src="{{asset('images/resource/testimonial-1.png')}}" alt=""></figure>
                                    <h3>Amelia Anna</h3>
                                    <span class="designation">Amelia Anna</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial-section end -->
@endsection
