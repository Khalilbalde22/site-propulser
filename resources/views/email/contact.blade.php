<x-mail::message>
# contact from {{ $nom }}

{{ $message }}.

<x-mail::button :url="'http://site-propulser.test/'">
Contact Us
</x-mail::button> 

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
