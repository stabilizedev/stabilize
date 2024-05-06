<article
    class="my-8 mx-auto w-full max-w-2xl lg:mt-0 lg:col-span-2 bg-emerald-950/10 border border-emerald-500 rounded-lg px-4 py-6 sm:py-8 lg:py-12 lg:px-6 transform duration-300 hover:cursor-pointer hover:scale-[1.025]">
    <div class="group relative max-w-xl mx-auto lg:max-w-2xl">
        <time datetime="{{ $post->date }}"
            class="block text-sm leading-6 font-medium text-emerald-500">
            {{ $post->formatted_date() }}
        </time>
        <h2 id="featured-post"
            class="mt-4 text-2xl font-semibold tracking-tight text-neutral-50 sm:text-4xl">
            <a href="{{ $post->getUrl() }}"><span
                    class="absolute inset-0"></span>{{
                $post->title }}</a>
        </h2>
        <p class="mt-4 leading-8 text-neutral-300">
            {{ $post->description }}
        </p>
        <div
            class="hidden items-center mt-8 gap-x-2.5 font-medium leading-6 text-neutral-50">
            <img src="{{ $post->author()->image }}"
                class="h-10 w-10 flex-none rounded-full bg-neutral-50 shadow-sm"
                alt="{{ $post->author()->name }}">
            {{ $post->author()->name }}
        </div>
    </div>
</article>
