@extends('users.template.master')
@section('title' , 'Dashboard ' . Auth::user()->name)
@section('content')
    <body class="t-profile-01 home_version_03 home_version_02" >
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>

    <!-- Teachers Area section -->
    <section class="teacher-prolile-01 home_version_03 home_version_02 home_version_04">
        <div class="container" dir="rtl">
            <div class="row">
                <div class="col-sm-9 t-profile-right">
                    <div class="row courses-instuctor">
                        <div class="col-sm-12">
                            <h3 class="courses-title">
                            جميع الدورات المسجلة لــ
                            {{Auth::user()->name}}
                            </h3>
                            <div class="row item-margin">
                                @foreach(\App\User::find(\Illuminate\Support\Facades\Auth::id())->usersCourses()->where('users_id' , \Illuminate\Support\Facades\Auth::id())->get() as $courses)
                                    <div class="col-sm-6 instractor-single">
                                        <div class="instractor-courses-single">
                                            <div class="img-box">
                                                <img src="{{asset('site/images/hero-image/logoDSC.jpg')}}" alt="" class="img-responsive">
                                            </div>
                                            <div class="instractor-courses-text">
                                                <div class="instractor-parson">
{{--                                                    <div class="parson-img">--}}
{{--                                                        <img src="https://via.placeholder.com/62x63" alt=""--}}
{{--                                                             class="img-circle">--}}
{{--                                                    </div>--}}
                                                    <p><a href="">
                                                            {{$courses->title}}
                                                        </a></p>
                                                </div>
{{--                                                <div class="text-bottom">--}}
{{--                                                    <h3><a href="#">--}}
{{--                                                            {{$courses->title}}--}}
{{--                                                        </a></h3>--}}
{{--                                                    <p>--}}
{{--                                                        {{$courses->details}}--}}
{{--                                                    </p>--}}
{{--                                                </div>--}}
                                            </div>
                                            <div class="price">
                                                @if(\App\Models\Certificate::where(['courses_id' => $courses->id] , 'users_id' , \Illuminate\Support\Facades\Auth::id())->first('id'))
                                                    <form action="{{route('get-certificate')}}" method="POST">
                                                        @csrf
                                                        <input type="hidden" value="{{$courses->id}}" name="courseID">
                                                        <button class="btn btn-block" style="background-color:#fec722">
                                                            تحميل الشهادة  <i class="fa fa-download"></i>
                                                        </button>
                                                    </form>
                                                    @else
                                                    <p class="text-danger text-center">لم يتم اصدار شهاداتك حتى الان ، سيتم اشعارك على الايميل عند الاصدار</p>
                                                @endif
                                                <ul class="list-unstyled">
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
