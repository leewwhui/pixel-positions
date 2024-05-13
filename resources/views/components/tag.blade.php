@props(['size' => 'base'])

@php
    $classes = "bg-white/10 hover:bg-white/25 px-2 py-1 rounded-xl transition-colors duration-100 cursor-pointer";

    if ($size == 'base')
    {
        $classes .= " px-5 py-1 text-sm";
    }

    if ($size == 'small')
    {
        $classes .= " px-3 py-1 text-xxs";
    }
@endphp


<a {{$attributes(['class' => $classes])}}>{{$slot}}</a>
