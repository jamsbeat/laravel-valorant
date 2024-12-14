<x-layout>
    <x-slot:heading>
        
    </x-slot:heading>

    <body class="flex items-center justify-center h-screen bg-valred">
        <div class="flex items-center justify-center w-full h-full py-12 z-50">
            <div class="w-full max-w-sm p-6 bg-white rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold text-valred w-full mb-6">Login</h2>
                <form method="POST" action="/login">
                    @csrf
                    <div class="mb-4">
                        <label class="relative block">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-1 pointer-events-none w-6 h-6 absolute top-1/2 transform -translate-y-1/2 left-3 text-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                            </svg>
                            <input class="w-full pl-10 p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-valred focus:border-transparent" 
                            name="email" id="email" type="email" placeholder="Email" required />
                            <div class="">
                                <x-form-error name="email" />
                            </div>
                        </label>
                    </div>
                    <div class="mb-4">
                        <label class="relative block">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-1 pointer-events-none w-6 h-6 absolute top-1/2 transform -translate-y-1/2 left-3 text-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z" />
                            </svg>
                            <input class="w-full pl-10 p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-valred focus:border-transparent" 
                            name="password" id="password" type="password" placeholder="Password" required />
                            <x-form-error name="password" />
                        </label>
                    </div>
                    <div class="flex justify-between items-center mb-6">
                        <a href="#" class="text-sm text-valred hover:underline">Forgot password?</a>
                    </div>
                    <div class="pt-6 border-t">
                        <button class="w-full px-4 py-2 text-white bg-valred rounded-lg hover:bg-valdred focus:outline-none focus:ring-2 focus:ring-valdred focus:ring-offset-2"
                        type>Login</button>
                    </div>
                    <div class="justify-self-center my-2">
                        <a href="/" class="text-gray-400 text-sm hover:underline">Cancel</a>
                    </div>
                </form>
                <p class="mt-8 text-center text-sm ">
                    Not a member? <a href="/register" class="text-valred font-medium hover:underline">Register now!</a>
                </p>
            </div>
        </div>
    </body>

</x-layout>