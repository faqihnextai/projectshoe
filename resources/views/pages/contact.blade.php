{{-- pages/contact.blade.php --}}

<section id="contact" class="bg-gray-900 py-16 px-4">
    <div class="container mx-auto">

        {{-- Judul Utama --}}
        <h2 class="text-4xl md:text-5xl font-extrabold text-center mb-4 text-white">
            {{-- Mengganti neon-blue dengan warna solid --}}
            <span class="text-blue-400">HUBUNGI</span>
            {{-- Mengganti neon-pink dengan warna solid --}}
            <span class="text-pink-400">KAMI</span>
        </h2>

        <p class="text-xl text-gray-400 text-center mb-12">
            Anda bisa mengunjungi toko kami atau menghubungi melalui informasi di bawah.
        </p>

        {{-- Grid 2 Kolom untuk Kontak --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

            {{-- Kolom Kiri: Detail Kontak --}}
            <div class="space-y-6">

                {{-- Card Alamat --}}
                <div
                    class="bg-gray-800 p-6 rounded-xl border border-pink-700 hover:shadow-[0_0_15px_rgba(255,0,255,0.5)] transition duration-300">
                    <div class="flex items-start">
                        <i class="fas fa-map-marker-alt text-3xl mr-4 mt-1 neon-pink"></i>
                        <div>
                            <h3 class="text-2xl font-bold neon-pink mb-1">Kunjungi Toko Kami</h3>
                            <p class="text-gray-300">Jalan Pansus.1-3 , RT.002/RW.016, Gebang Raya , Kec.Periuk, Kota
                                Tangerang, Benten, Kota Tangerang, Banten 15132</p>
                            <a href="#" class="text-sm text-yellow-500 hover:underline mt-1 block">Lihat di Peta</a>
                        </div>
                    </div>
                </div>

                {{-- Card Telepon --}}
                <div
                    class="bg-gray-800 p-6 rounded-xl border border-green-600 hover:shadow-[0_0_15px_rgba(0,255,0,0.5)] transition duration-300">
                    <div class="flex items-start">
                        <i class="fab fa-whatsapp-square text-3xl mr-4 mt-1" style="color: #25D366;"></i>
                        <div>
                            <h3 class="text-2xl font-bold" style="color: #25D366;">WhatsApp Kami</h3>
                            <p class="text-gray-300">0821-3333-9032</p>
                            <a href="https://wa.me/6282133339032"
                                class="text-sm text-yellow-500 hover:underline mt-1 block" target="_blank">
                                Kirim Pesan Langsung
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Kolom Kanan: Map Placeholder (Siap untuk Google Maps Embed) --}}
                <div class="bg-gray-800 rounded-xl overflow-hidden shadow-xl border border-gray-700">
                    <div class="w-full h-64 flex items-center justify-center">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d540.8782656564174!2d106.59374767150096!3d-6.179388371762895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ff66cc64fe19%3A0x374f763e363257a4!2sCUCI%20SEPATU%20TERDEKAT%20KHUSUS%20PICKUP%2FDELIVERY%20(BARBERSHOES.ID)!5e0!3m2!1sid!2sid!4v1763386347186!5m2!1sid!2sid"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

            </div>

        </div>
</section>