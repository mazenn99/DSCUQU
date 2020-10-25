@extends('users.template.master')
@section('title' , $speaker->name)
@section('content')
    <body class="t-profile-01 home_version_03 home_version_02" dir='rtl'>
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>

    <!-- Teachers Area section -->
    <section class="teacher-prolile-01 home_version_03 home_version_02 home_version_04">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 t-profile-left">
                    <div class="teacher-contact">
                        <img src="{{asset('site/images/User-Circle-512.png')}}" alt="" class="img-responsive">
                        <h3>وسائل التـــواصل</h3>
                        <ul class="list-unstyled">
                            <li><a href="{{$speaker->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{$speaker->snap}}" target="_blank"><i class="fa fa-snapchat"></i></a></li>
                            <li><a href="{{$speaker->instagram}}" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="{{$speaker->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-9 t-profile-right">
                    <div class="row all-corsess-wapper">
                        <div class="col-sm-12">
                            <div class="all-courses">
                                <h3>اسم المتحدث  {{$speaker->name}}</h3>
                                <h3> نبذه عن المتحدث </h3>
                                <p>{{$speaker->overview}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row courses-instuctor">
                        <div class="col-sm-12">
                            <h3 class="courses-title">الدورات المقدمه من  {{$speaker->name}}</h3>
                            <div class="row item-margin">
                                @foreach(\App\Models\Courses::where('speaker_id' , $speaker->id)->get() as $course)
                                    <div class="col-sm-6 instractor-single py-2">
                                        <div class="instractor-courses-single">
                                            {{--<div class="img-box">
                                                <img src="{{asset('site/images/dsc-logo.png')}}" alt="" class="img-responsive">
                                            </div>--}}
                                            <div class="instractor-courses-text">
                                                <div class="instractor-parson">
                                                    {{--<div class="parson-img">
                                                        <img src="https://via.placeholder.com/62x63" alt="" class="img-circle">
                                                    </div>--}}
                                                    {{--<p><a href="">{{$speaker->name}}</a></p>--}}
                                                </div>
                                                <div class="text-bottom">
                                                    <h3><a href="#">{{$course->title}}</a></h3>
                                                    <p>
                                                        {{$course->details}}
                                                    </p>
                                                </div>
                                            </div>
                                            {{-- 
                                            <div class="price">
                                                <ul class="list-unstyled">
                                                    <li><i class="fa fa-user"></i>{{$course->usersCourses()->count()}}</li>
                                                </ul>
                                            </div>
                                            --}}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ End Teachers Area section -->
@endsection
