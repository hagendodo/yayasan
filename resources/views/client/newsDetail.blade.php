<x-app-layout :menus="$menus">
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
        <img
            alt="{{$news->title}}"
            src="{{ asset('storage/'.$news->thumbnail) }}"
            class="h-56 w-full object-cover"
        />

        <div class="bg-white p-4 sm:p-6">
            <h3 class="mt-0.5 text-3xl text-gray-900">{{$news->title}}</h3>
            <div class="flex gap-2 items-center mt-2"><time datetime="2022-10-10" class="block text-xs text-gray-500"> {{ \Carbon\Carbon::parse($news->published_at)->format('l, d-m-Y') }}
            </time> <span class="text-gray-500 text-xs">| Oleh {{ $news->user->name }}</span></div>

            {!! $news->content !!}
        </div>

        <div class="mt-6">
            <div class="mx-auto max-w-3xl text-center">
                <h2 class="text-xl font-bold text-gray-900 sm:text-4xl">Berita Lainnya</h2>
            </div>
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 mt-6">
                @foreach($currentNews as $new)
                    <a href="/news/{{$new->slug}}">
                    <article class="overflow-hidden rounded-lg shadow transition hover:shadow-lg">
                        <img
                            alt="{{$new->title}}"
                            src="{{ asset('storage/'.$new->thumbnail) }}"
                            class="h-56 w-full object-cover"
                        />

                        <div class="bg-white p-4 sm:p-6">
                            <time datetime="2022-10-10" class="block text-xs text-gray-500"> {{ \Carbon\Carbon::parse($new->published_at)->format('l, d-m-Y') }}
                            </time>


                                <h3 class="mt-0.5 text-lg text-gray-900">{{$new->title}}</h3>


                            {{ $new->caption }}
                        </div>
                    </article>
                    </a>
                @endforeach

                <!-- Add more articles here for other cards -->
            </div>
        </div>
    </div>
</x-app-layout>
