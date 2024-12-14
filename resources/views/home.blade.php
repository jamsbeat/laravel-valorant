<x-layout>
    <x-slot:heading>

    </x-slot:heading>

    <section class="max-w-1/2">
        <body class="w-1/2 h-full">
            <div class="pt-[125px] pb-[200px]">
                <div class="text-8xl text-valred font-bold font-sourcecodepro flex justify-center">
                    VALORANT
                </div>
                
                <div class="flex justify-center py-6">
                    <a href="https://playvalorant.com/en-gb/platform-selection/"
                    class="font-suse bg-valblack text-white px-6 py-2 shadow-xs rounded-3xl transition-all duration-300 hover:scale-110">
                        PLAY FOR FREE
                    </a>
                </div>
            </div>
        </body>
    </section>



    <section class="h-full flex items-center justify-center pb-24 pt-12">
        <div
            x-data="{
            currentIndex: 0,
            scrollDelta: 0,
            threshold: 50, // Set the scroll threshold to prevent sensitivity
            content: [
                {
                title: 'Learn about <a href=&quot;/agents&quot; class=&quot;text-valred text-semibold hover:underline&quot;>Agents</a> ',
                paragraph:
                    'Dive into detailed profiles of every Valorant agent. Learn about their unique abilities and how to use them effectively in battle. Master your favorite agent and dominate your matches!',
                },
                {
                title: 'Learn about <a href=&quot;/maps&quot; class=&quot;text-valred text-semibold hover:underline&quot;>Maps</a>',
                paragraph:
                    'Explore comprehensive guides to all the Valorant maps. From key chokepoints to strategic layouts, uncover the best ways to navigate and control the battlefield.',
                },
                {
                title: 'Learn about <a href=&quot;/guns&quot; class=&quot;text-valred text-semibold hover:underline&quot;>Guns</a>',
                paragraph:
                    '',
                },
            ],
            handleScroll(event) {
                this.scrollDelta += event.deltaY;
                if (Math.abs(this.scrollDelta) >= this.threshold) {
                this.currentIndex =
                    (this.currentIndex + (this.scrollDelta > 0 ? 1 : -1) + this.content.length) %
                    this.content.length;
                this.scrollDelta = 0; // Reset scrollDelta after threshold is exceeded
                }
            },
            }"
            class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 lg:px-8"
        >
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:items-center md:gap-8">
            <!-- Content -->
            <div class="flex gap-4 items-start">
                <!-- Dots Navigation (Vertical Buttons) -->
                <div class="flex flex-col gap-2 pt-2">
                <button
                    class="w-2 h-2 rounded-full border border-gray-300 bg-gray-200 hover:bg-valred"
                    :class="{ 'bg-valred border-valred': currentIndex === 0 }"
                    @click="currentIndex = 0"
                ></button>
                <button
                    class="w-2 h-2 rounded-full border border-gray-300 bg-gray-200 hover:bg-valred"
                    :class="{ 'bg-valred border-valred': currentIndex === 1 }"
                    @click="currentIndex = 1"
                ></button>
                <button
                    class="w-2 h-2 rounded-full border border-gray-300 bg-gray-200 hover:bg-valred"
                    :class="{ 'bg-valred border-valred': currentIndex === 2 }"
                    @click="currentIndex = 2"
                ></button>
                </div>

                <!-- Scrollable Container for Title and Paragraph -->
                <div 
                class="text-left"
                @wheel.prevent="handleScroll($event)"
                >
                <!-- Title -->
                <h2
                    class="text-3xl font-bold font-suse text-gray-900 sm:text-3xl"
                    x-html="content[currentIndex].title"
                ></h2>

                <!-- Paragraph -->
                <p
                    class="text-gray-700 max-w-lg mt-1"
                    x-html="content[currentIndex].paragraph"
                ></p>
                </div>
            </div>

            <!-- Image -->
            <div>
                <img
                src="https://images.unsplash.com/photo-1731690415686-e68f78e2b5bd?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                class="rounded-3xl shadow-xl brightness-125 saturate-0"
                alt=""
                />
            </div>
            </div>
        </div>
    </section>
    
    <section>
        <div class="bg-none py-24 sm:py-28">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto grid max-w-2xl grid-cols-1 items-start gap-x-8 gap-y-16 sm:gap-y-24 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                <div class="lg:pr-4">
                    <div class="relative overflow-hidden rounded-3xl bg-gray-900 px-6 pb-9 pt-64 shadow-xl sm:px-12 lg:max-w-lg lg:px-8 lg:pb-8 xl:px-10 xl:pb-10">
                    <img class="absolute inset-0 h-full w-full object-cover brightness-125 saturate-0" src="https://images.unsplash.com/photo-1731690415686-e68f78e2b5bd?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                    <div class="absolute inset-0 bg-gray-900 mix-blend-multiply"></div>
                    <div class="absolute left-1/2 top-1/2 -ml-16 -translate-x-1/2 -translate-y-1/2 transform-gpu blur-3xl" aria-hidden="true">
                        <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-valred to-valdred opacity-40" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                    </div>
                    <figure class="relative isolate">
                        <div class="mt-6 text-xl font-semibold leading-8 text-white/60">
                            <p>Amet amet eget scelerisque tellus sit neque faucibus non eleifend. Integer eu praesent at a. Ornare arcu gravida natoque erat et cursus tortor.</p>
                        </div>
                    </figure>
                    </div>
                </div>
                <div>
                    <div class="text-base leading-7 text-gray-700 lg:max-w-lg">
                    <h1 class="mt-2 text-2xl font-semibold font-suse tracking-tight text-gray-900 sm:text-4xl">On a mission to <span class="text-valred">empower</span> remote teams</h1>
                    <div class="max-w-xl text-gray-700">
                        <p class="mt-6">On a mission to empower Valorant enthusiasts, our platform brings you detailed insights into agents, maps, and weaponry, making it the ultimate resource for players. Dive into personalized features like favoriting your go-to agents and accessing them seamlessly on your profile.</p>
                        <p class="mt-8">Whether you're strategizing your next match or exploring new agents, our website evolves with you, offering tools and content that enhance your gameplay experience. Join the community, log in, and unlock features designed to make your Valorant journey even more immersive.</p>
                        <p class="mt-8">Et vitae blandit facilisi magna lacus commodo. Vitae sapien duis odio id et. Id blandit molestie auctor fermentum dignissim. Lacus diam tincidunt ac cursus in vel. Mauris varius vulputate et ultrices hac adipiscing egestas. Iaculis convallis ac tempor et ut. Ac lorem vel integer orci.</p>
                    </div>
                    </div>
                    <div class="mt-10 flex">
                        <a href="#" class="text-base font-semibold leading-7 text-valred">Learn more about our company <span aria-hidden="true">&rarr;</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="py-12">
        <div class="">
            <div class="w-full max-w-screen items-center">
                <x-header class="font-suse py-2">
                    • Lorem <span class="text-valred"> ipsum </span> dolor
                </x-header>
                <div class="grid grid-cols-1 gap-6">
                    <a href="/forum">
                        <div class="bg-white shadow-md rounded-3xl overflow-hidden flex">
                            <img class="w-1/4 h-[180px] object-cover" src="https://via.placeholder.com/180" alt="Image 1">
                            <div class="p-4">
                                <div class=" text-2xl font-semibold font-suse text-black py-2 underline">
                                    Lorem <span class="text-valred"> ipsum </span> dolor
                                </div>
                                <div class="font-montserrat text-lg text-black ">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="/forum">
                        <div class="bg-white shadow-md rounded-3xl overflow-hidden flex">
                            <img class="w-1/4 h-[180px] object-cover" src="https://via.placeholder.com/180" alt="Image 1">
                            <div class="p-4">
                                <div class=" text-2xl font-semibold font-suse text-black py-2 underline">
                                    Lorem <span class="text-valred"> ipsum </span> dolor
                                </div>
                                <div class="font-montserrat text-lg text-black ">
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="/forum">
                        <div class="bg-white shadow-md rounded-3xl overflow-hidden flex">
                            <img class="w-1/4 h-[180px] object-cover" src="https://via.placeholder.com/180" alt="Image 1">
                            <div class="p-4">
                                <div class=" text-2xl font-semibold font-suse text-black py-2 underline">
                                    Lorem <span class="text-valred"> ipsum </span> dolor
                                </div>
                                <div class="font-montserrat text-lg text-black ">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>  
        </div>
    </section>
</x-layout>