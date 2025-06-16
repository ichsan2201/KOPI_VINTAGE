<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kelola Menu - Admin | KOPI VINTAGE</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-100 flex">

  <!-- Sidebar -->
  <?php include 'include/sidebar.php'; ?>

  <!-- Konten Utama -->
  <div class="ml-64 p-8 flex-1">
    <h2 class="text-2xl font-bold mb-6">Kelola Menu</h2>

    <!-- Tombol Tambah -->
    <div class="mb-6">
      <a href="tambah_menu.php" class="bg-yellow-600 hover:bg-yellow-700 text-white px-4 py-2 rounded inline-block">
        <i class="fas fa-plus mr-2"></i> Tambah Menu
      </a>
    </div>

    <!-- Card Menu -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
      
      <!-- Card 1 -->
      <div class="bg-white border border-yellow-300 rounded-lg shadow hover:shadow-md transition p-4">
        <img src="gambar/vintage-latte.jpg" alt="Vintage Latte" class="w-full h-40 object-cover rounded">
        <div class="mt-4">
          <h3 class="text-lg font-bold text-gray-800">Vintage Latte <span class="float-right text-yellow-600 font-semibold">Rp 35.000</span></h3>
          <p class="text-sm text-gray-600 mt-1">Perpaduan espresso dengan susu creamy dan sentuhan rempah</p>
          <!-- <span class="inline-block bg-yellow-100 text-yellow-800 text-xs font-medium px-2 py-1 rounded mt-2">Best Seller</span> -->
          <div class="mt-4 flex justify-end space-x-2">
            <a href="edit_menu.php?id=1" class="text-sm bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded"><i class="fas fa-edit mr-1"></i> Update</a>
            <a href="hapus_menu.php?id=1" onclick="return confirm('Yakin ingin menghapus menu ini?')" class="text-sm bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded"><i class="fas fa-trash"></i></a>
          </div>
        </div>
      </div>

      <!-- Tambahkan card lainnya sesuai kebutuhan -->

    </div>
  </div>

</body>
</html>
