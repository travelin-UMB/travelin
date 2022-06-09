@component('mail::message')
# Hallo Mr / Mrs

Thankyou for your reservation package with detail : <br><br>
<b>
Paket Travel : {{ $travel_paket }} <br>
City         : {{ $city }} <br>
Participant  : {{ $participant_count }} <br>
Total Price  : @currency($travel_price * $participant_count) <br>
Date Travel  : {{ $travel_date }}
</b>

@if($status == 0)
Make payment before 1 hour and upload  payment slip in form below for package transactions remain active!
@elseif($status == 1)
Thank you for make the payment, please wait for admin confirmation
@elseif($status == 2)
Yeayy, your package is active. Have enjoy with this trip
@elseif($status == 3)
Your package is non active. But you can reservation again with other trip to our website
@elseif($status == 4)
Opps, your package is rejected. Please submit again  with data correctly in our website
@endif

Thanks,<br>
# {{ config('app.name') }}
@endcomponent
