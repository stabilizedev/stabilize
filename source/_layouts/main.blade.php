<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}" class="h-full">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="{{ $page->getUrl() }}">
    <meta name="description" content="{{ $page->description }}">
    <title>{{ $page->title }}</title>
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
</head>

<body
    class="h-full w-full text-neutral-100 bg-zinc-950 font-sans antialiased p-px sm:p-4 flex flex-col">
    <header>
        <nav class="max-w-7xl mx-auto flex items-center justify-between p-6 sm:px-4"
            aria-label="Global">
            <div class="flex sm:flex-1">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">Stabilize</span>
                    <img class="h-12 w-auto"
                        src="/assets/images/stabilize-white-text-emerald-logo.png"
                        alt="Stabilize">
                </a>
            </div>
            <div class="flex sm:hidden">
                <button type="button"
                    class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-neutral-700">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6 text-emerald-600" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
            <div class="hidden sm:flex sm:gap-x-6">
                <a href="#" class="text-sm font-semibold leading-6">Product</a>
                <a href="#" class="text-sm font-semibold leading-6">Features</a>
                <a href="#"
                    class="text-sm font-semibold leading-6">Marketplace</a>
                <a href="#" class="text-sm font-semibold leading-6">Company</a>
            </div>
        </nav>
        <!-- Mobile menu, show/hide based on menu open state. -->
        <div class="hidden" role="dialog" aria-modal="true">
            <!-- Background backdrop, show/hide based on slide-over state. -->
            <div class="fixed inset-0 z-50"></div>
            <div
                class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-neutral-900/10">
                <div class="flex items-center justify-between">
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">Your Company</span>
                        <img class="h-8 w-auto"
                            src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                            alt="">
                    </a>
                    <button type="button"
                        class="-m-2.5 rounded-md p-2.5 text-neutral-700">
                        <span class="sr-only">Close menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="mt-6 flow-root">
                    <div class="-my-6 divide-y divide-neutral-500/10">
                        <div class="space-y-2 py-6">
                            <a href="#"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 hover:bg-neutral-50">Product</a>
                            <a href="#"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 hover:bg-neutral-50">Features</a>
                            <a href="#"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 hover:bg-neutral-50">Marketplace</a>
                            <a href="#"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 hover:bg-neutral-50">Company</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="flex-1">
        @yield('body')
    </main>
    <footer aria-labelledby="footer-heading" class="px-6 lg:px-8">
        <h2 id="footer-heading" class="sr-only">Footer</h2>
        <div
            class="mx-auto max-w-2xl lg:max-w-7xl pb-8 pt-16 sm:pt-24 lg:pt-32">
            <div class="lg:grid lg:grid-cols-3 lg:gap-8 text-center">
                <div class="flex flex-col items-center lg:items-start">
                    <div class="flex flex-col items-center">
                        <img class="w-64"
                            src="/assets/images/stabilize-white-text-emerald-logo.png"
                            alt="Stabilize">
                        <div class="flex space-x-6 mt-2">
                            <a href="#"
                                class="text-emerald-500 hover:text-neutral-400">
                                <span class="sr-only">X</span>
                                <svg class="h-6 w-6" fill="currentColor"
                                    viewBox="0 0 24 24" aria-hidden="true">
                                    <path
                                        d="M13.6823 10.6218L20.2391 3H18.6854L12.9921 9.61788L8.44486 3H3.2002L10.0765 13.0074L3.2002 21H4.75404L10.7663 14.0113L15.5685 21H20.8131L13.6819 10.6218H13.6823ZM11.5541 13.0956L10.8574 12.0991L5.31391 4.16971H7.70053L12.1742 10.5689L12.8709 11.5655L18.6861 19.8835H16.2995L11.5541 13.096V13.0956Z" />
                                </svg>
                            </a>
                            <a href="#"
                                class="text-emerald-500 hover:text-neutral-400">
                                <span class="sr-only">GitHub</span>
                                <svg class="h-6 w-6" fill="currentColor"
                                    viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#"
                                class="text-emerald-500 hover:text-neutral-400">
                                <span class="sr-only">GitHub</span>
                                <svg class="h-6 w-6" fill="currentColor"
                                    viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M0.504468485,6.41311307 L4.40263405,6.41311307 L4.40263405,19.9987194 L0.504468485,19.9987194 L0.504468485,6.41311307 Z M2.35418627,4.71379178 L2.32596425,4.71379178 C0.914863594,4.71379178 0,3.67524651 0,2.36009732 C0,1.01805609 0.94190969,0 2.38123236,0 C3.81937912,0 4.70366886,1.01549494 4.73189087,2.3562556 C4.73189087,3.67140479 3.81937912,4.71379178 2.35418627,4.71379178 L2.35418627,4.71379178 Z M20,20 L15.5797272,20 L15.5797272,12.9683698 C15.5797272,11.1281854 14.8882879,9.8732232 13.3678269,9.8732232 C12.2048448,9.8732232 11.5580903,10.7196824 11.2570555,11.537969 C11.1441675,11.8299398 11.1618062,12.2384428 11.1618062,12.6482264 L11.1618062,20 L6.7826905,20 C6.7826905,20 6.83913452,7.54514022 6.7826905,6.41311307 L11.1618062,6.41311307 L11.1618062,8.54526828 C11.420508,7.61301063 12.8198495,6.28249456 15.0529163,6.28249456 C17.8233772,6.28249456 20,8.23793059 20,12.4446152 L20,20 L20,20 Z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="mt-4 space-y-4 font-mono text-sm">
                        <p>10522 Santa Gertrudes Ave #103</p>
                        <p>Whittier, CA 90603</p>
                        <a class="block underline decoration-wavy underline-offset-4 decoration-emerald-500"
                            href="tel:+13238234595">(323) 823-4595</a>
                        <a class="block underline decoration-wavy underline-offset-4 decoration-emerald-500"
                            href="mailto:hello@stabilize.dev">help@stabilize.dev</a>
                    </div>
                </div>
                <div class="mt-16 gap-8 lg:col-span-2 lg:mt-0">
                    <div
                        class="flex flex-wrap items-start justify-around sm:grid sm:grid-cols-3 gap-8 sm:text-center">
                        <div>
                            <h3
                                class="text-lg font-semibold leading-6 text-white">
                                Solutions</h3>
                            <ul role="list" class="mt-6 space-y-4">
                                <li>
                                    <a href="#"
                                        class="text-sm leading-6 text-neutral-300 hover:underline hover:decoration-emerald-500 hover:decoration-2 hover:underline-offset-4">Marketing</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="text-sm leading-6 text-neutral-300 hover:underline hover:decoration-emerald-500 hover:decoration-2 hover:underline-offset-4">Analytics</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="text-sm leading-6 text-neutral-300 hover:underline hover:decoration-emerald-500 hover:decoration-2 hover:underline-offset-4">Commerce</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="text-sm leading-6 text-neutral-300 hover:underline hover:decoration-emerald-500 hover:decoration-2 hover:underline-offset-4">Insights</a>
                                </li>
                            </ul>
                        </div>
                        <div class="">
                            <h3
                                class="text-lg font-semibold leading-6 text-white">
                                Support</h3>
                            <ul role="list" class="mt-6 space-y-4">
                                <li>
                                    <a href="#"
                                        class="text-sm leading-6 text-neutral-300 hover:underline hover:decoration-emerald-500 hover:decoration-2 hover:underline-offset-4">Pricing</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="text-sm leading-6 text-neutral-300 hover:underline hover:decoration-emerald-500 hover:decoration-2 hover:underline-offset-4">Documentation</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="text-sm leading-6 text-neutral-300 hover:underline hover:decoration-emerald-500 hover:decoration-2 hover:underline-offset-4">Guides</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="text-sm leading-6 text-neutral-300 hover:underline hover:decoration-emerald-500 hover:decoration-2 hover:underline-offset-4">API
                                        Status</a>
                                </li>
                            </ul>
                        </div>
                        <div class="">
                            <h3
                                class="text-lg font-semibold leading-6 text-white">
                                Company</h3>
                            <ul role="list" class="mt-6 space-y-4">
                                <li>
                                    <a href="#"
                                        class="text-sm leading-6 text-neutral-300 hover:underline hover:decoration-emerald-500 hover:decoration-2 hover:underline-offset-4">About</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="text-sm leading-6 text-neutral-300 hover:underline hover:decoration-emerald-500 hover:decoration-2 hover:underline-offset-4">Blog</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="text-sm leading-6 text-neutral-300 hover:underline hover:decoration-emerald-500 hover:decoration-2 hover:underline-offset-4">Jobs</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="text-sm leading-6 text-neutral-300 hover:underline hover:decoration-emerald-500 hover:decoration-2 hover:underline-offset-4">Press</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="text-sm leading-6 text-neutral-300 hover:underline hover:decoration-emerald-500 hover:decoration-2 hover:underline-offset-4">Partners</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="mt-8 border-t border-emerald-500/50 pt-8 sm:mt-20 lg:mt-24">
                <p class="text-sm leading-5">&copy; {{
                    date('Y') }} Stabilize, LLC.</p>
            </div>
        </div>
    </footer>
</body>

</html>
