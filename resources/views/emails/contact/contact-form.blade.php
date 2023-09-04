{{--Older Version --}}
{{-- @component ('mail::message') --}}
{{-- # Introduction

The body of your message.

@component('mail::button', ['url' => ''])
Button Text 
@endcomponent 

Thanks, <br>
{{ config('app.name')}} --}}

{{-- #Thank you for your message
<strong> Name : </strong> {{$data['name']}}
<strong> EMail : </strong> {{$data['email']}}
<strong> message : </strong> <br> 
{{$data['message']}} --}}
{{-- @endcomponent --}}



 <x-mail::message>
{{-- # Introduction

The body of your message.

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
 {{ config('app.name') }}    --}}

 #Thank you for your message in new format
<strong> Name : </strong> {{$data['name']}}
<strong> EMail : </strong> {{$data['email']}}
<strong> message : </strong> <br> 
{{$data['message']}} 

Thanks,<br>
 {{ config('app.name') }}

 </x-mail::message> 
 
