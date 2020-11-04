@extends('users.template.master')
@section('title' , 'Developer Student Club | نادي الطلبة المطورين')
@section('content')
@section('photo')
    <div class="container">
        <div class="row">
            		<div class="col-md-10 col-sm-offset-1">
					<div class="intro-text  wow slideInUp" data-wow-duration="1.5s" data-wow-delay=".2s">
						<h1>نادي الطلبة المطورين</h1>
					<p>  حيثُ نور المعرفة و سِهام التطوير و سُبل التعليم نضعها بين أيدي الشغوفين <br>  نصنع به مستقبلاً زاهراً لكل الحالمين <br> </p>
                        <p>يسعدنا انضمامك لتكون جزءّا من القصة</p>
						<a href="https://forms.gle/VRYY1gSkipNaaTzk7" class="el-btn-regular slider-btn-left" target="_blank">طلب الإنضمام</a>
                    </div>
				</div>
        </div><!-- /.row -->
    </div><!-- /.container -->
@endsection
<body class="home_version_03 home_version_02">
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
                 <h2 style=" text-align: center;">مرحبا بكم في نادي الطلبة المطورين</h2>
                </div><!-- ends: .section-header -->
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4 wel-ful-box-2">
                <div class="wel-text-box">
                    <div class="wel-icon">
                        <img src="{{asset('site')}}/images/index-02/reading.png" alt="">
                    </div>
                    <div class="wel-text">

                        <h3>نتعلّم</h3>
						<p style="font-size: 18px;">
						نفتح لك آفاقًا واسعة وبوابة للعبور الزمني لتصوّر شكل العالم التقني الحديث </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 wel-ful-box-2">
                <div class="wel-text-box">
                    <div class="wel-icon">
                        <img src="{{asset('site')}}/images/index-02/welcome-02.png" alt="">
                    </div>
                    <div class="wel-text">
                        <h3>نطور</h3>
						<p style="font-size: 18px;">نساعد مهاراتك على النمو ونفسح المجال لها للظهور والحظي بتجارب مختلفة معًا </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4  wel-ful-box-2">
                <div class="wel-text-box">
                    <div class="wel-icon">
                        <img src="{{asset('site')}}/images/index-02/lightbulb.png" alt="">
                    </div>
                    <div class="wel-text">
                       <h3>نوجه</h3>
						<p style="font-size: 18px;">نبيّن معالم خطواتك المستقبلية التي توجّهك نحو سوق العمل الفسيح </p>
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
                    <h2>الفعاليات القادمة </h2>
                </div><!-- ends: .section-header -->
            </div>
        </div>

        <div class="row">
            @foreach(\App\Models\Courses::orderBy('id' , 'DESC')->limit(5)->get() as $course)
                <div class="col-sm-12 events-full-box">
                    <a href="{{route('All-courses.show' , $course->slug)}}">
                    <div class="events-single-box">
                        <div class="row">
                            <div class="col-sm-5">
                                <img src="{{asset('site/images/hero-image/logoDSC.jpg')}}" alt="نادي الطلبة المطورين">
                            </div>

                            <div class="col-sm-7 event-info">
                                <h3>{{$course->title}}</h3>
                                <p class="events-time">
								<span>
									<i class="fa fa-calendar event-icon"></i>
									{{$course->course_date}}
								</span>
                                    <span>
									<i class="fa fa-clock-o event-icon"></i>
									{{$course->start_time}} -- {{$course->end_time}}
								</span>
                                    <span>
									<i class="fa fa-map-marker event-icon"></i>
									{!! $course->getOnline() !!}
								</span>

                                    <span>
                                            <i class="fa fa-certificate" aria-hidden="true"></i>
									{!! $course->getCertificate() !!}
								</span>

                                    <br>

                                    <span>
                                    <i class="fa fa-level-up" aria-hidden="true"></i>
									{!! $course->getLevels() !!}
								</span>

                                    <span>

									{!! $course->getSex() !!}
								</span>

                                </p>

                                <p>{{$course->details}}</p>

                                <a class="event-btn" href="{{route('All-courses.show' , $course->slug)}}">قرائة المزيد<i
                                        class="fa fa-long-arrow-right events-btn-icon"></i></a>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            @endforeach
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
        </div>
    </div>
</section>
<!-- ./ End Video Area section -->
<!-- Instraction Area section -->

<!-- ./ End Instruction Area section -->
</body>
@endsection
