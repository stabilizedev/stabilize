<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}" class="h-full">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="{{ $page->getUrl() }}">
    <title>{{ $page->title }}</title>
    <meta name="description" content="{{ $page->description }}">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{ $page->getUrl() }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $page->title }}">
    <meta property="og:description" content="{{ $page->description }}">
    <meta property="og:image" content="{{ $page->baseUrl . $page->image }}">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="{{ $page->getUrl() }}">
    <meta property="twitter:url" content=" {{ $page->getUrl() }}">
    <meta name="twitter:title" content="{{ $page->title }}">
    <meta name="twitter:description" content="{{ $page->description }}">
    <meta name="twitter:image" content="{{ $page->baseUrl . $page->image }}">
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
