<div>
    <div class="my-12">
        <x-form-input wire:model.live="search" placeholder="Search Agents" class="h-full" />
    </div>

    <div class="flex justify-center items-center">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-y-6 gap-x-6 md:gap-x-10 lg:gap-x-20">  
            @foreach($agents as $agent)
                <a href="/agents/{{ $agent['id'] }}">
                    <div class="list-none relative group">
                        <div class="flex items-center w-full min-w-4xl lg:min-w-4xl md:max-w-3xl lg:max-w-full rounded-full bg-gray-800 transition-transform duration-300 group-hover:scale-105 group-hover:shadow-lg" style="background-image: url(/images/playcard-bg.png)">
                            <img src="{{ $agent->icon }}" alt="{{ $agent['name'] }}" class="h-20 w-20 border-l border-darkblue rounded-full" />
                            <div class="grid grid-cols-2 gap-2">
                                <div class="text-2xl font-bold font-kanit uppercase" style="color: {{ $agent->color }};">
                                    {{ $agent['name'] }}
                                </div>
                                <div class="text-gray-400/95 text-sm font-suse pl-1">{{ $agent['role'] }}</div>
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
