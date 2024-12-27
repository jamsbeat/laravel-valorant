<x-layout>
    <x-slot:heading>

    </x-slot:heading>

    <section class="h-screen max-w-1/2 text-center">
        <div class="h-full">
        <div class="pt-[150px] pb-20">
                <div class="">
                    <h1 x-data="{
                        startingAnimation: { opacity: 0, scale: 4 },
                        endingAnimation: { opacity: 1, scale: 1, stagger: 0.07, duration: 1, ease: 'expo.out' },
                        addCNDScript: true,
                        animateText() {
                            $el.classList.remove('invisible');
                            gsap.fromTo($el.children, this.startingAnimation, this.endingAnimation);
                        },
                        splitCharactersIntoSpans(element) {
                            text = element.innerHTML;
                            modifiedHTML = [];
                            for (var i = 0; i < text.length; i++) {
                                attributes = '';
                                if(text[i].trim()){ attributes = 'class=\'inline-block\''; }
                                modifiedHTML.push('<span ' + attributes + '>' + text[i] +   '</span>');
                            }
                            element.innerHTML = modifiedHTML.join('');
                        },
                        addScriptToHead(url) {
                            script = document.createElement('script');
                            script.src = url;
                            document.head.appendChild(script);
                        }
                    }"
                        x-init="
                        splitCharactersIntoSpans($el);
                        if(addCNDScript){
                            addScriptToHead('https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js');
                        }
                        gsapInterval = setInterval(function(){
                            if(typeof gsap !== 'undefined'){
                                animateText();
                                clearInterval(gsapInterval);
                            }
                        }, 5);
                    "
                        class="text-8xl text-valred font-extrabold font-valorant flex justify-center"
                    >
                        VALORANT
                    </h1>
                </div>


                <div x-data="{ showButton: false }" x-init="setTimeout(() => showButton = true, 2250)"
                        class="flex justify-center py-4">
                    <a  href="https://playvalorant.com/en-gb/platform-selection/"
                        x-show="showButton"
                        x-transition:enter="transition-opacity ease-in duration-500"
                        x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100"
                        class="absolute font-suse bg-transparent text-2xl font-bold text-valred ease-in-out px-6 rounded-3xl transition-all duration-300 hover:scale-110 hover:font-extrabold">

                        PLAY FOR <span class="group-hover:shadow-lg">FREE</span>
                    </a>
                    <div class="mx-auto pt-[56px] flex justify-center "
                         x-data="{showText: false}" x-init="setTimeout(() => showText = true, 2250)">
                        @if(auth()->user())
                            <div class="text-center text-valblack pt-8 border-t"
                                 x-show="showText"
                                 x-transition:enter="transition-opacity ease-in duration-500"
                                 x-transition:enter-start="opacity-0"
                                 x-transition:enter-end="opacity-100">
                                Thank you for logging in  <a href="/profile" class="font-extrabold text-valred">{{ auth()->user()->first_name }}!</a> Since you are logged in, you can <br> select your <a href="/agents" class="text-valred font-bold hover:underline hover:cursor-pointer">favorite agents</a> and then view them on your <a href="/profile" class="font-bold text-valred hover:underline hover:cursor-pointer">profile</a> page.
                            </div>
                        @else
                            <div class="text-center text-valblack pt-8 border-t"
                                 x-show="showText"
                                 x-transition:enter="transition-opacity ease-in duration-500"
                                 x-transition:enter-start="opacity-0"
                                 x-transition:enter-end="opacity-100">
                                 Welcome to <a href="/" class="text-valred font-extrabold">Valorant!</a> To get started, you can <a href="/register" class="font-bold text-valred hover:underline hover:cursor-pointer">register</a> for an account <br> or <a href="/login" class="font-bold text-valred hover:underline hover:cursor-pointer">log in</a> if you already have an account.
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="h-full flex items-center justify-center pb-24">
        <div
            x-data="{
            currentIndex: 0,
            scrollDelta: 0,
            threshold: 100, // Set the scroll threshold to prevent sensitivity
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
                    class="text-gray-700 max-w-lg mt-1 text-lg"
                    x-html="content[currentIndex].paragraph"
                ></p>
                </div>
            </div>

            <!-- Image -->
            <div>
                <img
                src="https://images.unsplash.com/photo-1731690415686-e68f78e2b5bd?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                class="rounded-2xl shadow-xl brightness-125 saturate-0"
                alt=""
                />
            </div>
            </div>
        </div>
    </section>

    <section>
        <div class="bg-none py-24 sm:py-28">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto grid max-w-2xl grid-cols-1 items-start gap-x-8 gap-y-16 sm:gap-y-24 lg:mx-0 lg:max-w-none lg:grid-cols-2        ">
                <div class="lg:pr-4">
                    <div class="relative overflow-hidden rounded-2xl bg-gray-900 px-6 pb-9 pt-64 shadow-xl sm:px-12 lg:max-w-lg lg:px-8 lg:pb-8 xl:px-10 xl:pb-10">
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
                    <h1 class=" text-3xl font-semibold font-suse tracking-tight text-valblack sm:text-4xl">On a mission to empower<span class="text-valred font-bold"><br>Valorant</span> teams</h1>
                    <div class="max-w-xl text-gray-700 text-lg">
                        <p class="mt-6">On a mission to empower Valorant enthusiasts, our platform brings you detailed insights into agents, maps, and weaponry, making it the ultimate resource for players. Dive into personalized features like favoriting your go-to agents and accessing them seamlessly on your profile.</p>
                        <p class="mt-8">Whether you're strategizing your next match or exploring new agents, our website evolves with you, offering tools and content that enhance your gameplay experience. Join the community, log in, and unlock features designed to make your Valorant journey even more immersive.</p>
                        <p class="mt-8">Et vitae blandit facilisi magna lacus commodo. Vitae sapien duis odio id et. Id blandit molestie auctor fermentum dignissim. Lacus diam tincidunt ac cursus in vel. Mauris varius vulputate et ultrices hac adipiscing egestas. Iaculis convallis ac tempor et ut. Ac lorem vel integer orci.</p>
                    </div>
                    </div>
                    <div class="mt-10 flex">
                        <a href="#" class="text-base font-semibold leading-7 text-valred hover:cursor-pointer hover:underline">Learn more about our website <span aria-hidden="true">&rarr;</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="py-24 items-center justify-center">
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:items-center md:gap-8">
                <div>
                    <img
                        src="https://images.unsplash.com/photo-1731690415686-e68f78e2b5bd?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        class="rounded-2xl w-[560px] shadow-xl brightness-125 saturate-0"
                        alt=""
                    />
                </div>
                <div class="">
                    <!-- Title -->
                    <h2
                        class="text-3xl font-bold font-suse text-gray-900 sm:text-3xl "
                    >About <span class="text-valred">Us</span></h2>

                    <!-- Paragraph -->
                    <p
                        class="text-gray-700 max-w-lg mt-1 text-lg text-start"
                    >Sed at risus vel nulla consequat fermentum. Donec et orci mauris. Nullam tempor velit id mi luctus, a scelerisque libero accumsan. In hac habitasse platea dictumst. Cras ac nunc nec massa tristique fringilla.</p>
                </div>
            </div>
        </div>
    </section>



</x-layout>

