<x-layout>
    <x-slot:heading>
        <div class="font-semibold font-outfit">Agents</div>
    </x-slot:heading>
    <div class="grid grid-cols-3 gap-4">
        @foreach ($agents as $agent)
        <li class="list-none">
            <a  href="/agents/{{ $agent['id'] }}">
                <body class="flex items-center justify-center">
                    <div class="flex items-center w-full max-w-6xl rounded-full bg-gray-800 hover:shadow-lg" style="background-image: url(/images/playcard-bg.png)">
                    <img src="{{ asset('images/gekko.png') }}" alt="Gekko" class="h-20 w-20 rounded-full" />
                    <div class="grid grid-cols-2 gap-2">
                        <div class="text-xl font-bold text-white uppercase">{{ $agent['name'] }}</div>
                        <div class="text-gray-400 text-sm">{{ $agent['role'] }}</div>
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
