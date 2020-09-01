@extends('users.template.master')
@section('title' , __('Login'))
@section('content')
    {{--<div class="container">--}}
    {{--    <div class="row justify-content-center">--}}
    {{--        <div class="col-md-8">--}}
    {{--            <div class="card">--}}
    {{--                <div class="card-header">{{ __('Login') }}</div>--}}

    {{--                <div class="card-body">--}}
    {{--                    <form method="POST" action="{{ route('login') }}">--}}
    {{--                        @csrf--}}

    {{--                        <div class="form-group row">--}}
    {{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

    {{--                            <div class="col-md-6">--}}
    {{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

    {{--                                @error('email')--}}
    {{--                                    <span class="invalid-feedback" role="alert">--}}
    {{--                                        <strong>{{ $message }}</strong>--}}
    {{--                                    </span>--}}
    {{--                                @enderror--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <div class="form-group row">--}}
    {{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

    {{--                            <div class="col-md-6">--}}
    {{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

    {{--                                @error('password')--}}
    {{--                                    <span class="invalid-feedback" role="alert">--}}
    {{--                                        <strong>{{ $message }}</strong>--}}
    {{--                                    </span>--}}
    {{--                                @enderror--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <div class="form-group row">--}}
    {{--                            <div class="col-md-6 offset-md-4">--}}
    {{--                                <div class="form-check">--}}
    {{--                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

    {{--                                    <label class="form-check-label" for="remember">--}}
    {{--                                        {{ __('Remember Me') }}--}}
    {{--                                    </label>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <div class="form-group row mb-0">--}}
    {{--                            <div class="col-md-8 offset-md-4">--}}
    {{--                                <button type="submit" class="btn btn-primary">--}}
    {{--                                    {{ __('Login') }}--}}
    {{--                                </button>--}}

    {{--                                @if (Route::has('password.request'))--}}
    {{--                                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
    {{--                                        {{ __('Forgot Your Password?') }}--}}
    {{--                                    </a>--}}
    {{--                                @endif--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </form>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--</div>--}}
    <!-- Teachers Area section -->
    <body class="login">
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <!-- Teachers Area section -->
    <section class="login-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <form method="POST" action="{{ route('login') }}" class="learnpro-register-form text-center">
                        @csrf
                        <p class="lead">Welcome Back</p>
                        <div class="form-group">
                            <input autocomplete="off" class="required form-control" placeholder="Email *" name="email"
                                   type="text">
                            @error('email')
                            <span class="text-danger invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input class="required form-control" placeholder="Password *" name="password"
                                   type="password">
                            @error('password')
                            <span class="text-danger invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember"
                                           id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                        </div>
                        <div class="form-group register-btn">
                            <button class="btn btn-primary btn-lg">Login</button>
                        </div>
                        <a href="{{route('password.request')}}"><strong>Forgot password?</strong></a>
                        <p>Not a member? <a href="{{route('register')}}"><strong>Join today</strong></a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ End Teachers Area section -->

    <!-- Footer Area section -->
    <footer>
        <div class="container">
            <div class="row">
                <div class=" col-sm-12 footer-content-box">
                    <div class="col-sm-3">
                        <h3><span><i class="fa fa-graduation-cap footer-h-icon"></i></span> EduRead</h3>
                        <p>We are Educatios, creat your passion and inspiration. And hope success will come for your
                            dream. Please send email and get latest news.</p>
                        <ul class="list-unstyled">
                            <li><span><i class="fa fa-phone footer-icon"></i></span>0123-456-789</li>
                            <li><span><i class="fa fa-envelope footer-icon"></i></span>hello@education.com</li>
                            <li><span><i class="fa fa-map-marker footer-icon"></i></span>01 Central Park, NYC</li>
                        </ul>
                    </div>

                    <div class="col-sm-2">
                        <h3>Courses</h3>
                        <ul class="list-unstyled">
                            <li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Web
                                    Design</a></li>
                            <li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Apps
                                    Developer</a></li>
                            <li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Graphic
                                    Design</a></li>
                            <li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>PHP Tranning</a>
                            </li>
                            <li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>IOS Developer</a>
                            </li>
                            <li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>App
                                    Design</a></li>
                        </ul>
                    </div>

                    <div class="col-sm-2">
                        <h3>Links</h3>
                        <ul class="list-unstyled">
                            <li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>About Us</a>
                            </li>
                            <li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Teacher</a>
                            </li>
                            <li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Blog</a></li>
                            <li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Events</a>
                            </li>
                            <li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Gallery</a>
                            </li>
                            <li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Contact</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-2">
                        <h3>Support</h3>
                        <ul class="list-unstyled">
                            <li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Documentation</a>
                            </li>
                            <li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Forums</a>
                            </li>
                            <li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Language
                                    Packs</a></li>
                            <li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Release
                                    Status</a></li>
                            <li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Documentation</a>
                            </li>
                            <li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Forums</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-3">
                        <h3>Get in touch</h3>
                        <p>Enter your email and we'll send you more information.</p>

                        <form action="#">
                            <div class="form-group">
                                <input placeholder="Your Email" type="email" required="">
                                <div class="submit-btn">
                                    <button type="submit" class="text-center">Subscribe</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-inner">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 footer-no-padding">
                            <p>&copy; Copyright 2019 EcologyTheme | All rights reserved</p>
                        </div>
                        <div class="col-md-6 col-sm-12 footer-no-padding">
                            <ul class="list-unstyled footer-menu text-right">
                                <li>Follow us:</li>
                                <li><a href=""><i class="fa fa-facebook facebook"></i></a></li>
                                <li><a href=""><i class="fa fa-twitter twitter"></i></a></li>
                                <li><a href=""><i class="fa fa-instagram instagram"></i></a></li>
                                <li><a href=""><i class="fa fa-google-plus google"></i></a></li>
                                <li><a href=""><i class="fa fa-skype skype"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- ./ End footer-bottom -->
    </footer><!-- ./ End Footer Area -->

@endsection
