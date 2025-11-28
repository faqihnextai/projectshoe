<section id="contact" class="bg-gray-900 py-16 px-4 md:px-8 lg:px-16">
    <div class="container mx-auto max-w-7xl">
        
        {{-- Judul Utama (Disesuaikan agar teks lebih responsif di Mobile) --}}
        <h2 class="text-4xl sm:text-5xl md:text-6xl font-extrabold text-center mb-2" 
            style="color: #E94EFF;">
            LAYANAN KAMI
        </h2>
        <p class="text-base sm:text-lg text-gray-400 text-center mb-16 md:mb-20">
            Kami menawarkan berbagai jenis perawatan spesialistik untuk menjaga koleksi Anda tetap prima.
        </p>

        {{-- Kontainer Daftar Layanan (Gap Vertikal Ditingkatkan) --}}
        <div class="space-y-20 md:space-y-32 lg:space-y-40">

            {{-- 1. Deep Clean (Gambar Kanan, Teks Kiri) - Neon Pink --}}
            {{-- Gap horizontal disesuaikan untuk layar kecil dan besar --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12 items-center reveal-item opacity-0">
                
                {{-- Area Teks (Order 1) --}}
                <div class="order-2 md:order-1 text-center md:text-right">
                    {{-- Ukuran Font Disesuaikan --}}
                    <h3 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold mb-4 text-pink-500">
                        DEEP CLEAN
                    </h3>
                    {{-- Ukuran Font Disesuaikan --}}
                    <p class="text-base sm:text-lg lg:text-xl text-gray-300">
                        Layanan pembersihan menyeluruh untuk sepatu atau tas Anda, dari bagian luar hingga sela-sela yang sulit dijangkau. Membuat barang terlihat kembali segar seperti **BARU**
                    </p>
                </div>

                {{-- Area Gambar (Order 2) --}}
                {{-- Padding luar dikurangi di Mobile (p-2) untuk menghindari bleberan --}}
                <div class="order-1 md:order-2 relative p-2 md:p-4">
                    {{-- Kotak Pembungkus Gambar dengan Efek Sinar --}}
                    <div class="relative rounded-2xl p-0.5" 
                         style="background-image: linear-gradient(to bottom right, #EC4899, #F472B6); 
                                 box-shadow: 0 0 25px 5px #EC4899;">
                        <div class="w-full h-full overflow-hidden rounded-2xl relative z-10">
                            {{-- Ganti path gambar sesuai yang benar jika 'service-home1.webp' berbeda --}}
                            <img src="images/service-home1.webp" alt="Gambar Deep Clean" 
                                class="w-full h-full object-cover rounded-2xl">
                        </div>
                    </div>
                </div>
            </div>
            {{-- 2. Premium Treatment (Gambar Kiri, Teks Kanan) - Neon Pink --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12 items-center reveal-item opacity-0">
                
                {{-- Area Gambar (Order 1) --}}
                <div class="order-1 relative p-2 md:p-4">
                    {{-- Kotak Pembungkus Gambar dengan Efek Sinar --}}
                    <div class="relative rounded-2xl p-0.5" 
                         style="background-image: linear-gradient(to bottom right, #EC4899, #F472B6); 
                                 box-shadow: 0 0 25px 5px #EC4899;">
                        <div class="w-full h-full overflow-hidden rounded-2xl relative z-10">
                            <img src="images/service-home2.webp" alt="Gambar Premium Treatment" 
                                class="w-full h-full object-cover rounded-2xl">
                        </div>
                    </div>
                </div>

                {{-- Area Teks (Order 2) --}}
                <div class="order-2 text-center md:text-left">
                    <h3 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold mb-4 text-pink-500">
                        PREMIUM TREATMENT
                    </h3>
                    <p class="text-base sm:text-lg lg:text-xl text-gray-300">
                        Perawatan ekstra khusus menggunakan bahan dan teknik premium untuk material sensitif atau mewah (seperti suede, nubuck, atau kulit khusus). Fokus pada restorasi **TEKSTUR dan KILAU**.
                    </p>
                </div>
            </div>

            ---

            {{-- 3. Unyellowing (Gambar Kanan, Teks Kiri) - Neon Cyan --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12 items-center reveal-item opacity-0">
                
                {{-- Area Teks (Order 1) --}}
                <div class="order-2 md:order-1 text-center md:text-right">
                    <h3 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold mb-4 text-cyan-400">
                        UNYELLOWING
                    </h3>
                    <p class="text-base sm:text-lg lg:text-xl text-gray-300">
                        Proses spesialis untuk menghilangkan noda kekuningan pada sol, midsole, atau material putih lainnya yang diakibatkan oksidasi. Mengembalikan warna putih **CERAH DAN MENGKILAU**.
                    </p>
                </div>

                {{-- Area Gambar (Order 2) --}}
                <div class="order-1 md:order-2 relative p-2 md:p-4">
                    {{-- Kotak Pembungkus Gambar dengan Efek Sinar --}}
                    <div class="relative rounded-2xl p-0.5" 
                         style="background-image: linear-gradient(to bottom right, #22D3EE, #67E8F9); 
                                 box-shadow: 0 0 25px 5px #22D3EE;">
                        <div class="w-full h-full overflow-hidden rounded-2xl relative z-10">
                            <img src="images/service-home3.webp" alt="Gambar Unyellowing" 
                                class="w-full h-full object-cover rounded-2xl">
                        </div>
                    </div>
                </div>
            </div>

            ---
            
            {{-- 4. Reglue (Gambar Kiri, Teks Kanan) - Neon Cyan --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12 items-center reveal-item opacity-0">
                
                {{-- Area Gambar (Order 1) --}}
                <div class="order-1 relative p-2 md:p-4">
                    {{-- Kotak Pembungkus Gambar dengan Efek Sinar --}}
                    <div class="relative rounded-2xl p-0.5" 
                         style="background-image: linear-gradient(to bottom right, #22D3EE, #67E8F9); 
                                 box-shadow: 0 0 25px 5px #22D3EE;">
                        <div class="w-full h-full overflow-hidden rounded-2xl relative z-10">
                            {{-- Anda mungkin perlu memastikan gambar Reglue berbeda --}}
                            <img src="images/service-home3.webp" alt="Gambar Reglue" 
                                class="w-full h-full object-cover rounded-2xl"> 
                        </div>
                    </div>
                </div>

                {{-- Area Teks (Order 2) --}}
                <div class="order-2 text-center md:text-left">
                    <h3 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold mb-4 text-cyan-400">
                        REGLUE
                    </h3>
                    <p class="text-base sm:text-lg lg:text-xl text-gray-300">
                        Perbaikan profesional untuk merekatkan kembali bagian sol sepatu, pinggiran, atau panel yang mulai terlepas menggunakan lem khusus dan teknik penekanan yang tepat agar daya tahannya kembali **OPTIMAL**.
                    </p>
                </div>
            </div>

            ---

            {{-- 5. Bag & Cap (Gambar Kiri, Teks Kanan) - Neon Biru/Indigo --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12 items-center reveal-item opacity-0">
                
                {{-- Area Gambar (Order 1) --}}
                <div class="order-1 relative p-2 md:p-4">
                    {{-- Kotak Pembungkus Gambar dengan Efek Sinar --}}
                    <div class="relative rounded-2xl p-0.5" 
                         style="background-image: linear-gradient(to bottom right, #6366F1, #818CF8); 
                                 box-shadow: 0 0 25px 5px #6366F1;">
                        <div class="w-full h-full overflow-hidden rounded-2xl relative z-10">
                            <img src="images/service-home5.webp" alt="Gambar Bag & Cap" 
                                class="w-full h-full object-cover rounded-2xl">
                        </div>
                    </div>
                </div>

                {{-- Area Teks (Order 2) --}}
                <div class="order-2 text-center md:text-left">
                    <h3 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold mb-4 text-indigo-500">
                        BAG & CAP
                    </h3>
                    <p class="text-base sm:text-lg lg:text-xl text-gray-300">
                        Perawatan khusus yang disesuaikan untuk material tas dan topi. Meliputi pembersihan, conditioning (pelembaban), dan perlindungan agar lebih **AWET dan TERAWAT**.
                    </p>
                </div>
            </div>

        </div>
        {{-- Akhir Daftar Layanan --}}


        <div class="mt-20 text-center">
            <a href="#"
                class="px-8 py-3 bg-yellow-500 hover:bg-yellow-600 text-black font-bold rounded-xl transition shadow-lg">
                Lihat Daftar Harga Lengkap!
            </a>
        </div>

    </div>
</section>