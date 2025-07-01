@props(['active'])

@php
$style = ($active ?? false)
    ? 'display: inline-flex; align-items: center; padding: 0px 4px 0px 4px; padding-top: 4px; border-bottom: 2px solid #818cf8; font-size: 0.875rem; font-weight: 500; line-height: 1.25rem; color: white; outline: none; transition: all 150ms ease-in-out;'
    : 'display: inline-flex; align-items: center; padding: 0px 4px 0px 4px; padding-top: 4px; border-bottom: 2px solid transparent; font-size: 0.875rem; font-weight: 500; line-height: 1.25rem; color: white; outline: none; transition: all 150ms ease-in-out;';
@endphp

<a {{ $attributes->merge(['style' => $style]) }}>
    {{ $slot }}
</a>
