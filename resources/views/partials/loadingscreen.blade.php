<div 
    id="loading-screen" 
    x-data="{ loaded: false }" 
    x-init="
        // Atur waktu tunggu minimal 3 detik
        setTimeout(() => {
            loaded = true;
        }, 3900); 
    "
    x-show="!loaded"
    x-transition:leave.opacity.duration.1000ms
    
    {{-- PENYESUAIAN 1: Menambah 'flex-col' untuk menumpuk video dan teks secara vertikal --}}
    class="fixed inset-0 z-50 flex flex-col items-center justify-center bg-black transition-opacity duration-1000 ease-in-out"
>
    {{-- 1. Video Element (Ditempatkan di Atas) --}}
    <video 
        id="loading-video"
        class="w-full max-h-[500px] sm:h-full object-cover" 
        autoplay 
        muted 
        loop
        playsinline
    >
        <source src="{{ asset('videos/loadingscreen.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    {{-- 2. Teks / Branding (Ditempatkan di Bawah) --}}
    <div class="z-50 mt-4"> 
        {{-- 'mt-4' untuk memberi sedikit jarak dari video --}}
        
        <h1 class="text-4xl text-cyan-400 font-orbitron tracking-widest animate-pulse **neon-text**">
            SHOENIX LAB
        </h1>
    </div>

    {{-- Overlay gelap untuk memastikan teks di atas video jika ukurannya berbeda --}}
    <div class="absolute inset-0 bg-black/40 z-40 pointer-events-none"></div>
</div>

{{-- Tambahkan Style untuk Efek Neon --}}
<style>
    .neon-text {
        /* Warna bayangan neon disesuaikan dengan warna teks cyan-400 */
        text-shadow: 
            0 0 7px #22d3ee, /* Shadow ringan */
            0 0 10px #22d3ee,
            0 0 21px #06b6d4, /* Shadow sedang */
            0 0 42px #0891b2, /* Shadow kuat */
            0 0 82px #0e7490, 
            0 0 92px #0e7490;
    }
</style>