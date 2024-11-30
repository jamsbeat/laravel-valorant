@props(['active' => false])

<div class="py-2"> 
    <a class="{{ $active ? 'bg-gray-500/90 text-gray-300': 'text-gray-500 hover:bg-gray-500/90 hover:text-gray-300'}} rounded-md px-3 py-2 text-sm font-medium font-suse"
    aria-current="{{ $active ? 'page': 'false' }}"
    {{ $attributes }}
    >{{ $slot }}</a>
</div>