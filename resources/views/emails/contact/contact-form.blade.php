@component('mail::message')
# Bonjour 

Vous avez recu un message de la part {{ $data['name'] }} ({{ $data['email'] }})

message
{{ $data['message'] }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
