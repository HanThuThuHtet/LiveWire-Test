<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
        <title>LiveWire Test</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="flex max-w-5xl mx-auto py-6 px-4">
                    <h2 class="font-semibold text-xl
                        text-gray-800 leading-tight">
                        Livewire
                    </h2>

                    <a class="text-green-600 ms-6"
                        href="/users/add" wire:navigate>+ Add User</a>
                </div>
            </header>

            <!-- Page Content -->
            <main class="max-w-3xl mx-auto py-6 px-4">
                {{ $slot }}
            </main>
        </div>
        <script defer src="{{asset('js/app.js')}}"></script>

    </body>
</html>
