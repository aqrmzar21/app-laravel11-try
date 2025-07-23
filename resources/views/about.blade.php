<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->

    <!-- Styles -->
</head>

<body class="container">
    <a href="/">Home</a>
    <a href="/about">About</a>
    <h3>IN HALAMAN ABOTU</h3>
    {{-- <h6>IOwner : Aqramm Alhidayatullah</h6> --}}
    <h6>IOwner : <?= $nama ?></h6>
    {{-- Cara Lain menggunakan blade laravel --}}
    <h6>IOwner : {{ $umur }}</h6>
    <h5>Contact</h5>
    <span>IG : arkaann.id</span>
    <span>FB : Aqram Zar</span>
    <span>WA : 08xx xxxx xxxx</span>
</body>

</html>
