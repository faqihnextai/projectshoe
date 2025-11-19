document.addEventListener('DOMContentLoaded', function() {
    const hamburgerBtn = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('nav-mobile');
    
    // VARIABEL YANG HILANG ATAU SALAH DEKLARASI:
    // Kita harus mencari semua tag <a> di dalam menu mobile (#nav-mobile)
    const navLinks = document.querySelectorAll('#nav-mobile a'); // <-- BARIS KRUSIAL

    if (hamburgerBtn) { 
        hamburgerBtn.addEventListener('click', function() {
            console.log('Hamburger clicked! Toggling menu state...');
            
            mobileMenu.classList.toggle('menu-open'); 
            hamburgerBtn.classList.toggle('rotate-180'); 
        });
    } else {
         console.error('ERROR: Button with ID "hamburger" not found!');
    }
    
    // 2. Fungsi Menutup Menu setelah klik link di HP (ini yang error di baris 20)
    // Sekarang navLinks sudah didefinisikan, error harusnya hilang.
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            console.log('Nav link clicked! Closing menu...');
            // Tutup menu setelah link diklik
            mobileMenu.classList.remove('menu-open');
            hamburgerBtn.classList.remove('rotate-180');
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
        let slider = document.getElementById('slider');
        let index = 0;

        function nextSlide() {
            index = (index + 1) % 3; // 3 gambar
            slider.style.transform = `translateX(-${index * 100}%)`;
        }

        setInterval(nextSlide, 4000);
    });

    document.addEventListener('DOMContentLoaded', function () {
        const carousel = document.getElementById('review-carousel');
        const items = carousel.querySelectorAll('.review-item');
        const indicators = document.querySelectorAll('#review-indicators .indicator');
        const intervalTime = 5000; // Durasi 5 detik per slide (sesuai permintaan 1-5 detik)
        let currentSlide = 0;
        let slideInterval;

        // Fungsi untuk menampilkan slide tertentu
        function showSlide(index) {
            // Sembunyikan semua slide dan nonaktifkan indikator
            items.forEach(item => {
                item.style.opacity = '0'; // Efek menghilang (fade out)
                item.style.zIndex = '1';
            });
            indicators.forEach(indicator => {
                indicator.classList.remove('bg-pink-600');
                indicator.classList.add('bg-gray-600');
            });

            // Tampilkan slide yang baru
            const activeItem = items[index];
            activeItem.style.opacity = '1'; // Efek muncul (fade in)
            activeItem.style.zIndex = '10'; // Pastikan di atas slide lain

            // Aktifkan indikator yang sesuai
            const activeIndicator = indicators[index];
            activeIndicator.classList.add('bg-pink-600');
            activeIndicator.classList.remove('bg-gray-600');

            currentSlide = index;
        }

        // Fungsi untuk pindah ke slide berikutnya
        function nextSlide() {
            let newIndex = (currentSlide + 1) % items.length;
            showSlide(newIndex);
        }

        // Inisialisasi: Tampilkan slide pertama
        showSlide(currentSlide);

        // Mulai otomatis sliding
        slideInterval = setInterval(nextSlide, intervalTime);

        // Tambahkan fungsi klik pada indikator
        indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => {
                // Hentikan interval dan mulai lagi
                clearInterval(slideInterval);
                showSlide(index);
                slideInterval = setInterval(nextSlide, intervalTime);
            });
        });
    });

    // Ambil elemen header
const header = document.getElementById('mainHeader');
// Tentukan ambang batas scroll (misal: 100px)
const scrollThreshold = 100;

// Variabel untuk menyimpan posisi scroll sebelumnya
let prevScrollPos = window.scrollY;

// Fungsi untuk menangani scroll
function handleScroll() {
    const currentScrollPos = window.scrollY;

    if (!header) return;

    if (prevScrollPos > currentScrollPos) {
        // SCROLL UP: Tampilkan header (Hapus kelas 'header-hidden-up')
        header.classList.remove('header-hidden-up');
        // Tambahkan bayangan kembali
        header.classList.add('shadow-xl'); 
    } else if (currentScrollPos > scrollThreshold) {
        // SCROLL DOWN & Sudah melewati ambang batas: Sembunyikan header ke atas
        header.classList.add('header-hidden-up');
        // Hapus bayangan (sudah termasuk di header-hidden-up, tapi pastikan di sini juga)
        header.classList.remove('shadow-xl'); 
    }
    
    // Perbarui posisi scroll sebelumnya hanya setelah melewati ambang batas, 
    // agar header tidak langsung menghilang begitu scroll 1px.
    if (currentScrollPos > scrollThreshold || currentScrollPos === 0) {
        prevScrollPos = currentScrollPos;
    }
}

// Tambahkan event listener saat terjadi scroll
window.addEventListener('scroll', handleScroll);