<x-layout>
    <x-slot:heading>
        <div class="font-semibold font-outfit underline text-4xl flex items-center pl-1" style="color: {{ $agent->color }}">
            <span>{{ $agent->name }}</span>
            @auth
                @livewire('favorite-agent', ['agentId' => $agent->id])
            @endauth
        </div>
     </x-slot:heading>

     <section class="max-w-screen pb-12 pt-12" x-data="{ open: null }">
        <div class="flex justify-between items-start">
            <div class="flex flex-col w-[600px] font-montserrat rounded-2xl">

                <div class="border">
                    <div class="text-center text-valblack
                    text-3xl font-semibold font-suse
                    bg-white rounded-t-2xl p-4 underline border-b">Description
                    </div>
                    <div class="font-montserrat bg-white rounded-b-2xl p-4 text-xl text-valblack">{{ $agent->description }}</div>
                </div>
                <!-- Agent description -->


                <div class="mt-6 text-center text-valblack
                text-3xl font-semibold font-suse
                bg-white rounded-t-2xl p-4 border underline">Abilities</div>

                <!-- Grid section directly under the description -->
                <div class="grid grid-cols-3 text-2xl border-x">
                    <!-- Grid Item 1 -->
                    <div @click="open = 'item1'" class="group cursor-pointer bg-white p-4
                    hover:bg-gray-500 hover:text-white transition-all duration-300 ease-in-out">
                        <div class="grid grid-cols-1">
                            <img src="{{ $agent->ability->icon_1 }}" alt="" class="bg-gray-300 group-hover:bg-gray-500 transition-all duration-300 ease-in-out
                            rounded-md"
                            style="background-color: {{ $agent->color }};">
                            <div class="pt-4 font-outfit hover:text-white text-valblack/70">{{ $agent->ability->name_1 }}</div>
                        </div>
                    </div>
                    <!-- Grid Item 2 -->
                    <div @click="open = 'item2'" class="group cursor-pointer bg-white p-4 border-x
                    hover:bg-gray-500 hover:text-white transition-all duration-300 ease-in-out">
                        <div class="grid grid-cols-1">
                            <img src="{{ $agent->ability->icon_2 }}" alt="" class="bg-gray-300 group-hover:bg-gray-500 transition-all duration-300 ease-in-out
                            rounded-md"
                            style="background-color: {{ $agent->color }};">
                            <div class="pt-4 font-outfit hover:text-white text-valblack/70">{{ $agent->ability->name_2 }}</div>
                        </div>
                    </div>
                    <!-- Grid Item 3 -->
                    <div @click="open = 'item3'" class="group cursor-pointer bg-white p-4
                    hover:bg-gray-500 hover:text-white transition-all duration-300 ease-in-out">
                        <div class="grid grid-cols-1">
                            <img src="{{ $agent->ability->icon_3 }}" alt="" class="bg-gray-300 group-hover:bg-gray-500 transition-all duration-300 ease-in-out
                            rounded-md"
                            style="background-color: {{ $agent->color }};">
                            <div class="pt-4 font-outfit hover:text-white text-valblack/70">{{ $agent->ability->name_3 }}</div>
                        </div>
                    </div>
                </div>
                <!-- Ultimate -->
                <div @click="open = 'ultimate'" class="cursor-pointer flex flex-cols bg-white rounded-b-2xl border
                hover:bg-gray-500 hover:text-white transition-all duration-300 ease-in-out">
                    <div class="p-4 grid grid-cols-2 gap-2">
                        <!-- Image with dynamic background color on hover -->
                        <img src="{{ $agent->ability->icon_u }}" alt=""
                            class="p-4 bg-gray-300 group-hover:bg-gray-500 transition-all duration-300 ease-in-out
                            h-[133px] w-[133px] rounded-md"
                            style="background-color: {{ $agent->color }};" /> <!-- Use inline style for dynamic color -->
                        <div class="flex self-center">
                            <div class="font-outfit text-2xl  hover:text-white text-valblack/70">{{ $agent->ability->ultimate }}</div>
                        </div>
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
                    <img src="{{ $agent->portrait }}" alt="" class="w-full h-[700px] rounded-3xl">
                </div>
            </div>
        </div>

        <!-- Pop-up Modals for Grid Items and Ultimate -->
        <!-- Modal for Grid Item 1 -->
        <div x-show="open === 'item1'" @click="open = null" class="fixed inset-0 bg-black/50 flex justify-center items-center">
            <div @click.stop class="bg-white p-6 rounded-3xl w-[400px]">
                <h2 class="text-xl font-bold mb-4">{{ $agent->ability->name_1 }}</h2>
                <p>{{ $agent->ability->description_1 }}</p>
                <video autoplay loop muted>
                    <source class="" src="" type="video/mp4"/>
                    Your browser does not support the video tag.
                </video>
                <button @click="open = null" class="mt-4 bg-black text-white px-4 py-2 rounded-xl">Close</button>
            </div>
        </div>

        <!-- Modal for Grid Item 2 -->
        <div x-show="open === 'item2'" @click="open = null" class="fixed inset-0 bg-black/50 flex justify-center items-center">
            <div @click.stop class="bg-white p-6 rounded-3xl w-full max-w-md mx-4 sm:mx-auto">
                <h2 class="text-xl font-bold mb-4">{{ $agent->ability->name_2 }}</h2>
                <p>{{ $agent->ability->description_2 }}</p>
                <video autoplay loop muted>
                    <source class="" src="" type="video/mp4"/>
                    Your browser does not support the video tag.
                </video>
                <button @click="open = null" class="mt-4 bg-black text-white px-4 py-2 rounded-xl">Close</button>
            </div>
        </div>

        <!-- Modal for Grid Item 3 -->
        <div x-show="open === 'item3'" @click="open = null" class="fixed inset-0 bg-black/50 flex justify-center items-center">
            <div @click.stop class="bg-white p-6 rounded-3xl w-full max-w-md mx-4 sm:mx-auto">
                <h2 class="text-xl font-bold mb-4">{{ $agent->ability->name_3 }}</h2>
                <p>{{ $agent->ability->description_3 }}</p>
                <video autoplay loop muted>
                    <source class="" src="" type="video/mp4"/>
                    Your browser does not support the video tag.
                </video>
                <button @click="open = null" class="mt-4 bg-black text-white px-4 py-2 rounded-xl">Close</button>
            </div>
        </div>

        <!-- Modal for Ultimate -->
        <div x-show="open === 'ultimate'" @click="open = null" class="fixed inset-0 bg-black/50 flex justify-center items-center">
            <div @click.stop class="bg-white p-6 rounded-3xl w-full max-w-md mx-4 sm:mx-auto">
                <h2 class="text-xl font-bold mb-4">{{ $agent->ability->ultimate }}</h2>
                <p>{{ $agent->ability->description_u }}</p>
                <video class="mt-2" autoplay loop muted>
                    <source src="https://www.mandatory.gg/wp-content/uploads/mandatory-valorant-database-agent-clove-ruse-ability-e.mp4" type="video/mp4"/>
                    Your browser does not support the video tag.
                </video>
                <button @click="open = null" class="mt-4 bg-black text-white px-4 py-2 rounded-xl">Close</button>
            </div>
        </div>
    </section>

    <section class="pt-12 pb-12">
        <div class="font-semibold text-3xl text-valblack
        pb-2 pl-1">Role :</div>
        <div class="flex flex-col sm:flex-row justify-between mt-6 bg-white rounded-3xl border-6 border-gray-400/20 w-full">
            <div class="grid grid-cols-1 pl-4 max-w-full sm:max-w-[60%]"> <!-- Set a max-width for the description -->
                <div class="flex mt-6 pl-1">
                    <div class="font-outfit text-2xl pt-2 text-valblack">{{ $agent->role }}</div>
                    <div></div>
                </div>
                <div class="pl-1 pb-6">
                    <div class="text-gray-400">{{ $agent->role_description }}</div>
                </div>
            </div>

            <div></div>

            <!-- Role Icon Section -->
            <div class="p-4">
                <img src="{{ $agent->role_icon }}" alt="" class="bg-black w-full rounded-full
                border-2 border-black">
            </div>
        </div>
   </section>


   <section class="pt-12 pb-12">
        <div x-data="{
            activeAccordion: '',
            setActiveAccordion(id) {
                this.activeAccordion = (this.activeAccordion == id) ? '' : id
            }
        }" class="relative w-full mx-auto overflow-hidden text-sm font-normal  bg-white border-6 border-gray-400/20 divide-y divide-gray-200 rounded-md">
            <div x-data="{ id: $id('accordion') }" class="cursor-pointer group">
                <button @click="setActiveAccordion(id)" class="flex items-center justify-between w-full p-4 text-left select-none group-hover:underline"
                        style="color: {{ $agent->color }};">
                    <span class="text-2xl text-valblack font-outfit">Lore</span>
                    <svg class="w-4 h-4 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion==id }" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div x-show="activeAccordion==id" x-collapse x-cloak>
                    <div class="p-4 pt-0 opacity-70 text-xl text-valblack/70">
                        {{ $agent->lore->main ?? 'No lore available' }}
                    </div>
                </div>
            </div>
            <div x-data="{ id: $id('accordion') }" class="cursor-pointer group">
                <button @click="setActiveAccordion(id)" class="flex items-center justify-between w-full p-4 text-left  select-none group-hover:underline"
                        style="color: {{ $agent->color }};">
                    <span class="text-2xl text-valblack font-outfit">Description</span>
                    <svg class="w-4 h-4 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion==id }" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div x-show="activeAccordion==id" x-collapse x-cloak>
                    <div class="p-4 pt-0 opacity-70 text-xl">
                        {{ $agent->lore->description ?? 'No description available' }}
                    </div>
                </div>
            </div>
            <div x-data="{ id: $id('accordion') }" class="cursor-pointer group">
                <button @click="setActiveAccordion(id)" class="flex items-center justify-between w-full p-4 text-left select-none group-hover:underline"
                        style="color: {{ $agent->color }};">
                    <span class="text-2xl text-valblack font-outfit">Background</span>
                    <svg class="w-4 h-4 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion==id }" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div x-show="activeAccordion==id" x-collapse x-cloak>
                    <div class="p-4 pt-0 opacity-70 text-xl">
                        {{ $agent->lore->background ?? 'No background available' }}
                    </div>
                </div>
            </div>
        </div>
   </section>





</x-layout>
