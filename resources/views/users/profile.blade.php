@extends('users.template.master')
@section('title' , 'profile')
@section('content')
    <body class="t-profile-01 home_version_03 home_version_02 home_version_04">
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
                        <img src="https://via.placeholder.com/261x293" alt="" class="img-responsive">
                        <h3>Contact Info</h3>
                        <ul class="list-unstyled">
                            <li><a href="{{$speaker->facebook}}"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{$speaker->snap}}"><i class="fa fa-snapchat"></i></a></li>
                            <li><a href="{{$speaker->instagram}}"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="{{$speaker->twitter}}"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-9 t-profile-right">
                    <div class="row all-corsess-wapper">
                        <div class="col-sm-12">
                            <div class="all-courses">
                                <h3>Name : {{$speaker->name}}</h3>
                                <h3> Overview </h3>
                                <p>{{$speaker->overview}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row courses-instuctor">
                        <div class="col-sm-12">
                            <h3 class="courses-title">Courses By {{$speaker->name}}</h3>
                            <div class="row item-margin">
                                @foreach(\App\Models\Courses::where('speaker_id' , $speaker->id)->limit(5)->get() as $course)
                                    <div class="col-sm-6 instractor-single pb-2">
                                        <div class="instractor-courses-single">
                                            <div class="img-box">
                                                <img src="https://via.placeholder.com/360x245" alt="" class="img-responsive">
                                            </div>
                                            <div class="instractor-courses-text">
                                                <div class="instractor-parson">
                                                    <div class="parson-img">
                                                        <img src="https://via.placeholder.com/62x63" alt="" class="img-circle">
                                                    </div>
                                                    <p><a href="">Derek Spafford</a> / <span>Professor</span></p>
                                                </div>
                                                <div class="text-bottom">
                                                    <h3><a href="#">Mathematics and Statistics</a></h3>
                                                    <p>Lorem ipsum dolor sit amet consepctetur adipiscing elit Etiam at ipsum at ligula vestibulum sodales Sed luctus.</p>
                                                </div>
                                            </div>
                                            <div class="price">
                                                <ul class="list-unstyled">
                                                    <li><i class="fa fa-user"></i>50 Students</li>
                                                    <li>$50.00</li>
                                                </ul>
                                            </div>
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
