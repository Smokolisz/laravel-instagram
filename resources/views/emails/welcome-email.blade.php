@component('mail::message')
# Welcome Ą Ę

nice tutorial tho, i like it very much

@component('mail::button', ['url' => 'https://google.com'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
