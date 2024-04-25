<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}" class="h-full">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="{{ $page->getUrl() }}">
    <meta name="description" content="{{ $page->description }}">
    <title>{{ $page->title }}</title>
    <script defer
        src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
</head>

<body
    class="min-h-full w-full text-neutral-100 bg-zinc-950 font-sans antialiased flex flex-col">
    <x-navbar></x-navbar>
    <main class="flex-1 flex flex-col">
        @yield('body')
    </main>
    <x-footer></x-footer>
</body>

</html>
