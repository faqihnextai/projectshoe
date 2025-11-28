@extends('layouts.app')

@section('title', 'Beranda - Sepatu Bersih App')

@section('full-width-content')
    <div class="relative w-full h-screen overflow-hidden">
        <div id="slider" class="absolute inset-0 w-full h-full flex transition-transform duration-700">
            {{-- PERBAIKAN PATH SLIDER MENGGUNAKAN asset() --}}
            <img src="{{ asset('images/slide1.webp') }}" class="w-full object-cover shrink-0">
            <img src="{{ asset('images/slide2.webp') }}" class="w-full object-cover shrink-0">
            <img src="{{ asset('images/slide3.webp') }}" class="w-full object-cover shrink-0">
        </div>

        <div class="relative z-10 flex flex-col items-center justify-center h-full text-white text-center px-4">
            <h1 class="text-5xl font-bold mb-4">SHOENIX: #DudukManis, Sepatu Beres.</h1>
            <p class="text-xl mb-6">Solusi terbaik untuk membuat sepatu tampil seperti baru lagi.</p>
            <a href="#services" class="px-6 py-3 bg-yellow-500 hover:bg-yellow-600 text-black font-bold rounded-xl transition">
                Lihat Layanan Kami
            </a>
        </div>
    </div>

    {{-- File-file ini diasumsikan berisi konten section LAYANAN KAMI di bawah --}}
    @include('pages.services')
    @include('pages.workflow')
    @include('pages.about')
    @include('pages.contact')
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const slider = document.getElementById('slider');

        if (!slider) {
            console.error("Elemen dengan ID 'slider' tidak ditemukan!");
            return; // Hentikan eksekusi script jika slider tidak ditemukan
        }

        const images = slider.getElementsByTagName('img');

        if (images.length === 0) {
            console.error("Tidak ada gambar (img) di dalam slider!");
            return; // Hentikan eksekusi script jika tidak ada gambar
        }

        console.log("Slider element:", slider); // Debugging: Periksa elemen slider
        console.log("Image elements:", images); // Debugging: Periksa elemen images

        let currentIndex = 0;
        const imageWidth = images[0].clientWidth; // Ambil lebar gambar pertama
        const totalImages = images.length;

        function slideTo(index) {
            slider.style.transform = `translateX(-${index * imageWidth}px)`;
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % totalImages;
            slideTo(currentIndex);
        }

        // Otomatis slide setiap 5 detik
        setInterval(nextSlide, 5000);
    });
</script>
@endpush