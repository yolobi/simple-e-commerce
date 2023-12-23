<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Goorita E-Commerce</title>
    @vite('resources/css/app.css')

    @livewireStyles
</head>

<body>
    <div class="min-h-screen bg-gray-100">
        @include('navigation-menu')

        <main class="overflow-x-auto">
            {{ $slot }}
        </main>
    </div>
    @livewireScripts
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
