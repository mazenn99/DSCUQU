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
@endsection
