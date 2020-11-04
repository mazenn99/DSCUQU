@extends('users.template.master')
@section('title' , $course->title)
@section('style')
    <style>
        .our-team {
            padding: 30px 0 40px;
            margin-bottom: 30px;
            background-color: #FFFFFF;
            text-align: center;
            overflow: hidden;
            position: relative;
        }

        .our-team .picture {
            display: inline-block;
            height: 130px;
            width: 130px;
            margin-bottom: 50px;
            z-index: 1;
            position: relative;
        }

        .our-team .picture::before {
            content: "";
            width: 100%;
            height: 0;
            border-radius: 50%;
            background-color: #fec722;
            position: absolute;
            bottom: 135%;
            right: 0;
            left: 0;
            opacity: 0.9;
            transform: scale(3);
            transition: all 0.3s linear 0s;
        }

        .our-team:hover .picture::before {
            height: 100%;
        }

        our-team .picture::after {
            content: "";
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background-color: #fec722;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
        }

        .btn-primary
        {color:#fff;
            background-color:#337ab7;
            border-color:#2e6da4
        }

        .our-team .picture img {
            width: 100%;
            height: auto;
            border-radius: 50%;
            transform: scale(1);
            transition: all 0.9s ease 0s;
        }

        .our-team:hover .picture img {
            box-shadow: 0 0 0 14px #f7f5ec;
            transform: scale(0.7);
        }

        .our-team .title {
            display: block;
            font-size: 15px;
            color: #4e5052;
            text-transform: capitalize;
        }

    </style>
@endsection
@section('content')
    <body class="event-details-1 home_version_03 home_version_02">
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <!--  End header section-->

    <div class="event-details">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 post_left-side">
                    <div class="row">
                        <div class="col-sm-12 ">
                            <div class="post-img-box">
                                <img src="{{asset('site/images/
hero-image/logoDSC.jpg')}}" alt="" class="img-responsive">
                            </div>
                            <div class="clock-countdown">
                                <div class="site-config"></div>
                                <div class="coundown-timer">
                                    <div class="single-counter"><span class="days" id="timerDays">21</span><span class="normal">Days</span></div>
                                    <div class="single-counter single-chag-color"><span class="hours" id="timerHours">12</span><span class="normal">Hours</span></div>
                                    <div class="single-counter"><span class="minutes" id="timerMinutes">25</span><span class="normal">Minutes</span></div>
                                    <div class="single-counter single-chag-color"><span class="seconds" id="timerSeconds">48</span><span class="normal">Seconds</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="description-content">
                                <div class="description-heading">
                                    <h3><a href="">{{$course->title}}</a></h3>
                                    <p>
                                        <span><i class="fa fa-calendar"></i>{{\Carbon\Carbon::parse($course->course_date)->toDateString()}}</span>
                                        <span><i class="fa fa-map-marker"></i>{!! $course->getOnline() !!}</span>
                                    </p>
                                </div>
                                <div class="description-text">
                                    <div class="row">
                                        <div class="col-sm-1">
                                            <div class="description-side-left">
                                                <ul class="pst-social-icon list-unstyled">

                                                    <li><a href="https://www.twitter.com/dscuqu" target="_blank"
                                                           class="fa fa-twitter twitter"></a></li>
                                                    <li>
                                                        <a href="https://www.youtube.com/channel/UCihwwL2n2OZ10oxvajU9duw/search"
                                                           target="_blank" class="fa fa-youtube youtube"></a></li>

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-11">
                                            <div class="description-text-right">
                                                <h3> عن هذا الحدث</h3>
                                                <p>{{$course->details}}</p>

                                                <h3>المتحدث</h3>
                                                <div class="col-sm-12 col-md-12">
                                                    <div class="more-events">
                                                        <div class="event-single-box">
                                                            <div class="col-sm-12 col-md-12">
                                                                <div class="more-events">
                                                                    <div class="container">
                                                                        <div class="row">
                                                                            <div
                                                                                class="col-12 col-sm-6 col-md-4 col-lg-3">
                                                                                <div class="our-team">
                                                                                    <div class="picture">
                                                                                        <img class="img-fluid"
                                                                                             src="{{asset('site/images/comment/comment-avatar.png')}}">
                                                                                    </div>

                                                                                    <div class="blog-content">
                                                                                        <div class="content-bottom ">
                                                                                            <h3 class="name">Mazen</h3>
                                                                                            <h4 class="title">
                                                                                                مقدم الدورة
                                                                                                </h4>
                                                                                            <span
                                                                                                class="more-events first-item"><a
                                                                                                    href="{{route('profile.show' , $course->speaker_id)}}">الملف الشخصي<i
                                                                                                        class="fa fa-long-arrow-right blog-btn-icon"></i></a></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class='col-sm-12 col-md-12'>
                                            <div class="jumbotron">
                                            @auth
                                            <h3 class="display-2">للتسجيل في الدورة</h3>
                                            <p class="lead">يمكنك التسجيل في الدورة بشكل مباشر وسيصلك رابط الدورة على ايميلك المسجل في موقعنا</p>
                                                <hr class="my-4">
                                            <p class="lead">
                                                @if(Auth::user()->email_verified_at != NULL)
                                                    <button dir="rtl" data-value="{{$course->id}}" id="register" class="btn btn-success btn-block btn-lg mx-3">
                                                        للتسجيل اضغط هنا</button>
                                                @else
                                                    <p class="text-danger">يجب عليك تفعيل ايميلك بالضغط على الرابط المرسل الى ايميلك عند التسجيل</p>
                                                @endif
                                            </p>
                                            @else
                                            <p class="text-danger">يجب
                                                <a href='{{route('register')}}'>التسجيل</a>
                                                او
                                                <a href='{{route('login')}}'>تسجيل الدخول</a>
                                                للتسجيل في الدورة
                                            </p>
                                            @endauth
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-md-12">
                                            <div class="more-events">
                                                <div class="row">
                                                    <h3>Upcoming Events</h3>
                                                    @foreach(\App\Models\Courses::orderBy('id' , 'DESC')->limit(3)->get() as $lastCourse)
                                                        <div class="col-sm-6 col-md-4 event-single">
                                                            <div class="event-single-box">
                                                                <div class="img-box">
                                                                    <img src="{{$lastCourse->picture}}" alt=""
                                                                         class="img-responsive">
                                                                </div>
                                                                <div class="blog-content">
                                                                    <h4>
                                                                        <a href="{{route('All-courses.show' , $lastCourse->slug)}}">{{$lastCourse->title}}</a>
                                                                    </h4>
                                                                    <p class="blog-time">
												<span>
													<i class="fa fa-calendar event-icon"></i>
													{{$lastCourse->course_date}}
												</span>
                                                                        {{--                                                                        <span>--}}
                                                                        {{--													<i class="fa fa-comment"></i>--}}
                                                                        {{--													12--}}
                                                                        {{--												</span>--}}
                                                                    </p>
                                                                    <div class="content-bottom ">
                                                                        <p>{{\Illuminate\Support\Str::limit($lastCourse->details , 50)}}</p>
                                                                        <span class="first-item"><a
                                                                                href="{{route('All-courses.show' , $lastCourse->slug)}}">قرائة المزيد<i
                                                                                    class="fa fa-long-arrow-right blog-btn-icon"></i></a></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div><!--End .row-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    @section('script')
        <script>
            var timer;
            function settimer()
            {
                currentTime = new Date();
                clearInterval(timer);
                var timer_month=05;
                var timer_day=25;
                var timer_year=currentTime.getFullYear()+1;
                var timer_hour=10;
                if(timer_hour=="")timer_hour=0;
                var timer_min=30;
                if(timer_min=="")timer_min=0;

                var timer_date=timer_month+"/"+timer_day+"/"+timer_year+" "+timer_hour+":"+timer_min;
                var end = new Date(timer_date); // Arrange values in Date Time Format
                var now = new Date(); // Get Current date time
                var second = 1000; // Total Millisecond In One Sec
                var minute = second * 60; // Total Sec In One Min
                var hour = minute * 60; // Total Min In One Hour
                var day = hour * 24; // Total Hour In One Day

                function showtimer() {
                    var now = new Date();
                    var remain = end - now; // Get The Difference Between Current and entered date time
                    if(remain < 0)
                    {
                        clearInterval(timer);
                        //document.getElementById("timer_value").innerHTML = 'Reached!';
                        return;
                    }
                    var days = Math.floor(remain / day); // Get Remaining Days
                    var hours = Math.floor((remain % day) / hour); // Get Remaining Hours
                    var minutes = Math.floor((remain % hour) / minute); // Get Remaining Min
                    var seconds = Math.floor((remain % minute) / second); // Get Remaining Sec
                    document.getElementById("timerDays").innerHTML = days;
                    document.getElementById("timerHours").innerHTML = hours;
                    document.getElementById("timerMinutes").innerHTML = minutes;
                    document.getElementById("timerSeconds").innerHTML = seconds;
                }
                timer = setInterval(showtimer, 1000); // Display Timer In Every 1 Sec
            }
            settimer();
            @auth
            @if(Auth::user()->email_verified_at != NULL)
            $("#register").on('click' , function() {
                let btnVal = $(this).data('value');
                $(this).text('').html('<i class="fa fa-spinner fa-pulse fa-2x fa-fw"></i>');
                $.ajax({
                    url : '{{route('register-course')}}',
                    method : 'POST',
                    data : {
                        'CourseID' : btnVal,
                        '_token' : '{{csrf_token()}}',
                    },
                    success:function(res) {
                        if(res == 200) {
                            $("#register").html('تم تسجيلك بالدورة بنجاح سيصلك ايميل برابط الحضور , فضلا تفقد البريد الغير هام').prop('disabled' , true)
                        } else {
                            $("#register").html('<span class="text-white">انت مسجل مسبقا في الدورة</span>').prop('disabled' , true)
                        }
                    }
                })
            })
                @endif
            @endauth
        </script>
{{--
@endsection
