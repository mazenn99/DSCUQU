@extends('users.template.master')
@section('title' , __('Login'))
@section('content')
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Reset Password') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    @if (session('status'))--}}
{{--                        <div class="alert alert-success" role="alert">--}}
{{--                            {{ session('status') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}

{{--                    <form method="POST" action="{{ route('password.email') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Send Password Reset Link') }}--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

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
                <form method="POST" action="{{ route('password.email') }}" class="learnpro-register-form text-center">
                    @csrf
                    <p>
                        هل نسيت كلمه المرور ؟
                         الرجاء ادخال الايميل المسجل لدينا لاعاده تعين كلمة المرور
                    </p>
                    @if (session('status'))
                                            <div class="alert alert-success" role="alert">
                                                {{ session('status') }}
                                            </div>
                                        @endif
                    <div class="form-group">
                        <input autocomplete="off" class="required form-control" placeholder="الايميل" value="{{old('email')}}" name="email" type="text">
                        @error('email')
                        <span class="text-danger invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group register-btn">
                        <button class="btn btn-primary btn-lg">
                            تعين كلمة المرور
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- ./ End Teachers Area section -->

@endsection
