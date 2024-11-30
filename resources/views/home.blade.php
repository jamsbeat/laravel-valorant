<x-layout>
    <x-slot:heading>

    </x-slot:heading>

    <section class="max-w-screen min-h-1/2 pb-[250px]">
        <body class="w-screen h-full">
            <div class="pt-[150px]">
                <div class="text-8xl text-valred font-bold font-valorant flex justify-center">
                    VALORANT
                </div>
                <div class="flex justify-center p-8">
                    <a href="https://playvalorant.com/en-gb/platform-selection/ " class="font-suse bg-valblack text-white px-6 py-2 shadow-lg rounded-full transition-all duration-300 hover:scale-110">
                        Play For Free
                    </a>
                </div>
                <div class="flex justify-center p-8 border-t-2 border-gray-400/40 ">     
                    <p class="mb-3 text-center text-gray-500 dark:text-gray-400 w-1/2">Track work across the enterprise through an open, 
                        collaborative platform. Link issues across Jira and ingest data from other software development tools, so your 
                        IT support and operations teams have richer contextual information to rapidly respond to requests, incidents, 
                        and changes.
                    </p>
                </div>
            </div>
        </body>
    </section>

    <section>
        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 lg:px-8">
          <div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:items-center md:gap-8">
            <div>
              <div class="max-w-lg md:max-w-none">
                <h2 class="text-2xl font-semibold text-gray-900 sm:text-3xl">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </h2>
      
                <p class="mt-4 text-gray-700">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur doloremque saepe
                  architecto maiores repudiandae amet perferendis repellendus, reprehenderit voluptas
                  sequi.
                </p>
              </div>
            </div>
      
            <div>
              <img
                src="https://images.unsplash.com/photo-1731690415686-e68f78e2b5bd?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                class="rounded"
                alt=""
              />
            </div>
          </div>
        </div>
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
                <x-header>
                    • News
                </x-header>
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