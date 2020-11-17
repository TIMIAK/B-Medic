@extends('layouts.app')
@section('content')
    <!--page-title-two-->
<section class="page-title-two">
    <div class="title-box centred bg-color-2">
        <div class="pattern-layer">
            <div class="pattern-1" style="background-image: url(assets/images/shape/shape-70.png);"></div>
            <div class="pattern-2" style="background-image: url(assets/images/shape/shape-71.png);"></div>
        </div>
        <div class="auto-container">
            <div class="title">
                <h1>Book Appointment</h1>
            </div>
        </div>
    </div>
    <div class="lower-content">
        <div class="auto-container">
            <ul class="bread-crumb clearfix">
                <li><a href="index-2.html">Home</a></li>
                <li>Book Appointment</li>
            </ul>
        </div>
    </div>
</section>
<!--page-title-two end-->


<!-- appointment-section -->
<section class="appointment-section bg-color-3">
    <div class="auto-container">
        <div class="row clearfix justify-content-center">
            <div class="col-lg-8 col-md-12 col-sm-12 left-column">
                <div class="appointment-information">
                    <div class="title-box">
                    <h3>Book Appointment with Dr. {{$doctor->first_name .' '.$doctor->last_name}}</h3>
                    </div>
                    <div class="inner-box">
                        <div class="information-form">
                            <h3>Your Information:</h3>
                            <form action="{{route('appointment.store',$doctor->id)}}" method="post">
                                @csrf
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>Your name</label>
                                        <input type="text" value="{{$user->last_name .' '. $user->first_name}}" disabled >
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>Your email</label>
                                        <input type="email" value="{{$user->email}}" disabled>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <label>Address</label>
                                        <input type="text" value="{{$user->address}}" disabled>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                        <label>City</label>
                                        <input type="text" value="{{$user->city}}" disabled>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                        <label>State</label>
                                        <input type="text" value="{{$user->state}}" disabled>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                        <label>Date</label>
                                    <input type="text" name="appt_date" placeholder="E.g 12-06-2020" value="{{old('appt_date')}}">
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                        <label>Time <small class="text-danger">**24hrs format**</small></label>
                                        <input type="text" name="appt_time" placeholder="E.g 12:45" value="{{old('appt_time')}}">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <label>Note to the doctor <small class="text-danger">**Required**</small></label>
                                        <textarea name="note_to_doctor" placeholder="Write your note..." required>{{old('note_to_doctor')}}</textarea>
                                    </div>
                                </div>
                                <div class="btn-box">
                                    {{-- <a href="#" type="submit" class="theme-btn-one">Book Appoinment<i class="icon-Arrow-Right"></i></a> --}}
                                    {{-- <button class="theme-btn-one">Book Appointment<i class="icon-Arrow-Right"></button> --}}
                                    <button type="submit" class="theme-btn-one">Book Appointment<i class="icon-Arrow-Right"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- appointment-section end -->
@endsection
