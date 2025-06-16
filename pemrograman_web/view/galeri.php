<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Galeri Kopi Vintage - Dokumentasi suasana dan momen spesial di kedai kopi retro kami">
  <title>Galeri - KOPI VINTAGE</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
    .masonry-grid {
      display: grid;
      grid-gap: 1rem;
      grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
      grid-auto-rows: 200px;
    }
    .masonry-item {
      border-radius: 0.5rem;
      overflow: hidden;
      position: relative;
    }
    .masonry-item img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.3s ease;
    }
    .masonry-item:hover img {
      transform: scale(1.05);
    }
    .masonry-item .overlay {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);
      color: white;
      padding: 1rem;
      opacity: 0;
      transition: opacity 0.3s ease;
    }
    .masonry-item:hover .overlay {
      opacity: 1;
    }
    /* Ukuran berbeda untuk item */
    .masonry-item:nth-child(3n) {
      grid-row: span 2;
    }
    .masonry-item:nth-child(5n) {
      grid-column: span 2;
    }
    .masonry-item:nth-child(7n) {
      grid-row: span 2;
      grid-column: span 2;
    }
  </style>
</head>
<body class="bg-yellow-50 text-gray-800">

  <!-- Navigasi -->
 <?php include 'include/navbar.php'; ?>

  <!-- Header Galeri -->
  <section class="relative bg-cover bg-center h-64" style="background-image: url('images/gallery-banner.jpg');">
    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
      <div class="text-center text-white px-4">
        <h2 class="text-4xl md:text-5xl font-extrabold mb-4 drop-shadow-lg">Galeri Kami</h2>
        <p class="text-lg md:text-xl italic drop-shadow-md">"Momen-momen spesial di KOPI VINTAGE"</p>
      </div>
    </div>
  </section>

  <!-- Filter Galeri -->
  <section class="py-8 bg-white">
    <div class="container mx-auto px-6">
      <div class="flex flex-wrap justify-center gap-3">
        <button class="px-4 py-2 bg-yellow-600 text-white rounded-full font-medium">Semua</button>
        <button class="px-4 py-2 bg-yellow-100 hover:bg-yellow-200 rounded-full">Suasana</button>
        <button class="px-4 py-2 bg-yellow-100 hover:bg-yellow-200 rounded-full">Menu</button>
        <button class="px-4 py-2 bg-yellow-100 hover:bg-yellow-200 rounded-full">Acara</button>
        <button class="px-4 py-2 bg-yellow-100 hover:bg-yellow-200 rounded-full">Barista</button>
      </div>
    </div>
  </section>

  <!-- Galeri Foto -->
  <section class="py-12 bg-yellow-50">
    <div class="container mx-auto px-6">
      <div class="masonry-grid">
        <!-- Item 1 -->
        <div class="masonry-item">
          <img src="images/gallery-1.jpg" alt="Suasana kedai di pagi hari">
          <div class="overlay">
            <h3 class="font-bold">Pagi yang Cerah</h3>
            <p class="text-sm">Suasana kedai di pagi hari</p>
          </div>
        </div>
        
        <!-- Item 2 -->
        <div class="masonry-item">
          <img src="images/gallery-2.jpg" alt="Latte art spesial">
          <div class="overlay">
            <h3 class="font-bold">Latte Art</h3>
            <p class="text-sm">Kreasi barista kami</p>
          </div>
        </div>
        
        <!-- Item 3 -->
        <div class="masonry-item">
          <img src="images/gallery-3.jpg" alt="Interior vintage">
          <div class="overlay">
            <h3 class="font-bold">Nuansa Retro</h3>
            <p class="text-sm">Interior klasik kami</p>
          </div>
        </div>
        
        <!-- Item 4 -->
        <div class="masonry-item">
          <img src="images/gallery-4.jpg" alt="Biji kopi pilihan">
          <div class="overlay">
            <h3 class="font-bold">Biji Kopi Pilihan</h3>
            <p class="text-sm">Proses seleksi biji kopi</p>
          </div>
        </div>
        
        <!-- Item 5 -->
        <div class="masonry-item">
          <img src="images/gallery-5.jpg" alt="Acara kopi bulanan">
          <div class="overlay">
            <h3 class="font-bold">Coffee Gathering</h3>
            <p class="text-sm">Acara bulanan pecinta kopi</p>
          </div>
        </div>
        
        <!-- Item 6 -->
        <div class="masonry-item">
          <img src="images/gallery-6.jpg" alt="Dessert spesial">
          <div class="overlay">
            <h3 class="font-bold">Dessert Spesial</h3>
            <p class="text-sm">Pelengkap kopi andalan</p>
          </div>
        </div>
        
        <!-- Item 7 -->
        <div class="masonry-item">
          <img src="images/gallery-7.jpg" alt="Pelatihan barista">
          <div class="overlay">
            <h3 class="font-bold">Barista Training</h3>
            <p class="text-sm">Proses pelatihan tim kami</p>
          </div>
        </div>
        
        <!-- Item 8 -->
        <div class="masonry-item">
          <img src="images/gallery-8.jpg" alt="Kopi senja spesial">
          <div class="overlay">
            <h3 class="font-bold">Kopi Senja</h3>
            <p class="text-sm">Menu andalan kami</p>
          </div>
        </div>
        
        <!-- Item 9 -->
        <div class="masonry-item">
          <img src="images/gallery-9.jpg" alt="Area outdoor">
          <div class="overlay">
            <h3 class="font-bold">Area Outdoor</h3>
            <p class="text-sm">Tempat nongkrong favorit</p>
          </div>
        </div>
        
        <!-- Item 10 -->
        <div class="masonry-item">
          <img src="images/gallery-10.jpg" alt="Alat kopi vintage">
          <div class="overlay">
            <h3 class="font-bold">Alat Kopi Vintage</h3>
            <p class="text-sm">Koleksi alat kopi klasik</p>
          </div>
        </div>
        
        <!-- Item 11 -->
        <div class="masonry-item">
          <img src="images/gallery-11.jpg" alt="Proses roasting">
          <div class="overlay">
            <h3 class="font-bold">Proses Roasting</h3>
            <p class="text-sm">Penyangraian biji kopi</p>
          </div>
        </div>
        
        <!-- Item 12 -->
        <div class="masonry-item">
          <img src="images/gallery-12.jpg" alt="Malam di KOPI VINTAGE">
          <div class="overlay">
            <h3 class="font-bold">Suasana Malam</h3>
            <p class="text-sm">KOPI VINTAGE saat malam</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer dengan Kontak -->
  <footer class="bg-[#3e2c1c] text-white py-12">
    <div class="container mx-auto px-6">
      <div class="grid md:grid-cols-2 gap-12">
        <div>
          <h4 class="text-2xl font-bold mb-6">Hubungi Kami</h4>
          <div class="space-y-4">
            <div>
              <h5 class="font-semibold text-yellow-300">Alamat</h5>
              <p>Jalan Kenangan No. 70, Kota Nostalgia, Indonesia</p>
            </div>
            <div>
              <h5 class="font-semibold text-yellow-300">Jam Operasional</h5>
              <p>Setiap Hari 08.00 - 22.00 WIB</p>
            </div>
            <div>
              <h5 class="font-semibold text-yellow-300">Kontak</h5>
              <p>Email: halo@kopivintage.id<br>
              Telepon: (021) 9876 5432</p>
            </div>
          </div>
        </div>
        
        <div>
          <h4 class="text-2xl font-bold mb-6">Temukan Kami</h4>
          <div class="flex space-x-4 mb-6">
            <a href="#" class="bg-yellow-600 hover:bg-yellow-500 w-10 h-10 rounded-full flex items-center justify-center">
              <span class="sr-only">Instagram</span>📸
            </a>
            <a href="#" class="bg-yellow-600 hover:bg-yellow-500 w-10 h-10 rounded-full flex items-center justify-center">
              <span class="sr-only">Facebook</span>👍
            </a>
            <a href="#" class="bg-yellow-600 hover:bg-yellow-500 w-10 h-10 rounded-full flex items-center justify-center">
              <span class="sr-only">WhatsApp</span>💬
            </a>
          </div>
          <p class="text-yellow-100 italic">"Nikmati kopi berkualitas di tempat yang penuh kenangan"</p>
        </div>
      </div>
      
      <div class="border-t border-yellow-800 mt-12 pt-8 text-center">
        <p>&copy; 2025 KOPI VINTAGE. Seluruh hak cipta dilindungi.</p>
      </div>
    </div>
  </footer>

  <script>
    // Script sederhana untuk filter galeri
    document.addEventListener('DOMContentLoaded', function() {
      const filterButtons = document.querySelectorAll('section button');
      const galleryItems = document.querySelectorAll('.masonry-item');
      
      filterButtons.forEach(button => {
        button.addEventListener('click', function() {
          // Hanya contoh - implementasi filter sebenarnya membutuhkan class pada item
          alert('Fitur filter akan bekerja dengan implementasi JavaScript lengkap');
        });
      });
    });
  </script>

</body>
</html>