@component('mail::message')

Hello, This mail from contact us {{ config('app.name') }} Bot.

<b>Name:</b> &nbsp;{{$data['name']}}<br>
<b>Mobile:</b>&nbsp;<a href="tel:{{$data['mobail']}}">{{$data['mobail']}}</a><br>
<b>Email:</b>&nbsp;<a href="mailto:{{$data['email']}}">{{$data['email']}}</a><br>
<strong>Subject:</strong>&nbsp;{{$data['subject']}}<br>
<b>User Message:</b>&nbsp; {{$data['msg']}}

@php
    $btn=$data['email'];
@endphp
@component('mail::button', ['url' => "mailto:".$btn])
Mail To user
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
