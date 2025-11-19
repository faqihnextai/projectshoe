@extends('layouts.app')

@section('title', 'Beranda - Sepatu Bersih App')

@section('full-width-content')
    <div class="relative w-full h-screen overflow-hidden">
        <div id="slider" class="absolute inset-0 w-full h-full flex transition-transform duration-700">
                <img src="/images/slide1.jpeg" class="w-full object-cover shrink-0">
                <img src="/images/slide2.jpeg" class="w-full object-cover shrink-0">
                <img src="/images/slide3.jpeg" class="w-full object-cover shrink-0">
        </div>

        <div class="relative z-10 flex flex-col items-center justify-center h-full text-white text-center px-4">
                <h1 class="text-5xl font-bold mb-4">SHOENIX: #DudukManis, Sepatu Beres.</h1>
                <p class="text-xl mb-6">Solusi terbaik untuk membuat sepatu tampil seperti baru lagi.</p>
                <a href="#services" class="px-6 py-3 bg-yellow-500 hover:bg-yellow-600 text-black font-bold rounded-xl transition">
                        Lihat Layanan Kami
                </a>
        </div>
    </div>

    @include('pages.services')
    @include('pages.about')
    @include('pages.contact')
@endsection
