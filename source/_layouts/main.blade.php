<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="{{ $page->getUrl() }}">
    <meta name="description" content="{{ $page->description }}">
    <title>{{ $page->title }}</title>
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
</head>

<body class="text-white bg-neutral-900 font-sans antialiased">
    <div class="relative overflow-hidden">
        <header class="relative">
            <div class="pt-6">
                <nav class="relative max-w-7xl mx-auto flex items-center justify-between px-4 sm:px-6"
                    aria-label="Global">
                    <div class="flex items-center justify-between flex-1">
                        <div
                            class="flex items-center justify-between w-full flex-shrink-0 md:w-auto">
                            <a href="#">
                                <span class="sr-only">Stabilize</span>
                                <img class="h-12 w-auto sm:h-16"
                                    src="/assets/images/stabilize-white-text-emerald-logo.png"
                                    alt="">
                            </a>
                            <div class="-mr-2 flex items-center md:hidden">
                                <button type="button"
                                    class="bg-neutral-900 rounded-md p-2 inline-flex items-center justify-center text-neutral-400 hover:bg-neutral-800 focus:outline-none focus:ring-2 focus-ring-inset focus:ring-white"
                                    aria-expanded="false">
                                    <span class="sr-only">Open main menu</span>
                                    <!-- Heroicon name: outline/menu -->
                                    <svg class="h-6 w-6"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24"
                                        stroke-width="2" stroke="currentColor"
                                        aria-hidden="true">
                                        <path stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M4 6h16M4 12h16M4 18h16" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="hidden space-x-8 md:flex md:ml-10">
                            <a href="#"
                                class="border-b-2 border-transparent font-medium text-2xl hover:border-emerald-600">Tools</a>

                            <a href="#"
                                class="border-b-2 border-transparent font-medium text-2xl hover:border-emerald-600">Team</a>

                            <a href="#"
                                class="border-b-2 border-transparent font-medium text-2xl hover:border-emerald-600">Training</a>
                        </div>
                    </div>
                </nav>
            </div>

            <!--
                Mobile menu, show/hide based on menu open state.

                Entering: "duration-150 ease-out"
                From: "opacity-0 scale-95"
                To: "opacity-100 scale-100"
                Leaving: "duration-100 ease-in"
                From: "opacity-100 scale-100"
                To: "opacity-0 scale-95"
            -->
            <div
                class="absolute z-10 top-0 inset-x-0 p-2 transition transform origin-top hidden">
                <div
                    class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
                    <div class="px-5 pt-4 flex items-center justify-between">
                        <div>
                            <img class="h-12 w-auto"
                                    src="/assets/images/stabilize-black-text.png"
                                    alt="">
                        </div>
                        <div class="-mr-2">
                            <button type="button"
                                class="bg-white rounded-md p-2 inline-flex items-center justify-center text-neutral-400 hover:bg-neutral-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-neutral-600">
                                <span class="sr-only">Close menu</span>
                                <!-- Heroicon name: outline/x -->
                                <svg class="h-6 w-6"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24"
                                    stroke-width="2" stroke="currentColor"
                                    aria-hidden="true">
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="pt-5 pb-6">
                        <div class="px-2 space-y-1">
                            <a href="#"
                                class="block px-3 py-2 rounded-md text-neutral-900 hover:bg-neutral-50">Product</a>

                            <a href="#"
                                class="block px-3 py-2 rounded-md text-neutral-900 hover:bg-neutral-50">Features</a>

                            <a href="#"
                                class="block px-3 py-2 rounded-md text-neutral-900 hover:bg-neutral-50">Marketplace</a>

                            <a href="#"
                                class="block px-3 py-2 rounded-md text-neutral-900 hover:bg-neutral-50">Company</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main class="mt-16 mx-auto max-w-7xl px-4 sm:mt-24">
            <div class="text-center">
              <h1 class="text-4xl tracking-tight font-semibold text-white sm:text-5xl md:text-6xl">
                <span class="block">Tools to fix <span class="text-emerald-600">friction</span></span>
                <span class="block">and maximize <span class="text-emerald-600">momentum</span></span>
              </h1>
              <p class="italic mt-3 max-w-md mx-auto text-lg text-neutral-300 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                Our goal at Stabilize is to provide developers with an ecosystem to get back on track and keep building with less effort!
              </p>
            </div>
          </main>
    </div>
</body>

</html>
