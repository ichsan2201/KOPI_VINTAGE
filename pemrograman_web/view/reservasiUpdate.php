<?php
require_once 'koneksi.php';

$id = $_GET['id_reservasi'] ?? 0;
$success = false;

// Ambil data reservasi berdasarkan ID
$stmt = $koneksi->prepare("SELECT * FROM reservasi WHERE id_reservasi = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$reservasi = $result->fetch_assoc();

// Proses form saat disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nama     = $_POST['nama'];
  $telepon  = $_POST['telepon'];
  $email    = $_POST['email'];
  $tanggal  = $_POST['tanggal'];
  $waktu    = $_POST['waktu'];
  $jumlah   = $_POST['jumlah'];
  $meja     = $_POST['meja'];
  $catatan  = $_POST['catatan'];

  $stmt = $koneksi->prepare("UPDATE reservasi SET nama_reservasi=?, telp_reservasi=?, email_reservasi=?, tanggal_reservasi=?, waktu_reservasi=?, jumlah_orang=?, jenis_meja=?, catatan=? WHERE id_reservasi=?");
  $stmt->bind_param("ssssssssi", $nama, $telepon, $email, $tanggal, $waktu, $jumlah, $meja, $catatan, $id);

  if ($stmt->execute()) {
    $success = true;
    $reservasi = [
      'nama_reservasi'    => $nama,
      'telp_reservasi'    => $telepon,
      'email_reservasi'   => $email,
      'tanggal_reservasi' => $tanggal,
      'waktu_reservasi'   => $waktu,
      'jumlah_orang'      => $jumlah,
      'jenis_meja'        => $meja,
      'catatan'           => $catatan,
    ];
    header("Location: reservasiList.php"); // Redirect setelah update
    exit;
  }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Update Reservasi - KOPI VINTAGE</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-yellow-100 min-h-screen flex items-center justify-center">
  <div class="w-full max-w-2xl bg-yellow-50 p-8 rounded shadow">
    <h1 class="text-2xl font-bold text-center mb-6">Update Reservasi KOPI VINTAGE</h1>

    <?php if ($success): ?>
      <div class="bg-green-100 text-green-800 px-4 py-2 rounded mb-4">Reservasi berhasil diperbarui!</div>
    <?php endif; ?>

    <form method="POST">
      <div class="grid md:grid-cols-2 gap-4 mb-4">
        <div>
          <label class="block mb-1 font-medium">Nama Lengkap*</label>
          <input type="text" name="nama" class="w-full p-2 border rounded" value="<?= htmlspecialchars($reservasi['nama_reservasi']) ?>" required>
        </div>
        <div>
          <label class="block mb-1 font-medium">Nomor Telepon*</label>
          <input type="text" name="telepon" class="w-full p-2 border rounded" value="<?= htmlspecialchars($reservasi['telp_reservasi']) ?>" required>
        </div>
      </div>

      <div class="mb-4">
        <label class="block mb-1 font-medium">Email</label>
        <input type="email" name="email" class="w-full p-2 border rounded" value="<?= htmlspecialchars($reservasi['email_reservasi']) ?>">
      </div>

      <div class="grid md:grid-cols-2 gap-4 mb-4">
        <div>
          <label class="block mb-1 font-medium">Tanggal Reservasi*</label>
          <input type="date" name="tanggal" class="w-full p-2 border rounded" value="<?= htmlspecialchars($reservasi['tanggal_reservasi']) ?>" required>
        </div>
        <div>
          <label class="block mb-1 font-medium">Waktu Reservasi*</label>
          <select name="waktu" class="w-full p-2 border rounded" required>
            <option value="">Pilih Waktu</option>
            <?php
              $waktu_options = ['09:00', '12:00', '15:00', '18:00', '20:00'];
              foreach ($waktu_options as $waktu) {
                $selected = $reservasi['waktu_reservasi'] == $waktu ? 'selected' : '';
                echo "<option value='$waktu' $selected>$waktu</option>";
              }
            ?>
          </select>
        </div>
      </div>

      <div class="grid md:grid-cols-2 gap-4 mb-4">
        <div>
          <label class="block mb-1 font-medium">Jumlah Orang*</label>
          <select name="jumlah" class="w-full p-2 border rounded" required>
            <option value="">Pilih Jumlah</option>
            <?php for ($i = 1; $i <= 10; $i++): ?>
              <option value="<?= $i ?>" <?= $reservasi['jumlah_orang'] == $i ? 'selected' : '' ?>><?= $i ?> orang</option>
            <?php endfor; ?>
          </select>
        </div>
        <div>
          <label class="block mb-1 font-medium">Jenis Meja</label>
          <select name="meja" class="w-full p-2 border rounded">
            <option value="Tidak Ada Preferensi" <?= $reservasi['jenis_meja'] == 'Tidak Ada Preferensi' ? 'selected' : '' ?>>Tidak Ada Preferensi</option>
            <option value="Indoor" <?= $reservasi['jenis_meja'] == 'Indoor' ? 'selected' : '' ?>>Indoor</option>
            <option value="Outdoor" <?= $reservasi['jenis_meja'] == 'Outdoor' ? 'selected' : '' ?>>Outdoor</option>
          </select>
        </div>
      </div>

      <div class="mb-4">
        <label class="block mb-1 font-medium">Catatan Tambahan</label>
        <textarea name="catatan" rows="3" class="w-full p-2 border rounded"><?= htmlspecialchars($reservasi['catatan']) ?></textarea>
      </div>

      <div class="text-center">
        <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-white px-6 py-2 rounded">Update Reservasi</button>
      </div>
    </form>
  </div>
</body>
</html>
