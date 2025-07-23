<x-layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>
    {{-- <h3 class="pb-6 text-xl">Ini Halaman Blog</h3> --}}

    @foreach ($posts as $blog)
        <article class="max-w-screen-md border-b border-gray-200 py-2">
            <a class="text-blue-700 hover:underline text-gray-900" href="/blog/{{ $blog['uuid'] }}">
                <h1 class="font-bold">{{ $blog['topik'] }}</h1>
            </a>
            <div class="text-base">
                {{-- // INI UNTUK MEMBUAT FORMAT KETERANGAN sesaat yang lalu --}}
                {{-- <a href="#">Aqr</a> | {{ $blog->creaated_at->diffForHumans() }} --}}
                <a href="#">Aqr</a> | {{ $blog['dini'] }}
                {{-- // INI UNTUK MEMBUAT FORMAT KETERANGAN tanggal di atas (00 January 2000) --}}
                {{-- <a href="#">Aqr</a> | {{ $blog->creaated_at->format('j F Y') }} --}}
            </div>
            {{-- ini untuk memberi batas karakter yang ditampilkan dlam laravel --}}
            <p class="font-light">{{ Str::limit($blog['isi'], 80) }}</p>
            <a class="text-blue-700 text-underline pt-5" href="/blog/{{ $blog['uuid'] }}">Read more &raquo;</a>
        </article>
    @endforeach

    {{-- 
    <article class="max-w-screen-md border-b border-gray-200 py-2">
        <h1 class="font-bold">Judul Artikerl 2 </h1>
        <div class="text-base">
            <a href="#">Zar</a> | 25 Oktober 2025
        </div>
        <p class="font-light">Aspernatur optio officiis facere adipisci, laudantium dolores neque.</p>
        <a class="text-blue-700 text-underline" href="#">Read more &raquo;</a>
    </article> 
    --}}

</x-layout>
