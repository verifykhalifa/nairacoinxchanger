@component('mail::message')

This are your order details

Order Id    : {{ $details['orderId']}} <br/>
Btc Address : {{ $details['btcaddress']}}
Value       : {{ $details['value']}} <br/>
Total       : {{ $details['total']}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
