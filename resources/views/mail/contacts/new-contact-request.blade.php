<x-mail::message>
# {{ __('New message from') }} {{ $contact->full_name }}

{{ __('A new message has just been submitted. You can review the full details by clicking the button below.') }}

<x-mail::button :url="route('admin::edit-contact', $contact->id)">
{{ __('Review message') }}
</x-mail::button>

</x-mail::message>
