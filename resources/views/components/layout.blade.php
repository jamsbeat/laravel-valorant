<!doctype html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Valorant</title>
    <link rel="icon" href="{{ asset('images/valred-logo.png') }}">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    <!--Google Fonts-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Outfit:wght@100..900&family=SUSE:wght@100..800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans+Inline+One:ital@0;1&family=Bowlby+One&family=Oxanium:wght@200..800&family=Rammetto+One&display=swap" rel="stylesheet">
    <!--Tailwind CSS-->
    <!--AlpineJS-->
        <!-- <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script> -->
    <!--LiveWire-->
        @livewireStyles
</head>

<body class="h-full">
    <div class="min-h-full">
        <nav class="border-b-2 border-gray-400/20 relative shadow-xs bg-valwhite">
            <div class="flex items-center justify-between p-3">
                <!-- Logo Section -->
                <div class="flex justify-start">
                    <a href="/">
                        <img class="h-14 ml-4" src="{{ asset('images/nvalbg.png') }}" alt="Valorant" class="bg-none" />
                    </a>
                </div>

                <!-- Centered Services Link -->
                <div class="absolute left-1/2 transform -translate-x-1/2">
                    <x-nav-link href="/" :active="request()->is('home')" class="text-center">Home</x-nav-link>
                    <x-nav-link href="/agents" :active="request()->is('agents')" class="text-center">Agents</x-nav-link>
                    <x-nav-link href="/maps" :active="request()->is('about')" class="text-center">Maps</x-nav-link>
                </div>

                <!-- Auth/Guest Section -->
                <div class="hidden md:block">
                    <div class="ml-6 pr-6 flex items-center md:ml-6 space-x-4">
                        @guest
                            <x-nav-link href="/login" :active="request()->is('login')">Log In</x-nav-link>
                            <x-nav-link href="/register" :active="request()->is('register')">Register</x-nav-link>
                        @endguest

                        @auth
                            <form method="POST" action="/logout">
                                @csrf
                                <button type="submit" class="text-valblack rounded-md px-3 py-2 text-sm font-medium font-suse inline-block uppercase after:duration-1000 after:block after:h-0.5 after:w-full after:origin-bottom-right after:scale-x-0 after:bg-valred after:transition-transform after:hover:origin-bottom-left after:hover:scale-x-100 hover:text-valred transition-all duration-300 ease-in-out">Log Out</button>
                            </form>

                            <style>
                                [x-cloak] {
                                    display: none !important;
                                }
                            </style>

                            <div x-data="{
                                            dropdownOpen: false
                                        }"
                                 class="relative">

                                <x-nav-link @click="dropdownOpen=true">{{ auth()->user()->first_name }}</x-nav-link>

                                <div x-show="dropdownOpen"
                                     @click.away="dropdownOpen=false"
                                     x-transition:enter="ease-out duration-200"
                                     x-transition:enter-start="-translate-y-2"
                                     x-transition:enter-end="translate-y-0"
                                     class="absolute top-0 z-50 w-56 mt-12 -translate-x-1/2 left-1/2 mr-2"
                                     >
                                    <div class="p-3 mt-1 text-sm bg-white border rounded-2xl shadow-md border-neutral-200/70 text-neutral-700">
                                        <x-underline-animation @click="menuBarOpen=false">Profile</x-underline-animation>
                                        <x-underline-animation  href="/settings" :active="request()->is('settings')" @click="menuBarOpen=false">Settings</x-underline-animation>
                                    </div>
                                </div>
                            </div>
                        @endauth
                    </div>
                </div>
            </div>
        </nav>

        @if(trim($heading) !== '')
            <header class="bg-white shadow border-b border-gray-300/60">
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                    <h1 class="text-3xl font-bold tracking-tight text-valblack">{{ $heading }}</h1>
                </div>
            </header>
        @endif

        <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                {{ $slot }}

                @livewireScripts
            </div>
        </main>

    </div>

    <footer class="mt-12">
        <div class="border-t-2 border-gray-400/60 relative shadow-xs bg-valwhite text-center">
            <h1 class="text-4xl text-valred hover:font-extrabold font-bold pt-6 pb-1 mt-6 font-valorant bg-transparent">VALORANT</h1>
            <div class="">
                <a href="/about" class="text-valblack/80 font-semibold hover:text-valred hover:cursor-pointer hover:underline">About</a>
                <a href="/contact" class="px-3 text-valblack/80 font-semibold hover:text-valred hover:cursor-pointer hover:underline">Contact</a>
                <a href="/terms" class="text-valblack/80 font-semibold hover:text-valred hover:cursor-pointer hover:underline">Terms</a>
            </div>
            <div class="flex justify-center py-4">
                <div class="text-valblack hover:text-valred ease-in-out transition-all duration-300 hover:scale-110 hover:cursor-pointer">
                    <span class="[&>svg]:h-6 [&>svg]:w-6">
                      <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="currentColor"
                          viewBox="0 0 448 512">
                        <path
                            d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                      </svg>
                    </span>
                </div>
                <div class="px-4 text-valblack hover:text-valred ease-in-out transition-all duration-300 hover:scale-110 hover:cursor-pointer">
                    <span class="[&>svg]:h-6 [&>svg]:w-6">
                      <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="currentColor"
                          viewBox="0 0 512 512">
                        <path
                            d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
                      </svg>
                    </span>
                </div>
                <div class="text-valblack hover:text-valred ease-in-out transition-all duration-300 hover:scale-110 hover:cursor-pointer">
                    <a href="/" class="">
                        <span class="[&>svg]:h-6 [&>svg]:w-6">
                          <svg
                              xmlns="http://www.w3.org/2000/svg"
                              fill="currentColor"
                              viewBox="0 0 448 512">
                            <path
                                d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                          </svg>
                        </span>
                    </a>
                </div>
            </div>

            <p class="mt-2 pb-12 text-valblack font-semibold">&copy; 2024 Valorant</p>
        </div>
    </footer>
</body>
</html>
