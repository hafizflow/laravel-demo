<!doctype html>
<html
    lang="en"
    class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta
        http-equiv="X-UA-Compatible"
        content="ie=edge">
    <title>Home Page</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body class="h-full">
    <nav class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    <!-- Mobile menu button-->
                    <button
                        type="button"
                        class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-white focus:outline-hidden focus:ring-inset"
                        aria-controls="mobile-menu"
                        aria-expanded="false">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Open main menu</span>

                        <svg
                            class="block size-6"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            aria-hidden="true"
                            data-slot="icon">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
                        </svg>

                           <svg
                               class="hidden size-6"
                               fill="none"
                               viewBox="0 0 24 24"
                               stroke-width="1.5"
                               stroke="currentColor"
                               aria-hidden="true"
                               data-slot="icon">
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M6 18 18 6M6 6l12 12"/>
                           </svg>
                    </button>
                </div>
                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex shrink-0 items-center">
                        <img
                            class="h-8 w-auto"
                            src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500"
                            alt="Your Company">
                    </div>
                    <div class="hidden sm:ml-6 sm:block">
                        <div class="flex space-x-4">
                            <x-nav-link
                                href="/"
                                :active="request()->is('/')">Home</x-nav-link>
                            <x-nav-link
                                href="/jobs"
                                :active="request()->is('jobs')">Jobs</x-nav-link>
                            <x-nav-link
                                href="/contact"
                                :active="request()->is('contact')">Contact</x-nav-link>
                        </div>
                    </div>
                </div>
                <div class=" absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    @guest()
                        <x-nav-link
                            href="/login"
                            :active="request()->is('login')">Login</x-nav-link>
                        <x-nav-link
                            href="/register"
                            :active="request()->is('register')">Register</x-nav-link>
                    @endguest

                    @auth()
                        <form
                            action="/logout"
                            method="POST">
                            @csrf
                            <x-form-button>Log Out</x-form-button>
                        </form>
                    @endauth
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div
            class="sm:hidden"
            id="mobile-menu">
            <div class="space-y-1 px-2 pt-2 pb-3">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a
                    href="/"
                    class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium"
                    aria-current="page">Home</a>
                <a
                    href="/jobs"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Jobs</a>
                <a
                    href="/contact"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Contact</a>
            </div>
        </div>
    </nav>

    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 flex justify-between items-center sm:flex-row">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $heading }}</h1>

            <x-button href="/jobs/create">Create Job</x-button>
        </div>
    </header>
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
    </main>

</body>

</html>
