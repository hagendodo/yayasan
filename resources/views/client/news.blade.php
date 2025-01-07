<x-app-layout :menus="$menus">
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
        <div class="mx-auto max-w-3xl text-center">
            <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl">Berita Terbaru</h2>

            <p class="mt-4 text-gray-500">
                Temukan informasi terkini seputar program, kegiatan, dan pencapaian kami di sini. Kami terus bergerak dan berinovasi untuk memberikan kontribusi terbaik bagi masyarakat.
            </p>
        </div>
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 mt-6">
            @foreach($news as $new)
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
        <div class="mt-4 md:mt-8 flex justify-center">
            {{$news->links()}}
        </div>
    </div>
</x-app-layout>
