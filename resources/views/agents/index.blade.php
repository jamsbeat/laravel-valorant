<x-layout>
    <x-slot:heading>
        <div class="font-semibold font-outfit">Agents</div>
    </x-slot:heading>
    
    <section class="max-w-screen pb-12 border-b border-black bg-white/10">
        <div class="flex justify-between items-start">
            <div class="bg-white/5 w-[30rem] h-[150px] p-4 font-montserrat rounded-md border-b border-r border-black/20 shadow">
                &#8226; More than guns and bullets, you’ll choose an Agent armed with 
                adaptive, swift, and lethal abilities that create opportunities to 
                let your gunplay shine. No two Agents play alike, just as no two 
                highlight reels will look the same.
            </div>
            <div class="flex flex-col items-end">
                <div class="rounded-md border-b border-r border-black/20">
                    <img src="https://placehold.co/300x150" alt="">
                </div>
            </div>
        </div>
    </section>
    
    
    <div class="grid grid-cols-3 gap-4 pt-12">
        @foreach ($agents as $agent)
        <li class="list-none">
            <a  href="/agents/{{ $agent['id'] }}">
                <body class="flex items-center justify-center">
                    <div class="flex items-center w-full max-w-6xl rounded-full bg-gray-800 transition-all duration-300 hover:scale-110 hover:shadow-lg" style="background-image: url(/images/playcard-bg.png)">
                    <img src="{{ asset('images/gekko.png') }}" alt="Gekko" class="h-20 w-20 rounded-full" />
                    <div class="grid grid-cols-2 gap-2">
                        <div class="text-2xl font-bold font-kanit text-white uppercase">{{ $agent['name'] }}</div>
                        <div class="text-gray-400/95 text-sm font-suse">{{ $agent['role'] }}</div>
                        <div></div>
                    </div>
                    <div class="ml-auto flex justify-end">
                        <div class="flex h-20 w-20 rounded-full ">
                        <img src="{{ asset('images/initiator-icon.png') }}" alt="Icon" class="h-20 w-20 border-gray-900 border-2 rounded-full" />
                        </div>
                    </div>
                    </div>
                </body> 
            </a>                 
        </li>
        @endforeach
    </div>
</x-layout>
