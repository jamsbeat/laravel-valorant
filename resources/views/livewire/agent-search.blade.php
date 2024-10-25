<div>
    <div class="my-12">
        <x-form-input wire:model.live="search" placeholder="Search Agents" class="h-full" />
    </div>

    <div class="flex justify-center items-center">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-y-6 gap-x-3 md:gap-x-10 lg:gap-x-15">  
            @foreach($agents as $agent)
                <div class="list-none">
                    <a href="/agents/{{ $agent['id'] }}">
                        <div class="flex items-center w-full lg:min-w-4xl max-w-2xl md:max-w-3xl lg:max-w-full rounded-full bg-gray-800 transition-transform duration-300 hover:scale-105 hover:shadow-lg" style="background-image: url(/images/playcard-bg.png)">
                            <img src="{{ $agent->icon }}" alt="{{ $agent['name'] }}" class="h-20 w-20 border-2 border-darkblue rounded-full" />
                            <div class="grid grid-cols-2 gap-2">
                                <div class="text-2xl font-bold font-kanit uppercase" style="color: {{ $agent->color }};">
                                    {{ $agent['name'] }}
                                </div>
                                <div class="text-gray-400/95 text-sm font-suse pl-1">{{ $agent['role'] }}</div>
                                <div></div>
                            </div>
                            
                            <!-- Role Icon Button with Image Swap on Hover -->
                            <div class="ml-auto flex justify-end">
                                <div class="flex h-20 w-20 rounded-full relative group">
                                    <!-- Default Role Icon -->
                                    <img src="{{ $agent->role_icon }}" alt="Icon" class="h-20 w-20 bg-darkblue border-black border-2 rounded-full transition-all duration-300 group-hover:opacity-0" />
                                    
                                    <!-- New Image on Hover -->
                                    <button class="absolute inset-0 bg-cover bg-center bg-no-repeat transition-all duration-300 opacity-0 group-hover:opacity-100 rounded-full"
                                            style="background-image: url('/images/outline-star-128.png')">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
