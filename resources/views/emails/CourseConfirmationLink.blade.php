@component('mail::message')
{{-- # Dear {{$name}} --}}

<bold>تأكيد الحضور</bold> لورشة{{$courseTitle}}
<p>
   مرحباً,هذه الرسالة لتأكيد حضورك     <br>
   ولحضور هذا الحدث مباشرة قم بالدخول على هذا الرابط 
</p>
{{$courseLink}}
<br> 
ستقام الدورة بتاريخ {{$courseDate}}
في تمام الساعة {{$startTime}}
<br>
متشوقين الى لقائك 
{{--@component('mail::button', ['url' => $courseLink])--}}
{{--Course Link--}}
{{--@endcomponent--}}

مع تحيات,<br>
{{ config('app.name-ar') }}
@endcomponent


