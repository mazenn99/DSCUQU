@component('mail::message')
# Hi {{$name}}

Your certificate of attendance has been issued for a course <br>
You can download it through the site

# To download certificate use this
- First you should sign in
- Go to your name in up and choose courses and certificate
- download your certificate for click into the download button

@component('mail::button', ['url' => 'https://www.dsc-uqu.com/dashboard'])
Visit Your Courses
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
