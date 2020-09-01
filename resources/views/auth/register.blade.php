@extends('users.template.master')
@section('title' , __('Register'))
@section('content')
    <body class="register">
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Register') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('register') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

{{--                                @error('name')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Register') }}--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

<!-- Teachers Area section -->
<section class="register-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <form action="{{ route('register') }}" method="POST" class="learnpro-register-form">
                    @csrf
                    <p class="lead">Register New Account</p>
                    <div class="form-group">
                        <input class="form-control" value="{{old('name')}}" placeholder="Please Enter Name" type="text" name="name" required>
                        <small class="text-muted">Please Enter You're name correctly we use this name to print certificate </small>
                        @error('name')
                            <small class="text-danger form-text">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" value="{{old('email')}}" name="email" placeholder="Please Enter email" required>
                        @error('email')
                            <small class="text-danger form-text">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input class="required form-control" name="password" placeholder="Please enter password"  type="password" required>
                        @error('password')
                            <small class="text-danger form-text">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input class="required form-control" placeholder="re-write you're password" name="password_confirmation" type="password" required>
                        @error('password_confirmation')
                            <small class="text-danger form-text">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sex" id="exampleRadios1" value="0">
                        <label class="form-check-label" for="exampleRadios1">
                            male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sex" id="exampleRadios2" value="1">
                        <label class="form-check-label" for="exampleRadios2">
                            female
                        </label>
                    </div>
                    @error('sex')
                        <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                    <div class="form-group register-btn">
                        <button class="btn btn-primary btn-lg">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- ./ End Teachers Area section -->


@endsection

