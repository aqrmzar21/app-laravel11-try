<x-layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>
    {{-- <h3>Ini Halaman Jadwal</h3> --}}
    {{-- <h3 class="text-2xl font-bold mb-4">{{ $title }}</h3> --}}
    <!-- Judul Bulan -->
    <div class="text-center mb-4">
        <span class="text-lg font-semibold text-gray-700">
            {{ \Carbon\Carbon::create($year, $month)->isoFormat('MMMM Y') }}
        </span>
    </div>
    <div class="overflow-x-auto">
        <table class="min-w-full border border-gray-200 bg-white rounded-lg shadow-md">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-4 py-2 text-sm font-semibold text-gray-700 border border-gray-300">Senin</th>
                    <th class="px-4 py-2 text-sm font-semibold text-gray-700 border border-gray-300">Selasa</th>
                    <th class="px-4 py-2 text-sm font-semibold text-gray-700 border border-gray-300">Rabu</th>
                    <th class="px-4 py-2 text-sm font-semibold text-gray-700 border border-gray-300">Kamis</th>
                    <th class="px-4 py-2 text-sm font-semibold text-gray-700 border border-gray-300">Jumat</th>
                    <th class="px-4 py-2 text-sm font-semibold text-gray-700 border border-gray-300">Sabtu</th>
                    <th class="px-4 py-2 text-sm font-semibold text-gray-700 border border-gray-300">Minggu</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center">
                    <!-- Tambahkan kolom kosong untuk hari sebelum tanggal 1 -->
                    @for ($i = 1; $i < $startOfMonth; $i++)
                        <td class="px-4 py-2 border border-gray-300 bg-gray-100"></td>
                    @endfor

                    <!-- Isi hari dalam bulan -->
                    @for ($day = 1; $day <= $daysInMonth; $day++)
                        <td class="px-4 py-2 border border-gray-300">{{ $day }}</td>
                        @if (($day + $startOfMonth - 1) % 7 == 0)
                </tr>
                <tr class="text-center">
                    @endif
                    @endfor

                    <!-- Tambahkan kolom kosong setelah tanggal terakhir -->
                    @for ($i = ($daysInMonth + $startOfMonth - 1) % 7; $i < 7 && $i != 0; $i++)
                        <td class="px-4 py-2 border border-gray-300 bg-gray-100"></td>
                    @endfor
                </tr>
            </tbody>
        </table>
    </div>
    {{-- <h1 class="text-2xl font-bold text-center my-5">Bendera Negara</h1> --}}
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6">
        <?php
        // Daftar negara dengan kode ISO
        $countries = [
            'Indonesia' => 'id',
            'United States' => 'us',
            'United Kingdom' => 'gb',
            'Japan' => 'jp',
            'Germany' => 'de',
            'France' => 'fr',
        ];
        
        // Loop untuk menampilkan gambar bendera
        // foreach ($countries as $country => $code) {
        //     echo "
        //                 <div class='bg-white p-4 shadow-md rounded-lg flex flex-col items-center'>
        //                     <img src='https://flagcdn.com/w320/$code.png' alt='Bendera $country' class='w-24 h-auto mb-3'>
        //                     <p class='text-center text-gray-700 font-semibold'>$country</p>
        //                 </div>
        //             ";
        // }
        
        ?>
    </div>
    {{-- // ------------------------------------------------------- --}}

    <h1 class="text-2xl font-bold text-center m-5">Info Pertandingan</h1>
    <!-- Container Grid -->
    {{-- <div class="grid grid-cols-2 md:grid-cols-3 gap-4"> --}}
    <div class="grid grid-cols-12 gap-2 mb-2 text-center">
        <div class="col-span-4 text-lg font-bold text-gray-900">Jadwal</div>
        <div class="col-span-4">Laga</div>
        <div class="col-span-4 text-lg font-bold text-gray-900">Stadium</div>
    </div>
    <div class="grid grid-cols-12 gap-2 mb-2">
        <!-- Kolom Ketiga: Jadwal -->
        <div class="col-span-4 flex flex-col items-center">
            <div class="bg-white py-2 text-center shadow-md rounded-lg w-full">
                <span class="text-gray-700">20 Maret 2025</span>
                <span class="text-gray-500 text-sm">19:30 WIB</span>
            </div>
        </div>
        <!-- Kolom Pertama: Bendera -->
        <div class="col-span-4 flex flex-col items-center">
            <div class="flex justify-center gap-2 bg-white shadow-md rounded-lg w-full p-1">
                <!-- Bendera Australia -->
                <img src="https://flagcdn.com/w320/au.png" alt="Bendera Australia"
                    class="w-8 h-8 rounded-full border-4 border-white-900">
                <span class="text-xl font-semibold self-center">v</span>
                <!-- Bendera Indonesia -->
                <img src="https://flagcdn.com/w320/id.png" alt="Bendera Indonesia"
                    class="w-8 h-8 rounded-full border-4 border-white-900">
            </div>
            {{-- <span class="text-xs text-center text-gray-700 mt-1">5 : 1</span> --}}
        </div>

        <!-- Kolom Kedua: Stadion -->
        <div class="col-span-4 flex flex-col items-center">
            <div class="bg-white py-2 shadow-md rounded-lg w-full text-center">
                <p class="text-gray-700">Sydney Stadium</p>
            </div>
        </div>

    </div>
    <div class="flex justify-center text-sm font-bold text-gray-700">Full Time</div>
    <div class="flex text-md justify-center text-center text-gray-500 mb-2">5 : 1</div>
    <div class="grid grid-cols-12 gap-2 mb-2">
        <!-- Kolom Ketiga: Jadwal -->
        <div class="col-span-4 flex flex-col items-center">
            <div class="bg-white py-2 text-center shadow-md rounded-lg w-full">
                <span class="text-gray-700">25 Maret 2025</span>
                <span class="text-gray-500 text-sm">21:45 WIB</span>
            </div>
        </div>
        <!-- Kolom Pertama: Bendera -->
        <div class="col-span-4 flex flex-col items-center">
            <div class="flex justify-center gap-2 bg-white shadow-md rounded-lg w-full p-1">
                <!-- Bendera Indonesia -->
                <img src="https://flagcdn.com/w320/id.png" alt="Bendera Indonesia"
                    class="w-8 h-8 rounded-full border-4 border-white-900">
                <span class="text-xl font-semibold self-center">v</span>
                <!-- Bendera Bahrain -->
                <img src="https://flagcdn.com/w320/bh.png" alt="Bendera Bahrain"
                    class="w-8 h-8 rounded-full border-4 border-white-900">
            </div>
        </div>

        <!-- Kolom Kedua: Stadion -->
        <div class="col-span-4 flex flex-col items-center">
            <div class="bg-white py-2 shadow-md rounded-lg w-full text-center">
                <p class="text-gray-700">Gelora Bung Karno (GBK)</p>
            </div>
        </div>

    </div>
    <div class="flex justify-center text-sm font-bold text-gray-700">Penuh Waktu</div>
    <div class="flex text-md justify-center text-center text-gray-500 mb-2">1 : 0</div>
    {{-- match last R3 --}}
    <div class="grid grid-cols-12 gap-2 mb-2">
        <!-- Kolom Ketiga: Jadwal -->
        <div class="col-span-4 flex flex-col items-center">
            <div class="bg-white py-2 text-center shadow-md rounded-lg w-full">
                <span class="text-gray-700">25 Maret 2025</span>
                <span class="text-gray-500 text-sm">21:45 WIB</span>
            </div>
        </div>
        <!-- Kolom Pertama: Bendera -->
        <div class="col-span-4 flex flex-col items-center">
            <div class="flex justify-center gap-2 bg-white shadow-md rounded-lg w-full p-1">
                <!-- Bendera Indonesia -->
                <img src="https://flagcdn.com/w320/id.png" alt="Bendera Indonesia"
                    class="w-8 h-8 rounded-full border-4 border-white-900">
                <span class="text-xl font-semibold self-center">v</span>
                <!-- Bendera Bahrain -->
                <img src="https://flagcdn.com/w320/ch.png" alt="Bendera China"
                    class="w-8 h-8 rounded-full border-4 border-white-900">
            </div>
        </div>

        <!-- Kolom Kedua: Stadion -->
        <div class="col-span-4 flex flex-col items-center">
            <div class="bg-white py-2 shadow-md rounded-lg w-full text-center">
                <p class="text-gray-700">Gelora Bung Karno (GBK)</p>
            </div>
        </div>

    </div>
    <div class="flex justify-center text-sm font-bold text-gray-700">Full Waktu</div>
    <div class="flex text-md justify-center text-center text-gray-500 mb-2">1 : 0</div>
    <div class="grid grid-cols-12 gap-2 mb-2">
        <!-- Kolom Ketiga: Jadwal -->
        <div class="col-span-4 flex flex-col items-center">
            <div class="bg-white py-2 text-center shadow-md rounded-lg w-full">
                <span class="text-gray-700">25 Maret 2025</span>
                <span class="text-gray-500 text-sm">21:45 WIB</span>
            </div>
        </div>
        <!-- Kolom Pertama: Bendera -->
        <div class="col-span-4 flex flex-col items-center">
            <div class="flex justify-center gap-2 bg-white shadow-md rounded-lg w-full p-1">
                <!-- Bendera Indonesia -->
                <img src="https://flagcdn.com/w320/jp.png" alt="Bendera Jepang"
                    class="w-8 h-8 rounded-full border-4 border-white-900">
                <span class="text-xl font-semibold self-center">v</span>
                <!-- Bendera Bahrain -->
                <img src="https://flagcdn.com/w320/id.png" alt="Bendera Indonesia"
                    class="w-8 h-8 rounded-full border-4 border-white-900">
            </div>
        </div>

        <!-- Kolom Kedua: Stadion -->
        <div class="col-span-4 flex flex-col items-center">
            <div class="bg-white py-2 shadow-md rounded-lg w-full text-center">
                <p class="text-gray-700">Stadium Saitama 2002</p>
            </div>
        </div>

    </div>
    <div class="flex justify-center text-sm font-bold text-gray-700">Penuh Waktu</div>
    <div class="flex text-md justify-center text-center text-gray-500 mb-2">6 : 0</div>


</x-layout>
