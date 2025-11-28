<header id="mainHeader"
    class="shadow-xl bg-gray-900 sticky top-0 z-50 text-white **transition-transform duration-300 ease-in-out**">
    <nav class="container mx-auto flex items-center justify-between p-4">

        <div class="logo-container">

            {{-- Tambahkan style="color: #00FFFF" di sini --}}
            <p class="tagline text-sm text-center tracking-widest uppercase neon-blue">
                Pickup And Delivery Service
            </p>

            <a href="#home" class="logo-text text-3xl font-extrabold tracking-widest uppercase neon-pink">
                SHOENIX LAB
            </a>

        </div>
        {{-- Menu Desktop (Sembunyikan di HP) --}}
        <ul id="nav-desktop" class="nav-links hidden md:flex space-x-6">
            <li><a href="#home" class="nav-item text-white hover:text-yellow-400 transition duration-300">Beranda</a>
            </li>
            <li><a href="#services" class="nav-item text-white hover:text-yellow-400 transition duration-300">Layanan &
                    Harga</a></li>
            <li><a href="#about" class="nav-item text-white hover:text-yellow-400 transition duration-300">Tentang
                    Kami</a></li>
            <li><a href="#contact" class="nav-item text-white hover:text-yellow-400 transition duration-300">Kontak</a>
            </li>
        </ul>
        {{-- Hamburger Icon (Kanan, hanya terlihat di HP) --}}
        <button id="hamburger" aria-label="Toggle menu" class="block md:hidden p-2 focus:outline-none">
            <div class="space-y-1.5">
                {{-- Strip 1: Biru --}}
                <span class="block w-6 h-0.5 bg-blue-500 transition-all duration-300 ease-out"></span>
                {{-- Strip 2: Hijau/Cyan --}}
                <span class="block w-6 h-0.5 bg-cyan-400 transition-all duration-300 ease-out"></span>
                {{-- Strip 3: Pink --}}
                <span class="block w-6 h-0.5 bg-pink-600 transition-all duration-300 ease-out"></span>
            </div>
        </button>

    </nav>
</header>
{{-- Menu Mobile (Akan di-toggle dengan JS, di bawah header utama) --}}
<div id="nav-mobile" class="md:hidden bg-gray-900 overflow-hidden max-h-0 transition-max-height duration-500 ease-in-out absolute w-full z-40 shadow-xl">
    <ul class="flex flex-col text-center py-4">
        {{-- !!! Teks diubah menjadi text-white atau text-gray-200 agar terlihat di bg-gray-900 !!! --}}
        <li><a href="#home" class="nav-item block py-2 text-white hover:text-cyan-400 transition duration-150">Beranda</a></li>
        <li><a href="#services" class="nav-item block py-2 text-white hover:text-cyan-400 transition duration-150">Layanan & Harga</a></li>
        <li><a href="#about" class="nav-item block py-2 text-white hover:text-cyan-400 transition duration-150">Tentang Kami</a></li>
        <li><a href="#contact" class="nav-item block py-2 text-white hover:text-cyan-400 transition duration-150">Kontak</a></li>
    </ul>
</div>
</header>