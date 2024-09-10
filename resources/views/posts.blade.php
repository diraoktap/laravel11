<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="mx-auto max-w-7xl">
        <div class="mx-auto max-w-2xl lg:mx-0">
            <p class="text-lg leading-8 text-gray-600">Learn how to grow your business with our expert advice.
            </p>
        </div>
        <div
            class="mx-auto mt-6 grid max-w-2xl grid-cols-1 gap-x-16 gap-y-16 border-t border-gray-200 pt-6 sm:mt-6 sm:pt-6 lg:mx-0 lg:max-w-none lg:grid-cols-3">

            @foreach ($posts as $post)
                <article class="flex max-w-xl flex-col items-start justify-between">
                    <div class="flex items-center gap-x-4 text-xs">
                        <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2020</time>
                        <a href="/posts/{{ $post['id'] }}"
                            class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">{{ $post['category'] }}</a>
                    </div>
                    <div class="group relative">
                        <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                            <a href="/posts/{{ $post['id'] }}">
                                <span class="absolute inset-0"></span>
                                {{ $post['title'] }}
                            </a>
                        </h3>
                        <p class="mt-5 line-clamp-2 text-sm leading-6 text-gray-600">
                            {{-- membatasi jumlah string yang ditampilkan Str::limit --}}
                            {{ Str::limit($post['content'], 100) }}
                        </p>
                    </div>
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
                </article>
            @endforeach
        </div>
    </div>

</x-layout>
