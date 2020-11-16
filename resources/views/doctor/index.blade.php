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
                        <h3>Showing 1-6 of {{count($total_doctors)}} Results</h3>
                    </div>
                </div>
                <div class="wrapper list">
                    <div class="clinic-list-content list-item">
                        <div class="row">
                            @foreach ($doctors as $doctor)
                            <div class="col col-md-6">
                                <div class="clinic-block-one">
                                    <div class="inner-box">
                                        <div class="pattern">
                                            <div class="pattern-1" style="background-image: url(asksets/images/shape/shape-24.png);"></div>
                                            <div class="pattern-2" style="background-image: url(assets/images/shape/shape-25.png);"></div>
                                        </div>
                                        <figure class="image-box"><img src="assets/images/team/team-1.jpg" alt=""></figure>
                                        <div class="content-box">
                                            <div class="like-box"><a href="doctors-details.html"><i class="far fa-heart"></i></a></div>
                                            <ul class="name-box clearfix">
                                            <li class="name"><h3><a href="doctors-details.html">Dr. {{$doctor->first_name .' '. $doctor->last_name}}</a></h3></li>
                                                @if ($doctor->verified)
                                                <li><i class="icon-Trust-1"></i></li>
                                                @endif
                                                @if ($doctor->garanteed)
                                                <li><i class="icon-Trust-2"></i></li>
                                                @endif
                                            </ul>
                                            <span class="designation">MBBS, MS - General Surgery, MCh</span>
                                            <div class="text">
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
                                                <p>{{$doctor->description}}</p>
                                            </div>
                                            <div class="location-box">
                                                <p><i class="fas fa-map-marker-alt"></i>{{$doctor->address}}</p>
                                                @if ($doctor->available)
                                                <div class="link"><a href="#">Available</a></div>
                                                @else
                                                <div class="link not-available"><a href="#">Not Available</a></div>
                                                @endif
                                            </div>
                                            <div class="btn-box"><a href="#">Visit Now</a></div>
                                            {{-- {{route('book.appointment',$doctor->id)}} --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach


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
