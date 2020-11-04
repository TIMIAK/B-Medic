@extends('layouts.app')
@section('content')
<section class="page-title-two">
    <div class="title-box centred bg-color-2">
        <div class="pattern-layer">
            <div class="pattern-1" style="background-image: url(assets/images/shape/shape-70.png);"></div>
            <div class="pattern-2" style="background-image: url(assets/images/shape/shape-71.png);"></div>
        </div>
        <div class="auto-container">
            <div class="title">
                <h1>Doctors</h1>
            </div>
        </div>
    </div>
    <div class="lower-content">
        <div class="auto-container">
            <ul class="bread-crumb clearfix">
                <li><a href="{{route('home')}}">Home</a></li>
                <li>Doctors</li>
            </ul>
        </div>
    </div>
</section>
<section class="clinic-section doctors-page-section">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 content-side">
                <div class="item-shorting clearfix">
                    <div class="left-column pull-left">
                        <h3>Showing 1-6 of 20 Results</h3>
                    </div>

                </div>
                <div class="wrapper grid">
                    <div class="clinic-list-content">
                        <div class="clinic-block-one">
                            <div class="inner-box">
                                <div class="pattern">
                                    <div class="pattern-1" style="background-image: url({{asset('images/shape/shape-24.png')}});"></div>
                                    <div class="pattern-2" style="background-image: url({{asset('images/shape/shape-25.png')}});"></div>
                                </div>
                                <figure class="image-box"><img src="{{asset('images/team/team-1.jpg')}}" alt=""></figure>
                                <div class="content-box">
                                    <div class="like-box"><a href="doctors-details.html"><i class="far fa-heart"></i></a></div>
                                    <ul class="name-box clearfix">
                                        <li class="name"><h3><a href="doctors-details.html">Dr. Julia Jhones</a></h3></li>
                                        <li><i class="icon-Trust-1"></i></li>
                                        <li><i class="icon-Trust-2"></i></li>
                                    </ul>
                                    <span class="designation">MBBS, MS - General Surgery, MCh</span>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet consectur adipisc elit sed eiusmod tempor incididunt labore dolore magna.</p>
                                    </div>
                                    <div class="rating-box clearfix">
                                        <ul class="rating clearfix">
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                            <li><a href="doctors-details.html">(17)</a></li>
                                        </ul>
                                        <div class="link"><a href="doctors-details.html">24/7 Available</a></div>
                                    </div>
                                    <div class="location-box">
                                        <p><i class="fas fa-map-marker-alt"></i>G87P, Birmingham, UK</p>
                                    </div>
                                    <div class="btn-box"><a href="doctors-details.html">Visit Now</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="clinic-block-one">
                            <div class="inner-box">
                                <div class="pattern">
                                    <div class="pattern-1" style="background-image: url(assets/images/shape/shape-24.png);"></div>
                                    <div class="pattern-2" style="background-image: url(assets/images/shape/shape-25.png);"></div>
                                </div>
                                <figure class="image-box"><img src="assets/images/team/team-2.jpg" alt=""></figure>
                                <div class="content-box">
                                    <div class="like-box"><a href="doctors-details.html"><i class="far fa-heart"></i></a></div>
                                    <ul class="name-box clearfix">
                                        <li class="name"><h3><a href="doctors-details.html">Dr. Mary Astor</a></h3></li>
                                        <li><i class="icon-Trust-1"></i></li>
                                        <li><i class="icon-Trust-2"></i></li>
                                    </ul>
                                    <span class="designation">MDS - Periodontology and BDS</span>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet consectur adipisc elit sed eiusmod tempor incididunt labore dolore magna.</p>
                                    </div>
                                    <div class="rating-box clearfix">
                                        <ul class="rating clearfix">
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                            <li><a href="doctors-details.html">(21)</a></li>
                                        </ul>
                                        <div class="link not-available"><a href="doctors-details.html">Not Available</a></div>
                                    </div>
                                    <div class="location-box">
                                        <p><i class="fas fa-map-marker-alt"></i>G87P, Birmingham, UK</p>
                                    </div>
                                    <div class="btn-box"><a href="doctors-details.html">Visit Now</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="clinic-block-one">
                            <div class="inner-box">
                                <div class="pattern">
                                    <div class="pattern-1" style="background-image: url(assets/images/shape/shape-24.png);"></div>
                                    <div class="pattern-2" style="background-image: url(assets/images/shape/shape-25.png);"></div>
                                </div>
                                <figure class="image-box"><img src="assets/images/team/team-3.jpg" alt=""></figure>
                                <div class="content-box">
                                    <div class="like-box"><a href="doctors-details.html"><i class="far fa-heart"></i></a></div>
                                    <ul class="name-box clearfix">
                                        <li class="name"><h3><a href="doctors-details.html">Dr. Rex Allen</a></h3></li>
                                        <li><i class="icon-Trust-1"></i></li>
                                        <li></li>
                                    </ul>
                                    <span class="designation">BDS, MDS - Oral & Maxillofacial Surgery</span>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet consectur adipisc elit sed eiusmod tempor incididunt labore dolore magna.</p>
                                    </div>
                                    <div class="rating-box clearfix">
                                        <ul class="rating clearfix">
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                            <li><a href="doctors-details.html">(32)</a></li>
                                        </ul>
                                        <div class="link"><a href="doctors-details.html">24/7 Available</a></div>
                                    </div>
                                    <div class="location-box">
                                        <p><i class="fas fa-map-marker-alt"></i>G87P, Birmingham, UK</p>
                                    </div>
                                    <div class="btn-box"><a href="doctors-details.html">Visit Now</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="clinic-block-one">
                            <div class="inner-box">
                                <div class="pattern">
                                    <div class="pattern-1" style="background-image: url(assets/images/shape/shape-24.png);"></div>
                                    <div class="pattern-2" style="background-image: url(assets/images/shape/shape-25.png);"></div>
                                </div>
                                <figure class="image-box"><img src="assets/images/team/team-4.jpg" alt=""></figure>
                                <div class="content-box">
                                    <div class="like-box"><a href="doctors-details.html"><i class="far fa-heart"></i></a></div>
                                    <ul class="name-box clearfix">
                                        <li class="name"><h3><a href="doctors-details.html">Dr. Stella Adler</a></h3></li>
                                        <li></li>
                                        <li><i class="icon-Trust-2"></i></li>
                                    </ul>
                                    <span class="designation">MDS - Periodontology and BDS</span>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet consectur adipisc elit sed eiusmod tempor incididunt labore dolore magna.</p>
                                    </div>
                                    <div class="rating-box clearfix">
                                        <ul class="rating clearfix">
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                            <li><a href="doctors-details.html">(20)</a></li>
                                        </ul>
                                        <div class="link"><a href="doctors-details.html">24/7 Available</a></div>
                                    </div>
                                    <div class="location-box">
                                        <p><i class="fas fa-map-marker-alt"></i>G87P, Birmingham, UK</p>
                                    </div>
                                    <div class="btn-box"><a href="doctors-details.html">Visit Now</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="clinic-block-one">
                            <div class="inner-box">
                                <div class="pattern">
                                    <div class="pattern-1" style="background-image: url(assets/images/shape/shape-24.png);"></div>
                                    <div class="pattern-2" style="background-image: url(assets/images/shape/shape-25.png);"></div>
                                </div>
                                <figure class="image-box"><img src="assets/images/team/team-19.jpg" alt=""></figure>
                                <div class="content-box">
                                    <div class="like-box"><a href="doctors-details.html"><i class="far fa-heart"></i></a></div>
                                    <ul class="name-box clearfix">
                                        <li class="name"><h3><a href="doctors-details.html">Dr. Leroy Anderson</a></h3></li>
                                        <li><i class="icon-Trust-1"></i></li>
                                        <li><i class="icon-Trust-2"></i></li>
                                    </ul>
                                    <span class="designation">BDS, MDS - Oral & Maxillofacial Surgery</span>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet consectur adipisc elit sed eiusmod tempor incididunt labore dolore magna.</p>
                                    </div>
                                    <div class="rating-box clearfix">
                                        <ul class="rating clearfix">
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                            <li><a href="doctors-details.html">(35)</a></li>
                                        </ul>
                                        <div class="link not-available"><a href="doctors-details.html">Not Available</a></div>
                                    </div>
                                    <div class="location-box">
                                        <p><i class="fas fa-map-marker-alt"></i>G87P, Birmingham, UK</p>
                                    </div>
                                    <div class="btn-box"><a href="doctors-details.html">Visit Now</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="clinic-block-one">
                            <div class="inner-box">
                                <div class="pattern">
                                    <div class="pattern-1" style="background-image: url(assets/images/shape/shape-24.png);"></div>
                                    <div class="pattern-2" style="background-image: url(assets/images/shape/shape-25.png);"></div>
                                </div>
                                <figure class="image-box"><img src="assets/images/team/team-20.jpg" alt=""></figure>
                                <div class="content-box">
                                    <div class="like-box"><a href="doctors-details.html"><i class="far fa-heart"></i></a></div>
                                    <ul class="name-box clearfix">
                                        <li class="name"><h3><a href="doctors-details.html">Dr. Agnes Ayres</a></h3></li>
                                        <li><i class="icon-Trust-1"></i></li>
                                        <li></li>
                                    </ul>
                                    <span class="designation">BDS, MDS - Oral & Maxillofacial Surgery</span>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet consectur adipisc elit sed eiusmod tempor incididunt labore dolore magna.</p>
                                    </div>
                                    <div class="rating-box clearfix">
                                        <ul class="rating clearfix">
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                            <li><i class="icon-Star"></i></li>
                                            <li><a href="doctors-details.html">(35)</a></li>
                                        </ul>
                                        <div class="link"><a href="doctors-details.html">24/7 Available</a></div>
                                    </div>
                                    <div class="location-box">
                                        <p><i class="fas fa-map-marker-alt"></i>G87P, Birmingham, UK</p>
                                    </div>
                                    <div class="btn-box"><a href="doctors-details.html">Visit Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clinic-grid-content grid-item">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 team-block">
                                <div class="team-block-three">
                                    <div class="inner-box">
                                        <figure class="image-box">
                                            <img src="{{asset('images/team/team-5.jpg')}}" alt="">
                                            <a href="doctors-details.html"><i class="far fa-heart"></i></a>
                                        </figure>
                                        <div class="lower-content">
                                            <ul class="name-box clearfix">
                                                <li class="name"><h3><a href="doctors-details.html">Dr. Mary Astor</a></h3></li>
                                                <li><i class="icon-Trust-1"></i></li>
                                                <li><i class="icon-Trust-2"></i></li>
                                            </ul>
                                            <span class="designation">MDS - Periodontology and BDS</span>
                                            <div class="rating-box clearfix">
                                                <ul class="rating clearfix">
                                                    <li><i class="icon-Star"></i></li>
                                                    <li><i class="icon-Star"></i></li>
                                                    <li><i class="icon-Star"></i></li>
                                                    <li><i class="icon-Star"></i></li>
                                                    <li><i class="icon-Star"></i></li>
                                                    <li><a href="doctors-details.html">(32)</a></li>
                                                </ul>
                                            </div>
                                            <div class="location-box">
                                                <p><i class="fas fa-map-marker-alt"></i>G87P, Birmingham, UK</p>
                                            </div>
                                            <div class="lower-box clearfix">
                                                <span class="text">24/7 Available</span>
                                                <a href="doctors-details.html">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 team-block">
                                <div class="team-block-three">
                                    <div class="inner-box">
                                        <figure class="image-box">
                                            <img src="{{asset('images/team/team-6.jpg')}}" alt="">
                                            <a href="doctors-details.html"><i class="far fa-heart"></i></a>
                                        </figure>
                                        <div class="lower-content">
                                            <ul class="name-box clearfix">
                                                <li class="name"><h3><a href="doctors-details.html">Dr. Rex Allen</a></h3></li>
                                                <li><i class="icon-Trust-1"></i></li>
                                                <li><i class="icon-Trust-2"></i></li>
                                            </ul>
                                            <span class="designation">BDS, MDS - Oral & Maxillofacial Surgery</span>
                                            <div class="rating-box clearfix">
                                                <ul class="rating clearfix">
                                                    <li><i class="icon-Star"></i></li>
                                                    <li><i class="icon-Star"></i></li>
                                                    <li><i class="icon-Star"></i></li>
                                                    <li><i class="icon-Star"></i></li>
                                                    <li><i class="icon-Star"></i></li>
                                                    <li><a href="doctors-details.html">(17)</a></li>
                                                </ul>
                                            </div>
                                            <div class="location-box">
                                                <p><i class="fas fa-map-marker-alt"></i>G87P, Birmingham, UK</p>
                                            </div>
                                            <div class="lower-box clearfix">
                                                <span class="text not-available">Not Available</span>
                                                <a href="doctors-details.html">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="pagination-wrapper">
                    <ul class="pagination">
                        <li><a href="clinic-1.html" class="current">1</a></li>
                        <li><a href="clinic-1.html">2</a></li>
                        <li><a href="clinic-1.html">3</a></li>
                        <li><a href="clinic-1.html"><i class="icon-Arrow-Right"></i></a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
