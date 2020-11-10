@extends('layouts.app')
@section('content')
@include('layouts.patient_sidebar')
<div class="right-panel">
    <div class="content-container">
        <div class="outer-container">
            <div class="add-listing my-profile">
                <div class="single-box">
                    <div class="title-box">
                        <h3 class="text-center">Basic Information</h3>
                        @if (session()->has('profilesuccess'))
                            <div class="alert alert-success">
                                <ul>
                                    <li>{{session('profilesuccess')}}</li>
                                </ul>
                            </div>
                        @endif
                        @if (session()->has('profilefailure'))
                            <div class="alert alert-danger">
                                <ul>
                                    <li>{{session('profilefailure')}}</li>
                                </ul>
                            </div>
                        @endif
                    </div>
                    <div class="inner-box">
                        <div class="profile-title">
                            <figure class="image-box"><img src="{{asset('images/resource/profile-4.png')}}" alt=""></figure>
                            <div class="upload-photo">
                                <a href="my-profile.html"><i class="icon-Upload"></i>Upload Photo</a>
                                <span>Allowed JPG, GIF or PNG. Max size of 2MB</span>
                            </div>

                        </div>
                    <form action="{{route('profile.update')}}" method="post">
                        @csrf
                        @method('patch')
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label>First name</label>
                                    <input type="text" name="first_name" placeholder="Enter first name" value="{{$user->first_name}}">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label>Last name</label>
                                    <input type="text" name="last_name" placeholder="Enter last name" value="{{$user->last_name}}">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label>Other name</label>
                                    <input type="text" name="other_name" placeholder="Enter first name" value="{{$user->other_name}}">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label>Username</label>
                                    <input type="text" name="username" placeholder="Enter last name" value="{{$user->username}}" disabled>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" placeholder="Enter your Email" value="{{$user->email}}" disabled>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label>Date of birth</label>
                                    <input type="text" name="dob" placeholder="DD/MM/YYYY" value="{{$user->dob}}">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label>Gender</label>
                                    <input type="text" name="gender" placeholder="Male" value="{{$user->gender}}">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label>Age</label>
                                    <input type="text" name="age" placeholder="20" value="{{$user->age}}">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label>Mobile number</label>
                                    <input type="text" name="mobile" placeholder="Your Phone" value="{{$user->mobile}}">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label>Address</label>
                                    <input type="text" name="address" placeholder="Address" value="{{$user->address}}">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label>Blood Group</label>
                                    <input type="text" name="blood_group" placeholder="Blood Group" value="{{$user->blood_group}}">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label>Marital status</label>
                                    <input type="text" name="marital_status" placeholder="Marital status" value="{{$user->marital_status}}">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <label>Note to the doctor (optional)</label>
                                    <textarea name="doctor_note" placeholder="Write your note...">{{$user->doctor_note}}</textarea>
                                </div>
                            </div>
                            <div class="single-box">
                                <div class="title-box">
                                    <h3 class="text-center">Social Networks</h3>
                                </div>
                                <div class="inner-box">
                                        <div class="row clearfix">
                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <label>Facebook URL</label>
                                                <input type="text" name="facebook" value="{{$user->facebook}}">
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <label>Twitter URL</label>
                                                <input type="text" name="twitter" value="{{$user->twitter}}">
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <label>Google Plus URL</label>
                                                <input type="text" name="google" value="{{$user->google_plus}}">
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <label>Instagram URL</label>
                                                <input type="text" name="instagram" value="{{$user->instagram}}">
                                            </div>
                                        </div>
                                        <div class="btn-box">
                                            {{-- <a type="submit" class="theme-btn-one">Save Change<i class="icon-Arrow-Right"></i></a>
                                            <a href="add-listing.html" class="cancel-btn">Cancel</a> --}}
                                <button type="submit" class="theme-btn-one">Save Changes<i class="icon-Arrow-Right"></i></button>

                                        </div>
                        </form>
                                </div>
                            </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</section>
@endsection
