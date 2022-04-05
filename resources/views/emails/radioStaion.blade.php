@component('mail::message')
Hi {{$message['name']}}, <br>

<p>Your account has been registed on Flaret, and below are your login details.
<ul>
    <li>Email: {{$message['email']}}</li>
    <li>Password: {{$message['password']}}</li>
</ul>


Thanks,<br>
{{ config('app.name') }}
@endcomponent
