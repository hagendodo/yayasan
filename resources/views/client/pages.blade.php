<x-app-layout :menus="$menus">
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
        <div class="bg-white p-4 sm:p-6">
            <h3 class="mt-0.5 text-3xl text-gray-900 text-center">{{$data->page_name}}</h3>
            {!! $data->content !!}
        </div>
    </div>
</x-app-layout>
