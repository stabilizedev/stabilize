@php $author = $page->author(); @endphp
@extends('_layouts.main')
@section('body')
<div class="py-6 sm:pt-12">
    <div
        class="prose lg:prose-xl prose-invert prose-emerald mx-auto px-6 prose-li:marker:text-emerald-500">
        <div class="mb-8">
            <a href="/blog"
                class="text-sm font-semibold no-underline hover:underline decoration-2 decoration-wavy underline-offset-8 decoration-emerald-500 text-emerald-500">
                <span aria-hidden="true">&larr;</span>
                Blog
            </a>
        </div>
        <h1> {{ $page->title }}</h1>
        @yield('content')
    </div>
    <div
        class="grid place-items-center mx-auto max-w-screen-2xl px-6 lg:px-12 xl:px-24 py-8 mt-8">
        <div class="flex space-x-4 items-center">
            <img class="h-24 w-24 rounded-full ring ring-emerald-500"
                src="{{ $author->image }}" alt="">
            <div>
                <h2
                    class="text-2xl font-semibold text-neutral-50 flex items-center">
                    {{ $author->name }}
                </h2>
                <p class="text-sm font-medium text-neutral-300">
                    {{ $author->description }}
                </p>
                @if($author->twitter)
                <a href="{{ $author->twitter }}"
                    class="mt-2 flex items-center space-x-1 decoration-2 decoration-wavy underline-offset-8 decoration-emerald-500 hover:underline">
                    <svg viewBox="0 0 256 209" class="w-4 h-4"
                        preserveAspectRatio="xMidYMid">
                        <path
                            d="M256 25.45c-9.42 4.177-19.542 7-30.166 8.27 10.845-6.5 19.172-16.793 23.093-29.057a105.183 105.183 0 0 1-33.351 12.745C205.995 7.201 192.346.822 177.239.822c-29.006 0-52.523 23.516-52.523 52.52 0 4.117.465 8.125 1.36 11.97-43.65-2.191-82.35-23.1-108.255-54.876-4.52 7.757-7.11 16.78-7.11 26.404 0 18.222 9.273 34.297 23.365 43.716a52.312 52.312 0 0 1-23.79-6.57c-.003.22-.003.44-.003.661 0 25.447 18.104 46.675 42.13 51.5a52.592 52.592 0 0 1-23.718.9c6.683 20.866 26.08 36.05 49.062 36.475-17.975 14.086-40.622 22.483-65.228 22.483-4.24 0-8.42-.249-12.529-.734 23.243 14.902 50.85 23.597 80.51 23.597 96.607 0 149.434-80.031 149.434-149.435 0-2.278-.05-4.543-.152-6.795A106.748 106.748 0 0 0 256 25.45"
                            fill="#10b981" />
                    </svg>
                    <span class="text-sm">Follow on Twitter</span>
                </a>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
