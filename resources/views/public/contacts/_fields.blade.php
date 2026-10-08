@php($requiredMark = ' <span class="required_mark">*</span>')

<x-bootform::hidden name="locale" :value="isset($model->locale) ? $model->locale : app()->getLocale()" />

<x-bootform::hidden name="id" />

<x-bootform::text :label="__('Name') . $requiredMark" name="name" required autocomplete="on" />

<x-bootform::email :label="__('Email') . $requiredMark" name="email" required autocomplete="on" />

<x-bootform::textarea :label="__('Message') . $requiredMark" name="message" required />

<div class="mb-5">
    <x-bootform::checkbox :label="__('I agree to the Privacy Policy') . $requiredMark" name="privacy_policy_accepted" required />
</div>

<div class="mb-5">
    <span class="required_mark">*</span>
    @lang('Mandatory fields')
</div>
