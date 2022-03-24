@component('mail::message')
    <p>NAME: {{strtoupper($data['name'])}}</p>
    @if(isset($data['email']))<p>EMAIL: {{$data['email']}}</p>@endif
    @if(isset($data['phone']))<p>PHONE: {{$data['phone']}}</p>@endif
    @if(isset($data['church_name']))<p>CHURCH NAME: {{$data['church_name']}}</p>@endif
    @if(isset($data['church_address']))<p>CHURCH ADDRESS: {{$data['church_address']}}</p>@endif
    @if(isset($data['position']))<p>CHURCH ADDRESS: {{$data['position']}}</p>@endif

@component('mail::panel')
    {{$data['message']}}
@endcomponent

@endcomponent
