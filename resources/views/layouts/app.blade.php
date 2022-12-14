<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/js/app.js')
    <title>Laravel</title>
    @livewireStyles
</head>
<body class="font-sans antialiased text-gray-900">
<div class="min-h-screen bg-gray-100">
    @include('layouts.navigation')

    <!-- Page Content -->
    <main class="container mx-auto px-4 py-4">
        @yield('content')
    </main>
</div>

<!-- Scripts -->

@stack('scripts')
@livewireScripts

</body>
</html>
