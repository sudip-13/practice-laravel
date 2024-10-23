<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    @vite('resources/css/app.css')

</head>

<body class="antialiased bg-gray-100 font-sans">

    @if (session('message'))
        <div class="bg-blue-500 text-white p-4 rounded m-4">
            {{ session('message') }}
        </div>
    @endif

    <div class="container mx-auto p-4">
        {{ $slot }}
    </div>

    @vite('resources/js/app.js')

</body>

</html>