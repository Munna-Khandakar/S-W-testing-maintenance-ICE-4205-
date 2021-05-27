@component('mail::message')
# Concern Admin

You have an order pending in your Dashboard.

@component('mail::button', ['url' => 'http://localhost:8000/dashboard'])
Open Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
