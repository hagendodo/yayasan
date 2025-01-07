<x-app-layout :menus="$menus">
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
        <div class="mx-auto max-w-3xl text-center">
            <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl">Aktivitas Yayasan As-Salam</h2>

            <p class="mt-4 text-gray-500">
                Lihat momen-momen inspiratif dari berbagai kegiatan yang telah kami lakukan. Galeri ini menampilkan semangat kolaborasi, keceriaan, dan dedikasi dalam setiap langkah kami untuk menciptakan perubahan. Mari jelajahi dokumentasi perjalanan kami dalam menggapai visi bersama!
            </p>
        </div>
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
            {{$galleries->links()}}
        </div>
    </div>
</x-app-layout>
