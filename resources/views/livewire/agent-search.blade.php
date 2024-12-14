<div>
    <div class="my-12">
        <label class="relative block">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-1 pointer-events-none w-6 h-6 absolute top-1/2 transform -translate-y-1/2 left-3 text-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
            </svg>

            <input wire:model.live="search"
            placeholder="Search agents or roles ..."
            class="w-1/2 pl-10 p-2 border rounded-3xl focus:outline-none focus:ring-2 focus:ring-valred focus:border-transparent"
            />
        </label>
    </div>

    <div class="flex justify-center items-center">
        @if ($noResultsMessage)
            <div class="{{ $errorClasses }}">{{ $noResultsMessage }}</div>
        @endif
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-y-6 gap-x-6 md:gap-x-10 lg:gap-x-20">  
            @foreach($agents as $agent)
                <a href="/agents/{{ $agent->name }}">
                    <div class="list-none relative group">
                        <div class="flex items-center w-full min-w-4xl lg:min-w-4xl md:max-w-3xl lg:max-w-full rounded-full bg-gray-800 transition-transform duration-300 group-hover:scale-105 group-hover:shadow-lg" style="background-image: url(/images/playcard-bg.png)">
                            <img src="{{ $agent->icon }}" alt="{{ $agent['name'] }}" class="h-20 w-20 border-l border-darkblue rounded-full" />
                            <div class="grid grid-cols-2 gap-2">
                                <div class="text-2xl font-bold font-kanit uppercase" style="color: {{ $agent->color }};">
                                    {{ $agent['name'] }}
                                </div>
                                <div class="text-gray-400/95 text-sm font-suse pl-1 shadow-md">{{ $agent['role'] }}</div>
                                <div></div>
                            </div>
                            <!-- Role Icon Button with Image Swap on Hover -->
                            <div class="ml-auto flex justify-end">
                                <div class="flex h-20 w-20 rounded-full relative">
                                    <!-- Role Icon -->
                                    <img src="{{ $agent->role_icon }}" alt="{{ $agent['role'] }}" class="h-20 w-20 rounded-full bg-darkblue border border-black shadow-md" />
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>
