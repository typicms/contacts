<x-bootform::hidden name="locale" :value="isset($model->locale) ? $model->locale : app()->getLocale()" />

<x-bootform::hidden name="id" />

<x-bootform::text :label="__('Name') . &quot; <span class=\&quot;required_mark\&quot;>*</span>&quot;" name="name" required autocomplete="on" />

<x-bootform::email :label="__('Email') . &quot; <span class=\&quot;required_mark\&quot;>*</span>&quot;" name="email" required autocomplete="on" />

<x-bootform::textarea :label="__('Message') . &quot; <span class=\&quot;required_mark\&quot;>*</span>&quot;" name="message" required />

<div class="mb-3">
    <x-bootform::checkbox :label="__('I agree to the Privacy Policy') . &quot; <span class=\&quot;required_mark\&quot;>*</span>&quot;" name="privacy_policy_accepted" required />
</div>

<div class="mb-3">
    <span class="required_mark">*</span>
    @lang('Mandatory fields')
</div>
