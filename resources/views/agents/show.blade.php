<x-layout>
    <x-slot:heading>
        <div class="font-semibold font-outfit underline text-4xl" style="color: {{ $agent->color }}">{{ $agent->name }}</div>
     </x-slot:heading>

     <section class="max-w-screen pb-12 pt-12" x-data="{ open: null }">
        <div class="flex justify-between items-start">
            <div class="flex flex-col w-[600px] p-4 font-montserrat rounded bg-gray-400/20">

                <div class="mt-3 mb-6 pl-1
                text-3xl font-semibold">Description :</div>
                <!-- Agent description -->
                <div class="font-montserrat bg-white rounded border border-black/10 p-4 text-xl">{{ $agent->description }}</div>

                <div class="mt-6 pl-1
                text-3xl font-semibold">Abilities :</div>
    
                <!-- Grid section directly under the description -->
                <div class="grid grid-cols-3 gap-4 mt-6 text-2xl mb-3">
                    <!-- Grid Item 1 -->
                    <div @click="open = 'item1'" class="group cursor-pointer bg-white p-4 rounded-md border border-black/10
                    hover:bg-gray-500 hover:text-white transition-all duration-300 ease-in-out">
                        <div class="grid grid-cols-1">
                            <img src="{{ $agent->ability->icon_1 }}" alt="" class="bg-gray-300 group-hover:bg-gray-500 transition-all duration-300 ease-in-out
                            rounded-md"
                            style="background-color: {{ $agent->color }};">
                            <div class="pt-4 font-outfit">{{ $agent->ability->name_1 }}</div>
                        </div>
                    </div>
                    <!-- Grid Item 2 -->
                    <div @click="open = 'item2'" class="group cursor-pointer bg-white p-4 rounded-md border border-black/10
                    hover:bg-gray-500 hover:text-white transition-all duration-300 ease-in-out">
                        <div class="grid grid-cols-1">
                            <img src="{{ $agent->ability->icon_2 }}" alt="" class="bg-gray-300 group-hover:bg-gray-500 transition-all duration-300 ease-in-out
                            rounded-md"
                            style="background-color: {{ $agent->color }};">
                            <div class="pt-4 font-outfit">{{ $agent->ability->name_2 }}</div>
                        </div>
                    </div>
                    <!-- Grid Item 3 -->
                    <div @click="open = 'item3'" class="group cursor-pointer bg-white p-4 rounded-md border border-black/10
                    hover:bg-gray-500 hover:text-white transition-all duration-300 ease-in-out">
                        <div class="grid grid-cols-1">
                            <img src="{{ $agent->ability->icon_3 }}" alt="" class="bg-gray-300 group-hover:bg-gray-500 transition-all duration-300 ease-in-out
                            rounded-md"
                            style="background-color: {{ $agent->color }};">
                            <div class="pt-4 font-outfit">{{ $agent->ability->name_3 }}</div>
                        </div>
                    </div>
                </div>
                <!-- Ultimate -->
                <div @click="open = 'ultimate'" class="cursor-pointer flex flex-cols mt-3 bg-white rounded-md border border-black/10
                hover:bg-gray-500 hover:text-white transition-all duration-300 ease-in-out">
                    <div class="p-4">
                        <!-- Image with dynamic background color on hover -->
                        <img src="{{ $agent->ability->icon_u }}" alt="" 
                            class="p-4 bg-gray-300 group-hover:bg-gray-500 transition-all duration-300 ease-in-out 
                            h-[133px] w-[133px] rounded-md"
                            style="background-color: {{ $agent->color }};"> <!-- Use inline style for dynamic color -->
                    </div>
                    <div class="flex self-center">
                        <div class="font-outfit text-2xl">{{ $agent->ability->ultimate }}</div>
                    </div>

                    <!-- ULT grid aligned to the end -->
                    <div class="ml-auto p-4 self-center h-full">
                        <div class="grid grid-cols-1 
                        text-center font-bold font-suse text-xs">
                            <div>U</div>
                            <div>L</div>
                            <div>T</div>
                            <div>I</div>
                            <div>M</div>
                            <div>A</div>
                            <div>T</div>
                            <div>E</div>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- Agent Portrait -->
            <div class="flex flex-col items-end">
                <div class="rounded mt-3">
                    <img src="{{ $agent->portrait }}" alt="" class="w-auto h-[700px]">
                </div>
            </div>
        </div>
    
        <!-- Pop-up Modals for Grid Items and Ultimate -->
        <!-- Modal for Grid Item 1 -->
        <div x-show="open === 'item1'" @click="open = null" class="fixed inset-0 bg-black/50 flex justify-center items-center">
            <div @click.stop class="bg-white p-6 rounded w-[400px]">
                <h2 class="text-xl font-bold mb-4">{{ $agent->ability->name_1 }}</h2>
                <p>{{ $agent->ability->description_1 }}</p>
                <button @click="open = null" class="mt-4 bg-black text-white px-4 py-2 rounded">Close</button>
            </div>
        </div>

        <!-- Modal for Grid Item 2 -->
        <div x-show="open === 'item2'" @click="open = null" class="fixed inset-0 bg-black/50 flex justify-center items-center">
            <div @click.stop class="bg-white p-6 rounded w-[400px]">
                <h2 class="text-xl font-bold mb-4">{{ $agent->ability->name_2 }}</h2>
                <p>{{ $agent->ability->description_2 }}</p>
                <button @click="open = null" class="mt-4 bg-black text-white px-4 py-2 rounded">Close</button>
            </div>
        </div>

        <!-- Modal for Grid Item 3 -->
        <div x-show="open === 'item3'" @click="open = null" class="fixed inset-0 bg-black/50 flex justify-center items-center">
            <div @click.stop class="bg-white p-6 rounded w-[400px]">
                <h2 class="text-xl font-bold mb-4">{{ $agent->ability->name_3 }}</h2>
                <p>{{ $agent->ability->description_3 }}</p>
                <button @click="open = null" class="mt-4 bg-black text-white px-4 py-2 rounded">Close</button>
            </div>
        </div>

        <!-- Modal for Ultimate -->
        <div x-show="open === 'ultimate'" @click="open = null" class="fixed inset-0 bg-black/50 flex justify-center items-center">
            <div @click.stop class="bg-white p-6 rounded w-[400px]">
                <h2 class="text-xl font-bold mb-4">{{ $agent->ability->ultimate }}</h2>
                <p>{{ $agent->ability->description_u }}</p>
                <button @click="open = null" class="mt-4 bg-black text-white px-4 py-2 rounded">Close</button>
            </div>
        </div>
    </section>

    <section class="pt-12 pb-12">
        <div class="font-semibold text-3xl
        pb-2 pl-1">Role :</div>
        <div class="flex justify-between mt-6 bg-white rounded-md border-[16px] border-gray-400/20 w-full">
            <div class="grid grid-cols-1 pl-4 max-w-[60%]"> <!-- Set a max-width for the description -->
                <div class="flex mt-6 pl-1">
                    <div class="font-outfit text-2xl pt-2">{{ $agent->role }}</div>
                    <div class="font-montserrat font-semibold text-xs pl-1"></div>
                </div>
                <div class="pl-1 pb-6">
                    <div>{{ $agent->role_description }}</div>
                </div>
            </div>
            
            <div></div>
        
            <!-- Role Icon Section -->
            <div class="p-4">
                <img src="{{ $agent->role_icon }}" alt="" class="bg-black h-[133px] w-[133px] rounded-full 
                border-2 border-black">
            </div>
        </div>
   </section>
    
    

    
</x-layout>