<x-layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>
    {{-- <h3>Ini Halaman Team</h3> --}}
    <div class="row">
        {{-- <div class="col-8">
        </div> --}}

        <div class="col-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                @foreach ($team as $t)
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-bold text-gray-900">{{ $t['nopung'] }}</h3>
                        <p class="text-md text-gray-700"><strong>Player:</strong> {{ $t['nama'] }}</p>
                        <p class="text-sm text-gray-700"><strong>Club:</strong> {{ $t['klub'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
