<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<script src="https://cdn.tailwindcss.com"></script>

<style>
    /* CSS untuk efek mengetik (Typing Cursor) */
    .typing-cursor {
        animation: blink 0.7s infinite;
    }

    @keyframes blink {

        0%,
        100% {
            opacity: 1;
        }

        50% {
            opacity: 0;
        }
    }
</style>

<section id="workflow-demo" class="bg-gray-900 py-16 px-4">
    <div class="container mx-auto">

        {{-- Judul Utama --}}
        <h2 class="text-4xl md:text-5xl font-extrabold text-center mb-12 text-white">
            <span class="text-pink-400">ALUR</span> <span class="text-blue-400">PENGERJAAN DEMO</span>
        </h2>

        <p class="text-xl text-gray-400 text-center mb-10 max-w-2xl mx-auto">
            Lihat betapa mudahnya proses layanan kami, dari pemesanan hingga sepatu Anda **beres** kembali.
        </p>

        {{-- ⭐️ START: CAROUSEL ALUR KERJA DEMO ⭐️ --}}
        <div x-data="{ 
            steps: [1, 2, 3, 4], 
            currentStep: 1, 
            typingName: '',
            typingService: 'Deep Cleaning (Sepatu Kasual)',
            targetName: 'Agus Burhanuddin',
            nameDone: false,
            demoRunning: false,
            
            isCurrent(step) {
                return this.currentStep === step;
            },

            // Fungsi untuk menjalankan animasi mengetik
            typeText(targetText, speed = 80) {
                return new Promise(resolve => {
                    let i = 0;
                    this.typingName = '';
                    let interval = setInterval(() => {
                        this.typingName += targetText[i];
                        i++;
                        if (i >= targetText.length) {
                            clearInterval(interval);
                            resolve();
                        }
                    }, speed);
                });
            },

            // Fungsi untuk menjalankan keseluruhan demo
            async runDemo() {
                this.demoRunning = true;
                this.currentStep = 1;

                // --- STEP 1: ANIMASI INPUT ---
                await new Promise(r => setTimeout(r, 1000)); // Tunggu 1s
                await this.typeText(this.targetName); // Ketik nama
                this.nameDone = true;

                await new Promise(r => setTimeout(r, 1500)); // Tunggu 1.5s
                // Pilih dropdown (simulasikan)
                document.getElementById('layanan-demo').value = 'deep-cleaning';
                
                await new Promise(r => setTimeout(r, 2000)); // Tunggu 2s

                // --- STEP 2: PENJEMPUTAN ---
                this.currentStep = 2;
                await new Promise(r => setTimeout(r, 4000)); // Tampilkan 4s

                // --- STEP 3: PENGERJAAN ---
                this.currentStep = 3;
                await new Promise(r => setTimeout(r, 4000)); // Tampilkan 4s

                // --- STEP 4: PENGANTARAN (Menampilkan Hasil Input) ---
                this.currentStep = 4;
                await new Promise(r => setTimeout(r, 6000)); // Tampilkan 6s

                // Reset dan ulangi
                this.currentStep = 1;
                this.typingName = '';
                this.nameDone = false;
                this.demoRunning = false;
                this.runDemo(); // Ulangi terus menerus
            },

            init() {
                this.runDemo();
            }
        }" class="max-w-4xl mx-auto relative">

            {{-- Indikator Langkah (DIATAS CARD, TIDAK BISA DIKLIK) --}}
            <div class="flex justify-between mb-8 text-center text-gray-400 font-semibold">
                <template x-for="step in steps" :key="step">
                    <div :class="{ 'text-pink-400 scale-105 font-bold': isCurrent(step) }"
                        class="flex-1 transition-all duration-300 pointer-events-none">
                        <span
                            x-text="['1. Kontak', '2. Penjemputan', '3. Pengerjaan', '4. Pengantaran'][step - 1]"></span>
                    </div>
                </template>
            </div>

            {{-- Kontainer Utama Card --}}
            <div
                class="p-6 md:p-10 border-4 border-cyan-400 rounded-2xl shadow-xl shadow-cyan-400/50 bg-gray-800 min-h-[550px] relative overflow-hidden">

                {{-- 1. Kontak Kami (DEMO ANIMASI INPUT) --}}
                <div x-show="isCurrent(1)" x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0 translate-x-1/4"
                    x-transition:enter-end="opacity-100 translate-x-0"
                    x-transition:leave="transition ease-in duration-300 absolute w-full top-0 left-0 right-0 p-10"
                    x-transition:leave-start="opacity-100 translate-x-0"
                    x-transition:leave-end="opacity-0 -translate-x-1/4" class="text-white">

                    <h3 class="text-3xl font-bold mb-6 text-pink-400">Langkah 1: Kontak Kami (Demo)</h3>
                    <p class="text-gray-300 mb-8">Lihat bagaimana data diisi otomatis untuk pemesanan cepat!</p>

                    <form class="space-y-4 max-w-md mx-auto p-6 bg-gray-700 rounded-xl shadow-lg pointer-events-none">
                        <div>
                            <label for="nama-demo" class="block text-sm font-medium text-white mb-1">Nama
                                Lengkap</label>
                            <div class="relative">
                                {{-- Tampilkan hasil typing --}}
                                <input type="text" id="nama-demo" :value="typingName"
                                    class="w-full px-4 py-2 bg-gray-600 border border-gray-500 rounded-lg focus:ring-blue-500 focus:border-blue-500 text-white"
                                    readonly>
                                {{-- Cursor mengetik --}}
                                <span x-show="!nameDone"
                                    class="absolute right-3 top-1/2 -translate-y-1/2 h-5 w-0.5 bg-white typing-cursor"></span>
                            </div>
                        </div>
                        <div>
                            <label for="layanan-demo" class="block text-sm font-medium text-white mb-1">Jenis
                                Layanan</label>
                            <select id="layanan-demo"
                                class="w-full px-4 py-2 bg-gray-600 border border-gray-500 rounded-lg focus:ring-blue-500 focus:border-blue-500 text-white">
                                <option value="" disabled selected>Pilih layanan yang dibutuhkan</option>
                                <option value="deep-cleaning">Deep Cleaning (Sepatu Kasual)</option>
                                <option value="premium-treatment">Premium Treatment (Kulit/Suede/Nubuck)</option>
                                <option value="unyellowing">Unyellowing (Sol Kuning)</option>
                                <option value="reglue">Reglue (Perbaikan Lem)</option>
                                <option value="bag-hat-wash">Pencucian Tas & Topi</option>
                            </select>
                        </div>
                        <div class="text-center pt-4">
                            <span class="text-gray-500 italic">Demo otomatis berjalan...</span>
                        </div>
                    </form>
                </div>

                {{-- 2. Penjemputan (GIF) --}}
                <div x-show="isCurrent(2)" x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0 translate-x-1/4"
                    x-transition:enter-end="opacity-100 translate-x-0"
                    x-transition:leave="transition ease-in duration-300 absolute w-full top-0 left-0 right-0 p-10"
                    x-transition:leave-start="opacity-100 translate-x-0"
                    x-transition:leave-end="opacity-0 -translate-x-1/4" class="text-white text-center">

                    <h3 class="text-3xl font-bold mb-6 text-pink-400">Langkah 2: Proses Penjemputan</h3>
                    <p class="text-gray-300 mb-8 max-w-xl mx-auto">Tim kami segera menuju lokasi Anda! Cukup siapkan
                        barang yang akan dirawat di rumah.</p>

                    <img src="berangkat.gif"
                        alt="GIF Penjemputan Barang"
                        class="w-full max-w-sm mx-auto rounded-lg shadow-2xl h-64 object-cover object-bottom"
                        onerror="this.onerror=null; this.src='https://placehold.co/400x256/293742/cccccc?text=GIF+Penjemputan';">
                </div>

                {{-- 3. Pengerjaan (GIF) --}}
                <div x-show="isCurrent(3)" x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0 translate-x-1/4"
                    x-transition:enter-end="opacity-100 translate-x-0"
                    x-transition:leave="transition ease-in duration-300 absolute w-full top-0 left-0 right-0 p-10"
                    x-transition:leave-start="opacity-100 translate-x-0"
                    x-transition:leave-end="opacity-0 -translate-x-1/4" class="text-white text-center">

                    <h3 class="text-3xl font-bold mb-6 text-pink-400">Langkah 3: Proses Pengerjaan</h3>
                    <p class="text-gray-300 mb-8 max-w-xl mx-auto">Sepatu Anda sedang dirawat oleh ahli kami. Kami
                        menjamin setiap detail dibersihkan, diperbaiki, dan dipoles secara profesional.</p>

                    <img src="https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExazdjZXliYXN6bXM1azZlcnR4d2Viajh4NzY1dzdjdHF4ZzdjZGpteSZlcD12MV9naWZzX3NlYXJjaCZjdD1n/o4s3uVpyEh1qyRXKR8/giphy.gif"
                        alt="GIF Proses Pencucian"
                        class="w-full max-w-sm mx-auto rounded-lg shadow-2xl h-64 object-cover object-bottom"
                        onerror="this.onerror=null; this.src='https://placehold.co/400x256/293742/cccccc?text=GIF+Pengerjaan';">
                </div>

                {{-- 4. Diantar Sampai Rumah (GIF + Hasil) --}}
                <div x-show="isCurrent(4)" x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0 translate-x-1/4"
                    x-transition:enter-end="opacity-100 translate-x-0"
                    x-transition:leave="transition ease-in duration-300 absolute w-full top-0 left-0 right-0 p-10"
                    x-transition:leave-start="opacity-100 translate-x-0"
                    x-transition:leave-end="opacity-0 -translate-x-1/4" class="text-white text-center">

                    <h3 class="text-3xl font-bold mb-6 text-pink-400">Langkah 4: Diantar Sampai Rumah</h3>
                    <p class="text-gray-300 mb-8 max-w-xl mx-auto">Sepatu/barang Anda sudah **beres**! Siap menemani
                        aktivitas Anda dengan kondisi seperti baru.</p>

                    <div class="flex flex-col md:flex-row items-center justify-center gap-6">
                        <img src="balik.gif" alt="GIF Sepatu Bersih"
                            class="w-full max-w-xs mx-auto rounded-lg shadow-2xl h-48 object-cover"
                            onerror="this.onerror=null; this.src='https://placehold.co/300x192/4F46E5/ffffff?text=Barang+Selesai';">
                        <div class="md:text-left text-center bg-gray-700 p-4 rounded-lg shadow-inner">
                            <h4 class="text-xl font-bold text-cyan-400 mb-2">Barang Telah Diantar Atas Nama:</h4>
                            <p class="text-lg text-white"><span class="font-semibold">Nama:</span> <span
                                    x-text="targetName"></span></p>
                            <p class="text-lg text-white"><span class="font-semibold">Layanan:</span> <span
                                    x-text="typingService"></span></p>
                            <p class="text-sm text-gray-400 mt-2">Terima kasih telah menggunakan SHOENIX. #DudukManis,
                                Sepatu Beres.</p>
                        </div>
                    </div>

                    <!-- {{-- Indikator Dots (Bawah Card) --}}
            <div class="flex justify-center space-x-3 mt-6">
                <template x-for="step in steps" :key="step">
                    <span :class="{'bg-pink-600': isCurrent(step), 'bg-gray-600': !isCurrent(step)}"
                          class="block w-3 h-3 rounded-full transition-colors duration-300 pointer-events-none"></span>
                </template>
            </div>

        </div> -->
                    {{-- ⭐️ END: CAROUSEL ALUR KERJA DEMO ⭐️ --}}

                </div>
</section>