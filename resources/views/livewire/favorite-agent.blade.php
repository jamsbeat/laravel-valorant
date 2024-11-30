<div class="pl-5">
    <button wire:click="favorite"
       class="transform bg-cover bg-center bg-no-repeat opacity-100 group-hover:scale-105 transition-all duration-300 rounded-full cursor-pointer"
       onclick="event.stopPropagation();"
    >
        <svg class="h-6 w-6 {{ $favorited ? 'fill-current' : 'text-gray-400/40' }}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
        </svg>
    </button>
</div>
