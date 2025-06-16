<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Menu Kopi Vintage - Kedai kopi dengan nuansa retro dan cita rasa modern di Indonesia">
  <title>Menu - KOPI VINTAGE</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Tambahkan Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
    .swiper-slide {
      height: auto;
    }
    .menu-card {
      height: 100%;
      display: flex;
      flex-direction: column;
    }
    .menu-card img {
      height: 200px;
      object-fit: cover;
    }
    .swiper-button-next, .swiper-button-prev {
      color: #d97706 !important;
      background-color: rgba(254, 243, 199, 0.8);
      width: 40px;
      height: 40px;
      border-radius: 50%;
      transition: all 0.3s ease;
    }
    .swiper-button-next:hover, .swiper-button-prev:hover {
      background-color: #fef3c7;
      transform: scale(1.1);
    }
    .swiper-button-next::after, .swiper-button-prev::after {
      font-size: 20px;
      font-weight: bold;
    }
    .category-title {
      position: relative;
      padding-bottom: 1rem;
      margin-bottom: 2rem;
    }
    .category-title::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
      width: 100px;
      height: 4px;
      background: linear-gradient(90deg, #fbbf24, #d97706);
      border-radius: 2px;
    }
  </style>
</head>
<body class="bg-yellow-50 text-gray-800">

 <!-- Navigasi -->
  <?php include 'include/navbar.php'; ?>

  <!-- Header Menu -->
  <section class="relative bg-cover bg-center h-64" style="background-image: url('https://images.unsplash.com/photo-1501339847302-ac426a4a7cbb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80');">
    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
      <div class="text-center text-white px-4">
        <h2 class="text-4xl md:text-5xl font-extrabold mb-4 drop-shadow-lg">Menu Kami</h2>
        <p class="text-lg md:text-xl italic drop-shadow-md">"Racikan spesial untuk penikmat kopi sejati"</p>
      </div>
    </div>
  </section>

  <!-- Daftar Menu dengan Slider -->
  <section class="py-16 bg-white">
    <div class="container mx-auto px-6">
      <!-- Kopi Spesial -->
      <div class="mb-20">
        <h3 class="text-3xl font-bold text-center mb-12 category-title">Kopi Spesial</h3>
        <div class="swiper mySwiper1">
          <div class="swiper-wrapper">
            <!-- Item Menu 1 -->
            <div class="swiper-slide">
              <div class="border border-yellow-200 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition duration-300 menu-card">
                <img src="https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" alt="Vintage Latte" class="w-full">
                <div class="p-4 flex-grow">
                  <div class="flex justify-between items-start">
                    <h4 class="font-bold text-xl mb-2">Vintage Latte</h4>
                    <span class="font-bold text-yellow-600">Rp 35.000</span>
                  </div>
                  <p class="text-gray-600 mb-4">Perpaduan espresso dengan susu creamy dan sentuhan rempah</p>
                  <span class="inline-block bg-yellow-100 text-yellow-800 text-xs px-2 py-1 rounded">Best Seller</span>
                </div>
              </div>
            </div>
            
            <!-- Item Menu 2 -->
            <div class="swiper-slide">
              <div class="border border-yellow-200 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition duration-300 menu-card">
                <img src="https://images.unsplash.com/photo-1572442388796-11668a67e53d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=735&q=80" alt="Kopi Senja" class="w-full">
                <div class="p-4 flex-grow">
                  <div class="flex justify-between items-start">
                    <h4 class="font-bold text-xl mb-2">Kopi Senja</h4>
                    <span class="font-bold text-yellow-600">Rp 40.000</span>
                  </div>
                  <p class="text-gray-600 mb-4">Espresso dengan gula aren dan krim kocok spesial</p>
                </div>
              </div>
            </div>
            
            <!-- Item Menu 3 -->
            <div class="swiper-slide">
              <div class="border border-yellow-200 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition duration-300 menu-card">
                <img src="https://images.unsplash.com/photo-1512568400610-62da28bc8a13?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" alt="Retro Espresso" class="w-full">
                <div class="p-4 flex-grow">
                  <div class="flex justify-between items-start">
                    <h4 class="font-bold text-xl mb-2">Retro Espresso</h4>
                    <span class="font-bold text-yellow-600">Rp 30.000</span>
                  </div>
                  <p class="text-gray-600 mb-4">Espresso kuat dengan aftertaste cokelat dan karamel</p>
                </div>
              </div>
            </div>
            
            <!-- Item Menu 4 -->
            <div class="swiper-slide">
              <div class="border border-yellow-200 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition duration-300 menu-card">
                <img src="https://images.unsplash.com/photo-1534687941688-651ccaafbff8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" alt="Classic Cappuccino" class="w-full">
                <div class="p-4 flex-grow">
                  <div class="flex justify-between items-start">
                    <h4 class="font-bold text-xl mb-2">Classic Cappuccino</h4>
                    <span class="font-bold text-yellow-600">Rp 35.000</span>
                  </div>
                  <p class="text-gray-600 mb-4">Cappuccino klasik dengan busa susu lembut</p>
                </div>
              </div>
            </div>
            
            <!-- Item Menu 5 -->
            <div class="swiper-slide">
              <div class="border border-yellow-200 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition duration-300 menu-card">
                <img src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Mocha Vintage" class="w-full">
                <div class="p-4 flex-grow">
                  <div class="flex justify-between items-start">
                    <h4 class="font-bold text-xl mb-2">Mocha Vintage</h4>
                    <span class="font-bold text-yellow-600">Rp 38.000</span>
                  </div>
                  <p class="text-gray-600 mb-4">Perpaduan espresso, cokelat, dan susu steamed</p>
                </div>
              </div>
            </div>
            
            <!-- Item Menu 6 -->
            <div class="swiper-slide">
              <div class="border border-yellow-200 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition duration-300 menu-card">
                <img src="https://images.unsplash.com/photo-1590080874088-e8b7e8de4c0f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=688&q=80" alt="Affogato Classic" class="w-full">
                <div class="p-4 flex-grow">
                  <div class="flex justify-between items-start">
                    <h4 class="font-bold text-xl mb-2">Affogato Classic</h4>
                    <span class="font-bold text-yellow-600">Rp 45.000</span>
                  </div>
                  <p class="text-gray-600 mb-4">Es krim vanilla yang disiram espresso panas</p>
                  <span class="inline-block bg-yellow-100 text-yellow-800 text-xs px-2 py-1 rounded">New</span>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>
      
      <!-- Minuman Non-Kopi -->
      <div class="mb-20">
        <h3 class="text-3xl font-bold text-center mb-12 category-title">Minuman Non-Kopi</h3>
        <div class="swiper mySwiper2">
          <div class="swiper-wrapper">
            <!-- Item Menu 1 -->
            <div class="swiper-slide">
              <div class="border border-yellow-200 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition duration-300 menu-card">
                <img src="https://images.unsplash.com/photo-1592409065737-a253f29090a9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" alt="Chocolate Vintage" class="w-full">
                <div class="p-4 flex-grow">
                  <div class="flex justify-between items-start">
                    <h4 class="font-bold text-xl mb-2">Chocolate Vintage</h4>
                    <span class="font-bold text-yellow-600">Rp 32.000</span>
                  </div>
                  <p class="text-gray-600 mb-4">Cokelat panas premium dengan kayu manis dan pala</p>
                  <span class="inline-block bg-yellow-100 text-yellow-800 text-xs px-2 py-1 rounded">Best Seller</span>
                </div>
              </div>
            </div>
            
            <!-- Item Menu 2 -->
            <div class="swiper-slide">
              <div class="border border-yellow-200 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition duration-300 menu-card">
                <img src="https://images.unsplash.com/photo-1550583724-b2692b85b150?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" alt="Matcha Latte" class="w-full">
                <div class="p-4 flex-grow">
                  <div class="flex justify-between items-start">
                    <h4 class="font-bold text-xl mb-2">Matcha Latte</h4>
                    <span class="font-bold text-yellow-600">Rp 35.000</span>
                  </div>
                  <p class="text-gray-600 mb-4">Matcha premium dari Jepang dengan susu steamed lembut</p>
                </div>
              </div>
            </div>
            
            <!-- Item Menu 3 -->
            <div class="swiper-slide">
              <div class="border border-yellow-200 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition duration-300 menu-card">
                <img src="https://images.unsplash.com/photo-1556679343-c7306c1976bc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=764&q=80" alt="Lemon Tea" class="w-full">
                <div class="p-4 flex-grow">
                  <div class="flex justify-between items-start">
                    <h4 class="font-bold text-xl mb-2">Lemon Tea</h4>
                    <span class="font-bold text-yellow-600">Rp 25.000</span>
                  </div>
                  <p class="text-gray-600 mb-4">Teh hitam dengan perasan lemon segar dan madu</p>
                </div>
              </div>
            </div>
            
            <!-- Item Menu 4 -->
            <div class="swiper-slide">
              <div class="border border-yellow-200 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition duration-300 menu-card">
                <img src="https://images.unsplash.com/photo-1584270354949-c26b0d5b4a0c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=715&q=80" alt="Avocado Smoothie" class="w-full">
                <div class="p-4 flex-grow">
                  <div class="flex justify-between items-start">
                    <h4 class="font-bold text-xl mb-2">Avocado Smoothie</h4>
                    <span class="font-bold text-yellow-600">Rp 35.000</span>
                  </div>
                  <p class="text-gray-600 mb-4">Alpukat creamy dengan susu almond dan gula kelapa</p>
                </div>
              </div>
            </div>
            
            <!-- Item Menu 5 -->
            <div class="swiper-slide">
              <div class="border border-yellow-200 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition duration-300 menu-card">
                <img src="https://images.unsplash.com/photo-1563805042-7684c019e1cb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=627&q=80" alt="Berry Blast" class="w-full">
                <div class="p-4 flex-grow">
                  <div class="flex justify-between items-start">
                    <h4 class="font-bold text-xl mb-2">Berry Blast</h4>
                    <span class="font-bold text-yellow-600">Rp 38.000</span>
                  </div>
                  <p class="text-gray-600 mb-4">Smoothie mix strawberry, blueberry, dan yogurt</p>
                </div>
              </div>
            </div>
            
            <!-- Item Menu 6 -->
            <div class="swiper-slide">
              <div class="border border-yellow-200 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition duration-300 menu-card">
                <img src="https://images.unsplash.com/photo-1621263764928-df1444c5e859?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" alt="Thai Tea" class="w-full">
                <div class="p-4 flex-grow">
                  <div class="flex justify-between items-start">
                    <h4 class="font-bold text-xl mb-2">Thai Tea</h4>
                    <span class="font-bold text-yellow-600">Rp 30.000</span>
                  </div>
                  <p class="text-gray-600 mb-4">Teh Thailand asli dengan susu kental manis</p>
                  <span class="inline-block bg-yellow-100 text-yellow-800 text-xs px-2 py-1 rounded">New</span>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>
           
      <!-- Makanan Ringan -->
      <div class="mb-20">
        <h3 class="text-3xl font-bold text-center mb-12 category-title">Makanan Ringan</h3>
        <div class="swiper mySwiper3">
          <div class="swiper-wrapper">
            <!-- Item Menu 1 -->
            <div class="swiper-slide">
              <div class="border border-yellow-200 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition duration-300 menu-card">
                <img src="https://images.unsplash.com/photo-1627308595189-8e0c8d2d6b76?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=735&q=80" alt="Croissant" class="w-full">
                <div class="p-4 flex-grow">
                  <div class="flex justify-between items-start">
                    <h4 class="font-bold text-xl mb-2">Croissant Classic</h4>
                    <span class="font-bold text-yellow-600">Rp 32.000</span>
                  </div>
                  <p class="text-gray-600 mb-4">Croissant renyah dengan isian cokelat premium</p>
                  <span class="inline-block bg-yellow-100 text-yellow-800 text-xs px-2 py-1 rounded">Best Seller</span>
                </div>
              </div>
            </div>
            
            <!-- Item Menu 2 -->
            <div class="swiper-slide">
              <div class="border border-yellow-200 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition duration-300 menu-card">
                <img src="https://images.unsplash.com/photo-1563805042-7684c019e1cb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=627&q=80" alt="Red Velvet Cake" class="w-full">
                <div class="p-4 flex-grow">
                  <div class="flex justify-between items-start">
                    <h4 class="font-bold text-xl mb-2">Red Velvet Cake</h4>
                    <span class="font-bold text-yellow-600">Rp 45.000</span>
                  </div>
                  <p class="text-gray-600 mb-4">Kue lembut dengan cream cheese frosting</p>
                </div>
              </div>
            </div>
            
            <!-- Item Menu 3 -->
            <div class="swiper-slide">
              <div class="border border-yellow-200 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition duration-300 menu-card">
                <img src="https://images.unsplash.com/photo-1601050690597-df0568f70950?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Banana Bread" class="w-full">
                <div class="p-4 flex-grow">
                  <div class="flex justify-between items-start">
                    <h4 class="font-bold text-xl mb-2">Banana Bread</h4>
                    <span class="font-bold text-yellow-600">Rp 28.000</span>
                  </div>
                  <p class="text-gray-600 mb-4">Roti pisang lembut dengan taburan kacang</p>
                </div>
              </div>
            </div>
            
            <!-- Item Menu 4 -->
            <div class="swiper-slide">
              <div class="border border-yellow-200 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition duration-300 menu-card">
                <img src="https://images.unsplash.com/photo-1559620192-032c4bc4674e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" alt="Cinnamon Roll" class="w-full">
                <div class="p-4 flex-grow">
                  <div class="flex justify-between items-start">
                    <h4 class="font-bold text-xl mb-2">Cinnamon Roll</h4>
                    <span class="font-bold text-yellow-600">Rp 35.000</span>
                  </div>
                  <p class="text-gray-600 mb-4">Roti gulung kayu manis dengan icing gula</p>
                </div>
              </div>
            </div>
            
            <!-- Item Menu 5 -->
            <div class="swiper-slide">
              <div class="border border-yellow-200 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition duration-300 menu-card">
                <img src="https://images.unsplash.com/photo-1542826438-bd32f43d626f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1292&q=80" alt="Chocolate Chip Cookies" class="w-full">
                <div class="p-4 flex-grow">
                  <div class="flex justify-between items-start">
                    <h4 class="font-bold text-xl mb-2">Chocolate Chip Cookies</h4>
                    <span class="font-bold text-yellow-600">Rp 25.000</span>
                  </div>
                  <p class="text-gray-600 mb-4">Kue kering cokelat chip renyah di luar lembut di dalam</p>
                </div>
              </div>
            </div>
            
            <!-- Item Menu 6 -->
            <div class="swiper-slide">
              <div class="border border-yellow-200 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition duration-300 menu-card">
                <img src="https://images.unsplash.com/photo-1562440499-64c9a111f713?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" alt="Avocado Toast" class="w-full">
                <div class="p-4 flex-grow">
                  <div class="flex justify-between items-start">
                    <h4 class="font-bold text-xl mb-2">Avocado Toast</h4>
                    <span class="font-bold text-yellow-600">Rp 40.000</span>
                  </div>
                  <p class="text-gray-600 mb-4">Roti panggang dengan alpukat tumbuk dan taburan biji-bijian</p>
                  <span class="inline-block bg-yellow-100 text-yellow-800 text-xs px-2 py-1 rounded">New</span>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>
   

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

  <!-- Sertakan Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    // Inisialisasi Swiper untuk setiap kategori
    document.addEventListener('DOMContentLoaded', function() {
      // Swiper untuk Kopi Spesial
      const swiper1 = new Swiper('.mySwiper1', {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        autoplay: {
          delay: 3000,
          disableOnInteraction: false,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
        breakpoints: {
          640: {
            slidesPerView: 2,
          },
          1024: {
            slidesPerView: 3,
          }
        }
      });

      // Swiper untuk Minuman Non-Kopi
      const swiper2 = new Swiper('.mySwiper2', {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        autoplay: {
          delay: 3500,
          disableOnInteraction: false,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
        breakpoints: {
          640: {
            slidesPerView: 2,
          },
          1024: {
            slidesPerView: 3,
          }
        }
      });

      // Swiper untuk Makanan Ringan
      const swiper3 = new Swiper('.mySwiper3', {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        autoplay: {
          delay: 4000,
          disableOnInteraction: false,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
        breakpoints: {
          640: {
            slidesPerView: 2,
          },
          1024: {
            slidesPerView: 3,
          }
        }
      });
    });
  </script>
</body>
</html>