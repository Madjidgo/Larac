@component('mail::message')
# Introduction
- Name:{{$name}}
- Email:{{$email}}


The body of your message.

@component('mail::button', ['url' => 'htts//madjidgo@gmail.com', 'color' => 'green'])
Button Text
@endcomponent

@component('mail::panel')
{{$msg}}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

