@props(['active'=>false])
@php
    $classes='px-3 py-2 text-left text-sm block hover:bg-gray-300 focus:bg-gray-300 w-full';
    if($active) $classes.=' bg-blue-500 text-white';
@endphp

<a {{$attributes->merge(['class'=>$classes])}}>{{ $slot }}</a>
