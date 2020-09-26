@include('admins.template.header')
@if(Auth::guard('admin')->check())
    @include('admins.template.navbar')
@endif
@yield('content')
@include('admins.template.footer')
