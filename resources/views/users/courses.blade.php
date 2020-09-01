@extends('users.template.master')
@section('title' , 'الصفحة الرئيسية')
@section('content')
    <body class="event-01">
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    @section('photo')

    @endsection

    <!-- Teachers Area section -->
    <section class="events-list-03">
        <div class="container">
            @foreach($courses as $course)
                <a href="{{route('courses.show' , $course->slug)}}">
                    <div class="row event-body-content">

                        <div class="col-sm-12 events-full-box">
                            <div class="events-single-box">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <img src="{{$course->picture}}" alt="" class="img-responsive">
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
									{{$course->start_time}} - {{$course->end_time}}
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

                                        <a class="event-btn" href="#">Read More<i
                                                class="fa fa-long-arrow-right events-btn-icon"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">
                    {{$courses->links()}}
                </ul>
            </nav>
        </div>
    </section>
    <!-- ./ End Teachers Area section -->
@endsection
