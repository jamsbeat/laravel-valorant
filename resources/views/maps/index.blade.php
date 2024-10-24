<x-layout>
    <x-slot:heading>
        <div class="font-semibold font-outfit">Maps</div>
    </x-slot:heading>

    <section class="max-w-screen pb-16 border-b border-black pt-10">
        <div class="flex justify-between items-start">
            <div class="bg-white/50 w-[600px] h-[220px] p-4 font-montserrat 
            rounded border border-black/10">
            Step into a world designed for tactical brilliance and unforgettable moments. 
            Each map is meticulously crafted to test your creativity, challenge your team’s synergy, and deliver pulse-pounding highlights. 
            Whether you’re setting up the perfect ambush, pulling off incredible plays, or securing the clutch your team needs, this is your stage to shine.
            The plays you make here will echo beyond the game — be the strategist, the innovator, the one they’ll remember and imitate for years to come.
            </div>
            <div class="flex flex-col items-end">
                <div class="rounded border border-black/10">
                    <img src="https://placeholder.com/450x220" alt="" class="w-[450px] h-[220px]">
                </div>
            </div>
        </div>
    </section>

    <div>
        <div>
            @foreach ($maps as $index => $map)
                <div class="py-16 border-b border-black">
                    <div class="text-3xl font-semibold font-outfit underline">{{ $map->title }}</div>
                    <div class="py-8">
                        <body class="bg-gray-100 flex items-center justify-center min-h-screen">
                            <div class="relative w-full max-w-screen mx-auto">
                                <!-- Carousel wrapper -->
                                <div class="overflow-hidden relative rounded-lg">
                                    <div
                                        class="flex transition-transform duration-500 ease-in-out transform"
                                        id="carousel-{{ $index }}"
                                    >
                                    
                                    <!-- Slide 1 -->
                                    <div class="min-w-full min-h-1/2 relative">
                                        <img
                                            src="{{ $map->img1 }}"
                                            alt="Slide 1"
                                            class="w-full h-full object-cover"
                                        />
                                        
                                    </div>
                
                                    <!-- Slide 2 -->
                                    <div class="min-w-full relative">
                                        <img
                                            src="{{ $map->img2 }}"
                                            alt="Slide 2"
                                            class="w-full h-full object-cover"
                                        />

                                    </div>
                
                                    <!-- Slide 3 -->
                                    <div class="min-w-full relative">
                                        <img
                                            src="{{ $map->img3 }}"
                                            alt="Slide 3"
                                            class="w-full h-full object-cover"
                                        />
                                        
                                    </div>
                                    </div>
                                </div>
                    
                                <!-- Navigation buttons -->
                                <button
                                    class="absolute top-1/2 left-5 transform -translate-y-1/2 p-3 bg-gray-700 bg-opacity-50 rounded-full text-white hover:bg-opacity-75 focus:outline-none"
                                    onclick="scrollCarousel(-1, {{ $index }})"
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
                                    onclick="scrollCarousel(1, {{ $index }})"
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
                                let currentIndices = {};
        
                                function scrollCarousel(direction, index) {
                                    const carousel = document.getElementById(`carousel-${index}`);
                                    const totalSlides = carousel.children.length;
                                    
                                    if (!(index in currentIndices)) {
                                        currentIndices[index] = 0;
                                    }
        
                                    currentIndices[index] = 
                                        (currentIndices[index] + direction + totalSlides) % totalSlides;
                                    carousel.style.transform = `translateX(-${
                                        currentIndices[index] * 100
                                    }%)`;
                                }
                            </script>
                        </body>
                    </div>
                </div>
            @endforeach
        </div>
    </div>



</x-layout>