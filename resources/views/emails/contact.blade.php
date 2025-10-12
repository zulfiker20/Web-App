@component('mail::message')

**Name:** {{ $form_data['name'] }}
**Email:** {{ $form_data['email'] }}

**Message:**
{{ $form_data['message'] }}

Thanks
@endcomponent
