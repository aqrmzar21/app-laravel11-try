<x-layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>
    {{-- <h3 class="pb-6 text-xl">Ini Halaman Blog</h3> --}}

    <article class="max-w-screen-md ">
        <h1 class="font-bold">{{ $blog['topik'] }}</h1>
        <div class="text-base">
            <a href="#">Aqr</a> | {{ $blog['dini'] }}
        </div>
        {{-- ini untuk memberi batas karakter yang ditampilkan dlam laravel --}}
        <p class="font-light">{{ $blog['isi'] }}</p>
        <a class="text-blue-700 text-underline pt-5" href="/blog">Back &laquo;</a>
    </article>

</x-layout>