@component('mail::message')
# Welcome to #myalbum

Thanks for signing up. **We really appreciate it.**

@component('mail::button', ['url' => ''])
View my dashboard
@endcomponent

{{-- Panel markdown (not by default) --}}
@component('mail::panel')
This is the panel content.
@endcomponent

{{-- TAble markdown (not by default)  --}}
@component('mail::table')
| #myalbum      | Table          | Pris per bild  |
| ------------- |:--------------:| --------------:|
| Col 2 is      | Centered       | 	$10      	|
| Col 3 is      | Right-Aligned  | 	$20      	|
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
