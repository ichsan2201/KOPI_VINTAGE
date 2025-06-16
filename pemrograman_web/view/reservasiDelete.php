<?php
require_once 'koneksi.php';

$id = $_GET['id_reservasi'];

$stmt = $koneksi->prepare("DELETE FROM reservasi WHERE id_reservasi = ?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
  header("Location: reservasiList.php"); // atau redirect ke halaman sebelumnya
  exit;
} else {
  echo "Gagal menghapus reservasi.";
}

?>
