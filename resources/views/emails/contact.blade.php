@component('mail::message')
    # {{$user->name}} ({{$user->email}}) has sent you a message.

<hr>

{{$body}}

<hr>

{{--@component('mail::button', ['url' => ''])--}}
{{--Button Text--}}
{{--@endcomponent--}}


Thanks,<br>
Your friends at {{ config('app.name') }}
@endcomponent
