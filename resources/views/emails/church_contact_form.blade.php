@component('mail::message')
    <p>NAME: {{strtoupper($data['name'])}}</p>
    @if(isset($data['email']))<p>EMAIL: {{$data['email']}}</p>@endif
    @if(isset($data['phone']))<p>PHONE: {{$data['phone']}}</p>@endif

@component('mail::panel')
    {{$data['message']}}
@endcomponent

@endcomponent
