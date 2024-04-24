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
    <div class="pt-6 pb-12 sm:py-56 lg:py-48">
        <div class="mx-auto max-w-screen-2xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:max-w-none text-center">
                <h1
                    class="text-center text-[2.5rem] leading-[1.125] font-semibold tracking-tight sm:mt-0 sm:text-5xl lg:text-7xl xl:text-8xl">
                    <p>
                        <span
                            class="bg-gradient-to-b from-emerald-300 to-emerald-800 text-transparent bg-clip-text leading-10">Forget</span>
                        Friction
                    </p>
                    <p>
                        <span
                            class="bg-gradient-to-b from-emerald-300 to-emerald-800 text-transparent bg-clip-text leading-10">Maximize</span>
                        Momentum
                    </p>
                </h1>
                <p
                    class="text-balance text-neutral-300 mx-auto mt-4 sm:mt-6 sm:text-lg lg:mt-8 leading-7 lg:text-xl lg:max-w-2xl xl:text-2xl xl:mt-12">
                    We have the software expertise to help whether you're just
                    getting going or trying to get back on track. Partner with
                    us, keep moving, and enjoy the <span
                        class="font-semibold text-emerald-500 italic">stability</span>.
                </p>
                <div
                    class="mt-6 flex flex-col items-center justify-center gap-3 lg:gap-6 xl:mt-12">
                    <a href="#contact"
                        class="rounded-md px-3.5 py-2.5 text-xs sm:text-sm xl:text-base uppercase tracking-widest font-semibold shadow-sm bg-emerald-600 hover:bg-emerald-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-emerald-600">Stabilize
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

<div class="py-24 sm:py-32" id="tools">
    <div
        class="mx-auto max-w-screen-2xl px-6 lg:px-12 xl:px-24 grid grid-cols-1 lg:grid-cols-3">
        <div class="mx-auto max-w-2xl lg:mx-0">
            <h2 class="text-base font-semibold leading-7 text-emerald-500">
                Reduce Friction</h2>
            <p
                class="mt-2 text-3xl font-bold tracking-tight text-neutral-50 sm:text-4xl">
                Our Focus
            </p>
            <p class="mt-6 leading-8 text-neutral-300">
                We're experts first-and-foremost on web applications. You have
                an idea, and we'll help you build a stable solution that scales!
                Here are the tools we use to reduce friction and maintain
                momentum.
            </p>
        </div>
        <div
            class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-8 text-base leading-7 text-neutral-300 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3 lg:gap-x-16 lg:col-span-2">
            <div class="flex items-center mx-auto gap-4 lg:col-span-3">
                <svg viewBox="0 0 128 128"
                    class="h-[4.5rem] w-auto text-neutral-300 stroke-none fill-current">
                    <path
                        d="M27.271.11c-.2.078-5.82 3.28-12.487 7.112-8.078 4.644-12.227 7.09-12.449 7.32-.19.225-.34.482-.438.76-.167.564-.179 82.985-.01 83.578.061.23.26.568.44.754.436.46 48.664 28.19 49.25 28.324.272.065.577.054.88-.03.658-.165 48.76-27.834 49.188-28.286.175-.195.375-.532.44-.761.084-.273.115-4.58.115-13.655v-13.26l11.726-6.735c11.056-6.357 11.733-6.755 12.017-7.191l.29-.47V43.287c0-15.548.03-14.673-.585-15.235-.165-.146-5.798-3.433-12.53-7.31L100.89 13.71h-1.359l-11.963 6.87c-6.586 3.788-12.184 7.027-12.457 7.203-.272.18-.597.512-.73.753l-.242.417-.054 13.455-.048 13.46-9.879 5.69c-5.434 3.124-9.957 5.71-10.053 5.734-.175.049-.187-1.232-.187-25.966V15.293l-.26-.447c-.326-.545 1.136.324-13.544-8.114C27.803-.348 28.098-.2 27.27.11zm11.317 10.307c5.15 2.955 9.364 5.4 9.364 5.43 0 .031-4.516 2.641-10.035 5.813l-10.041 5.765-10.023-5.764c-5.507-3.173-10.02-5.783-10.02-5.814 0-.03 4.505-2.64 10.013-5.805l9.999-5.752.69.376c3.357 1.907 6.708 3.824 10.053 5.751zm71.668 13.261c5.422 3.122 9.908 5.702 9.95 5.744.114.103-19.774 11.535-20.046 11.523-.272-.008-19.915-11.335-19.907-11.473.01-.157 19.773-11.527 19.973-11.496.091.022 4.607 2.59 10.03 5.702zM16.3 25.328l9.558 5.503.055 27.247.05 27.252.233.368c.122.194.352.459.52.581.158.115 5.477 3.146 11.818 6.724l11.52 6.506v11.527c0 6.326-.043 11.516-.097 11.516-.041 0-10-5.699-22.124-12.676L5.793 97.201l-.03-38.966-.019-38.954.49.271c.283.15 4.807 2.748 10.065 5.775zm33.754 19.18v25.109l-.387.253c-.525.332-19.667 11.335-19.732 11.335-.03 0-.054-11.336-.054-25.193l.012-25.182 10-5.752c5.499-3.165 10.034-5.733 10.088-5.714.039.024.073 11.34.073 25.144zm38.15-5.775 10.023 5.763V55.92c0 10.838-.011 11.42-.176 11.357-.107-.041-4.642-2.64-10.083-5.774l-9.91-5.69v-11.42c0-6.287.032-11.424.062-11.424.043 0 4.577 2.592 10.084 5.764zm34.164 5.587c0 6.254-.042 11.412-.084 11.462-.072.115-19.896 11.538-20.022 11.538-.031 0-.062-5.135-.062-11.423v-11.42l10-5.756c5.507-3.16 10.042-5.752 10.084-5.752.053 0 .084 5.105.084 11.351zM95.993 70.933 52.005 96.04 32.056 84.693S76 59.277 76.176 59.343zm2.215 14.827-.034 11.442-22.028 12.676c-12.12 6.976-22.082 12.675-22.132 12.675-.053 0-.095-4.658-.095-11.516V99.51l22.08-12.592c12.132-6.923 22.101-12.59 22.154-12.602.043 0 .062 5.148.054 11.443z">
                    </path>
                </svg>
                <span class="text-4xl font-semibold">Laravel</span>
            </div>
            <div class="flex items-center mx-auto gap-4">
                <svg class="h-12 w-auto text-neutral-300 stroke-none fill-current"
                    height="30" viewBox="0 0 38 36"
                    xmlns="http://www.w3.org/2000/svg">
                    <path class="fill-neutral-400" fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M34.8 27.706C34.12 28.734 33.605 30 32.223 30c-2.326 0-2.452-3.587-4.78-3.587-2.327 0-2.201 3.587-4.527 3.587s-2.452-3.587-4.78-3.587c-2.327 0-2.201 3.587-4.528 3.587-2.326 0-2.452-3.587-4.78-3.587C6.5 26.413 6.628 30 4.3 30c-.731 0-1.245-.354-1.678-.84A19.866 19.866 0 0 1 0 19.24C0 8.613 8.208 0 18.333 0 28.46 0 36.667 8.614 36.667 19.24c0 3.037-.671 5.91-1.866 8.466Z">
                    </path>
                    <path class="fill-neutral-400" fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M34.8 27.706C34.12 28.734 33.605 30 32.223 30c-2.326 0-2.452-3.587-4.78-3.587-2.327 0-2.201 3.587-4.527 3.587s-2.452-3.587-4.78-3.587c-2.327 0-2.201 3.587-4.528 3.587-2.326 0-2.452-3.587-4.78-3.587C6.5 26.413 6.628 30 4.3 30c-.731 0-1.245-.354-1.678-.84A19.866 19.866 0 0 1 0 19.24C0 8.613 8.208 0 18.333 0 28.46 0 36.667 8.614 36.667 19.24c0 3.037-.671 5.91-1.866 8.466Z">
                    </path>
                    <path class="fill-neutral-50" fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M17.35 24.038c6.376 0 9.06-3.698 9.06-8.95C26.41 9.834 22.355 5 17.35 5c-5.003 0-9.059 4.835-9.059 10.087 0 5.253 2.684 8.951 9.06 8.951Z">
                    </path>
                    <path
                        d="M14.915 15.385c1.876 0 3.397-1.68 3.397-3.75 0-2.071-1.52-3.75-3.397-3.75-1.876 0-3.397 1.679-3.397 3.75 0 2.07 1.52 3.75 3.397 3.75Z"
                        fill="#030776"></path>
                    <path class="fill-neutral-50"
                        d="M14.35 12.5c.937 0 1.698-.775 1.698-1.73 0-.957-.76-1.731-1.699-1.731-.938 0-1.699.774-1.699 1.73s.76 1.731 1.7 1.731Z">
                    </path>
                </svg>
                <span class="text-3xl font-medium">Livewire</span>
            </div>
            <div class="flex items-center mx-auto gap-4">
                <svg viewBox="0 0 128 128"
                    class="h-12 w-auto text-neutral-300 stroke-none fill-current">
                    <path fill="" fill-rule="evenodd"
                        d="M98.444 35.562 126 62.997 98.444 90.432 70.889 62.997z"
                        clip-rule="evenodd"></path>
                    <path class="fill-neutral-600" fill-rule="evenodd"
                        d="m29.556 35.562 57.126 56.876H31.571L2 62.997z"
                        clip-rule="evenodd">
                    </path>
                </svg>
                <span class="text-3xl font-medium">Alpine.js</span>
            </div>
            <div class="flex items-center mx-auto gap-4">
                <svg viewBox="0 0 128 128"
                    class="h-12 w-auto text-neutral-300 stroke-none fill-current">
                    <path
                        d="M0 8.934l49.854.158 14.167 24.47 14.432-24.47L128 8.935l-63.834 110.14zm126.98.637l-24.36.02-38.476 66.053L25.691 9.592.942 9.572l63.211 107.89zm-25.149-.008l-22.745.168-15.053 24.647L49.216 9.73l-22.794-.168 37.731 64.476zm-75.834-.17l23.002.009m-23.002-.01l23.002.01">
                    </path>
                    <path class="text-neutral-500"
                        d="M25.997 9.393l23.002.009L64.035 34.36 79.018 9.404 102 9.398 64.15 75.053z">
                    </path>
                    <path class="text-neutral-200"
                        d="M.91 9.569l25.067-.172 38.15 65.659L101.98 9.401l25.11.026-62.966 108.06z">
                    </path>
                </svg>
                <span class="text-3xl font-medium">Vue.js</span>
            </div>
            <div class="flex items-center mx-auto gap-4">
                <svg viewBox="0 0 30 30" class="h-12 w-auto stroke-none">
                    <path class="fill-neutral-200"
                        d="M4.5,0 L25.5,0 C27.9852814,-4.99600361e-16 30,2.01471863 30,4.5 L30,25.5 C30,27.9852814 27.9852814,30 25.5,30 L4.5,30 C2.01471863,30 3.33066907e-16,27.9852814 0,25.5 L0,4.5 C-3.33066907e-16,2.01471863 2.01471863,3.33066907e-16 4.5,0 Z">
                    </path>
                    <path class="fill-neutral-300"
                        d="M4.5,0 C2.01471863,0 0,2.01471863 0,4.5 L0,15 L5.16147451,15 C5.67537833,15 6.14517523,15.2903505 6.375,15.75 C6.59894636,16.1978927 6.51116322,16.7388368 6.15707294,17.0929271 L5.68933983,17.5606602 C5.40803526,17.8419647 5.25,18.2234956 5.25,18.6213203 L5.25,18.75 C5.25,19.9926407 6.25735931,21 7.5,21 C8.74264069,21 9.75,19.9926407 9.75,18.75 L9.75,18.6213203 C9.75,18.2234956 9.59196474,17.8419647 9.31066017,17.5606602 L8.84292706,17.0929271 C8.48883678,16.7388368 8.40105364,16.1978927 8.625,15.75 C8.85482477,15.2903505 9.32462167,15 9.83852549,15 L15,15 L15,9.83852549 C15,9.32462167 14.7096495,8.85482477 14.25,8.625 C13.8021073,8.40105364 13.2611632,8.48883678 12.9070729,8.84292706 L12.4393398,9.31066017 C12.1580353,9.59196474 11.7765044,9.75 11.3786797,9.75 L11.25,9.75 C10.0073593,9.75 9,8.74264069 9,7.5 C9,6.25735931 10.0073593,5.25 11.25,5.25 L11.3786797,5.25 C11.7765044,5.25 12.1580353,5.40803526 12.4393398,5.68933983 L12.9070729,6.15707294 C13.2611632,6.51116322 13.8021073,6.59894636 14.25,6.375 C14.7096495,6.14517523 15,5.67537833 15,5.16147451 L15,0 L4.5,0 Z">
                    </path>
                    <path class="fill-neutral-400"
                        d="M16.5,-3 C14.0147186,-3 12,-0.985281374 12,1.5 L12,12 L17.1614745,12 C17.6753783,12 18.1451752,12.2903505 18.375,12.75 C18.5989464,13.1978927 18.5111632,13.7388368 18.1570729,14.0929271 L17.6893398,14.5606602 C17.4080353,14.8419647 17.25,15.2234956 17.25,15.6213203 L17.25,15.75 C17.25,16.9926407 18.2573593,18 19.5,18 C20.7426407,18 21.75,16.9926407 21.75,15.75 L21.75,15.6213203 C21.75,15.2234956 21.5919647,14.8419647 21.3106602,14.5606602 L20.8429271,14.0929271 C20.4888368,13.7388368 20.4010536,13.1978927 20.625,12.75 C20.8548248,12.2903505 21.3246217,12 21.8385255,12 L27,12 L27,6.83852549 C27,6.32462167 26.7096495,5.85482477 26.25,5.625 C25.8021073,5.40105364 25.2611632,5.48883678 24.9070729,5.84292706 L24.4393398,6.31066017 C24.1580353,6.59196474 23.7765044,6.75 23.3786797,6.75 L23.25,6.75 C22.0073593,6.75 21,5.74264069 21,4.5 C21,3.25735931 22.0073593,2.25 23.25,2.25 L23.3786797,2.25 C23.7765044,2.25 24.1580353,2.40803526 24.4393398,2.68933983 L24.9070729,3.15707294 C25.2611632,3.51116322 25.8021073,3.59894636 26.25,3.375 C26.7096495,3.14517523 27,2.67537833 27,2.16147451 L27,-3 L16.5,-3 Z"
                        transform="translate(19.500000, 7.500000) rotate(-270.000000) translate(-19.500000, -7.500000) ">
                    </path>
                    <path class="fill-neutral-500"
                        d="M19.5,9 C17.0147186,9 15,11.0147186 15,13.5 L15,24 L20.1614745,24 C20.6753783,24 21.1451752,24.2903505 21.375,24.75 C21.5989464,25.1978927 21.5111632,25.7388368 21.1570729,26.0929271 L20.6893398,26.5606602 C20.4080353,26.8419647 20.25,27.2234956 20.25,27.6213203 L20.25,27.75 C20.25,28.9926407 21.2573593,30 22.5,30 C23.7426407,30 24.75,28.9926407 24.75,27.75 L24.75,27.6213203 C24.75,27.2234956 24.5919647,26.8419647 24.3106602,26.5606602 L23.8429271,26.0929271 C23.4888368,25.7388368 23.4010536,25.1978927 23.625,24.75 C23.8548248,24.2903505 24.3246217,24 24.8385255,24 L30,24 L30,18.8385255 C30,18.3246217 29.7096495,17.8548248 29.25,17.625 C28.8021073,17.4010536 28.2611632,17.4888368 27.9070729,17.8429271 L27.4393398,18.3106602 C27.1580353,18.5919647 26.7765044,18.75 26.3786797,18.75 L26.25,18.75 C25.0073593,18.75 24,17.7426407 24,16.5 C24,15.2573593 25.0073593,14.25 26.25,14.25 L26.3786797,14.25 C26.7765044,14.25 27.1580353,14.4080353 27.4393398,14.6893398 L27.9070729,15.1570729 C28.2611632,15.5111632 28.8021073,15.5989464 29.25,15.375 C29.7096495,15.1451752 30,14.6753783 30,14.1614745 L30,9 L19.5,9 Z"
                        transform="translate(22.500000, 19.500000) rotate(-180.000000) translate(-22.500000, -19.500000) ">
                    </path>
                    <path class="fill-neutral-600"
                        d="M7.5,12 C5.01471863,12 3,14.0147186 3,16.5 L3,27 L8.16147451,27 C8.67537833,27 9.14517523,27.2903505 9.375,27.75 C9.59894636,28.1978927 9.51116322,28.7388368 9.15707294,29.0929271 L8.68933983,29.5606602 C8.40803526,29.8419647 8.25,30.2234956 8.25,30.6213203 L8.25,30.75 C8.25,31.9926407 9.25735931,33 10.5,33 C11.7426407,33 12.75,31.9926407 12.75,30.75 L12.75,30.6213203 C12.75,30.2234956 12.5919647,29.8419647 12.3106602,29.5606602 L11.8429271,29.0929271 C11.4888368,28.7388368 11.4010536,28.1978927 11.625,27.75 C11.8548248,27.2903505 12.3246217,27 12.8385255,27 L18,27 L18,21.8385255 C18,21.3246217 17.7096495,20.8548248 17.25,20.625 C16.8021073,20.4010536 16.2611632,20.4888368 15.9070729,20.8429271 L15.4393398,21.3106602 C15.1580353,21.5919647 14.7765044,21.75 14.3786797,21.75 L14.25,21.75 C13.0073593,21.75 12,20.7426407 12,19.5 C12,18.2573593 13.0073593,17.25 14.25,17.25 L14.3786797,17.25 C14.7765044,17.25 15.1580353,17.4080353 15.4393398,17.6893398 L15.9070729,18.1570729 C16.2611632,18.5111632 16.8021073,18.5989464 17.25,18.375 C17.7096495,18.1451752 18,17.6753783 18,17.1614745 L18,12 L7.5,12 Z"
                        transform="translate(10.500000, 22.500000) rotate(-90.000000) translate(-10.500000, -22.500000) ">
                    </path>
                    <path class="fill-neutral-900"
                        d="M4.5,0 L25.5,0 C27.9852814,-4.99600361e-16 30,2.01471863 30,4.5 L30,25.5 C30,27.9852814 27.9852814,30 25.5,30 L4.5,30 C2.01471863,30 3.33066907e-16,27.9852814 0,25.5 L0,4.5 C-3.33066907e-16,2.01471863 2.01471863,3.33066907e-16 4.5,0 Z"
                        style="mix-blend-mode: screen;"></path>
                </svg>
                <span class="text-3xl font-medium">Jigsaw</span>
            </div>
        </div>
    </div>
</div>

<div class="py-12 sm:py-24 lg:py-32" id="services">
    <div class="mx-auto max-w-screen-2xl px-6 lg:px-12 xl:px-24">
        <div class="mx-auto max-w-2xl lg:mx-0">
            <h2
                class="text-base font-semibold leading-7 text-emerald-500 xl:text-lg">
                Build Momentum</h2>
            <p
                class="mt-2 text-3xl font-bold tracking-tight text-neutral-100 sm:text-4xl xl:text-5xl">
                Our Services</p>
            <p class="mt-6 leading-8 text-neutral-300 xl:text-lg">
                Whether you're brand new, seasoned, or veterans, there's always
                something to improve. We focus on one, or all, of the following
                to get you moving, no matter your size.
            </p>
        </div>
        <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
            <dl
                class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
                <div class="flex flex-col">
                    <dt
                        class="text-base font-semibold leading-7 text-neutral-50 xl:text-lg">
                        <div
                            class="mb-6 flex h-10 w-10 items-center justify-center rounded-lg bg-emerald-500 xl:h-12 xl:w-12">
                            <svg class="h-6 w-6 text-neutral-50 xl:h-8 xl:w-8"
                                fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M2.25 13.5h3.86a2.25 2.25 0 012.012 1.244l.256.512a2.25 2.25 0 002.013 1.244h3.218a2.25 2.25 0 002.013-1.244l.256-.512a2.25 2.25 0 012.013-1.244h3.859m-19.5.338V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 00-2.15-1.588H6.911a2.25 2.25 0 00-2.15 1.588L2.35 13.177a2.25 2.25 0 00-.1.661z" />
                            </svg>
                        </div>
                        Development Kickstart
                    </dt>
                    <dd
                        class="mt-1 flex flex-auto flex-col text-base leading-7 text-neutral-300">
                        <p class="flex-auto">No developers? Small team? No
                            problem! Our passionate programmers will get your
                            project going. Once we set up a solid foundation,
                            we'll stay on and help you build the right team to
                            keep you moving.</p>
                    </dd>
                </div>
                <div class="flex flex-col">
                    <dt
                        class="text-base font-semibold leading-7 text-neutral-50 xl:text-lg">
                        <div
                            class="mb-6 flex h-10 w-10 items-center justify-center rounded-lg bg-emerald-500 xl:h-12 xl:w-12">
                            <svg class="h-6 w-6 text-neutral-50 xl:h-8 xl:w-8"
                                fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M2.25 13.5h3.86a2.25 2.25 0 012.012 1.244l.256.512a2.25 2.25 0 002.013 1.244h3.218a2.25 2.25 0 002.013-1.244l.256-.512a2.25 2.25 0 012.013-1.244h3.859m-19.5.338V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 00-2.15-1.588H6.911a2.25 2.25 0 00-2.15 1.588L2.35 13.177a2.25 2.25 0 00-.1.661z" />
                            </svg>
                        </div>
                        Product & Process Audits
                    </dt>
                    <dd
                        class="mt-1 flex flex-auto flex-col text-base leading-7 text-neutral-300">
                        <p class="flex-auto">Already have a product? Let us take
                            a look! We can audit your codebase,
                            your development lifecycle, and everything in
                            between to reduce
                            any friction and make sure you keep moving
                            efficiently.</p>
                    </dd>
                </div>
                <div class="flex flex-col">
                    <dt
                        class="text-base font-semibold leading-7 text-neutral-50 xl:text-lg">
                        <div
                            class="mb-6 flex h-10 w-10 items-center justify-center rounded-lg bg-emerald-500 xl:h-12 xl:w-12">
                            <svg class="h-6 w-6 text-neutral-50 xl:h-8 xl:w-8"
                                fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M2.25 13.5h3.86a2.25 2.25 0 012.012 1.244l.256.512a2.25 2.25 0 002.013 1.244h3.218a2.25 2.25 0 002.013-1.244l.256-.512a2.25 2.25 0 012.013-1.244h3.859m-19.5.338V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 00-2.15-1.588H6.911a2.25 2.25 0 00-2.15 1.588L2.35 13.177a2.25 2.25 0 00-.1.661z" />
                            </svg>
                        </div>
                        Toolkit Tailoring
                    </dt>
                    <dd
                        class="mt-1 flex flex-auto flex-col text-base leading-7 text-neutral-300">
                        <p class="flex-auto">Not getting enough out of your
                            tools? Struggling with efficiency or transparency?
                            We're experts at picking the right tools to backup
                            good processes. Whether you choose a product we've
                            built, or the next best thing, we'll train you to
                            use it to maximize your momentum.
                        </p>
                    </dd>
                </div>
            </dl>
        </div>
    </div>
</div>

<div class="py-24 sm:py-32" id="methods">
    <div class="mx-auto max-w-screen-2xl px-6 lg:px-12 xl:px-24">
        <div
            class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
            <div>
                <h2 class="text-base font-semibold leading-7 text-emerald-500">
                    Stay Balanced</h2>
                <p
                    class="mt-2 text-3xl font-bold tracking-tight text-neutral-100 sm:text-4xl">
                    Our Methods</p>
                <p class="mt-6 leading-8 text-neutral-300 xl:text-lg">
                    We're no strangers to the mess of modern development, and we
                    have the battle scars to prove it. These are some of the
                    skills we've honed to make sure development is stable.
                </p>
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
                        Product Discovery
                    </dt>
                    <dd class="mt-2">The first thing we focus on is
                        understanding the <span
                            class="italic font-medium">whys</span> so we can
                        figure out the best <span
                            class="italic font-medium">hows</span>. We'll dig
                        deep to make sure your products have solid foundations.
                    </dd>
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
                        Test Driven Development
                    </dt>
                    <dd class="mt-2">There's no point in sprinting if you're
                        going to trip before the finish line. We focus on clean,
                        tested code so that we can build a solid base and then
                        speed up. Don't forget the tortoise and the hare!</dd>
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
                        Stability over agility
                    </dt>
                    <dd class="mt-2">We love to be agile (lowercase a), but the
                        dogma of Agile ofter hurts more than it heals. We throw
                        out the cruft and focus on the core to keep you moving
                        without friction.</dd>
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
                        Developer Agency
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
                        Foo
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
                        Bar
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
                        Bazz
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
                        Buzz
                    </dt>
                    <dd class="mt-2">Nulla est saepe accusamus nostrum est est.
                        Fugit voluptatum omnis quidem voluptatem.</dd>
                </div>
            </dl>
        </div>
    </div>
</div>

<div class="py-24 sm:py-32" id="contact">
    <div class="mx-auto max-w-screen-2xl px-6 lg:px-12 xl:px-24">
        <div class="mx-auto grid max-w-screen-2xl grid-cols-1 lg:grid-cols-2">
            <div class="">
                <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-lg">
                    <h2
                        class="text-base font-semibold leading-7 text-emerald-500">
                        Keep Moving</h2>
                    <p
                        class="mt-2 text-3xl font-bold tracking-tight text-neutral-100 sm:text-4xl">
                        Get Stable</p>
                    <p class="mt-6 leading-8 text-neutral-300 xl:text-lg">
                        Let us help you.
                    </p>
                    <dl
                        class="mt-10 space-y-4 text-base leading-7 text-neutral-300">
                        <div class="flex gap-x-4">
                            <dt class="flex-none">
                                <span class="sr-only">Address</span>
                                <svg class="h-7 w-6 text-neutral-400"
                                    fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    aria-hidden="true">
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />
                                </svg>
                            </dt>
                            <dd>10522 Santa Gertrudes Ave #103<br>Whittier, CA
                                90603
                            </dd>
                        </div>
                        <div class="flex gap-x-4">
                            <dt class="flex-none">
                                <span class="sr-only">Telephone</span>
                                <svg class="h-7 w-6 text-neutral-400"
                                    fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    aria-hidden="true">
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                </svg>
                            </dt>
                            <dd><a class="hover:text-neutral-50"
                                    href="tel:+1 (555) 234-5678">+1 (555)
                                    234-5678</a></dd>
                        </div>
                        <div class="flex gap-x-4">
                            <dt class="flex-none">
                                <span class="sr-only">Email</span>
                                <svg class="h-7 w-6 text-neutral-400"
                                    fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    aria-hidden="true">
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                </svg>
                            </dt>
                            <dd><a class="hover:text-neutral-50"
                                    href="mailto:help@stabilize.dev">help@stabilize.dev</a>
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
            <form action="#" method="POST" class="mt-12">
                <div class="mx-auto max-w-2xl lg:mr-0 lg:max-w-lg">
                    <div
                        class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                        <div>
                            <label for="first-name"
                                class="block text-sm font-semibold leading-6 text-neutral-50">First
                                name</label>
                            <div class="mt-2.5">
                                <input type="text" name="first-name"
                                    id="first-name" autocomplete="given-name"
                                    class="block w-full rounded-md border-0 bg-white/5 px-3.5 py-2 text-neutral-50 shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-emerald-500 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div>
                            <label for="last-name"
                                class="block text-sm font-semibold leading-6 text-neutral-50">Last
                                name</label>
                            <div class="mt-2.5">
                                <input type="text" name="last-name"
                                    id="last-name" autocomplete="family-name"
                                    class="block w-full rounded-md border-0 bg-white/5 px-3.5 py-2 text-neutral-50 shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-emerald-500 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="email"
                                class="block text-sm font-semibold leading-6 text-neutral-50">Email</label>
                            <div class="mt-2.5">
                                <input type="email" name="email" id="email"
                                    autocomplete="email"
                                    class="block w-full rounded-md border-0 bg-white/5 px-3.5 py-2 text-neutral-50 shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-emerald-500 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="phone-number"
                                class="block text-sm font-semibold leading-6 text-neutral-50">Phone
                                number</label>
                            <div class="mt-2.5">
                                <input type="tel" name="phone-number"
                                    id="phone-number" autocomplete="tel"
                                    class="block w-full rounded-md border-0 bg-white/5 px-3.5 py-2 text-neutral-50 shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-emerald-500 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="message"
                                class="block text-sm font-semibold leading-6 text-neutral-50">Message</label>
                            <div class="mt-2.5">
                                <textarea name="message" id="message" rows="4"
                                    class="block w-full rounded-md border-0 bg-white/5 px-3.5 py-2 text-neutral-50 shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-emerald-500 sm:text-sm sm:leading-6"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8 flex justify-end">
                        <button type="submit"
                            class="rounded-md bg-emerald-500 px-3.5 py-2.5 text-center text-sm font-semibold text-neutral-50 shadow-sm hover:bg-emerald-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-emerald-500">Send
                            message</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
