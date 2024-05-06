---
extends: _layouts.main
title: Blog
---

@section('body')
<div class="flex-1 py-6 sm:pt-24">
    <div
        class="mx-auto max-w-screen-2xl px-6 lg:px-12 xl:px-24 grid grid-cols-1 lg:grid-cols-3 lg:gap-4">
        <div class="mx-auto max-w-2xl lg:mx-0">
            <h2 class="text-base font-semibold text-emerald-500 xl:text-lg">
                The Blog</h2>
            <p
                class="mt-2 text-3xl font-bold tracking-tight text-neutral-50 sm:text-4xl xl:text-5xl">
                Revolutions
            </p>
            <p class="mt-6 leading-8 text-neutral-300 lg:max-w-none xl:text-lg">
                We're always building and learning something new. Here's a
                collection of some of those lessons and musings so you can
                stabilize your development.
            </p>
        </div>
        @if(!$posts->isEmpty())
        <x-featured-post :post="$posts->first()"></x-featured-post>
        <ul
            class="mt-8 w-full space-y-8 lg:space-y-0 max-w-xl mx-auto lg:col-span-3 lg:grid lg:grid-cols-3 lg:max-w-none lg:gap-x-8 lg:gap-y-8">
            @foreach($posts->skip(1) as $post)
            <li
                class="px-4 py-2 sm:p-8 overflow-hidden relative mx-auto bg-emerald-950/10 border border-emerald-600 rounded-lg lg:py-6 lg:px-4 transform duration-300 hover:scale-[1.0125] brightness-[0.625] hover:brightness-100">
                <time datetime="{{ $post->date }}"
                    class="block text-sm leading-6 font-medium text-emerald-500">
                    {{ $post->formatted_date() }}
                </time>
                <h2 class="mt-2 text-lg font-semibold">
                    <a href="{{ $post->getUrl() }}">
                        <span
                            class="absolute inset-0 hover:cursor-pointer"></span>
                        {{ $post->title }}
                    </a>
                </h2>
                <p class="mt-4 text-sm leading-6 text-neutral-300 line-clamp-3">
                    {{ $post->description }}
                </p>
                <div
                    class="hidden items-center mt-8 gap-x-2.5 font-medium leading-6 text-neutral-50">
                    <img src="{{ $post->author()->image }}"
                        class="h-10 w-10 flex-none rounded-full bg-neutral-50 shadow-sm"
                        alt="{{ $post->author()->name }}">
                    {{ $post->author()->name }}
                </div>
            </li>
            @endforeach
        </ul>
        @endif
        <div
            class="mt-8 lg:mt-16 text-neutral-400 flex flex-col items-center justify-center gap-1 mx-auto w-full max-w-screen-2xl lg:col-span-3">
            ------
            <p>You made it to the end.</p>
            <p>It's unstable out there, take this:</p>
            <img class="hover:rotate-[15deg] hover:scale-110 transform duration-1000 inline-flex h-6 w-auto mt-1"
                src="/assets/images/stabilize-top-only.png" />
            ------
        </div>
    </div>
</div>
@endsection
