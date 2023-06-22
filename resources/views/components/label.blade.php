@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-sm text-deer font-saol font-bold']) }}>
    {{ $value ?? $slot }}
</label>
