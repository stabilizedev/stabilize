<nav x-data="{open: false}">
    <div class="mx-auto flex max-w-7xl items-center justify-between p-4">
        <div class="flex sm:hidden z-10">
            <button @click="open = true" x-show="!open" type="button"
                class="rounded-lg transition delay-75 p-1 ml-1 mr-3 hover:bg-emerald-500">
                <span class="sr-only">Open main menu</span>
                <svg class="h-6 w-6 stroke-current stroke-2" fill="none"
                    viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
            <button @click="open = false" x-show="open" x-cloak type="button"
                class="rounded-lg transition delay-75 p-1 ml-1 mr-3 hover:bg-emerald-500">
                <span class="sr-only">Close menu</span>
                <svg class="h-6 w-6 stroke-current stroke-2" fill="none"
                    viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <a href="/" class="flex-1 z-10 sm:flex-none">
            <span class="sr-only">Stabilize</span>
            <img class="h-10 w-auto"
                src="/assets/images/stabilize-white-text-emerald-logo.png"
                alt="">
        </a>
        <div class="hidden sm:flex sm:flex-1 sm:justify-center sm:gap-x-6">
            <a href="#services"
                class="py-1 font-medium leading-6 text-neutral-50 decoration-2 decoration-wavy underline-offset-4 decoration-emerald-500 hover:underline">Services</a>
            <a href="#methods"
                class="py-1 font-medium leading-6 text-neutral-50 decoration-2 decoration-wavy underline-offset-4 decoration-emerald-500 hover:underline">Methods</a>
            <a href="#tools"
                class="py-1 font-medium leading-6 text-neutral-50 decoration-2 decoration-wavy underline-offset-4 decoration-emerald-500 hover:underline">Tools</a>
            <a href="#team"
                class="py-1 font-medium leading-6 text-neutral-50 decoration-2 decoration-wavy underline-offset-4 decoration-emerald-500 hover:underline">Team</a>
        </div>
        <a href="#contact"
            class="hidden sm:block rounded-full px-2.5 py-1 text-sm font-semibold text-emerald-500 shadow-sm ring-1 ring-inset ring-emerald-600 hover:bg-emerald-500 hover:text-neutral-950">Contact
            Us</a>
    </div>
    <div class="mb-12 px-6 space-y-4 sm:hidden bg-neutral-950" x-show="open"
        x-cloak
        x-transition:enter="transition ease-in-out duration-100 transform"
        x-transition:enter-start="-translate-y-1/2 opacity-0"
        x-transition:enter-end="translate-y-0 opacity-100"
        x-transition:leave="transition ease-in-out duration-150 transform"
        x-transition:leave-start="translate-y-0 opacity-100"
        x-transition:leave-end="-translate-y-1/2 opacity-0">
        <a href="#services"
            class="-mx-3 block rounded-lg px-3 py-2 text-lg font-semibold leading-7 text-neutral-50 decoration-2 decoration-wavy underline-offset-4 decoration-emerald-500 hover:underline">Services</a>
        <a href="#methods"
            class="-mx-3 block rounded-lg px-3 py-2 text-lg font-semibold leading-7 text-neutral-50 decoration-2 decoration-wavy underline-offset-4 decoration-emerald-500 hover:underline">Methods</a>
        <a href="#tools"
            class="-mx-3 block rounded-lg px-3 py-2 text-lg font-semibold leading-7 text-neutral-50 decoration-2 decoration-wavy underline-offset-4 decoration-emerald-500 hover:underline">Tools</a>
        <a href="#team"
            class="-mx-3 block rounded-lg px-3 py-2 text-lg font-semibold leading-7 text-neutral-50 decoration-2 decoration-wavy underline-offset-4 decoration-emerald-500 hover:underline">Team</a>
        <a href="#contact"
            class="inline-flex -mx-2 rounded-full px-2.5 py-1 font-semibold text-emerald-500 shadow-sm ring-1 ring-inset ring-emerald-600 hover:bg-emerald-500 hover:text-neutral-950">Contact
            Us</a>
    </div>
</nav>
