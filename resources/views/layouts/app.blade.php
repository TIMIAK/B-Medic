<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from azim.commonsupport.com/Docpro/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Oct 2020 16:36:30 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Bmedic</title>

<!-- Fav Icon -->
<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="{{asset('css/font-awesome-all.css')}}" rel="stylesheet">
<link href="{{asset('css/flaticon.css')}}" rel="stylesheet">
<link href="{{asset('css/owl.css')}}" rel="stylesheet">
<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('css/jquery.fancybox.min.css')}}" rel="stylesheet">
<link href="{{asset('css/animate.css')}}" rel="stylesheet">
<link href="{{asset('css/color.css')}}" rel="stylesheet">
<link href="{{asset('css/style.css')}}" rel="stylesheet">
<link href="{{asset('css/responsive.css')}}" rel="stylesheet">

</head>

<body>
    {{-- <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div> --}}
    <div class="boxed_wrapper">

        <!-- preloader -->
        <div class="preloader"></div>
        <!-- preloader -->

        <!-- main header -->
        <header class="main-header style-one">
            @if (count($errors) > 0)
                @foreach ($errors->all() as $error)
                <p class="alert alert-danger alert-dismissible fade show" role="alert">{{ $error }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </p>
                @endforeach
            @endif
            @if (session()->has('error'))
    <div class="alert alert-danger">
        <ul>
            <li>{{session('error')}}</li>
        </ul>
    </div>
@endif
@if (session()->has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{{session('success')}}</li>
        </ul>
    </div>
@endif
            <div class="header-top">
                <!-- header-top -->
                <div class="auto-container">
                    <div class="top-inner clearfix">
                        <div class="top-right pull-right">
                            <ul class="info clearfix">
                                <li><a href="">About Us</a></li>
                                <li><a href="">Services</a></li>
                                <li><a href="">Contact Us</a></li>
                                <li><a href="">Blog</a></li>
                                <li><a href="">Faq's</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- header-lower -->
            <div class="header-lower">
                <div class="auto-container">
                    <div class="outer-box">
                        <div class="logo-box">
                        <div class="pattern" style="background-image: url(assets/images/shape/shape-1.png);"></div>
                            <div class="bg-color"></div>
                            <figure class="logo"><a href="{{route('home')}}"><h1 style="color:#fff"><strong>B-Medic</strong></h1></a></figure>

                        </div>
                        <div class="menu-area">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class="current"><a href="{{route('home')}}">Home</a></li>
                                        <li><a href="{{route('doctors')}}">Doctors</a></li>
                                        <li><a href="{{route('clinics')}}">Clinics</a></li>
                                        @guest
                                        <li class="dropdown">  <a> My Account</a>
                                            <ul>
                                                <li><a href="{{route('login')}}">Login</a></li>
                                                <li><a href="{{route('register')}}">Register</a></li>
                                            </ul>
                                        </li>

                                        @else

                                        <li class="dropdown"><a>My Account</a>
                                            <ul>
                                                <li><a href="{{route('dashboard')}}">My Dashboard</a></li>
                                                <li><a href="#" onclick="event.preventDefault;
                                                    document.getElementById('logout-form').submit();
                                                    ">Logout</a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </ul>
                                        </li>
                                        @endguest




                                        <li class="dropdown"><a href="index-2.html">News</a>
                                            <ul>
                                                <li><a href="blog.html">Blog Grid 01</a></li>
                                                <li><a href="blog-2.html">Blog Grid 02</a></li>
                                                <li><a href="blog-3.html">Blog Standard</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        @guest
                        <div class="btn-box"><a href="{{route('register')}}" class="theme-btn-one"><i class="icon-image"></i>Join Now</a></div>
                        @else
                        <div class="btn-box"><a href="{{route('doctors')}}" class="theme-btn-one"><i class="icon-image"></i>Make an Appointment</a></div>
                        @endguest
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="auto-container">
                    <div class="outer-box">
                        <div class="logo-box">
                            <figure class="logo"><a href="{{route('home')}}"><h1 style="color:#000000"><strong>B-Medic</strong></h1></a></figure>
                        </div>
                        <div class="menu-area">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                        @guest
                        <div class="btn-box"><a href="" class="theme-btn-one"><i class="icon-image"></i>Join Now</a></div>
                        @else
                        <div class="btn-box"><a href="" class="theme-btn-one"><i class="icon-image"></i>Make an Appointment</a></div>
                        @endguest
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="index-2.html"><img src="assets/images/logo-2.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>Chicago 12, Melborne City, USA</li>
                        <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                        <li><a href="mailto:info@example.com">info@example.com</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="index-2.html"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="index-2.html"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="index-2.html"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="index-2.html"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="index-2.html"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->


        <!-- Page content-->
        <div class="pt-2">
            @yield('content')
        </div>
         <!-- agent-section -->
         <section class="agent-section">
            <div class="auto-container">
                <div class="inner-container bg-color-2">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 left-column">
                            <div class="content_block_3">
                                <div class="content-box">
                                    <h3>Emergency call</h3>
                                    <div class="support-box">
                                        <div class="icon-box"><i class="fas fa-phone"></i></div>
                                        <span>Telephone</span>
                                        <h3><a href="tel:11165458856">+(111) 65_458_856</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 right-column">
                            <div class="content_block_4">
                                <div class="content-box">
                                    @if (session()->has('subscribe'))
                                    <p class="alert alert-success alert-dismissible fade show" role="alert">{{ session('subscribe')}}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                        </p>
                                    @endif
                                    <h3>Subscribe</h3>
                                    <form action="/subscribe" method="get" class="subscribe-form">
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Your Email" required="">
                                            <button type="submit" class="theme-btn-one">Submit now<i class="icon-Arrow-Right"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- agent-section -->
        <!-- main-footer -->
        <footer class="main-footer">
            <div class="footer-top">
                <div class="pattern-layer">
                    <div class="pattern-1" style="background-image: url({{asset('images/shape/shape-30.png')}});"></div>
                    <div class="pattern-2" style="background-image: url({{asset('images/shape/shape-31.png')}});"></div>
                </div>
                <div class="auto-container">
                    <div class="widget-section">
                        <div class="row clearfix">
                            <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                                <div class="footer-widget logo-widget">
                                    <figure class="footer-logo"><a href="index-2.html"><h1 style="color:#fff"><strong>B-Medic</strong></h1></a></figure>
                                    <div class="text">
                                        <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing .</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                                <div class="footer-widget links-widget">
                                    <div class="widget-title">
                                        <h3>About</h3>
                                    </div>
                                    <div class="widget-content">
                                        <ul class="links clearfix">
                                            <li><a href="index-2.html">About Us</a></li>
                                            <li><a href="index-2.html">Listing</a></li>
                                            <li><a href="index-2.html">How It Works</a></li>
                                            <li><a href="index-2.html">Our Services</a></li>
                                            <li><a href="index-2.html">Our Blog</a></li>
                                            <li><a href="index-2.html">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                                <div class="footer-widget links-widget">
                                    <div class="widget-title">
                                        <h3>Useful Links</h3>
                                    </div>
                                    <div class="widget-content">
                                        <ul class="links clearfix">
                                            <li><a href="index-2.html">Specialist</a></li>
                                            <li><a href="index-2.html">Clinic</a></li>
                                            <li><a href="index-2.html">Hospital</a></li>
                                            <li><a href="index-2.html">Download App</a></li>
                                            <li><a href="index-2.html">Join as a Doctor</a></li>
                                            <li><a href="index-2.html">Privacy Policy</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                                <div class="footer-widget contact-widget">
                                    <div class="widget-title">
                                        <h3>Contacts</h3>
                                    </div>
                                    <div class="widget-content">
                                        <ul class="info-list clearfix">
                                            <li><i class="fas fa-map-marker-alt"></i>
                                                Flat 20, Reynolds Neck, North Helenaville, FV77 8WS
                                            </li>
                                            <li><i class="fas fa-microphone"></i>
                                                <a href="tel:23055873407">+2(305) 587-3407</a>
                                            </li>
                                            <li><i class="fas fa-envelope"></i>
                                                <a href="mailto:info@example.com">info@example.com</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="inner-box clearfix">
                        <div class="copyright pull-left"><p><a href="index-2.html">Docpro</a> &copy; 2020 All Right Reserved</p></div>
                        <ul class="footer-nav pull-right clearfix">
                            <li><a href="index-2.html">Terms of Service</a></li>
                            <li><a href="index-2.html">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- main-footer end -->


        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="fa fa-arrow-up"></span>
        </button>
    </div>
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/owl.js')}}"></script>
    <script src="{{asset('js/wow.js')}}"></script>
    <script src="{{asset('js/validation.js')}}"></script>
    <script src="{{asset('js/jquery.fancybox.js')}}"></script>
    <script src="{{asset('js/appear.js')}}"></script>
    <script src="{{asset('js/scrollbar.js')}}"></script>
    <script src="{{asset('js/tilt.jquery.js')}}"></script>
    <script src="{{asset('js/jquery.nice-select.min.js')}}"></script>

    <!-- main-js -->
    <script src="{{asset('js/script.js')}}"></script>
</body>
</html>
