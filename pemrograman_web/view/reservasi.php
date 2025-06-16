<?php
// Inisialisasi variabel untuk menghindari warning
$success = $success ?? '';
$error = $error ?? '';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Reservasi - KOPI VINTAGE</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<header class="bg-[#3e2c1c] text-white py-4 shadow-lg sticky top-0 z-50">
    <div class="container mx-auto flex justify-between items-center px-4 md:px-6">
        <h1 class="text-2xl font-bold tracking-wide">KOPI VINTAGE</h1>
        <a href="logout.php" 
           class="bg-red-600 hover:bg-red-500 text-white px-4 py-2 rounded-lg text-sm font-medium transition duration-200">
            Logout
        </a>
    </div>
</header>

<body>
  <section class="py-16 bg-white">
    <div class="container mx-auto px-6 max-w-4xl">
      <div class="bg-yellow-100 rounded-lg shadow-md p-8 md:p-12">
        <h3 class="text-2xl font-bold mb-8 text-center">Form Reservasi KOPI VINTAGE</h3>
        
        <?php if($success): ?>
            <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
                <?= $success ?>
            </div>
        <?php endif; ?>

        <?php if($error): ?>
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
                <?= $error ?>
            </div>
        <?php endif; ?>
        
        <form method="POST" class="space-y-6">
          <!-- Informasi Pribadi -->
          <div class="grid md:grid-cols-2 gap-6">
            <div>
              <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap*</label>
              <input type="text" id="nama" name="nama" required 
                     class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500"
                     value="<?= isset($_SESSION['nama_user']) ? $_SESSION['nama_user'] : '' ?>">
            </div>
            <div>
              <label for="telepon" class="block text-sm font-medium text-gray-700 mb-1">Nomor Telepon*</label>
              <input type="tel" id="telepon" name="no_hp" required 
                     class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500">
            </div>
          </div>
          
          <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
            <input type="email" id="email" name="email" 
                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500"
                   value="<?= isset($_SESSION['user_email']) ? $_SESSION['user_email'] : '' ?>">
          </div>

          <!-- Detail Reservasi -->
          <div class="grid md:grid-cols-2 gap-6">
            <div>
              <label for="tanggal" class="block text-sm font-medium text-gray-700 mb-1">Tanggal Reservasi*</label>
              <input type="date" id="tanggal" name="tanggal" required 
                     class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500">
            </div>
            <div>
              <label for="waktu" class="block text-sm font-medium text-gray-700 mb-1">Waktu Reservasi*</label>
              <select id="waktu" name="jam" required 
                      class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500">
                <option value="">Pilih Waktu</option>
                <?php for ($i = 8; $i <= 20; $i++): ?>
                  <option value="<?= sprintf("%02d:00", $i) ?>"><?= sprintf("%02d:00", $i) ?></option>
                <?php endfor; ?>
              </select>
            </div>
          </div>

          <div class="grid md:grid-cols-2 gap-6">
            <div>
              <label for="jumlah_orang" class="block text-sm font-medium text-gray-700 mb-1">Jumlah Orang*</label>
              <select id="jumlah_orang" name="jumlah_orang" required 
                      class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500">
                <option value="">Pilih Jumlah</option>
                <?php for ($i = 1; $i <= 9; $i++): ?>
                  <option value="<?= $i ?>"><?= $i ?> Orang</option>
                <?php endfor; ?>
                <option value="9+">9+ Orang</option>
              </select>
            </div>
            <div>
              <label for="jenis_meja" class="block text-sm font-medium text-gray-700 mb-1">Jenis Meja</label>
              <select id="jenis_meja" name="jenis_meja" 
                      class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500">
                <option value="">Tidak Ada Preferensi</option>
                <option value="indoor">Indoor</option>
                <option value="outdoor">Outdoor</option>
                <option value="sofa">Area Sofa</option>
                <option value="private">Private Room</option>
              </select>
            </div>
          </div>

          <div>
            <label for="catatan" class="block text-sm font-medium text-gray-700 mb-1">Catatan Tambahan</label>
            <textarea id="catatan" name="catatan" rows="3" 
                      class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500"></textarea>
          </div>

          <div class="pt-4">
            <button type="submit" 
                    class="w-full bg-yellow-600 hover:bg-yellow-500 text-white font-bold py-3 px-4 rounded-lg shadow-md transition duration-300">
              Buat Reservasi
            </button>
          </div>

          <p class="text-sm text-gray-500 text-center">
            *Harap datang 15 menit sebelum waktu reservasi. Reservasi akan kadaluarsa jika Anda terlambat lebih dari 30 menit.
          </p>
        </form>
      </div>
    </div>
  </section>
</body>
</html>
