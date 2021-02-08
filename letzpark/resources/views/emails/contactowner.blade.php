@component('mail::message')
# Someone is interested in your offer

Hello, {{$ownerName}}! 
<br>
Our admin<br>
{{$rentalName}}. <br>
You can contact them at <em>{{$requesterEmail}}</em>.
<br>

{{$message}} <br>

{{-- @component('mail::button', ['url' => 'https://www.google.com/'])
Button Text
@endcomponent --}}

Thanks,<br>
The {{ config('app.name') }} Team
@endcomponent
