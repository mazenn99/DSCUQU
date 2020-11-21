@component('mail::message')
# Welcome Dear

We Published a new course in our web site the course about {{$courseName}} <br>
in {{$courseDate}} at {{$courseHours}}
<br>
the content is {{$courseContent}}

@component('mail::button', ['url' => route('All-courses.show' , $slug)])
Direct Subscription
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
