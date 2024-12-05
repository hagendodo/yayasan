@props([
    'menus'
])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        .bg-hero {
            background-image: url("{{ asset('assets/images/bg-hero.png') }}");
        }

        .carousel-open:checked + .carousel-item {
            position: static;
            opacity: 100;
        }
        .carousel-item {
            -webkit-transition: opacity 0.6s ease-out;
            transition: opacity 0.6s ease-out;
        }
        #carousel-1:checked ~ .control-1,
        #carousel-2:checked ~ .control-2,
        #carousel-3:checked ~ .control-3 {
            display: block;
        }
        .carousel-indicators {
            list-style: none;
            margin: 0;
            padding: 0;
            position: absolute;
            bottom: 2%;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 10;
        }
        #carousel-1:checked ~ .control-1 ~ .carousel-indicators li:nth-child(1) .carousel-bullet,
        #carousel-2:checked ~ .control-2 ~ .carousel-indicators li:nth-child(2) .carousel-bullet,
        #carousel-3:checked ~ .control-3 ~ .carousel-indicators li:nth-child(3) .carousel-bullet {
            color: #2b6cb0;  /*Set to match the Tailwind colour you want the active one to be */
        }
    </style>

    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Scripts -->
{{--    @vite(['resources/css/app.css', 'resources/js/app.js'])--}}
</head>

<body class="bg-white">
<div class="bg-[#b7d401] px-4 py-3 text-white flex justify-between">
    <p class="text-center text-sm font-medium">
        <i class="bi bi-geo-alt-fill"></i>
        <a href="https://www.google.com/maps/place/MA+Anshaarul+Huda/@-7.5871065,107.8113068,17z/data=!3m1!4b1!4m6!3m5!1s0x2e66119713a4f6fb:0xb19d9d5b6ca57c4d!8m2!3d-7.5871065!4d107.8113068!16s%2Fg%2F11sq2tbf42?entry=ttu&g_ep=EgoyMDI0MTExOS4yIKXMDSoASAFQAw%3D%3D" target="_blank" class="inline-block">Komplek Yayasan Anshaarul Huda, Cihaurkuning, Cisompet, Kabupaten Garut, Jawa Barat - 44174</a>
    </p>
    <p class="text-center text-sm font-medium">
        <i class="bi bi-telephone"></i>
        <a href="#" class="inline-block">+62 8529 521 1630</a>
    </p>
    <p class="text-center text-sm font-medium">
        <i class="bi bi-envelope"></i>
        <a href="#" class="inline-block">maanshaarulhuda@gmail.com</a>
    </p>
</div>
<header class="bg-white">
    <div class="mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex-1 md:flex md:items-center md:gap-12">
                <a class="block text-gray-500 flex gap-2" href="/">
                    <span class="sr-only">Home</span>
                    <img class="h-9" src="{{asset('assets/logo-yayasan.png')}}" alt="Logo Yayasan">
                    <span class="text-lg my-auto">Yayasan Anshaarul Huda</span>
                </a>
            </div>

            <div class="md:flex md:items-center md:gap-12">
                <nav aria-label="Global" class="hidden md:block">
                    <ul class="flex items-center gap-6 text-sm">
                        <li>
                            <a class="text-gray-500 transition hover:text-gray-500/75" href="/">Beranda</a>
                        </li>

                        <li class="relative group">
                            <button class="flex items-center text-gray-500 transition hover:text-gray-500/75">
                                Tentang Kami
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-4 w-4 ml-1"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M5.23 7.21a.75.75 0 011.06-.02L10 10.67l3.71-3.48a.75.75 0 111.04 1.08l-4 3.75a.75.75 0 01-1.04 0l-4-3.75a.75.75 0 01-.02-1.06z"
                                        clip-rule="evenodd"
                                    />
                                </svg>
                            </button>
                            <!-- Dropdown items -->
                            <ul
                                class="absolute left-0 z-10 hidden w-40 bg-white shadow-lg group-hover:block"
                            >
                                @foreach($menus as $menu)
                                    <li>
                                        <a
                                            class="block px-4 py-2 text-gray-700 hover:bg-gray-100"
                                            href="/pages/{{$menu->id}}"
                                        >
                                            {{$menu->page_name}}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>

                        <li>
                            <a class="text-gray-500 transition hover:text-gray-500/75" href="/galleries">Galeri</a>
                        </li>

                        <li>
                            <a class="text-gray-500 transition hover:text-gray-500/75" href="/news">Berita</a>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>
    </div>
</header>
{{ $slot }}
<footer class="bg-gray-100">
    <div class="mx-auto max-w-5xl px-4 py-16 sm:px-6 lg:px-8">
        <div class="flex justify-center text-[#b7d401]">
            <a class="block text-gray-500 flex gap-2" href="/">
                <img class="h-9" src="{{asset('assets/logo-yayasan.png')}}" alt="Logo Yayasan">
                <span class="text-lg my-auto">Yayasan Anshaarul Huda</span>
            </a>
        </div>

        <p class="mx-auto mt-6 max-w-md text-center leading-relaxed text-gray-500">
            Yayasan Anshaarul Huda hadir untuk melayani masyarakat melalui program sosial, pendidikan, dan keagamaan. Dengan semangat kebersamaan, kami berkomitmen menciptakan perubahan positif yang berkelanjutan.
        </p>

        <ul class="mt-12 flex justify-center gap-6 md:gap-8">
            <li>
                <a
                    href="https://instagram.com/anshaarul.huda"
                    rel="noreferrer"
                    target="_blank"
                    class="text-gray-700 transition hover:text-gray-700/75"
                >
                    <span class="sr-only">Instagram</span>
                    <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path
                            fill-rule="evenodd"
                            d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                            clip-rule="evenodd"
                        />
                    </svg>
                </a>
            </li>

            <li>
                <a
                    href="https://instagram.com/osmanda2425"
                    rel="noreferrer"
                    target="_blank"
                    class="text-gray-700 transition hover:text-gray-700/75"
                >
                    <span class="sr-only">Instagram</span>
                    <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path
                            fill-rule="evenodd"
                            d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                            clip-rule="evenodd"
                        />
                    </svg>
                </a>
            </li>
        </ul>
    </div>
</footer>
<script>
    let currentIndex = 1;
    const totalSlides = 5; // Total number of slides
    const intervalTime = 5000; // 3 seconds

    setInterval(() => {
        currentIndex = currentIndex < totalSlides ? currentIndex + 1 : 1; // Loop back to the first slide
        try{
            document.getElementById(`carousel-${currentIndex}`).checked = true;
        }catch(err){}
    }, intervalTime);
</script>
</body>

</html>
