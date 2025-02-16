<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ env('APP_NAME') }}</title>
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
</head>

<body class="selection:bg-[#00bc51] selection:text-white">
    <header class="w-10/12 mx-auto flex items-center justify-between my-10">
        <div class="flex items-center">
            <a href="/">
                <span class="font-bold text-3xl uppercase text-[#00bc51]">raja</span>
                <span class="font-bold text-3xl uppercase text-gray-950">api</span>
            </a>
        </div>
        <div>
            <ul class="flex items-center">
                <li><a href="/" class="mx-2 capitalize text-lg text-gray-800">home</a></li>
                <li><a href="/docs" class="mx-2 capitalize text-lg text-gray-800">docs</a></li>
                <li><a href="https://github.com/youssef-erremili/Raja-club-Rest-api" class="mx-2 capitalize text-lg text-gray-800">github</a></li>
                @auth
                <li class="inline-block text-sm capitalize bg-[#00bc51] px-2.5 py-1.5 rounded-md text-white">
                    {{ Auth::user()->name }}
                </li>
                @endauth
                @guest
                    <li><a href="/sign-in" class="mx-2 capitalize text-lg text-gray-800">sign in</a></li>
                @endguest
            </ul>
        </div>
    </header>
    {{ $slot }}
    <footer class="h-auto text-center mt-28 py-10">
        <p class="font-medium text-gray-800 text-sm">made with ❤ by <a href="/ap" class="underline">Youssef Erremili</a></p>
    </footer>
</body>
</html>