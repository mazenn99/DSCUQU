@extends('users.template.master')
@section('title' , 'Edit ' . \Illuminate\Support\Facades\Auth::user()->name)
@section('style')
    <style>
        .radioLeft {
            margin-bottom: -10px;
        }

        .glyphicon glyphicon-user {
            margin-left: 50px;
        }
    </style>
@endsection
@section('photo')
    <header id="header">
        <div class="header-body">
            <nav class="navbar edu-navbar">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="#" class="navbar-brand  data-scroll"><img src="images/dsc-logo.png" alt=""></a>
                    </div>
                </div><!-- /.container -->
            </nav>
        </div>
    </header>
    <!--  End header section-->
@endsection
@section('content')
    <body class="login home_version_03 home_version_02">
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <!-- Teachers Area section -->
    <section class="login-area" dir="rtl">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <form action="{{route('update-information')}}" method="POST"
                          class="learnpro-register-form text-center">
                        @csrf
                        <h1 style="color: #fec722;" class="text-primary"><span><i class="fa fa-user"
                                                                                  aria-hidden="true"></i></span> 
                                          تعديل الملف الشخصي
                            </h1>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon" style="background:#fec722;"><i class="fa fa-user"
                                                                                               style="color:#000000;"></i></span>
                                <input type="text" value="{{Auth::user()->name}}" class="form-control" name="username"
                                       placeholder="الإسم" required="required">
                                       @error('username')
                                        <small class='form-text text-danger'>{{$message}}</small>
                                       @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon" style="background:#fec722;"><i class="fa fa-envelope"
                                                                                               style="color: #000000;"></i></span>
                                <input type="email" value="{{Auth::user()->email}}" class="form-control" name="email"
                                       placeholder="البريد الالكتروني" required="required">
                                       @error('email')
                                       <small class='form-text text-danger'>{{$message}}</small>
                                       @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon" style="background:#fec722;"><i class="fa fa-lock"
                                                                                               style="color: #000000;"></i></span>
                                <input type="password" class="form-control" name="password" placeholder="كلمة المرور">
                                @error('password')
                                <small class='text-danger'>{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon " style="background:#fec722;"><i
                                        class="fa fa-venus-mars  " aria-hidden="true"
                                        style="color: #000000;"></i></span>
                                <select class="form-control" name="sex">
                                    <option value="0" @if(Auth::user()->sex == 0) {{'selected'}} @endif>ذكر</option>
                                    <option value="1" @if(Auth::user()->sex == 1) {{'selected'}} @endif>انثى</option>
                                </select>
                                @error('sex')
                                <small class='form-text text-danger'>{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <br> <br> <br>
                        <div class="form-group register-btn">
                            <button class="btn btn-primary btn-lg">حفظ</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ End Teachers Area section -->
@endsection
