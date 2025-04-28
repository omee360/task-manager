<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Page ka title dynamically set karta hai -->
        <title>Task Manager - @yield('title')</title>
        <!-- Vite se Tailwind CSS files load karta hai -->
        @vite('resources/css/app.css')
    </head>
    <body class="font-sans antialiased">
        <!-- Pura page ka container, Tailwind ke sath gray background -->
        <div class="min-h-screen bg-gray-100">
            <!-- Navbar Tailwind ke sath styled -->
            <nav class="bg-white shadow-sm">
                <div class="container mx-auto px-4 py-3">
                    <div class="flex justify-between items-center">
                        <!-- Brand name -->
                        <a href="{{ route('home') }}" class="text-xl font-bold text-gray-800">Task Manager</a>
                        <!-- Navigation links -->
                        <div class="space-x-4">
                            <a href="{{ route('home') }}" class="text-gray-600 hover:text-gray-800">Home</a>
                            <a href="{{ route('about') }}" class="text-gray-600 hover:text-gray-800">About</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Main content area, container ke sath -->
            <main class="container mx-auto px-4 py-6">
                @yield('content')
            </main>
        </div>
        @vite('resources/js/app.js')
    </body>
</html>