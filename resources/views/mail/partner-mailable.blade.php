<x-mail::message>
# New Partner

{{$partner['name']}} has requested to contact the DMD Stars team to:
<br>
Request more information about being a sponsor and the event.
<br>
<br>
They left their personal information:
<br>
Email: {{$partner['email']}}
<br>
Phone: {{$partner['phone']}}

<x-mail::button :url="'mailto:'.$partner['email']">
Touch
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
