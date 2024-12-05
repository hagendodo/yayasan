<x-app-layout :menus="$menus">
    <div class="carousel relative shadow-xl bg-white">
        <div class="carousel-inner relative overflow-hidden w-full">
            @foreach($sliders as $slider)
                <input class="carousel-open" type="radio" id="carousel-{{$loop->iteration}}" name="carousel" aria-hidden="true" hidden checked="checked">
                <div class="carousel-item absolute opacity-0" style="height:600px;">
                    <img class="w-full" alt="{{ $slider->image }}" src="{{ asset('storage/'.$slider->image) }}">
                </div>
            @endforeach


            <!-- Add additional indicators for each slide -->
            <ol class="carousel-indicators">
                @foreach($sliders as $slider)
                <li class="inline-block mr-3">
                    <label for="carousel-{{$loop->iteration}}" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-[#748700]">•</label>
                </li>
                @endforeach
            </ol>
        </div>
    </div>

    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
        <div class="mx-auto max-w-3xl text-center">
            <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl">Achievement</h2>

            <p class="mt-4 text-gray-500 sm:text-xl">
                Kami berkomitmen untuk menciptakan perubahan nyata bagi masyarakat melalui berbagai program yang berkelanjutan. Dengan kerja keras dan dukungan dari berbagai pihak, kami berhasil memberikan dampak positif yang nyata.
            </p>
        </div>

        <dl class="mt-6 grid grid-cols-1 gap-4 sm:mt-8 sm:grid-cols-2 lg:grid-cols-4">
            <div class="flex flex-col rounded-lg bg-blue-50 px-4 py-8 text-center">
                <dt class="order-last text-lg font-medium text-gray-500">Akreditasi</dt>

                <dd class="text-4xl font-extrabold text-[#b7d401] md:text-5xl">A</dd>
            </div>

            <div class="flex flex-col rounded-lg bg-blue-50 px-4 py-8 text-center">
                <dt class="order-last text-lg font-medium text-gray-500">Total Siswa</dt>

                <dd class="text-4xl font-extrabold text-[#b7d401] md:text-5xl">640</dd>
            </div>

            <div class="flex flex-col rounded-lg bg-blue-50 px-4 py-8 text-center">
                <dt class="order-last text-lg font-medium text-gray-500">Total Fasilitas</dt>

                <dd class="text-4xl font-extrabold text-[#b7d401] md:text-5xl">17</dd>
            </div>

            <div class="flex flex-col rounded-lg bg-blue-50 px-4 py-8 text-center">
                <dt class="order-last text-lg font-medium text-gray-500">Alumni</dt>

                <dd class="text-4xl font-extrabold text-[#b7d401] md:text-5xl">102</dd>
            </div>
        </dl>
    </div>

    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
        <div class="mx-auto max-w-3xl text-center">
            <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl">Berita Terbaru</h2>

            <p class="mt-4 text-gray-500 sm:text-xl">
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
        </div>
        <div class="mt-4 md:mt-8 flex justify-center">
            <a
                href="/news"
                class="inline-block rounded bg-[#b7d401] px-12 py-3 text-sm font-medium text-white transition hover:bg-[#748700] focus:outline-none focus:ring focus:ring-yellow-400"
            >
                More News
            </a>
        </div>
    </div>

    <section>
        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
            <header class="text-center">
                <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">Galeri Aktivitas</h2>

                <p class="mt-4 text-gray-500">
                    Lihat momen-momen inspiratif dari berbagai kegiatan yang telah kami lakukan. Galeri ini menampilkan semangat kolaborasi, keceriaan, dan dedikasi dalam setiap langkah kami untuk menciptakan perubahan. Mari jelajahi dokumentasi perjalanan kami dalam menggapai visi bersama!
                </p>
            </header>

            <ul class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                @foreach($galleries as $gallery)
                <li>
                    <a href="/galleris" class="group block overflow-hidden">
                        <img
                            src="{{ asset('storage/'.$gallery->image) }}"
                            alt="{{$gallery->title}}"
                            class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]"
                        />

{{--                        <div class="relative bg-white pt-3 text-center">--}}
{{--                            <h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4">--}}
{{--                                Basic Tee--}}
{{--                            </h3>--}}
{{--                        </div>--}}
                    </a>
                </li>
                @endforeach
            </ul>
            <div class="mt-4 md:mt-8 flex justify-center">
                <a
                    href="/galleries"
                    class="inline-block rounded bg-[#b7d401] px-12 py-3 text-sm font-medium text-white transition hover:bg-[#748700] focus:outline-none focus:ring focus:ring-yellow-400"
                >
                    More Activities
                </a>
            </div>
        </div>
    </section>
</x-app-layout>
