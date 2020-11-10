@extends('layouts.app')

@section('content')

{{-- <section class="page-title-two">
    <div class="title-box centred bg-color-2">
        <div class="pattern-layer">
            <div class="pattern-1" style="background-image: url(assets/images/shape/shape-70.png);"></div>
            <div class="pattern-2" style="background-image: url(assets/images/shape/shape-71.png);"></div>
        </div>
        <div class="auto-container">
            <div class="title">
                <h1>Register</h1>
            </div>
        </div>
    </div>
    <div class="lower-content">
        <div class="auto-container">
            <ul class="bread-crumb clearfix">
                <li><a href="index-2.html">Home</a></li>
                <li>Sign Up</li>
            </ul>
        </div>
    </div>
</section> --}}
<!--page-title-two end-->


<!-- registration-section -->
<section class="registration-section bg-color-3">
    <div class="pattern">
        <div class="pattern-1" style="background-image: url(assets/images/shape/shape-85.png);"></div>
        <div class="pattern-2" style="background-image: url(assets/images/shape/shape-86.png);"></div>
    </div>
    <div class="auto-container">
        <div class="inner-box">
            <div class="content-box">
                <div class="title-box">
                    <h1 class="text-center text-white">Registration</h1>
                </div>
                <div class="inner">
                    <form action="{{route('register')}}" method="post" class="registration-form">
                        @csrf
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <label>Username</label>
                                <input type="text" name="username" placeholder="Enter your Username" required="" value="{{old('username')}}">
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                <label>Email</label>
                                <input type="email" name="email" placeholder="Enter your email" required="" value="{{old('email')}}">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                <label>Password</label>
                                <input type="password" name="password" placeholder="Your password" required="" value="{{old('password')}}">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                <label>Confirm password</label>
                                <input type="password" name="cpassword" placeholder="Confirm password" required="">
                                @error('cpassword')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <div class="custom-check-box">
                                    <div class="custom-controls-stacked">
                                        <label class="custom-control material-checkbox">
                                            <input type="checkbox" class="material-control-input">
                                            <span class="material-control-indicator"></span>
                                            <span class="description">I accept <a href="book-appointment.html">terms</a> and <a href="book-appointment.html">conditions</a> and general policy</span>
                                        </label>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                <button type="submit" class="theme-btn-one">Register Now<i class="icon-Arrow-Right"></i></button>
                            </div>
                        </div>
                    </form>
                    <div class="text"><span>or</span></div>
                    <ul class="social-links clearfix">
                        <li><a href="register-page.html">Login with Facebook</a></li>
                        <li><a href="register-page.html">Login with Google Plus</a></li>
                    </ul>
                    <div class="login-now"><p>Already have an account? <a href="{{route('login')}}">Login Now</a></p></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- registration-section end -->
@endsection
