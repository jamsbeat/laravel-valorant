<!doctype html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Valorant</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    <!--Google Fonts-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Outfit:wght@100..900&family=SUSE:wght@100..800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!--AlpineJS-->
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!--LiveWire-->
        @livewireStyles
</head>

<body class="h-full">
    <div class="min-h-full">
        <nav class="bg-darkblue ">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <a href="/">
                                <img class="h-12 w-14" src="{{ asset('images/valorant-logo3.png') }}" alt="Valorant">
                            </a>
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                                <x-nav-link href="/agents" :active="request()->is('agents')">Agents</x-nav-link>
                                <x-nav-link href="/maps" :active="request()->is('maps')">Maps</x-nav-link>
                            </div>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-4 flex items-center md:ml-6 space-x-4">
                            @guest
                                <x-nav-link href="/login" :active="request()->is('login')">Log In</x-nav-link>
                                <x-nav-link href="/register" :active="request()->is('register')">Register</x-nav-link>
                            @endguest

                            @auth
                                    <form method="POST" action="/logout">
                                        @csrf

                                        <button class="rounded-md bg-black px-3 py-2 text-sm font-semibold text-gray-300 shadow-sm hover:bg-gray-700 hover:text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 font-suse" type="submit">Log Out</button>
                                    </form>

                                    <style>
                                        [x-cloak] { display: none !important; }
                                    </style>
                        
                                    
                                    
                                    <div x-data="{ open: false }" class="inline-flex relative cursor-pointer">
                                        <x-nav-link @click="open = ! open" class="">
                                            {{ auth()->user()->first_name }}
                                        </x-nav-link>
                                    
                                        <div x-cloak x-show="open" @click.away="open = false" 
                                            class="absolute top-12 left-0 p-2 bg-white border border-gray-200 rounded-lg shadow w-auto">
                                            <a href="/profile" class="px-2 py-1 cursor-pointer hover:bg-gray-700 hover:text-white rounded-md">Profile</a>
                                            <a class="px-2 py-1 cursor-pointer hover:bg-gray-700 hover:text-white rounded-md">Settings</a>
                                        </div>
                                    </div>
                            @endauth
                        </div>
                    </div>
                          
                    <head>
                        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.1/dist/flowbite.min.css" />
                    </head>
                </div>
            </div>
        </nav>


        <header class="bg-white shadow">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight">{{ $heading }}</h1>
            </div>
        </header>

        <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                {{ $slot }}

                @livewireScripts
            </div>
        </main>

    </div>

    <footer>
        <div class="bg-darkblue text-white text-center py-4 max-w-screen">
            <h1>Offical Valorant Social Media</h1>
            <div class="py-4">
                <a href="https://www.facebook.com/valorant" class="text-white hover:text-gray-300">Facebook</a>
                <a href="https://www.twitter.com/valorant" class="px-6 text-white hover:text-gray-300">Twitter</a>
                <a href="https://www.instagram.com/valorant" class="text-white hover:text-gray-300">Instagram</a>
            </div>
            <p>&copy; 2024 Valorant</p>
        </div>
    </footer>
</body>
</html>
