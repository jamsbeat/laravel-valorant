<x-layout>
    <x-slot:heading>

    </x-slot:heading>

    <section class="max-w-screen">
        <body class="w-screen">
            <div class="pb-10 mt-28">
                <div class="text-8xl font-bold font-kanit flex justify-center">
                    VALORANT
                </div>
                <div class="flex justify-center p-10">
                    <a href="https://playvalorant.com/en-gb/platform-selection/ " class="font-suse bg-black text-white px-6 py-2 shadow-lg rounded-full transition-all duration-300 hover:scale-110">
                        Play For Free
                    </a>
                </div>
            </div>
        </body>
    </section>

    <section class="pb-16">
        <body class="bg-gray-100 flex justify-center items-center h-screen">
            <div class="grid grid-cols-3 border-t border-black pt-16 ">
                <div class="w-full flex justify-center">
                    <a href="/agents">
                        <div class="bg-white shadow-md overflow-hidden rounded-lg">
                            <div class=" w-full relative mx-auto h-auto overflow-hidden">
                                <img class="w-full h-48 relative z-0 transition-all duration-300 hover:scale-110" src="{{ asset('images/agents-photo.jpg') }}" alt="Image 1">
                            </div>
                            <div class="p-4">
                                <div class="block text-lg font-semibold font-suse text-black ">
                                    Agents
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="w-full flex justify-center">
                    <a href="/maps">
                        <div class="bg-white shadow-md overflow-hidden rounded-lg">
                            <div class=" w-full relative mx-auto h-auto overflow-hidden">
                                <img class="w-full h-48 relative z-0 transition-all duration-300 hover:scale-110" src="{{ asset('images/abyss-bg.jpg') }}" alt="Image 1">
                            </div>
                            <div class="p-4">
                                <div class="block text-lg font-semibold font-suse text-black ">
                                    Maps
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="w-full flex justify-center">
                    <a href="/forum">
                        <div class="bg-white shadow-md overflow-hidden rounded-lg">
                            <div class=" w-full relative mx-auto h-auto overflow-hidden">
                                <img class="w-full h-48 relative z-0 transition-all duration-300 hover:scale-110" src="{{ asset('images/abyss-bg.jpg') }}" alt="Image 1">
                            </div>
                            <div class="p-4">
                                <div class="block text-lg font-semibold font-suse text-black ">
                                    Forum
                                </div>
                            </div>
                        </div>
                    </a>
                </div>    
        </body>
    </section>

    <section class="pt-16 pb-16">
        <body class="bg-gray-100 flex items-center justify-center min-h-screen">
            <div class="relative w-full max-w-screen mx-auto">
                <!-- Carousel wrapper -->
                <div class="overflow-hidden relative rounded-lg">
                    <div
                        class="flex transition-transform duration-500 ease-in-out transform"
                        id="carousel"
                    >
                    
                    <!-- Slide 1 -->
                    <div class="min-w-full relative">
                        <img
                            src="https://via.placeholder.com/800x400"
                            alt="Slide 1"
                            class="w-full h-full object-cover"
                        />
                        <div class="w-full absolute bottom-0 left-0 bg-white p-4 text-black font-suse font-semibold text-lg">
                            Slide 1 Text
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="min-w-full relative">
                        <img
                            src="https://via.placeholder.com/800x400"
                            alt="Slide 2"
                            class="w-full h-full object-cover"
                        />
                        <div class="w-full absolute bottom-0 left-0 bg-white p-4 text-black font-suse font-semibold text-lg">
                            Slide 2 Text
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="min-w-full relative">
                        <img
                            src="https://via.placeholder.com/800x400"
                            alt="Slide 3"
                            class="w-full h-full object-cover"
                        />
                        <div class="w-full absolute bottom-0 left-0 bg-white p-4 text-black font-suse font-semibold text-lg">
                            Slide 3 Text
                        </div>
                    </div>
                    </div>
                </div>
    
                <!-- Navigation buttons -->
                <button
                    class="absolute top-1/2 left-5 transform -translate-y-1/2 p-3 bg-gray-700 bg-opacity-50 rounded-full text-white hover:bg-opacity-75 focus:outline-none"
                    onclick="scrollCarousel(-1)"
                >
                    <svg
                        class="w-6 h-6"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M15 19l-7-7 7-7"
                        ></path>
                    </svg>
                </button>
                <button
                    class="absolute top-1/2 right-5 transform -translate-y-1/2 p-3 bg-gray-700 bg-opacity-50 rounded-full text-white hover:bg-opacity-75 focus:outline-none"
                    onclick="scrollCarousel(1)"
                >
                    <svg
                        class="w-6 h-6"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M9 5l7 7-7 7"
                        ></path>
                    </svg>
                </button>
            </div>
    
            <script>
                let currentIndex = 0;
    
                function scrollCarousel(direction) {
                    const carousel = document.getElementById("carousel");
                    const totalSlides = carousel.children.length;
                    currentIndex =
                        (currentIndex + direction + totalSlides) % totalSlides;
                    carousel.style.transform = `translateX(-${
                        currentIndex * 100
                    }%)`;
                }
            </script>
        </body>
    </section>

    <section class="pt-16">
        <div class="">
            <div class="w-full max-w-screen items-center">
                <div class="text-3xl p-4 py-2 h-[60px] font-bold font-outfit">• News</div>
                <div class="grid grid-cols-1 gap-4">
                    <a href="/forum">
                        <div class="bg-white shadow-md rounded-lg overflow-hidden flex">
                            <img class="w-1/4 h-[180px] object-cover" src="https://via.placeholder.com/180" alt="Image 1">
                            <div class="p-4">
                                <div class=" text-2xl font-semibold font-outfit text-black py-2 underline">
                                    Title
                                </div>
                                <div class="font-montserrat text-lg text-black ">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="/forum">
                        <div class="bg-white shadow-md rounded-lg overflow-hidden flex">
                            <img class="w-1/4 h-[180px] object-cover" src="https://via.placeholder.com/180" alt="Image 1">
                            <div class="p-4">
                                <div class=" text-2xl font-semibold font-outfit text-black py-2 underline">
                                    Title
                                </div>
                                <div class="font-montserrat text-lg text-black ">
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="/forum">
                        <div class="bg-white shadow-md rounded-lg overflow-hidden flex">
                            <img class="w-1/4 h-[180px] object-cover" src="https://via.placeholder.com/180" alt="Image 1">
                            <div class="p-4">
                                <div class=" text-2xl font-semibold font-outfit text-black py-2 underline">
                                    Title
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