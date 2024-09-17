<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <article class="flex flex-col items-start justify-center space-y-6">
        <div class="flex items-center gap-x-4 text-xs">
            <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2020</time>
            <p class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600">
                {{ $post['category'] }}
            </p>
        </div>
        <h1 class="mt-3 text-4xl text-center font-semibold leading-6 text-gray-900">
            {{ $post['title'] }}
        </h1>
        <p class="mt-5 text-sm leading-6 text-gray-600">
            {{ $post['content'] }}
        </p>

        <div class="relative mt-8 flex items-center gap-x-4">
            <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                alt="" class="h-10 w-10 rounded-full bg-gray-50">
            <div class="text-sm leading-6">
                <p class="font-semibold text-gray-900">
                    <a href="#">
                        <span class="absolute inset-0"></span>
                        {{ $post['author'] }}
                    </a>
                </p>
                <p class="text-gray-600">{{ $post['role'] }}</p>
            </div>
        </div>

        <a href="/posts"
            class="text-xs font-semibold text-gray-600 hover:text-gray-900 transition-all duration-300">&laquo; Back to
            blog</a>
    </article>
</x-layout>
