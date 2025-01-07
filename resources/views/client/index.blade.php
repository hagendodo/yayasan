<x-app-layout :menus="$menus">
    <div class="carousel relative shadow-xl bg-white">
        <div class="carousel-inner relative overflow-hidden w-full">
            @foreach ($sliders as $slider)
                <input class="carousel-open" type="radio" id="carousel-{{ $loop->iteration }}" name="carousel"
                    aria-hidden="true" hidden checked="checked">
                <div class="carousel-item absolute opacity-0" style="height:600px;">
                    <img class="w-full" alt="{{ $slider->image }}" src="{{ asset('storage/' . $slider->image) }}">
                </div>
            @endforeach


            <ol class="carousel-indicators">
                @foreach ($sliders as $slider)
                    <li class="inline-block mr-3">
                        <label for="carousel-{{ $loop->iteration }}"
                            class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-[#748700]">•</label>
                    </li>
                @endforeach
            </ol>
        </div>
    </div>

    <div class="w-full py-8 sm:py-12">
        <div class="mx-auto max-w-3xl text-center">
            <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl">Lembaga di Yayasan Anshaarul Huda</h2>

            <p class="mt-4 text-gray-500 sm:text-xl">
                Beberapa lembaga pendidikan yang berada di bawah naungan Yayasan Anshaarul Huda.
            </p>
        </div>

        <div class="mt-6 overflow-x-hidden relative">
            <div class="flex space-x-4 animate-scroll" style="display: flex; animation: scroll 120s linear infinite;">
                <div class="flex items-center justify-center flex-shrink-0 w-48 h-32 rounded-lg p-4">
                    <img src="naungan/Logo Madrasah Aliyah anshaarul huda.png" alt="Client 1" class="max-h-32">
                </div>

                <div class="flex items-center justify-center flex-shrink-0 w-48 h-32 rounded-lg p-4">
                    <img src="naungan/Logo Majlis Ta_lim.PNG" alt="Client 2" class="max-h-32">
                </div>

                <div class="flex items-center justify-center flex-shrink-0 w-48 h-32 rounded-lg p-4">
                    <img src="naungan/Logo MDTA Anshaarul huda.PNG" alt="Client 3" class="max-h-32">
                </div>

                <div class="flex items-center justify-center flex-shrink-0 w-48 h-32 rounded-lg p-4">
                    <img src="naungan/Logo Osis MA.PNG" alt="Client 4" class="max-h-32">
                </div>

                <div class="flex items-center justify-center flex-shrink-0 w-48 h-32 rounded-lg p-4">
                    <img src="naungan/Logo pondok pesantre.PNG" alt="Client 5" class="max-h-32">
                </div>

                <div class="flex items-center justify-center flex-shrink-0 w-48 h-32 rounded-lg p-4">
                    <img src="naungan/Logo RA Anshaarul huda.PNG" alt="Client 6" class="max-h-32">
                </div>

                <div class="flex items-center justify-center flex-shrink-0 w-48 h-32 rounded-lg p-4">
                    <img src="naungan/Logo SMP Anshaarul huda.PNG" alt="Client 7" class="max-h-32">
                </div>

                <div class="flex items-center justify-center flex-shrink-0 w-48 h-32 rounded-lg p-4">
                    <img src="naungan/OSIS MPK Anshaarul Huda.png" alt="Client 8" class="max-h-32">
                </div>

                <div class="flex items-center justify-center flex-shrink-0 w-48 h-32 rounded-lg p-4">
                    <img src="naungan/OSIS MPK SMP Cihaurkuning Satu.png" alt="Client 9" class="max-h-32">
                </div>
            </div>
        </div>
    </div>


    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
        <div class="mx-auto max-w-3xl text-center">
            <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl">Berita Terbaru</h2>

            <p class="mt-4 text-gray-500 sm:text-xl">
                Temukan informasi terkini seputar program, kegiatan, dan pencapaian kami di sini. Kami terus bergerak
                dan berinovasi untuk memberikan kontribusi terbaik bagi masyarakat.
            </p>
        </div>
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 mt-6">
            @foreach ($news as $new)
                <a href="/news/{{ $new->slug }}">
                    <article class="overflow-hidden rounded-lg shadow transition hover:shadow-lg">
                        <img alt="{{ $new->title }}" src="{{ asset('storage/' . $new->thumbnail) }}"
                            class="h-56 w-full object-cover" />

                        <div class="bg-white p-4 sm:p-6">
                            <time datetime="2022-10-10" class="block text-xs text-gray-500">
                                {{ \Carbon\Carbon::parse($new->published_at)->format('l, d-m-Y') }}
                            </time>


                            <h3 class="mt-0.5 text-lg text-gray-900">{{ $new->title }}</h3>


                            {{ $new->caption }}
                        </div>
                    </article>
                </a>
            @endforeach
        </div>
        <div class="mt-4 md:mt-8 flex justify-center">
            <a href="/news"
                class="inline-block rounded bg-[#b7d401] px-12 py-3 text-sm font-medium text-white transition hover:bg-[#748700] focus:outline-none focus:ring focus:ring-yellow-400">
                More News
            </a>
        </div>
    </div>

    <section>
        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
            <header class="text-center">
                <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">Galeri Aktivitas</h2>

                <p class="mt-4 text-gray-500">
                    Lihat momen-momen inspiratif dari berbagai kegiatan yang telah kami lakukan. Galeri ini menampilkan
                    semangat kolaborasi, keceriaan, dan dedikasi dalam setiap langkah kami untuk menciptakan perubahan.
                    Mari jelajahi dokumentasi perjalanan kami dalam menggapai visi bersama!
                </p>
            </header>

            <ul class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($galleries as $gallery)
                    <li>
                        <a href="/galleris" class="group block overflow-hidden">
                            <img src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->title }}"
                                class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]" />
                        </a>
                    </li>
                @endforeach
            </ul>
            <div class="mt-4 md:mt-8 flex justify-center">
                <a href="/galleries"
                    class="inline-block rounded bg-[#b7d401] px-12 py-3 text-sm font-medium text-white transition hover:bg-[#748700] focus:outline-none focus:ring focus:ring-yellow-400">
                    More Activities
                </a>
            </div>
        </div>
    </section>
</x-app-layout>
