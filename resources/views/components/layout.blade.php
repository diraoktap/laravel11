<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Stylesheet --}}
    @vite('resources/css/app.css')
    {{-- Javascript --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    {{-- fonts --}}
    <link
        href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <title>Home</title>

</head>

<body class="h-full">
    <div class="min-h-full">
        <x-partial.navbar></x-partial.navbar>
        <x-partial.header>{{ $title }}</x-partial.header>

        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <!-- Your content -->
                {{ $slot }}
            </div>
        </main>
    </div>

</body>

</html>
