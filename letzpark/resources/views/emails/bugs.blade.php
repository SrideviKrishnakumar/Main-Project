@component('mail::message')
# Thank you for your feedback!

Hello, {{$userName}}! 
<br>
Thank you for reporting a bug in our site. Your feedback is always welcomed and appreciated.<br>
One of our Admins has replied to your query: <br>
{{$response}}. <br>



{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
