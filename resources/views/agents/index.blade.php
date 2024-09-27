<x-layout>
    <x-slot:heading>
        <div class="font-semibold font-outfit">Agents</div>
    </x-slot:heading>
    
    <section class="max-w-screen pb-12 border-b border-black pt-6">
        <div class="flex justify-between items-start">
            <div class="bg-white/50 w-[600px] h-[202px] p-4 font-montserrat rounded border border-black/10">
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
    
    
    <div class="grid grid-cols-3 gap-4 pt-12">
        @foreach ($agents as $agent)
        <li class="list-none">
            <a  href="/agents/{{ $agent['id'] }}">
                <body class="flex items-center justify-center">
                    <div class="flex items-center w-full max-w-6xl rounded-full bg-gray-800 transition-all duration-200 hover:scale-105 hover:shadow-lg" style="background-image: url(/images/playcard-bg.png)">
                    <img src="{{ asset('images/' . $agent->icon) }}" alt="Gekko" class="h-20 w-20 border-2 border-darkblue rounded-full" />
                    <div class="grid grid-cols-2 gap-2">
                        <div class="text-2xl font-bold font-kanit uppercase" style="color: {{ $agent->color }};">
                            {{ $agent['name'] }}
                        </div>
                        <div class="text-gray-400/95 text-sm font-suse">{{ $agent['role'] }}</div>
                        <div></div>
                    </div>
                    <div class="ml-auto flex justify-end">
                        <div class="flex h-20 w-20 rounded-full ">
                        <img src="{{ asset('images/' . $agent->role_icon) }}" alt="Icon" class="h-20 w-20 border-black border-2 rounded-full" />
                        </div>
                    </div>
                    </div>
                </body> 
            </a>                 
        </li>
        @endforeach
    </div>
</x-layout>
