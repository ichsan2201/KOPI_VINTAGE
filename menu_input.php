<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Menu - Admin</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
  </style>
</head>
<body class="bg-[#3e2c1c] text-gray-100 min-h-screen">
  <div class="max-w-4xl mx-auto mt-12 bg-white p-8 rounded-lg shadow-lg">
    <h2 class="text-3xl font-bold text-[#3e2c1c] mb-6 border-b pb-2">Tambah Menu</h2>

    <form method="POST" action="indexAdmin.php?modul=menu&fitur=add" enctype="multipart/form-data" class="grid grid-cols-1 md:grid-cols-2 gap-8">
      
      <!-- Kolom Kiri: Gambar -->
      <div class="space-y-4">
        <div>
          <label for="gambar_menu" class="block text-sm font-medium text-[#3e2c1c] mb-1">Gambar Menu</label>
          <input type="file" name="gambar_menu" id="gambar_menu" accept="image/*" required
            class="w-full block border border-gray-300 text-sm rounded-lg shadow-sm p-2 file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:bg-yellow-100 file:text-yellow-800 hover:file:bg-yellow-200">
        </div>
        <div>
          <img id="preview" src="#" alt="Preview Gambar" class="w-full h-48 object-cover border rounded hidden">
        </div>
      </div>

      <!-- Kolom Kanan: Input Detail -->
      <div class="space-y-4">
        <div>
          <label for="nama_menu" class="block text-sm font-medium text-[#3e2c1c] mb-1">Nama Menu</label>
          <input type="text" name="nama_menu" id="nama_menu" required
                 class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:outline-none text-gray-800">
        </div>

        <div>
          <label for="harga_menu" class="block text-sm font-medium text-[#3e2c1c] mb-1">Harga (Rp)</label>
          <input type="number" name="harga_menu" id="harga_menu" step="0.01" required
                 class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:outline-none text-gray-800">
        </div>

        <div>
          <label for="kategori" class="block text-sm font-medium text-[#3e2c1c] mb-1">Kategori</label>
          <select name="kategori" id="kategori" required
                  class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:outline-none bg-white text-gray-800">
            <option value="">-- Pilih Kategori --</option>
            <option value="kopi">Kopi</option>
            <option value="non-kopi">Non-Kopi</option>
            <option value="makanan">Makanan</option>
          </select>
        </div>

        <div>
          <label for="deskripsi_menu" class="block text-sm font-medium text-[#3e2c1c] mb-1">Deskripsi</label>
          <textarea name="deskripsi_menu" id="deskripsi_menu" rows="3" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:outline-none text-gray-800"></textarea>
        </div>
      </div>

      <!-- Tombol -->
      <div class="col-span-1 md:col-span-2 flex justify-between mt-6">
        <a href="indexAdmin.php?modul=menu&fitur=list"
           class="px-6 py-2 rounded-lg bg-gray-200 text-[#3e2c1c] hover:bg-gray-300 font-medium transition">
          Batal
        </a>
        <button type="submit"
                class="px-6 py-2 rounded-lg bg-yellow-600 text-white hover:bg-yellow-700 font-medium transition">
          Simpan
        </button>
      </div>
    </form>
  </div>

  <script>
    document.getElementById('gambar_menu').addEventListener('change', function(e) {
      const preview = document.getElementById('preview');
      const file = e.target.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = function(evt) {
          preview.src = evt.target.result;
          preview.classList.remove('hidden');
        };
        reader.readAsDataURL(file);
      }
    });
  </script>
</body>

</html>
