<!doctype html class="h-full bg-white">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Dashboard' }}</title>
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Alpine.js via CDN -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>
<body class="h-full">
<div>    <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
    <x-backend.sidebar></x-backend.sidebar>
    <div class="lg:pl-72">
        <x-backend.topbar></x-backend.topbar>
        <main class="py-10">
            <x-backend.header title="{{ $title ?? 'Dashboard Overzicht' }}"></x-backend.header>
            <div class="px-4 sm:px-6 lg:px-8">
                {{$slot}}
            </div>
        </main>
    </div>
</div>
</body>
</html>
