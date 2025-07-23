<!--
<div>
        Simplicity is the consequence of refined emotions. - Jean D'Alembert
</div>
-->

<!DOCTYPE html>
<html class="h-full bg-gray-100">

<head>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- @vite('resources/css/app.css') --}}
    @vite('resources/css/app.css', 'resources/js/app.js')
    <title>Laravel | {{ $judul }}</title>
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet" /> --}}
    <!-- Fonts -->

    <!-- Styles -->
    <style>
        .flag {
            font-size: 2em;
            margin: 10px;
        }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-full">
    <div class="min-h-full">
        <x-navbar></x-navbar>
        {{-- ini menjadi komponen di laravel  --}}

        <x-header>{{ $judul }}</x-header>
        {{-- ini menjadi komponen di app/view/component --}}

        {{-- AKHIR HEADER --}}
        {{-- ----------------------------------------------------------------------------------------------- --}}
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <!-- Your content -->
                {{-- <h3>INI HALAMAN HOME</h3> --}}
                {{ $slot }}
            </div>
        </main>
    </div>

</body>

</html>
