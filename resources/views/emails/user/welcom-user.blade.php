@component('mail::message')
# Bienvenue {{ $user->name }}

Merci de vous etes enregistrer avec l'adresse {{ $user->email }}


@endcomponent
