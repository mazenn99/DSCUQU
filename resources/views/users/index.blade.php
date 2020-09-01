@extends('users.template.master')
@section('title' , 'الصفحة الرئيسية')
@section('content')
    @section('photo')
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-sm-offset-1">
                    <div class="intro-text  wow slideInUp" data-wow-duration="1.5s" data-wow-delay=".2s">

                        <h1>Education A Global Community</h1>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscingl elit sed diam nonumm nibhy
                            euismod<br> tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        <a href="#." class="el-btn-regular slider-btn-left">Get Started now</a> <a href="#."
                                                                                                   class="el-btn-regular">View
                            Courses</a>
                    </div>
                </div>
                <div class="col-sm-12 text-center">
                    <div class="mouse-icon-box">
                        <a href="#" class="mouse-icon"></a>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    @endsection
    <body class="home_version_03 home_version_02 home_version_04">
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <!-- Start Welcome Area section -->
    <section class="Welcome-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 section-header-box">
                    <div class="section-header">
                        <h2 class="text-center">Welcome to EduRead</h2>
                        <p>Lorem ipsum dolor sit amet mollis felis dapibus arcu donec viverra Pede phasellus eget Etiam
                            maecenas.</p>
                    </div><!-- ends: .section-header -->
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4 wel-ful-box-2">
                    <div class="wel-text-box">
                        <div class="wel-icon">
                            <img src="{{asset('site')}}/images/index-02/welcome-01.png" alt="">
                        </div>
                        <div class="wel-text">
                            <h3>Learn Anywhere Online</h3>
                            <p>Lorem ipsum dolor sit amet mollis felis dapibus arcu donec viverra Pede phasellus eget
                                Etiam maecenas.</p>
                            <a href="#">read more<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 wel-ful-box-2">
                    <div class="wel-text-box">
                        <div class="wel-icon">
                            <img src="{{asset('site')}}/images/index-02/welcome-02.png" alt="">
                        </div>
                        <div class="wel-text">
                            <h3>Graduation Certificate</h3>
                            <p>Lorem ipsum dolor sit amet mollis felis dapibus arcu donec viverra Pede phasellus eget
                                Etiam maecenas.</p>
                            <a href="#">read more<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4  wel-ful-box-2">
                    <div class="wel-text-box">
                        <div class="wel-icon">
                            <img src="{{asset('site')}}/images/index-02/welcome-03.png" alt="">
                        </div>
                        <div class="wel-text">
                            <h3>Professional Teachers</h3>
                            <p>Lorem ipsum dolor sit amet mollis felis dapibus arcu donec viverra Pede phasellus eget
                                Etiam maecenas.</p>
                            <a href="#">read more<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ End Welcome Area section -->




    <!-- Start Up Comming Events Area Section -->
    <section class="events-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 section-header-box">
                    <div class="section-header">
                        <h2>Upcoming Events</h2>
                    </div><!-- ends: .section-header -->
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 events-full-box">
                    <div class="events-single-box">
                        <div class="row">
                            <div class="col-sm-5">
                                <img src="images/index/events-01.jpg" alt="" class="img-responsive">
                            </div>

                            <div class="col-sm-7 event-info">
                                <h3>Basic UI & UX Design for new development</h3>
                                <p class="events-time">
								<span>
									<i class="fa fa-calendar event-icon"></i>
									1st January
								</span>
                                    <span>
									<i class="fa fa-clock-o event-icon"></i>
									8:00am - 5:00pm
								</span>
                                    <span>
									<i class="fa fa-map-marker event-icon"></i>
									New York
								</span>
                                </p>

                                <p>Lorem ipsum dolor sit amet mollis felis dapibus arcur donec viverra phasellus eget.
                                    Etiam maecenas vel vici quis dictum rutrum nec nisi et. Ac penatibus aenean laoreet
                                    Pede enim nunc ultricies quis rhoncus.</p>

                                <a class="event-btn" href="#">Read More<i
                                        class="fa fa-long-arrow-right events-btn-icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 events-full-box">
                    <div class="events-single-box">
                        <div class="row">
                            <div class="col-sm-5">
                                <img src="images/index/events-02.jpg" alt="" class="img-responsive">
                            </div>

                            <div class="col-sm-7 event-info">
                                <h3>Digital Art & 3D Model – a future for film company</h3>
                                <p class="events-time">
								<span>
									<i class="fa fa-calendar event-icon"></i>
									1st January
								</span>
                                    <span>
									<i class="fa fa-clock-o event-icon"></i>
									8:00am - 5:00pm
								</span>
                                    <span>
									<i class="fa fa-map-marker event-icon"></i>
									New York
								</span>
                                </p>

                                <p>Lorem ipsum dolor sit amet mollis felis dapibus arcur donec viverra phasellus eget.
                                    Etiam maecenas vel vici quis dictum rutrum nec nisi et. Ac penatibus aenean laoreet
                                    Pede enim nunc ultricies quis rhoncus.</p>

                                <a class="event-btn" href="#">Read More<i
                                        class="fa fa-long-arrow-right events-btn-icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ./ End Events Area section -->

    <!-- Start Video Area Section -->
    <section class="video-main-area video">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 video-play-btn">
                    <a href="http://www.youtube.com/watch?v=DcN_hcHXR_0" class="video-iframe"><i class="fa fa-play"></i></a>
                </div>

                <div class="video-content">
                    <h2>Take a Tour EduRead Campus</h2>
                </div><!-- ends: .section-header -->
            </div>
        </div>
    </section>
    <!-- ./ End Video Area section -->
    <!-- Instraction Area section -->
    <section class="trausted-stu-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="trausted-content">
                        <div class="row">
                            <div class="col-sm-12 col-md-9">
                                <h3 class="section-h-medium">TRUSTED BY OVER 10000+ STUDENTS</h3>
                                <p>Join our community of students around the world helping you succeed.</p>
                            </div>

                            <div class="col-sm-12 col-md-3">
                                <div class="trausted-stu-btn">
                                    <a href="#" class="">get strated</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ End Instruction Area section -->
@endsection
