@component('mail::message')
# Introduction
Message from {{$name}}
<br>
Message is:
{{ $message }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
