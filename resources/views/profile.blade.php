<x-layout>
    <x-slot:heading>
        Profile
    </x-slot:heading>

    <div class="py-12">
        <div>
            <div class="bg-white/50 p-4 font-montserrat text-valblack text-md font-semibold rounded-2xl border border-black/10">
                Welcome to your profile page, <strong class="text-valred">{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}!</strong> Here you can view your favorite agents and update your profile settings.
            </div>
        </div>
    </div>

    <div class="text-valblack">
        <x-header>
            • Favorite Agents
        </x-header>
    </div>

    @if(auth()->user()->favoriteAgents)
        <div class="flex w-[394px]">
            <div class="grid grid-cols-1 gap-6 my-3">
                @foreach(auth()->user()->favoriteAgents as $agent)
                    <a href="/agents/{{ $agent->id }}">
                        <div class="list-none group">
                            <div class="flex items-center w-full min-w-4xl lg:min-w-4xl md:max-w-3xl lg:max-w-full rounded-full bg-gray-800 transition-transform duration-300 group-hover:scale-105 group-hover:shadow-lg" style="background-image: url(/images/playcard-bg.png)">
                                <img src="{{ $agent->icon }}" alt="{{ $agent['name'] }}" class="h-20 w-20 bg-black border-2 border-black rounded-full" />
                                <div class="grid grid-cols-2">
                                    <div class="bg-valblack pt-3 pl-3" style="color: {{ $agent->color }};">
                                        <div class="bg-valblack text-2xl font-bold font-valorant uppercase">{{ $agent['name'] }}</div>
                                        <div class="bg-valblack font-semibold font-suse text-gray-500">{{ $agent['role']}}</div>
                                    </div>
                                    <div></div>
                                </div>
                                <div class="ml-auto flex justify-end">
                                    <div class="flex h-20 w-20 rounded-full">
                                        <!-- Role Icon -->
                                        <img src="{{ $agent->role_icon }}" alt="{{ $agent['role'] }}" class="h-20 w-20 rounded-full bg-darkblue border-2 border-black shadow-md" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    @else
        <p>No favorite agents found.</p>
    @endif

    <section>
        <div class="w-full h-screen pt-12">
            <div class="border-t">

            </div>
        </div>
    </section>


</x-layout>
