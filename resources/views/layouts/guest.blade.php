<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.full_name', 'Jai Bangla') }}</title>

    {{-- Livewire Styles --}}
    @livewireStyles
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="absolute w-full top-0">
        <nav class="z-40 w-full px-10 backdrop-filter backdrop-blur-xl border-b bg-gray-100/60 border-blue-100">
            <div class="flex justify-between p-4 bg-transparent">
                <div class="flex items-center">
                    <h3 class="text-lg font-bold text-sky-500 flex gap-3">
                        <img src="/herologo.png" class="h-10" alt="">
                        <div>
                            <p>{{ config('app.full_name', 'Jai Bangla') }}</p>
                            <p class="text-xs">Govt. of west bengal </p>
                        </div>
                    </h3>
                </div>

                <!-- left header section -->
                <div class="flex items-center justify-between">
                    <button @click="isOpen = !isOpen" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-800 lg:hidden" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                    <div class="hidden space-x-6 lg:inline-block text-sky-600 text-base font-bold">
                        <a href="#home">Home</a>
                        <a href="#scheme">Schemes</a>
                        <a href="#">About</a>
                        <a href="#">ContactUs</a>
                    </div>

                    <div class="mobile-navbar">
                        <div class="fixed left-0 mt-5 w-full h-48 p-5 bg-white rounded-lg shadow-xl top-16"
                            x-show="isOpen" @click.away=" isOpen = false" style="display: none">
                            <div class="flex flex-col space-y-6">
                                <a href="#" class="text-sm text-black">Home</a>
                                <a href="#" class="text-sm text-black">Schemes</a>
                                <a href="#" class="text-sm text-black">About</a>
                                <a href="#" class="text-sm text-black">ContactUs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="sm:px-auto sm:px-6 flex justify-center items-center h-screen">
        <div class="w-1/2 hidden sm:flex items-center justify-center"><img src="{{asset('/loginbg2.jpg')}}"
                class="sm:h-[300px] sm:block hidden md:h-[290px] xl:h-[390px]"></div>
        <div class="sm:w-1/2 w-full px-3 sm:px-8 xl:px-28 mt-10">
            <div
                class="backdrop-filter px-3 xl:px-10 relative backdrop-blur-xl rounded-lg shadow-lg border-t-2 shadow-sky-300 flex flex-col justify-center py-8">
                {{$slot}}
            </div>
        </div>
    </div>
    @livewireScriptConfig
</body>

</html>