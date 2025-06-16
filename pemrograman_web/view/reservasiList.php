<?php
require_once 'koneksi.php';

// Ambil keyword pencarian jika ada
$search = isset($_GET['search']) ? $_GET['search'] : '';

// Query ambil 5 reservasi terbaru, bisa dengan atau tanpa pencarian
if (!empty($search)) {
  $stmt = $koneksi->prepare("SELECT * FROM reservasi WHERE nama_reservasi LIKE ? ORDER BY tanggal_reservasi DESC, waktu_reservasi DESC LIMIT 5");
  $keyword = "%" . $search . "%";
  $stmt->bind_param("s", $keyword);
} else {
  $stmt = $koneksi->prepare("SELECT * FROM reservasi ORDER BY tanggal_reservasi DESC, waktu_reservasi DESC LIMIT 5");
}

$stmt->execute();
$result = $stmt->get_result();
?>

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
  <div class="flex">

    <!-- Sidebar -->
    <?php include 'include/sidebar.php'; ?>

    <!-- Main Content -->
    <div class="ml-64 flex-1 p-8">
      <h2 class="text-2xl font-bold mb-6">Reservasi</h2>

      <!-- Search Form -->
      <div class="mb-6">
        <form action=" " method="GET">
          <input type="text" name="search" placeholder="Cari Reservasi" class="px-4 py-2 border rounded-lg w-full md:w-1/3" value="<?= htmlspecialchars($search) ?>">
        </form>
      </div>

      <!-- Reservasi Terbaru -->
      <div class="bg-white p-6 rounded-lg shadow mb-8">
        <div class="flex justify-between items-center mb-4">
          <h3 class="text-xl font-bold">Reservasi Terbaru</h3>
          <a href="reservasi/list.php" class="text-yellow-600 hover:underline">Lihat Semua</a>
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
            <tbody>
              <?php while ($row = $result->fetch_assoc()) : ?>
                <tr class="border-b hover:bg-gray-50">
                  <td class="py-2"><?= htmlspecialchars($row['nama_reservasi']) ?></td>
                  <td class="py-2"><?= htmlspecialchars($row['tanggal_reservasi']) ?></td>
                  <td class="py-2"><?= htmlspecialchars($row['waktu_reservasi']) ?></td>
                  <td class="py-2"><?= htmlspecialchars($row['jumlah_orang']) ?></td>
                  <td class="py-2"><?= htmlspecialchars($row['status']) ?></td>
                  <td class="py-2">
                    <a href="reservasiUpdate.php?id_reservasi=<?= $row['id_reservasi'] ?>" class="text-blue-500 hover:underline">Edit</a> |
                    <a href="reservasiDelete.php?id_reservasi=<?= $row['id_reservasi'] ?>" onclick="return confirm('Yakin ingin menghapus reservasi ini?')" class="text-red-500 hover:underline">Hapus</a>
                  </td>
                </tr>
              <?php endwhile; ?>
              <?php if ($result->num_rows === 0): ?>
                <tr>
                  <td colspan="6" class="py-2 text-center text-gray-500">Tidak ada reservasi ditemukan.</td>
                </tr>
              <?php endif; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
