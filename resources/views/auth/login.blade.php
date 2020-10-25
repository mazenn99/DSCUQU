@extends('users.template.master')
@section('title' , __('Login'))
@section('content')
    <!-- Teachers Area section -->
    <body class="login">
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <!-- Teachers Area section -->
    <section class="login-area" dir="rtl">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <form method="POST" action="{{ route('login') }}" class="learnpro-register-form text-center">
                        @csrf
                        <p class="lead">
                            اهلا وسهلا 
                        </p>
                        <div class="form-group">
                            <input autocomplete="off" class="required form-control" placeholder="الإيميل *" name="email"
                                   type="text" required>
                            @error('email')
                            <span class="text-danger invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input class="required form-control" placeholder="كلمة المرور *" name="password"
                                   type="password" required>
                            @error('password')
                            <span class="text-danger invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group register-btn">
                            <button class="btn btn-primary btn-lg">دخول</button>
                        </div>
                        <a href="{{route('password.request')}}"><strong>هل نسيت كلمة المرور ؟</strong></a>
                        <p> غير مسجل ؟ <a href="{{route('register')}}"><strong>
                            انضم الينا الآن
                        </strong></a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ End Teachers Area section -->
@endsection
