<x-layout>
    <x-slot:heading>
        <div class="font-semibold font-outfit">Agents</div>
    </x-slot:heading>

    <section class="max-w-screen pb-16 border-b border-black pt-10">
        <div class="flex justify-between items-start">
            <div class="bg-white/50 w-1/2 h-[200px] p-4 font-montserrat rounded border border-black/10">
                Click on any agent to unveil their detailed profile, showcasing their backstory, tactical role, and an overview of their abilities. 
                Each agent features three distinct abilities that can turn the tide of a match, along with one powerful ultimate ability that unleashes their full potential. 
                Whether you’re looking to master a specific agent or simply learn about the different playstyles, this index is your gateway to the world of Valorant.
            </div>
            <div class="flex flex-col items-end">
                <div class="rounded border border-black/10">
                    <img src="https://placeholder.com/450x200" alt="" class="w-[450px] h-[200px]">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="flex justify-center">
            <div class="grid grid-cols-2 gap-y-6 gap-x-20 max-w-[900px] pt-16">
                @foreach ($agents as $agent)
                <li class="list-none">
                    <!-- Card Container with hover scaling -->
                    <div class="relative">
                        <a href="/agents/{{ $agent['id'] }}">
                            <div class="flex items-center w-full min-w-[400px] max-w-[400px] rounded-full bg-gray-800 transition-transform duration-300 hover:scale-125 hover:shadow-lg" style="background-image: url(/images/playcard-bg.png)">
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
                </li>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>
