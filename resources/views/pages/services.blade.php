<section id="contact" class="bg-gray-900 py-16 px-4">
    <div class="container mx-auto">

        {{-- Judul Utama (Sama) --}}
        <h2 class="text-4xl md:text-5xl font-extrabold text-center mb-4 text-white">
            <span class="text-blue-500">KENALI</span> <span class="text-cyan-400">LAYANAN KAMI</span>
        </h2>
        <p class="text-xl text-gray-400 text-center mb-12">
            Kami menawarkan berbagai jenis perawatan spesialistik untuk menjaga koleksi Anda tetap prima.
        </p>

        {{-- ✨ Carousel Layanan (Menggunakan Alpine.js) - 5 SLIDES ✨ --}}
        <div x-data="{ 
            slides: ['deep-cleaning', 'premium-treatment', 'unyellowing', 'reglue', 'bag-hat-wash'], 
            currentSlide: 0, 
            duration: 10000, 
            
            nextSlide() {
                this.currentSlide = (this.currentSlide + 1) % this.slides.length;
            },

            init() {
                setInterval(() => {
                    this.nextSlide();
                }, this.duration);
            }
        }" class="relative max-w-4xl lg:max-w-5xl mx-auto overflow-hidden rounded-xl shadow-2xl"> 

            <div class="relative h-auto"> 

                {{-- 1. Card Deep Cleaning (Index 0) --}}
                <div x-show="currentSlide === 0" 
                     x-transition:enter="transition ease-out duration-1000"
                     x-transition:enter-start="opacity-0 translate-x-full" 
                     x-transition:enter-end="opacity-100 translate-x-0"
                     x-transition:leave="transition ease-in duration-500 absolute w-full top-0"
                     x-transition:leave-start="opacity-100 translate-x-0"
                     x-transition:leave-end="opacity-0 -translate-x-full" 
                     {{-- PERUBAHAN GAYA: Background gelap dan Padding --}}
                     class="bg-gray-800 rounded-xl border-t-4 border-pink-600 p-6 md:p-8"> 
                    
                    {{-- Judul dan Teks diubah warnanya agar kontras --}}
                    <h3 class="text-3xl font-bold mb-4 text-center text-blue-400">Deep Cleaning</h3>
                    
                    {{-- AREA GAMBAR --}}
                    <div class="h-64 overflow-hidden mb-6">
                        <img src="images/service-home1.png" alt="Gambar Deep Cleaning" 
                             class="w-full h-full object-cover">
                    </div>

                    {{-- AREA DESKRIPSI --}}
                    <div>
                        <p class="text-base text-gray-300 text-center mb-6">
                            Perawatan standar yang efektif mengangkat kotoran membandel. Meliputi pembersihan **seluruh bagian sepatu** (atas, tengah, dan sol luar) untuk hasil yang bersih menyeluruh.
                        </p>
                        <div class="text-center mt-4">
                            <p class="text-lg font-medium text-pink-400">
                                Cocok untuk: <span class="text-blue-500">Sepatu Kasual</span> 
                            </p>
                        </div>
                    </div>
                </div>

                {{-- 2. Card Premium Treatment (Index 1) --}}
                <div x-show="currentSlide === 1" 
                     x-transition:enter="transition ease-out duration-1000"
                     x-transition:enter-start="opacity-0 translate-x-full" 
                     x-transition:enter-end="opacity-100 translate-x-0"
                     x-transition:leave="transition ease-in duration-500 absolute w-full top-0"
                     x-transition:leave-start="opacity-100 translate-x-0"
                     x-transition:leave-end="opacity-0 -translate-x-full"
                     {{-- PERUBAHAN GAYA: Background gelap dan Padding --}}
                     class="bg-gray-800 rounded-xl border-t-4 border-pink-600 p-6 md:p-8">
                    
                    {{-- Judul dan Teks diubah warnanya agar kontras --}}
                    <h3 class="text-3xl font-bold mb-4 text-center text-blue-400">Premium Treatment</h3>
                    
                    <div class="h-64 overflow-hidden mb-6">
                        <img src="images/service-home2.png" alt="Gambar Premium Treatment" 
                             class="w-full h-full object-cover">
                    </div>

                    <div>
                        <p class="text-base text-gray-300 text-center mb-6">
                            Perawatan ekstra hati-hati menggunakan cairan premium khusus untuk material **sensitif**. Meminimalisir risiko kerusakan tekstur atau perubahan warna pada bahan.
                        </p>
                        <div class="text-center mt-4">
                            <p class="text-lg font-medium text-pink-400">
                                Cocok untuk: **Kulit, Suede, Nubuck,** dan bahan *luxury*.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- 3. Card Unyellowing (Index 2) --}}
                <div x-show="currentSlide === 2" 
                     x-transition:enter="transition ease-out duration-1000"
                     x-transition:enter-start="opacity-0 translate-x-full" 
                     x-transition:enter-end="opacity-100 translate-x-0"
                     x-transition:leave="transition ease-in duration-500 absolute w-full top-0"
                     x-transition:leave-start="opacity-100 translate-x-0"
                     x-transition:leave-end="opacity-0 -translate-x-full"
                     {{-- PERUBAHAN GAYA: Background gelap dan Padding --}}
                     class="bg-gray-800 rounded-xl border-t-4 border-pink-600 p-6 md:p-8">

                    {{-- Judul dan Teks diubah warnanya agar kontras --}}
                    <h3 class="text-3xl font-bold mb-4 text-center text-blue-400">Unyellowing</h3>

                    <div class="h-64 overflow-hidden mb-6">
                        <img src="images/service-home3.png" alt="Gambar Unyellowing" 
                             class="w-full h-full object-cover">
                    </div>
                    
                    <div>
                        <p class="text-base text-gray-300 text-center mb-6">
                            Proses restorasi untuk mengembalikan warna putih asli pada bagian **sol karet** (midsole/outsole) yang sudah menguning (*oxidized*) akibat usia, udara, dan penyimpanan.
                        </p>
                        <div class="text-center mt-4">
                            <p class="text-lg font-medium text-pink-400">
                                Cocok untuk: Sol karet atau *rubber* berwarna putih.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- 4. Card Reglue (Index 3) --}}
                <div x-show="currentSlide === 3" 
                     x-transition:enter="transition ease-out duration-1000"
                     x-transition:enter-start="opacity-0 translate-x-full" 
                     x-transition:enter-end="opacity-100 translate-x-0"
                     x-transition:leave="transition ease-in duration-500 absolute w-full top-0"
                     x-transition:leave-start="opacity-100 translate-x-0"
                     x-transition:leave-end="opacity-0 -translate-x-full"
                     {{-- PERUBAHAN GAYA: Background gelap dan Padding --}}
                     class="bg-gray-800 rounded-xl border-t-4 border-pink-600 p-6 md:p-8">

                    {{-- Judul dan Teks diubah warnanya agar kontras --}}
                    <h3 class="text-3xl font-bold mb-4 text-center text-blue-400">Reglue (Perbaikan Lem)</h3>

                    <div class="h-64 overflow-hidden mb-6">
                        <img src="images/service-home4.png" alt="Gambar Reglue Sepatu" 
                             class="w-full h-full object-cover">
                    </div>
                    
                    <div>
                        <p class="text-base text-gray-300 text-center mb-6">
                            Perbaikan pada bagian **sol sepatu yang terlepas** (separasi). Kami menggunakan lem khusus yang kuat dan presisi untuk menyatukan kembali sol dengan *upper* sepatu.
                        </p>
                        <div class="text-center mt-4">
                            <p class="text-lg font-medium text-pink-400">
                                Cocok untuk: Perbaikan sol yang mulai menganga.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- 5. Card Bag & Hat Wash (Index 4) --}}
                <div x-show="currentSlide === 4" 
                     x-transition:enter="transition ease-out duration-1000"
                     x-transition:enter-start="opacity-0 translate-x-full" 
                     x-transition:enter-end="opacity-100 translate-x-0"
                     x-transition:leave="transition ease-in duration-500 absolute w-full top-0"
                     x-transition:leave-start="opacity-100 translate-x-0"
                     x-transition:leave-end="opacity-0 -translate-x-full"
                     {{-- PERUBAHAN GAYA: Background gelap dan Padding --}}
                     class="bg-gray-800 rounded-xl border-t-4 border-pink-600 p-6 md:p-8">

                    {{-- Judul dan Teks diubah warnanya agar kontras --}}
                    <h3 class="text-3xl font-bold mb-4 text-center text-blue-400">Pencucian Tas & Topi</h3>

                    <div class="h-64 overflow-hidden mb-6">
                        <img src="images/service-home5.png" alt="Gambar Cuci Tas dan Topi" 
                             class="w-full h-full object-cover">
                    </div>
                    
                    <div>
                        <p class="text-base text-gray-300 text-center mb-6">
                            Layanan kebersihan dan perawatan khusus untuk aksesoris favorit Anda, mulai dari tas kanvas, tas kulit, hingga topi. Melindungi bentuk dan warna.
                        </p>
                        <div class="text-center mt-4">
                            <p class="text-lg font-medium text-pink-400">
                                Cocok untuk: Semua jenis tas dan topi.
                            </p>
                        </div>
                    </div>
                </div>


            </div>

            {{-- Indikator Slide (Sama) --}}
            <div class="flex justify-center space-x-2 mt-4 absolute bottom-4 left-0 right-0">
                <template x-for="(slide, index) in slides" :key="index">
                    <button @click="currentSlide = index"
                            :class="{'bg-pink-600': currentSlide === index, 'bg-gray-400': currentReview !== index}"
                            class="w-3 h-3 rounded-full transition-colors duration-300"></button>
                </template>
            </div>
            
        </div>
        {{-- Akhir Carousel Layanan --}}


        <div class="mt-12 text-center">
            <a href="#"
                class="px-8 py-3 bg-yellow-500 hover:bg-yellow-600 text-black font-bold rounded-xl transition shadow-lg">
                Lihat Daftar Harga Lengkap!
            </a>
        </div>

    </div>
</section>