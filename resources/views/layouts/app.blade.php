<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.full_name', 'Jai Bangla') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/dark-mode-FOUC.js') }}"></script>

    {{-- Livewire Styles --}}
    @livewireStyles

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        @include('layouts.side-navigation')
        @include('layouts.top-navigation')

        <div>
            <!-- Page Heading -->
            @if (isset($header))
            <header class="container items-center justify-between w-full px-4 pt-6 pb-4 mx-auto sm:px-6 lg:px-8 sm:flex">
                <div>
                    <h2 class="text-2xl font-semibold leading-tight text-gray-800">
                        {{ $header }}
                    </h2>
                    @if (isset($sub_header))
                    <h2 class="text-sm text-gray-500 leading-tight mt-1.5">
                        {{ $sub_header }}
                    </h2>
                    @endif
                </div>

                @if (isset($action))
                <div class="mt-3 leading-tight sm:mt-0">
                    {{ $action }}
                </div>
                @endif
            </header>
            @endif

            <!-- Page Content -->
            <main class="container px-4 pt-6 pb-4 mx-auto sm:px-6 lg:px-8">
                {{ $slot }}
            </main>

        </div>
    </div>

    @livewireScriptConfig

    @stack('scripts')

    @if (session('status'))
    <x-alert icon="{{ session('status') }}" title="{{ session('message') }}" text="{{ session('body') }}" />
    @endif
</body>

</html>