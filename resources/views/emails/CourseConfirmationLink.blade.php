@component('mail::message')
# Dear {{$name}}

<bold>Confirm To Attend</bold> to course {{$courseTitle}}
<p>
    this message to confirm to you to attend this course <br>
    this Direct link to course
</p>
{{$courseLink}}
{{--@component('mail::button', ['url' => $courseLink])--}}
{{--Course Link--}}
{{--@endcomponent--}}

Regards,<br>
{{ config('app.name') }}
@endcomponent
