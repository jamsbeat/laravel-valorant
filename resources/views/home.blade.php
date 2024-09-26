<x-layout>
    <x-slot:heading>

    </x-slot:heading>

    <section class="max-w-screen">
        <body class="w-screen">
            <div class="pb-10 mt-28">
                <div class="text-8xl font-bold font-kanit flex justify-center">
                    VALORANT
                </div>
                <a href="https://playvalorant.com/en-gb/platform-selection/ " class="flex justify-center py-10">
                    <button class="font-suse bg-black text-white px-6 py-2 shadow-lg rounded-full transition-all duration-300 hover:scale-110">
                        Play For Free
                    </button>
                </a>
            </div>
        </body>
    </section>

    <section>
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

    <section>
        <div class="pt-20">
            <div class="w-full max-w-screen items-center">
                <div class="text-3xl p-4 font-bold font-outfit">• News</div>
                <div class="grid grid-cols-1 gap-4">
                    <a href="/forum">
                        <div class="bg-white shadow-md rounded-lg overflow-hidden flex">
                            <img class="w-1/4 h-[180px] object-cover" src="https://via.placeholder.com/180" alt="Image 1">
                            <div class="p-4">
                                <div class=" text-2xl font-semibold font-outfit text-black pb-1 underline">
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
                                <div class=" text-2xl font-semibold font-outfit text-black pb-1 underline">
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
                                <div class=" text-2xl font-semibold font-outfit text-black pb- underline">
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