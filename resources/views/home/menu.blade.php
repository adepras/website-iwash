@extends('layouts.app')

@section('title', 'Home - iWash')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">

    <div class="container-menu py-5">
        <h2>Pesan Layanan iWash</h2>
        <p class="mb-5">Mau pilih layanan apa?</p>
        <div class="option-menu">
            <a class="btn-menu" href="{{ route('home') }}">Satu Kali Cuci <img src="image/next-ill.png" alt=""></a>
            <a class="btn-menu" href="{{ route('home') }}">Salon Mobil/Detailing <img src="image/next-ill.png" alt=""></a>
            <a class="btn-menu" href="{{ route('home') }}">Paket Super <img src="image/next-ill.png" alt=""></a>
        </div>
    </div>
@endsection