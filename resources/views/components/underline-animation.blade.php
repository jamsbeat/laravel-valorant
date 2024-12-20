@props(['active' => false])

<a href="/profile" @click="menuBarOpen=false" class="relative justify-between w-full cursor-pointer select-none group items-center rounded px-2 py-1.5  hover:text-neutral-900 outline-none data-[disabled]:opacity-50 data-[disabled]:pointer-events-none group  text-sm font-medium font-suse inline-block uppercase transition-all duration-300 ease-in-out">
    <span class="text-valblack group-hover:text-valred after:duration-1000 after:block after:h-0.5 after:w-full after:origin-bottom-right after:scale-x-0 after:bg-valred after:transition-transform after:group-hover:origin-bottom-left after:group-hover:scale-x-100"
       aria-current="{{ $active ? 'page' : 'false' }}"
        {{ $attributes }}
    >{{ $slot }}</span>
</a>

