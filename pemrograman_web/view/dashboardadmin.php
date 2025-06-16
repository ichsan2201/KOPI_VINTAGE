<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel - KOPI VINTAGE</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <style>
    body {
      font-family: 'Poppins', sans-serif;
    }

    .sidebar {
      min-height: 100vh;
    }

    .active {
      background-color: #fbbf24;
      color: white;
    }
  </style>
</head>

<body class="bg-gray-100">
  <div class="flex"></div>

    <!-- Sidebar -->
    <?php include 'include/sidebar.php'; ?>

    <!-- Main Content -->
    <div class="ml-64 flex-1 p-8">
      <h2 class="text-2xl font-bold mb-6">Dashboard Admin</h2>

      <!-- Search Form -->
      <!-- <div class="mb-6">
        <form action="reservasi.php" method="GET">
          <input type="text" name="search" placeholder="Cari Reservasi" class="px-4 py-2 border rounded-lg w-full md:w-1/3">
        </form>
      </div> -->

      <!-- Reservasi Terbaru -->
      <!-- <div class="bg-white p-6 rounded-lg shadow mb-8">
        <div class="flex justify-between items-center mb-4">
          <h3 class="text-xl font-bold">Reservasi Terbaru</h3>
          <a href="reservasi/" class="text-yellow-600 hover:underline">Lihat Semua</a>
        </div>
        <div class="overflow-x-auto">
          <table class="min-w-full">
            <thead>
              <tr class="border-b">
                <th class="text-left py-2">Nama</th>
                <th class="text-left py-2">Tanggal</th>
                <th class="text-left py-2">Waktu</th>
                <th class="text-left py-2">Jumlah</th>
                <th class="text-left py-2">Status</th>
                <th class="text-left py-2">Aksi</th>
              </tr>
            </thead>
          </table> -->
        </div>
      </div>
    </div>
  </div>
</body>

</html>