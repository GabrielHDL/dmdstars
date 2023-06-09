<x-mail::message>
# Hi!, {{$partner['name']}}

hank you for your support. We will get in touch with you as soon as possible.
<br>

<x-mail::button :url="'https://dmdstars.com'">
Go to DMD Stars®
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
