<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Tentang Kopi Vintage - Kedai kopi dengan nuansa retro dan cita rasa modern di Indonesia">
  <title>Tentang Kami - KOPI VINTAGE</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
    .tim-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }
  </style>
</head>
<body class="bg-yellow-50 text-gray-800">

  <!-- Navigasi -->
 <?php include 'include/navbar.php'; ?>

  <!-- Header Tentang Kami -->
  <section class="relative bg-cover bg-center h-64" style="background-image: url('images/about-banner.jpg');">
    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
      <div class="text-center text-white px-4">
        <h2 class="text-4xl md:text-5xl font-extrabold mb-4 drop-shadow-lg">Tentang Kami</h2>
        <p class="text-lg md:text-xl italic drop-shadow-md">"Cerita di balik setiap tegukan kopi spesial"</p>
      </div>
    </div>
  </section>

  <!-- Sejarah -->
  <section class="py-16 bg-white">
    <div class="container mx-auto px-6 max-w-5xl">
      <div class="flex flex-col md:flex-row items-center gap-10">
        <div class="md:w-1/2">
          <img src="images/sejarah-kopi.jpg" alt="Sejarah Kopi Vintage" class="rounded-lg shadow-lg w-full h-auto">
        </div>
        <div class="md:w-1/2">
          <h3 class="text-3xl font-bold mb-6">Sejarah KOPI VINTAGE</h3>
          <p class="text-gray-700 mb-4">
            Berdiri sejak 2015, KOPI VINTAGE lahir dari kecintaan kami terhadap kopi dan nostalgia masa lalu. 
            Pendiri kami, Bapak Andi Wijaya, seorang pecinta kopi sejati, ingin menciptakan tempat dimana orang 
            bisa menikmati kopi berkualitas dalam suasana yang hangat dan penuh kenangan.
          </p>
          <p class="text-gray-700">
            Nama "Vintage" dipilih karena kami ingin menghadirkan pengalaman ngopi yang berbeda, mengombinasikan 
            cita rasa modern dengan nuansa retro yang mengingatkan pada kedai kopi tahun 70-an.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Filosofi -->
  <section class="py-16 bg-yellow-100">
    <div class="container mx-auto px-6 max-w-5xl">
      <div class="flex flex-col md:flex-row-reverse items-center gap-10">
        <div class="md:w-1/2">
          <img src="images/filosofi-kopi.jpg" alt="Filosofi Kopi Vintage" class="rounded-lg shadow-lg w-full h-auto">
        </div>
        <div class="md:w-1/2">
          <h3 class="text-3xl font-bold mb-6">Filosofi Kami</h3>
          <p class="text-gray-700 mb-4">
            Kami percaya bahwa kopi bukan sekadar minuman, tapi sebuah pengalaman. Setiap biji kopi yang kami sajikan 
            melewati proses seleksi ketat dan penyangraian khusus untuk menghasilkan cita rasa yang konsisten dan istimewa.
          </p>
          <p class="text-gray-700">
            Motto kami <span class="italic">"Menikmati rasa, merawat kenangan"</span> mencerminkan komitmen kami untuk 
            tidak hanya menyajikan kopi terbaik, tapi juga menciptakan momen berharga bagi setiap pelanggan.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Tim Kami -->
  <section class="py-16 bg-white">
    <div class="container mx-auto px-6">
      <h3 class="text-3xl font-bold text-center mb-12">Tim Kami</h3>
      <div class="grid md:grid-cols-3 gap-8">
        <!-- Anggota Tim 1 -->
        <div class="tim-card bg-white border border-yellow-200 rounded-lg overflow-hidden shadow-md transition duration-300">
          <img src="images/team-1.jpg" alt="Andi Wijaya" class="w-full h-64 object-cover">
          <div class="p-6">
            <h4 class="font-bold text-xl mb-1">Andi Wijaya</h4>
            <p class="text-yellow-600 font-medium mb-3">Pendiri & Head Barista</p>
            <p class="text-gray-600">Pecinta kopi dengan 15 tahun pengalaman di industri kopi spesialti</p>
          </div>
        </div>
        
        <!-- Anggota Tim 2 -->
        <div class="tim-card bg-white border border-yellow-200 rounded-lg overflow-hidden shadow-md transition duration-300">
          <img src="images/team-2.jpg" alt="Siti Rahayu" class="w-full h-64 object-cover">
          <div class="p-6">
            <h4 class="font-bold text-xl mb-1">Siti Rahayu</h4>
            <p class="text-yellow-600 font-medium mb-3">Manajer Operasional</p>
            <p class="text-gray-600">Ahli dalam menciptakan pengalaman pelanggan yang tak terlupakan</p>
          </div>
        </div>
        
        <!-- Anggota Tim 3 -->
        <div class="tim-card bg-white border border-yellow-200 rounded-lg overflow-hidden shadow-md transition duration-300">
          <img src="images/team-3.jpg" alt="Budi Santoso" class="w-full h-64 object-cover">
          <div class="p-6">
            <h4 class="font-bold text-xl mb-1">Budi Santoso</h4>
            <p class="text-yellow-600 font-medium mb-3">Head Roaster</p>
            <p class="text-gray-600">Spesialis penyangraian dengan sertifikasi internasional</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Nilai Kami -->
  <section class="py-16 bg-yellow-100">
    <div class="container mx-auto px-6 max-w-3xl">
      <h3 class="text-3xl font-bold text-center mb-12">Nilai-Nilai Kami</h3>
      <div class="grid md:grid-cols-2 gap-8">
        <div class="bg-white p-6 rounded-lg shadow-md">
          <div class="text-yellow-600 text-3xl mb-3">🌱</div>
          <h4 class="font-bold text-xl mb-2">Bahan Berkualitas</h4>
          <p class="text-gray-600">Hanya menggunakan biji kopi pilihan dari petani lokal terbaik</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
          <div class="text-yellow-600 text-3xl mb-3">❤</div>
          <h4 class="font-bold text-xl mb-2">Pelayanan Ramah</h4>
          <p class="text-gray-600">Staf kami siap membuat Anda merasa seperti di rumah sendiri</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
          <div class="text-yellow-600 text-3xl mb-3">✨</div>
          <h4 class="font-bold text-xl mb-2">Konsistensi Rasa</h4>
          <p class="text-gray-600">Setiap tegukan memberikan pengalaman rasa yang sama istimewanya</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
          <div class="text-yellow-600 text-3xl mb-3">🌎</div>
          <h4 class="font-bold text-xl mb-2">Berkelanjutan</h4>
          <p class="text-gray-600">Mendukung praktik pertanian berkelanjutan dan komunitas petani kopi</p>
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

</body>
</html>