@props(['active' => false])

<a class="{{ $active ? ' text-valblack': 'text-logoblue hover:text-valred'}} rounded-md px-3 py-2 text-sm font-medium font-suse inline-block uppercase after:duration-1000 after:block after:h-0.5 after:w-full after:origin-bottom-right after:scale-x-0 after:bg-valred after:transition-transform after:hover:origin-bottom-left after:hover:scale-x-100 hover:bg-primary hover:text-valred transition-all duration-300 ease-in-out"
   aria-current="{{ $active ? 'page': 'false' }}"
   {{ $attributes }}
>{{ $slot }}</a>