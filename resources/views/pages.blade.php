<x-layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>
    {{-- <h3>Ini Halaman Team</h3> --}}

    {{-- <section class="bg-white dark:bg-gray-900"> --}}
    <div class="py-4 px-2 mx-auto max-w-screen-xl lg:py-4 lg:px-0">
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">

            @foreach ($pages as $b)
                {{-- 
    <article class="max-w-screen-md border-b border-gray-200 py-4">
        <!-- Topik -->
        <a href="#" class="block text-gray-900">
            <h1 class="text-3xl font-extrabold mb-1">{{ $b['topik'] }}</h1>
        </a>
    
        <!-- Penulis, Kategori, dan Waktu -->
        <div class="text-sm text-gray-700 mb-4">
            <a href="/authors/{{ $b->penulis->remember_token }}" class="hover:text-blue-900">
                {{ $b->penulis->name }}
            </a>
            <span class="mx-1">|</span>
            <a href="/category/{{ $b->kategori->list }}" class="hover:text-blue-900">
                {{ $b->kategori->list }}
            </a>
            <span class="mx-1">|</span>
            <span>{{ $b->created_at->diffForHumans() }}</span>
        </div>
    
        <!-- Isi -->
        <p class="text-base font-light leading-relaxed text-gray-800">
            {{ $b['isi'] }}
        </p>
    </article> 
    --}}


                <article
                    class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex justify-between items-center mb-5 text-gray-500">
                        <span
                            class="bg-{{ $b->kategori->warna }}-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                            {{-- <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z">
                                    </path>
                                </svg> --}}
                            {{ $b->kategori->list }}
                        </span>
                        <span class="text-sm">{{ $b->created_at->diffForHumans() }}</span>
                    </div>
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="#">{{ $b['topik'] }}</a></h2>
                    <p class="mb-5 font-light text-gray-500 dark:text-gray-400">{{ $b['isi'] }}</p>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center space-x-4">
                            <img class="w-7 h-7 rounded-full"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                                alt="" />
                            <a href="/authors/{{ $b->penulis->remember_token }}" class="font-medium dark:text-white">
                                {{ $b->penulis->name }}
                            </a>
                        </div>
                        <a href="#"
                            class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                            Read more
                            <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </article>
            @endforeach

        </div>
    </div>
    {{-- </section> --}}

</x-layout>
