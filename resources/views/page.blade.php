<x-layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>
    {{-- <h3 class="pb-6 text-xl">Ini Halaman Blog</h3> --}}
    @foreach ($blogs as $blog)
        <article class="max-w-screen-md border-b border-gray-200 py-2">
            <div class="text-base text-xs">{{ $blog->created_at->format('j F Y') }}</div>
            <span class="text-xl text-blue-700">
                <h1 class="font-bold">{{ $blog['topik'] }}</h1>
            </span>
            <p class="font-light mb-4">{{ $blog['isi'] }}</p>
            <div class="flex flex-wrap gap-2">
                <span class="inline-block bg-blue-100 text-blue-900 text-sm font-medium px-3 py-1 rounded">
                    By <a href="/authors/{{ $blog->penulis->remember_token }}"
                        class="hover:text-blue-700 font-bold">{{ $blog->penulis->name }}</a>
                </span>
                <span class="inline-block bg-green-100 text-green-900 text-sm font-medium px-3 py-1 rounded">
                    In <a href="/category/{{ $blog->kategori->list }}"
                        class="hover:text-green-700 font-bold">{{ $blog->kategori->list }}</a>
                </span>
            </div>
        </article>
    @endforeach

</x-layout>
