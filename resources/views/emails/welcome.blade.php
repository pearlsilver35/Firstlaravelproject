@component('mail::message')
# Hello from First Laravel Project

Welcome to our test applicatopn.

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
