@component('mail::message')
# Welcome to my album!

Thanks for signing up **to my album!**

@component('mail::button', ['url' => 'http://blog.test/dashboard'])
View my dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
