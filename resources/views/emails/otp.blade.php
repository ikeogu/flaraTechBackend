@component('mail::message')

    @component('mail::panel')
        Your one time verification password is <b>{{$otp->token}}</b>. It will expire at {{Carbon\Carbon::make($otp->expires_at)->toDateTimeString()}}.
    @endcomponent

@endcomponent
