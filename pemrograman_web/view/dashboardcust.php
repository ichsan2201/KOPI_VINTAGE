><!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Kopi Vintage - Kedai kopi dengan nuansa retro dan cita rasa modern di Indonesia">
  <title>KOPI VINTAGE - Kedai Kopi Retro</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #FFF9E6;
    }
    .hero-bg {
      background-image: url('https://images.unsplash.com/photo-1497636577773-f1231844b336?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1469&q=80');
      background-size: cover;
      background-position: center;
    }
    .menu-card {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .menu-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }
    .feature-card {
      transition: all 0.3s ease;
    }
    .feature-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
    }
    .divider {
      position: relative;
      height: 1px;
      background: linear-gradient(90deg, transparent, #D1C0A8, transparent);
      margin: 2rem auto;
      width: 80%;
    }
    .divider:before {
      content: "✻";
      position: absolute;
      top: -10px;
      left: 50%;
      transform: translateX(-50%);
      background: #FFF9E6;
      padding: 0 10px;
      color: #D1C0A8;
    }
  </style>
</head>
<body class="bg-yellow-50 text-gray-800">

  <!-- Navbar-->
  <?php include 'include/navbar.php'; ?>

  <!-- Bagian Hero -->
   <section class="relative bg-cover bg-center h-[100vh] hero-bg">
    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
      <div class="text-center text-white px-4">
        <h2 class="text-4xl md:text-6xl font-extrabold mb-4 drop-shadow-lg">KOPI VINTAGE</h2>
        <p class="text-lg md:text-xl italic mb-8 max-w-2xl mx-auto">"Menikmati rasa, merawat kenangan. Tempat di mana setiap tegukan kopi membawa cerita masa lalu."</p>
        <!-- <a href="menu.php" class="bg-yellow-600 hover:bg-yellow-500 px-6 py-3 text-lg rounded-lg shadow-md font-semibold transition duration-300">Lihat Menu Kami</a> -->
      </div>
    </div>
  </section>

  <!-- Tentang Kami -->
  <section class="py-16 bg-yellow-100">
    <div class="container mx-auto px-6 text-center max-w-3xl">
      <h3 class="text-3xl font-bold mb-6">Suasana Retro. Cita Rasa Modern.</h3>
      <p class="text-gray-700 leading-relaxed mb-8">
        Kopi Vintage menghadirkan pengalaman ngopi yang berbeda dengan nuansa nostalgia tahun 70-an. 
        Kami menyajikan racikan kopi spesial dengan teknik modern untuk menghasilkan cita rasa yang istimewa.
      </p>
      <div class="grid md:grid-cols-3 gap-8 mt-10">
        <div class="bg-white p-6 rounded-lg shadow-md feature-card">
          <h4 class="font-bold text-xl mb-3">Kopi Pilihan</h4>
          <p>Biji kopi pilihan dari perkebunan terbaik di Indonesia</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
          <h4 class="font-bold text-xl mb-3">Suasana Nyaman</h4>
          <p>Desain interior retro yang hangat dan mengundang nostalgia</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
          <h4 class="font-bold text-xl mb-3">Pelayanan Ramah</h4>
          <p>Staf kami siap membuat pengalaman ngopi Anda berkesan</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Menu Spesial -->
  <section class="py-16 bg-white">
    <div class="container mx-auto px-6">
      <h3 class="text-3xl font-bold text-center mb-12">Menu Andalan Kami</h3>
      <div class="grid md:grid-cols-3 gap-8">
        <div class="border border-yellow-200 rounded-lg overflow-hidden shadow-lg">
          <img src="images/vintage-latte.jpg" alt="Vintage Latte" class="w-full h-48 object-cover">
          <div class="p-4">
            <h4 class="font-bold text-xl mb-2">Vintage Latte</h4>
            <p class="text-gray-600 mb-4">Perpaduan espresso dengan susu creamy dan sentuhan rempah</p>
            <p class="font-bold text-yellow-600">Rp 35.000</p>
          </div>
        </div>
        <div class="border border-yellow-200 rounded-lg overflow-hidden shadow-lg">
          <img src="images/senja-coffee.jpg" alt="Kopi Senja" class="w-full h-48 object-cover">
          <div class="p-4">
            <h4 class="font-bold text-xl mb-2">Kopi Senja</h4>
            <p class="text-gray-600 mb-4">Espresso dengan gula aren dan krim kocok spesial</p>
            <p class="font-bold text-yellow-600">Rp 40.000</p>
          </div>
        </div>
        <div class="border border-yellow-200 rounded-lg overflow-hidden shadow-lg">
          <img src="images/retro-espresso.jpg" alt="Retro Espresso" class="w-full h-48 object-cover">
          <div class="p-4">
            <h4 class="font-bold text-xl mb-2">Retro Espresso</h4>
            <p class="text-gray-600 mb-4">Espresso kuat dengan aftertaste cokelat dan karamel</p>
            <p class="font-bold text-yellow-600">Rp 30.000</p>
          </div>
        </div>
      </div>
      <div class="text-center mt-10">
        <a href="menu.php" class="inline-block border-2 border-yellow-600 text-yellow-600 hover:bg-yellow-600 hover:text-white px-6 py-2 rounded-lg font-semibold transition duration-300">Lihat Semua Menu</a>
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