// File JavaScript untuk fungsionalitas website Calf
// (misalnya: menu mobile, slideshow, dll.)

console.log("Website Calf Coffee berhasil dimuat!");

/* ---
   Logika untuk Filter Tab di Halaman Menu
   --- */

//kode ini hanya berjalan jika elemen filternya ada (di halaman menu)
if (document.querySelector('.menu-filters')) {
    // filterTabs: "Kumpulkan semua elemen yang punya class .filter-tab (yaitu 2 tombol: 'COFFEE' dan 'FOOD')."
    const filterTabs = document.querySelectorAll('.filter-tab');
    const menuSections = document.querySelectorAll('.menu-section');
    // menuSections: "Kumpulkan semua elemen yang punya class .menu-section (yaitu 2 section: #coffee-section dan #food-section)."

    filterTabs.forEach(tab => {
        tab.addEventListener('click', function (e) {
            e.preventDefault(); // Mencegah link berpindah halaman

            // 1. Ambil target section dari atribut 'data-target'
            const targetId = this.getAttribute('data-target');
            const targetSection = document.getElementById(targetId);
            

            // 2. Hapus kelas 'active' dari semua tab dan section
            filterTabs.forEach(t => t.classList.remove('active'));
            menuSections.forEach(s => s.classList.remove('active'));

            // 3. Tambahkan kelas 'active' ke tab yang diklik dan section targetnya
            this.classList.add('active');
            targetSection.classList.add('active');
        });
    });
}