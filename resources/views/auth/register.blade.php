@extends('users.template.master')
@section('title' , __('Register'))
@section('content')
    <body class="register" >
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>

<!-- Teachers Area section -->
<section class="register-area" dir="rtl">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <form action="{{ route('register') }}" method="POST" class="learnpro-register-form">
                    @csrf
                    <p class="lead">
                        
                        مرحبا بك , يسعدنا تسجيلك معنا
                        
                        </p>
                    <div class="form-group">
                        <input class="form-control" value="{{old('name')}}" placeholder="ادخل اسمك الثلاثي" type="text" name="name" required>
                        <small class="text-muted">
                            الرجاء ادخال اسمك بشكل صحيح , سيتم اعتماد هذا الاسم بالشهادة
                            </small>
                        @error('name')
                            <small class="text-danger form-text">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" value="{{old('email')}}" name="email" placeholder="الأيميل" required>
                        @error('email')
                            <small class="text-danger form-text">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input class="required form-control" name="password" placeholder="كلمة المرور"  type="password" required>
                        @error('password')
                            <small class="text-danger form-text">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input class="required form-control" placeholder="تأكيد كلمة المرور" name="password_confirmation" type="password" required>
                        @error('password_confirmation')
                            <small class="text-danger form-text">{{$message}}</small>
                        @enderror
                    </div>
                        <div class="form-group">
                                <select class="required form-control" name="sex">
                                    <option value="0">ذكر</option>
                                    <option value="1">انثى</option>
                                </select>
                                @error('sex')
                                <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                            </div>
                    <div class="form-group register-btn">
                        <button class="btn btn-primary btn-lg">تسجيل جديد</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- ./ End Teachers Area section -->


@endsection

