@component('mail::message')

{{$single['name']}},<br>
Your application for OBC/SC/ST Certificate is REJECTED due to {{$single['forwarder_comments']}}<br>
Application ID :{{$single['reg_no']}}<br>

@endcomponent
