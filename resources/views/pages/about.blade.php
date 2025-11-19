<section id="about" class="bg-gray-900 py-16 px-4">
    <div class="container mx-auto">
        
        {{-- Judul Utama --}}
        <h2 class="text-4xl md:text-5xl font-extrabold text-center mb-12 text-white">
            <span class="text-blue-400">APA KATA</span> <span class="text-pink-400">MEREKA</span>
        </h2>
        
        {{-- ⭐️ START: SLIDER ULASAN MENGGUNAKAN ALPINE.JS ⭐️ --}}
        <div x-data="{ 
            reviews: [1, 2, 3], // Total 3 ulasan
            currentReview: 1,  // Mulai dari ulasan 1
            duration: 7000,    // 7 detik per ulasan
            
            nextReview() {
                this.currentReview = (this.currentReview % this.reviews.length) + 1;
            },
            
            init() {
                // Autoplay
                setInterval(() => {
                    this.nextReview();
                }, this.duration);
            }
        }" class="max-w-4xl mx-auto relative">

            {{-- Kontainer Utama Slider --}}
            <div class="p-4 md:p-8 border-4 border-pink-600 rounded-xl shadow-lg shadow-pink-600/50 bg-gray-800 min-h-[500px]">
                
                {{-- 1. Ulasan Sofian Yusuf (Index 1) --}}
                <div x-show="currentReview === 1" 
                     x-transition:enter="transition ease-out duration-500"
                     x-transition:enter-start="opacity-0" 
                     x-transition:enter-end="opacity-100"
                     x-transition:leave="transition ease-in duration-500 absolute w-full top-0 left-0 right-0"
                     x-transition:leave-start="opacity-100"
                     x-transition:leave-end="opacity-0" 
                     class="review-item p-4">

                    <div class="flex flex-col md:flex-row gap-8 h-full">
                        
                        {{-- Bagian Foto Sofian (3 Gambar) --}}
                        <div class="md:w-1/2 w-full flex-shrink-0">
                            <h4 class="text-xl font-semibold mb-3 text-white flex items-center">
                                <span class="text-yellow-400 mr-2 text-2xl">★★★★★</span> Sofian Yusuf
                            </h4>
                            <div class="grid grid-cols-2 grid-rows-2 gap-2 h-96">
                                <img src="/images/yusuf1.jpg" alt="Foto Ulasan 1" class="w-full h-full object-cover rounded-lg row-span-2">
                                <img src="/images/yusuf2.jpeg" alt="Foto Ulasan 2" class="w-full h-full object-cover rounded-lg">
                                <img src="/images/yusuf3.jpeg" alt="Foto Ulasan 3" class="w-full h-full object-cover rounded-lg">
                            </div>
                        </div>

                        {{-- Bagian Teks Ulasan Sofian --}}
                        <div class="md:w-1/2 w-full overflow-y-auto max-h-[250px] md:max-h-full">
                            <p class="text-gray-300 text-base italic leading-relaxed">
                                "Untuk kalian yg mau cuci sepatu, reparasi sepatu dan sebagainya, saya rekomendasikan toko ini. Dijamin bersih, pengerjaan rapih, enak untuk berkonsultasi jg, dan yg pasti harganya murah meriaaaahh!!! Terlihat dari foto2 tsb, dari mulai yg msh kotor sampai bersih kinclong. Yg terpenting *free pick up dan delivery*. Tinggal duduk manis dan sharelock aja. Terimakasih seller, bakal jd toko indalan saya inimah 🙏😊"
                            </p>
                            <p class="text-pink-400 font-medium mt-4">— Sofian Yusuf</p>
                        </div>
                    </div>
                </div>

                {{-- 2. Ulasan Elisabet Sanly Novani (Index 2) --}}
                <div x-show="currentReview === 2" 
                     x-transition:enter="transition ease-out duration-500"
                     x-transition:enter-start="opacity-0" 
                     x-transition:enter-end="opacity-100"
                     x-transition:leave="transition ease-in duration-500 absolute w-full top-0 left-0 right-0"
                     x-transition:leave-start="opacity-100"
                     x-transition:leave-end="opacity-0" 
                     class="review-item p-4">
                    
                    <div class="flex flex-col md:flex-row gap-8 h-full">
                        {{-- Bagian Foto Elisabet (2 Gambar) - Disertakan dalam grid 2 kolom dengan tinggi tetap --}}
                        <div class="md:w-1/2 w-full flex-shrink-0">
                             <h4 class="text-xl font-semibold mb-3 text-white flex items-center">
                                 <span class="text-yellow-400 mr-2 text-2xl">★★★★★</span> Elisabet Sanly Novani
                             </h4>
                            <div class="grid grid-cols-2 gap-2 h-48 md:h-64"> 
                                {{-- Menggunakan grid 2 kolom, tinggi disesuaikan --}}
                                <img src="/images/elis1.jpeg" alt="Foto Ulasan 1" class="w-full h-full object-cover rounded-lg">
                                <img src="/images/elis2.jpeg" alt="Foto Ulasan 2" class="w-full h-full object-cover rounded-lg">
                            </div>
                        </div>

                        {{-- Bagian Teks Ulasan Elisabet --}}
                        <div class="md:w-1/2 w-full overflow-y-auto max-h-[250px] md:max-h-full">
                            <p class="text-gray-300 text-base italic leading-relaxed">
                                "BEST BGT hasilnya super bersih dan harganya juga ok bgt! pokoknya bintang 5 deh. nih before afternya, ky baruuuu😭❤️"
                            </p>
                            <p class="text-pink-400 font-medium mt-4">— Elisabet Sanly Novani</p>
                        </div>
                    </div>
                </div>

                {{-- 3. Ulasan Faqih Baidowi (Index 3) --}}
                <div x-show="currentReview === 3" 
                     x-transition:enter="transition ease-out duration-500"
                     x-transition:enter-start="opacity-0" 
                     x-transition:enter-end="opacity-100"
                     x-transition:leave="transition ease-in duration-500 absolute w-full top-0 left-0 right-0"
                     x-transition:leave-start="opacity-100"
                     x-transition:leave-end="opacity-0" 
                     class="review-item p-4">
                    
                    <div class="flex flex-col md:flex-row gap-8 h-full">
                        {{-- Bagian Foto Faqih (1 Gambar) - Dipusatkan dengan tinggi tetap --}}
                        <div class="md:w-1/2 w-full flex-shrink-0">
                            <h4 class="text-xl font-semibold mb-3 text-white flex items-center">
                                <span class="text-yellow-400 mr-2 text-2xl">★★★★★</span> Faqih Baidowi
                            </h4>
                            <div class="flex justify-center items-center h-48 md:h-64"> 
                                {{-- Menggunakan flexbox untuk memusatkan satu gambar, tinggi disesuaikan --}}
                                <img src="/images/faqih1.jpeg" alt="Foto Ulasan 1" class="max-w-full max-h-full object-contain rounded-lg">
                            </div>
                        </div>

                        {{-- Bagian Teks Ulasan Faqih --}}
                        <div class="md:w-1/2 w-full overflow-y-auto max-h-[250px] md:max-h-full">
                            <p class="text-gray-300 text-base italic leading-relaxed">
                                "Hasil cucian bagus... kayak baru. Pokoknya the Best hasilnya."
                            </p>
                            <p class="text-pink-400 font-medium mt-4">— Faqih Baidowi</p>
                        </div>
                    </div>
                </div>

            </div>
            
            {{-- Indikator Slide --}}
            <div id="review-indicators" class="flex justify-center space-x-3 mt-6">
                <template x-for="review in reviews" :key="review">
                    <span @click="currentReview = review"
                          :class="{'bg-pink-600': currentReview === review, 'bg-gray-600': currentReview !== review}"
                          class="indicator block w-3 h-3 rounded-full cursor-pointer transition-colors duration-300"></span>
                </template>
            </div>

        </div>
        {{-- ⭐️ END: SLIDER ULASAN MENGGUNAKAN ALPINE.JS ⭐️ --}}

    </div>
</section>