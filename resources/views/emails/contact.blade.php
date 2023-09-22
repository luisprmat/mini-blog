<x-mail::message>
# {{ __('Contact Message') }}

{{ __('The user :user has sent this request.', ['user' => '**'.$data['name'].'**']) }}

**{{ __('E-mail') }}:** {{ $data['email'] }}

**{{ __('Subject') }}:** {{ $data['subject'] }}

**{{ __('Message') }}:** {{ $data['content'] }}

<x-mail::button :url="'mailto:'.$data['email']">
{{ __('Reply') }}
</x-mail::button>

{{ __('Thanks') }},<br>
{{ config('app.name') }}
</x-mail::message>
