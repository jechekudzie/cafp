@component('mail::message')
# Good day

{{$contact['message']}}

Thanks,<br>
{{$contact['name']}}<br>
{{$contact['phone']}}
<br>
<br>
<br>
{{ config('app.name') }}
@endcomponent

