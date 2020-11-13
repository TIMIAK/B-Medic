@extends('layouts.app')
@section('content')
<section class="registration-section bg-color-3">
    <div class="pattern">
        <div class="pattern-1" style="background-image: url(assets/images/shape/shape-85.png);"></div>
        <div class="pattern-2" style="background-image: url(assets/images/shape/shape-86.png);"></div>
    </div>
    <div class="auto-container">
        <div class="inner-box">
            <div class="content-box">
                <div class="title-box">
                    <h1 class="text-center text-white">Change Password</h1>
                </div>
                <div class="inner">
                    {{-- {{route('')}} --}}
                    <form action="{{route('password.change')}}" method="post" class="registration-form">
                        @csrf
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                <label>Old Password</label>
                                <input type="password" name="old_password" placeholder="Enter your Old Password" required="" value="{{old('old-password')}}">
                                @error('old-password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                <label>New Password</label>
                                <input type="password" name="new_password" placeholder="Your New password" required="" value="{{old('new-password')}}">
                                @error('new-password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <label>Confirm New Password</label>
                                <input type="password" name="c_new_password" placeholder="Confirm New password" required="">
                                @error('c-new-password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                <button type="submit" class="theme-btn-one">Reset Password<i class="icon-Arrow-Right"></i></button>
                            </div>
                        </div>
                    </form>
                    <div class="login-now"><p>Forgot old Password? <a href="{{route('password.request')}}">Reset Now</a></p></div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
