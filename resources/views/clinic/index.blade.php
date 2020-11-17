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
                <h1>Clinics</h1>
            </div>
        </div>
    </div>
    <div class="lower-content">
        <div class="auto-container">
            <ul class="bread-crumb clearfix">
                <li><a href="{{route('home')}}">Home</a></li>
                <li>Clinics</li>
            </ul>
        </div>
    </div>
</section>
<!-- clinic-section -->
<section class="clinic-section">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 content-side">
                <div class="item-shorting clearfix">
                    <div class="left-column pull-left">
                        <h3>Showing 1-6 of {{$total_clinics->count()}} Results</h3>
                    </div>
                </div>
                <div class="wrapper grid">
                    <div class="clinic-grid-content grid-item">
                        <div class="row clearfix">
                            @foreach ($clinics as $clinic)
                                <div class="col-lg-6 col-md-6 col-sm-12 team-block">
                                    <div class="team-block-three">
                                        <div class="inner-box">
                                            <figure class="image-box">
                                                <img src="{{asset('images/clinic/clinic-1.jpg')}}" alt="">
                                                <a href="clinic-details.html"><i class="far fa-heart"></i></a>
                                            </figure>
                                            <div class="lower-content">
                                                <ul class="name-box clearfix">
                                                    <li class="name"><h3><a href="clinic-details.html">{{$clinic->name}}</a></h3></li>
                                                    @if ($clinic->verified)

                                                    <li><i class="icon-Trust-1"></i></li>
                                                    @endif
                                                    @if ($clinic->garanteed)

                                                    <li><i class="icon-Trust-2"></i></li>
                                                    @endif
                                                    <li></li>
                                                </ul>
                                                <span class="designation">It’s all about care</span>
                                                <div class="rating-box clearfix">
                                                    <ul class="rating clearfix">
                                                        <li><i class="icon-Star"></i></li>
                                                        <li><i class="icon-Star"></i></li>
                                                        <li><i class="icon-Star"></i></li>
                                                        <li><i class="icon-Star"></i></li>
                                                        <li><i class="icon-Star"></i></li>
                                                        <li><a href="clinic-details.html">(32)</a></li>
                                                    </ul>
                                                </div>
                                                <div class="location-box">
                                                    <p><i class="fas fa-map-marker-alt"></i>{{$clinic->address}}</p>
                                                </div>
                                                <div class="lower-box clearfix">
                                                    @if ($clinic->available)
                                                    <span class="text">Available</span>
                                                    @else
                                                    <span class="text-danger">Not Available</span>
                                                    @endif
                                                    {{-- <span class="text">24/7 Available</span> --}}
                                                    <a href="clinic-details.html">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


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
<!-- clinic-section end -->
@endsection
