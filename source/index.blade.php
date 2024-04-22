@extends('_layouts.main')

@section('body')
<!-- Hero section -->
<div class="relative">
    <div class="absolute inset-x-0 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
        aria-hidden="true">
        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-emerald-600 to-neutral-900 opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
            style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
        </div>
    </div>
    <div class="py-12 sm:py-56 lg:py-64">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:max-w-none text-center">
                <h1
                    class="text-center text-[2.5rem] leading-10 font-semibold tracking-tight sm:mt-0 sm:text-5xl lg:text-7xl">
                    <p>
                        <span
                            class="bg-gradient-to-b from-emerald-300 to-emerald-800 text-transparent bg-clip-text leading-10">Reduce</span>
                        Friction
                    </p>
                    <p>
                        <span
                            class="bg-gradient-to-b from-emerald-300 to-emerald-800 text-transparent bg-clip-text leading-10">Increase</span>
                        Momentum
                    </p>
                </h1>
                <p
                    class="text-balance text-neutral-300 mx-auto mt-4 sm:mt-6 sm:text-lg lg:mt-8 leading-7 lg:text-xl lg:max-w-2xl">
                    We have the software expertise to help whether you're just
                    getting going or trying to get back on track. Partner with
                    us, keep moving, and enjoy the <span
                        class="font-semibold text-emerald-500 italic">stability</span>.
                </p>
                <div
                    class="mt-6 flex flex-col items-center justify-center gap-3 lg:gap-6">
                    <a href="#contact"
                        class="rounded-md px-3.5 py-2.5 text-xs sm:text-sm uppercase tracking-widest font-semibold shadow-sm bg-emerald-600 hover:bg-emerald-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-emerald-600">Stabilize
                        your development</a>
                    <p href="#"
                        class="flex items-center font-semibold leading-6 text-sm sm:text-base">
                        Learn
                        more <span class="animate-bounce text-emerald-500 mt-1"
                            aria-hidden="true"><svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 16 16" fill="currentColor"
                                class="w-4 h-4 ml-1">
                                <path fill-rule="evenodd"
                                    d="M8 2a.75.75 0 0 1 .75.75v8.69l3.22-3.22a.75.75 0 1 1 1.06 1.06l-4.5 4.5a.75.75 0 0 1-1.06 0l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.22 3.22V2.75A.75.75 0 0 1 8 2Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span></p>
                </div>
            </div>
        </div>
    </div>
    <div class="absolute inset-x-0 -z-10 transform-gpu overflow-hidden blur-3xl top-[calc(100%-20rem)]"
        aria-hidden="true">
        <div class="relative  aspect-[1155/678] -translate-x-1/2 bg-gradient-to-tr from-neutral-900 to-emerald-600 opacity-30  left-[calc(50%+3rem)] w-[36.125rem] sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
            style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
        </div>
    </div>
</div>

<div class="py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div
            class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
            <div>
                <h2 class="text-base font-semibold leading-7 text-emerald-500">
                    Everything you need</h2>
                <p
                    class="mt-2 text-3xl font-bold tracking-tight text-neutral-100 sm:text-4xl">
                    All-in-one platform</p>
                <p class="mt-6 text-base leading-7 text-neutral-300">Lorem
                    ipsum,
                    dolor sit amet consectetur adipisicing elit. Maiores impedit
                    perferendis suscipit eaque, iste dolor cupiditate blanditiis
                    ratione.</p>
            </div>
            <dl
                class="col-span-2 grid grid-cols-1 gap-x-8 gap-y-10 text-base leading-7 text-neutral-300 sm:grid-cols-2 lg:gap-y-16">
                <div class="relative pl-9">
                    <dt class="font-semibold text-neutral-100">
                        <svg class="absolute left-0 top-1 h-5 w-5 text-emerald-500"
                            viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                clip-rule="evenodd" />
                        </svg>
                        Invite team members
                    </dt>
                    <dd class="mt-2">Rerum repellat labore necessitatibus
                        reprehenderit molestiae praesentium.</dd>
                </div>
                <div class="relative pl-9">
                    <dt class="font-semibold text-neutral-100">
                        <svg class="absolute left-0 top-1 h-5 w-5 text-emerald-500"
                            viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                clip-rule="evenodd" />
                        </svg>
                        List view
                    </dt>
                    <dd class="mt-2">Corporis asperiores ea nulla temporibus
                        asperiores non tempore assumenda aut.</dd>
                </div>
                <div class="relative pl-9">
                    <dt class="font-semibold text-neutral-100">
                        <svg class="absolute left-0 top-1 h-5 w-5 text-emerald-500"
                            viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                clip-rule="evenodd" />
                        </svg>
                        Keyboard shortcuts
                    </dt>
                    <dd class="mt-2">In sit qui aliquid deleniti et. Ad nobis
                        sunt omnis. Quo sapiente dicta laboriosam.</dd>
                </div>
                <div class="relative pl-9">
                    <dt class="font-semibold text-neutral-100">
                        <svg class="absolute left-0 top-1 h-5 w-5 text-emerald-500"
                            viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                clip-rule="evenodd" />
                        </svg>
                        Calendars
                    </dt>
                    <dd class="mt-2">Sed rerum sunt dignissimos ullam. Iusto
                        iure occaecati voluptate eligendi fugiat sequi.</dd>
                </div>
                <div class="relative pl-9">
                    <dt class="font-semibold text-neutral-100">
                        <svg class="absolute left-0 top-1 h-5 w-5 text-emerald-500"
                            viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                clip-rule="evenodd" />
                        </svg>
                        Notifications
                    </dt>
                    <dd class="mt-2">Quos inventore harum enim nesciunt. Aut
                        repellat rerum omnis adipisci.</dd>
                </div>
                <div class="relative pl-9">
                    <dt class="font-semibold text-neutral-100">
                        <svg class="absolute left-0 top-1 h-5 w-5 text-emerald-500"
                            viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                clip-rule="evenodd" />
                        </svg>
                        Boards
                    </dt>
                    <dd class="mt-2">Quae sit sunt excepturi fugit veniam
                        voluptatem ipsum commodi.</dd>
                </div>
                <div class="relative pl-9">
                    <dt class="font-semibold text-neutral-100">
                        <svg class="absolute left-0 top-1 h-5 w-5 text-emerald-500"
                            viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                clip-rule="evenodd" />
                        </svg>
                        Reporting
                    </dt>
                    <dd class="mt-2">Eos laudantium repellat sed architecto
                        earum unde incidunt. Illum sit dolores voluptatem.</dd>
                </div>
                <div class="relative pl-9">
                    <dt class="font-semibold text-neutral-100">
                        <svg class="absolute left-0 top-1 h-5 w-5 text-emerald-500"
                            viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                clip-rule="evenodd" />
                        </svg>
                        Mobile app
                    </dt>
                    <dd class="mt-2">Nulla est saepe accusamus nostrum est est.
                        Fugit voluptatum omnis quidem voluptatem.</dd>
                </div>
            </dl>
        </div>
    </div>
</div>

<div class="py-24 md:py-32 lg:py-40" id="team">
    <div
        class="mx-auto grid max-w-7xl grid-cols-1 gap-x-8 gap-y-20 px-6 lg:px-8 lg:grid-cols-3">
        <div class="mx-auto max-w-2xl lg:mx-0">
            <h2 class="text-base font-semibold leading-7 text-emerald-500">
                Passionate Programmers</h2>
            <p
                class="mt-2 text-3xl font-bold tracking-tight text-neutral-100 sm:text-4xl">
                Meet the Team</p>
            <p class="mt-6 text-base leading-7 text-neutral-300">Lorem ipsum
                dolor sit amet consectetur adipisicing elit. Reprehenderit
                distinctio illum optio sequi cumque quisquam itaque molestiae
                fuga, reiciendis possimus porro officiis voluptas temporibus,
                doloremque accusamus aliquid, eum dolores placeat.</p>
        </div>
        <ul role="list"
            class="mx-auto grid max-w-2xl grid-cols-2 gap-x-6 gap-y-20 lg:mx-0 lg:max-w-none lg:gap-x-8 lg:col-span-2">
            <li>
                <img class="aspect-square w-full rounded-2xl object-cover"
                    src="/assets/images/headshot-formal.JPEG" alt="">
                <h3
                    class="mt-6 text-lg font-semibold leading-8 text-neutral-50">
                    Felipe Vega</h3>
                <p class="text-base leading-7 text-emerald-500">Co-Founder & CTO
                </p>
                <ul role="list" class="mt-6 flex gap-x-6">
                    <li>
                        <a href="#"
                            class="text-emerald-500 hover:text-emerald-600">
                            <span class="sr-only">X</span>
                            <svg class="h-5 w-5" fill="currentColor"
                                viewBox="0 0 20 20" aria-hidden="true">
                                <path
                                    d="M11.4678 8.77491L17.2961 2H15.915L10.8543 7.88256L6.81232 2H2.15039L8.26263 10.8955L2.15039 18H3.53159L8.87581 11.7878L13.1444 18H17.8063L11.4675 8.77491H11.4678ZM9.57608 10.9738L8.95678 10.0881L4.02925 3.03974H6.15068L10.1273 8.72795L10.7466 9.61374L15.9156 17.0075H13.7942L9.57608 10.9742V10.9738Z" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="text-emerald-500 hover:text-emerald-600">
                            <span class="sr-only">LinkedIn</span>
                            <svg class="h-5 w-5" fill="currentColor"
                                viewBox="0 0 20 20" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <img class="aspect-square w-full rounded-2xl object-cover"
                    src="https://media.licdn.com/dms/image/C5603AQE40s-RtXyvNg/profile-displayphoto-shrink_800_800/0/1562631781431?e=1719446400&v=beta&t=Ld-vnJEopmVvRkd7-rfA7R4Z1S192EqRiiyNixJk8xQ"
                    alt="">
                <h3
                    class="mt-6 text-lg font-semibold leading-8 text-neutral-50">
                    Michael Diaz</h3>
                <p class="text-base leading-7 text-emerald-500">Co-Founder & CEO
                </p>
                <ul role="list" class="mt-6 flex gap-x-6">
                    <li>
                        <a href="#"
                            class="text-emerald-500 hover:text-emerald-600">
                            <span class="sr-only">X</span>
                            <svg class="h-5 w-5" fill="currentColor"
                                viewBox="0 0 20 20" aria-hidden="true">
                                <path
                                    d="M11.4678 8.77491L17.2961 2H15.915L10.8543 7.88256L6.81232 2H2.15039L8.26263 10.8955L2.15039 18H3.53159L8.87581 11.7878L13.1444 18H17.8063L11.4675 8.77491H11.4678ZM9.57608 10.9738L8.95678 10.0881L4.02925 3.03974H6.15068L10.1273 8.72795L10.7466 9.61374L15.9156 17.0075H13.7942L9.57608 10.9742V10.9738Z" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="text-emerald-500 hover:text-emerald-600">
                            <span class="sr-only">LinkedIn</span>
                            <svg class="h-5 w-5" fill="currentColor"
                                viewBox="0 0 20 20" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <img class="aspect-square w-full rounded-2xl object-cover"
                    src="https://media.licdn.com/dms/image/C5103AQEWX5wMFnkMjQ/profile-displayphoto-shrink_800_800/0/1516989982981?e=1719446400&v=beta&t=SEsohPxdJ5nnSnOcdpsTISgLuBypBkjt2tFiogjpFQU"
                    alt="">
                <h3
                    class="mt-6 text-lg font-semibold leading-8 text-neutral-50">
                    Matt Geller</h3>
                <p class="text-base leading-7 text-emerald-500">Programmer
                </p>
                <ul role="list" class="mt-6 flex gap-x-6">
                    <li>
                        <a href="#"
                            class="text-emerald-500 hover:text-emerald-600">
                            <span class="sr-only">X</span>
                            <svg class="h-5 w-5" fill="currentColor"
                                viewBox="0 0 20 20" aria-hidden="true">
                                <path
                                    d="M11.4678 8.77491L17.2961 2H15.915L10.8543 7.88256L6.81232 2H2.15039L8.26263 10.8955L2.15039 18H3.53159L8.87581 11.7878L13.1444 18H17.8063L11.4675 8.77491H11.4678ZM9.57608 10.9738L8.95678 10.0881L4.02925 3.03974H6.15068L10.1273 8.72795L10.7466 9.61374L15.9156 17.0075H13.7942L9.57608 10.9742V10.9738Z" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="text-emerald-500 hover:text-emerald-600">
                            <span class="sr-only">LinkedIn</span>
                            <svg class="h-5 w-5" fill="currentColor"
                                viewBox="0 0 20 20" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <img class="aspect-square w-full rounded-2xl object-cover"
                    src="https://media.licdn.com/dms/image/C5603AQFxdobEUOya1A/profile-displayphoto-shrink_800_800/0/1644277219333?e=1719446400&v=beta&t=jxjrFFniRGcz-oDyovDFWgDkRLrrx_48qoLsyNP-C60"
                    alt="">
                <h3
                    class="mt-6 text-lg font-semibold leading-8 text-neutral-50">
                    Jeffrey Pau</h3>
                <p class="text-base leading-7 text-emerald-500">Programmer
                </p>
                <ul role="list" class="mt-6 flex gap-x-6">
                    <li>
                        <a href="#"
                            class="text-emerald-500 hover:text-emerald-600">
                            <span class="sr-only">X</span>
                            <svg class="h-5 w-5" fill="currentColor"
                                viewBox="0 0 20 20" aria-hidden="true">
                                <path
                                    d="M11.4678 8.77491L17.2961 2H15.915L10.8543 7.88256L6.81232 2H2.15039L8.26263 10.8955L2.15039 18H3.53159L8.87581 11.7878L13.1444 18H17.8063L11.4675 8.77491H11.4678ZM9.57608 10.9738L8.95678 10.0881L4.02925 3.03974H6.15068L10.1273 8.72795L10.7466 9.61374L15.9156 17.0075H13.7942L9.57608 10.9742V10.9738Z" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="text-emerald-500 hover:text-emerald-600">
                            <span class="sr-only">LinkedIn</span>
                            <svg class="h-5 w-5" fill="currentColor"
                                viewBox="0 0 20 20" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- More people... -->
        </ul>
    </div>
</div>

<div class="mx-auto grid max-w-7xl grid-cols-1 lg:grid-cols-2" id="contact">
    <div class="px-6 pb-12 pt-24 sm:pt-32 lg:static lg:px-8 lg:py-48">
        <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-lg">
            <h2 class="text-3xl font-bold tracking-tight text-neutral-50">
                Get Stable
            </h2>
            <p class="mt-6 text-lg leading-8 text-neutral-300">
                Proin volutpat consequat porttitor cras nullam gravida at. Orci
                molestie a eu arcu. Sed ut tincidunt integer elementum id sem.
                Arcu sed malesuada et magna.
            </p>
            <dl class="mt-10 space-y-4 text-base leading-7 text-neutral-300">
                <div class="flex gap-x-4">
                    <dt class="flex-none">
                        <span class="sr-only">Address</span>
                        <svg class="h-7 w-6 text-neutral-400" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />
                        </svg>
                    </dt>
                    <dd>10522 Santa Gertrudes Ave #103<br>Whittier, CA 90603
                    </dd>
                </div>
                <div class="flex gap-x-4">
                    <dt class="flex-none">
                        <span class="sr-only">Telephone</span>
                        <svg class="h-7 w-6 text-neutral-400" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                        </svg>
                    </dt>
                    <dd><a class="hover:text-white"
                            href="tel:+1 (555) 234-5678">+1 (555)
                            234-5678</a></dd>
                </div>
                <div class="flex gap-x-4">
                    <dt class="flex-none">
                        <span class="sr-only">Email</span>
                        <svg class="h-7 w-6 text-neutral-400" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                        </svg>
                    </dt>
                    <dd><a class="hover:text-white"
                            href="mailto:hello@example.com">hello@example.com</a>
                    </dd>
                </div>
            </dl>
        </div>
    </div>
    <form action="#" method="POST"
        class="px-6 pb-24 pt-12 sm:pb-32 lg:px-8 lg:py-48">
        <div class="mx-auto max-w-2xl lg:mr-0 lg:max-w-lg">
            <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                <div>
                    <label for="first-name"
                        class="block text-sm font-semibold leading-6 text-white">First
                        name</label>
                    <div class="mt-2.5">
                        <input type="text" name="first-name" id="first-name"
                            autocomplete="given-name"
                            class="block w-full rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-emerald-500 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div>
                    <label for="last-name"
                        class="block text-sm font-semibold leading-6 text-white">Last
                        name</label>
                    <div class="mt-2.5">
                        <input type="text" name="last-name" id="last-name"
                            autocomplete="family-name"
                            class="block w-full rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-emerald-500 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="email"
                        class="block text-sm font-semibold leading-6 text-white">Email</label>
                    <div class="mt-2.5">
                        <input type="email" name="email" id="email"
                            autocomplete="email"
                            class="block w-full rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-emerald-500 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="phone-number"
                        class="block text-sm font-semibold leading-6 text-white">Phone
                        number</label>
                    <div class="mt-2.5">
                        <input type="tel" name="phone-number" id="phone-number"
                            autocomplete="tel"
                            class="block w-full rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-emerald-500 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="message"
                        class="block text-sm font-semibold leading-6 text-white">Message</label>
                    <div class="mt-2.5">
                        <textarea name="message" id="message" rows="4"
                            class="block w-full rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-emerald-500 sm:text-sm sm:leading-6"></textarea>
                    </div>
                </div>
            </div>
            <div class="mt-8 flex justify-end">
                <button type="submit"
                    class="rounded-md bg-emerald-500 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-emerald-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-emerald-500">Send
                    message</button>
            </div>
        </div>
    </form>
</div>

@endsection
