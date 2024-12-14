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
                        <img class="h-14 ml-4" src="{{ asset('images/valred-logo.png') }}" alt="Valorant" class="bg-none" />
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
                                <button type="submit" class="text-logoblue  rounded-md px-3 py-2 text-sm font-medium font-suse inline-block uppercase after:duration-1000 after:block after:h-0.5 after:w-full after:origin-bottom-right after:scale-x-0 after:bg-valred after:transition-transform after:hover:origin-bottom-left after:hover:scale-x-100 hover:bg-primary hover:text-valred transition-all duration-300 ease-in-out">Log Out</button>
                            </form>
        
                            <style>
                                [x-cloak] {
                                    display: none !important;
                                }
                            </style>
        
                            <div x-data="{ open: false }" class="inline-flex relative cursor-pointer">
                                <x-nav-link @click="open = ! open" class="py-2">
                                    {{ auth()->user()->first_name }}
                                </x-nav-link>
        
                                <div x-cloak x-show="open" @click.away="open = false" class="absolute top-12 left-0 p-0.5 bg-white border border-gray-200 rounded-lg shadow w-auto">
                                    <x-small-nav href="/profile" :active="request()->is('profile')" class="py-2">Profile</x-small-nav>
                                    <x-small-nav href="/settings" :active="request()->is('settings')">Settings</x-small-nav>
                                </div>
                            </div>
                        @endauth
                    </div>
                </div>
            </div>
        </nav>

        @if(trim($heading) !== '')
            <header class="bg-white shadow">
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                    <h1 class="text-3xl font-bold tracking-tight">{{ $heading }}</h1>
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
