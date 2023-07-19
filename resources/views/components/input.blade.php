@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-deer focus:ring-deer rounded-md shadow-sm']) !!}>
