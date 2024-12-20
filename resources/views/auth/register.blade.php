<x-layout>
    <x-slot:heading>

    </x-slot:heading>

    <body class="flex items-center justify-center h-screen bg-valred">
        <div class="flex items-center justify-center w-full h-full py-12 z-50">
            <div class="w-full max-w-sm p-6 bg-white rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold text-valred font-suse w-full mb-6">Register</h2>
                <form method="POST" action="/register">
                    @csrf
                    <div class="mb-4">
                        <label class="relative block">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-1 pointer-events-none w-6 h-6 absolute top-1/2 transform -translate-y-1/2 left-3 text-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>
                            <input class="w-full bg-transparent pl-10 p-2 border rounded-2xl focus:outline-none focus:ring-2 focus:ring-valred focus:border-transparent"
                            name="first_name" id="first_name" type="first_name" placeholder="First Name" required />
                            <x-form-error name="first_name" />
                        </label>
                    </div>
                    <div class="mb-4">
                        <label class="relative block">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-1 pointer-events-none w-6 h-6 absolute top-1/2 transform -translate-y-1/2 left-3 text-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9h16.5m-16.5 6.75h16.5" />
                            </svg>
                            <input class="w-full pl-10 bg-transparent p-2 border rounded-2xl focus:outline-none focus:ring-2 focus:ring-valred focus:border-transparent"
                            name="last_name" id="last_name" type="last_name" placeholder="Last Name" required />
                            <x-form-error name="last_name" />
                        </label>
                    </div>
                    <div class="mb-4 py-2">
                        <label class="relative block">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-1 pointer-events-none w-6 h-6 absolute top-1/2 transform -translate-y-1/2 left-3 text-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                            </svg>
                            <input class="w-full pl-10 bg-transparent p-2 border rounded-2xl focus:outline-none focus:ring-2 focus:ring-valred focus:border-transparent"
                            name="email" id="email" type="email" placeholder="Email" required />
                            <x-form-error name="email" />
                        </label>
                    </div>
                    <div class="mb-4">
                        <label class="relative block">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-1 pointer-events-none w-6 h-6 absolute top-1/2 transform -translate-y-1/2 left-3 text-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z" />
                            </svg>
                            <input class="w-full pl-10 bg-transparent p-2 border rounded-2xl focus:outline-none focus:ring-2 focus:ring-valred focus:border-transparent"
                            name="password" id="password" type="password" placeholder="Password" required />
                            <x-form-error name="password" />
                        </label>
                    </div>
                    <div class="mb-4 pb-4">
                        <label class="relative block">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-1 pointer-events-none w-6 h-6 absolute top-1/2 transform -translate-y-1/2 left-3 text-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9h16.5m-16.5 6.75h16.5" />
                            </svg>
                            <input class="w-full pl-10 bg-transparent p-2 border rounded-2xl focus:outline-none focus:ring-2 focus:ring-valred focus:border-transparent"
                            name="password_confirmation" id="password_confirmation" type="password" placeholder="Confirm Password" required />
                            <x-form-error name="password_confirmation" />
                        </label>
                    </div>
                    <div class="pt-6 border-t">
                        <button class="w-full px-4 py-2 text-white bg-valred rounded-2xl hover:bg-valdred focus:outline-none focus:ring-2 focus:ring-valdred focus:ring-offset-2"
                        type="submit">Register</button>
                    </div>
                    <div class="justify-self-center my-2">
                        <a href="/" class="text-gray-400 text-sm hover:underline">Cancel</a>
                    </div>
                </form>
                <p class="mt-6 text-center text-sm">
                    Already a member? <a href="/login" class="text-valred font-semibold hover:underline">Login now!</a>
                </p>
            </div>
        </div>
    </body>


</x-layout>
