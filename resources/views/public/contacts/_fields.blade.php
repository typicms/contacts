<x-bootform::hidden name="locale" :value="isset($model->locale) ? $model->locale : app()->getLocale()" />

<x-bootform::hidden name="id" />

<x-bootform::text
    :label='__(&apos;Name&apos;) . " <span class=\"required_mark\">*</span>"'
    name="name"
    required
    autocomplete="on"
/>

<x-bootform::email
    :label='__(&apos;Email&apos;) . " <span class=\"required_mark\">*</span>"'
    name="email"
    required
    autocomplete="on"
/>

<x-bootform::textarea
    :label='__(&apos;Message&apos;) . " <span class=\"required_mark\">*</span>"'
    name="message"
    required
/>

<div class="mb-3">
    <x-bootform::checkbox
        :label='__(&apos;I agree to the Privacy Policy&apos;) . " <span class=\"required_mark\">*</span>"'
        name="privacy_policy_accepted"
        required
    />
</div>

<div class="mb-3">
    <span class="required_mark">*</span>
    @lang('Mandatory fields')
</div>
