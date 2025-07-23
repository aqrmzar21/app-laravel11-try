<!--
    <div>
        Very little is needed to make a happy life. - Marcus Aurelius
    </div>
-->
{{-- untuk menyebunyikan properti classs active agar securet --}}
@props(['active' => false])


{{-- 
// Cara 1
<a href="/"
    class="{{ request()->is('/') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium"
    aria-current="page">
    Dashboard
</a> 
--}}

{{-- 
// Cara 2
<a {{ $attributes }}
class="{{ request()->is('/') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium"
aria-current="page">
{{ $slot }}
</a>
--}}

{{-- 
// Cara 3
<a {{ $attributes }}
class="{{ request()->is('/') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium"
aria-current="{{ request()->is('/') ? 'page' :  false }}">
{{ $slot }}
</a>
--}}

{{-- // Cara 4 --}}
<a {{ $attributes }}
    class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium"
    aria-current="{{ $active ? 'page' : false }}">
    {{ $slot }}
</a>
