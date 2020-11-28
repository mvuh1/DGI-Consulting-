@component('mail::message')
# TAGIHAN PEMBAYARAN

Berikut tagihan anda untuk pembayaran


@component('mail::button', ['url' => ''])
wut ?
@endcomponent

Gunakan kode tagihan tersebut untuk membayar tagihan.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
