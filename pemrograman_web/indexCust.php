<?php
require_once 'view/koneksi.php';
require_once 'model/reservasiModel.php';
session_start();

// Menampilkan semua error (untuk debugging)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Menentukan modul yang akan dipanggil
$modul = isset($_GET['modul']) ? strtolower($_GET['modul']) : 'beranda';

switch ($modul) {
    case 'beranda':
        include 'view/dashboardcust.php';
        break;

    case 'menu':
        include 'view/menu.php';
        break;

    case 'tentang':
        include 'view/tentang.php';
        break;

    case 'galeri':
        include 'view/galeri.php';
        break;

    case 'login':
        // Cek apakah user sudah login
        if (isset($_SESSION['user_logged_in'])) {
            header('Location: indexcust.php?modul=reservasi');
            exit;
        }

        // Proses login
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Validasi input
            if (empty($email) || empty($password)) {
                $error = "Email dan password harus diisi!";
            } else {
                // Cek kredensial di database
                $query = mysqli_query($koneksi, "SELECT * FROM user WHERE email='$email' AND password='$password'");
                if (mysqli_num_rows($query) > 0) {
                    $user = mysqli_fetch_assoc($query);
                    $_SESSION['user_logged_in'] = true;
                    $_SESSION['id_user'] = $user['id'];
                    $_SESSION['nama_user'] = $user['nama'];
                    header('Location: indexcust.php?modul=reservasi');
                    exit;
                } else {
                    $error = "Email atau password salah!";
                }
            }
        }

        include 'view/login.php';
        break;

    case 'register':
       if (isset($_SESSION['user_logged_in'])) {
            header('Location: indexcust.php?modul=reservasi');
            exit;
        }

        // Proses pendaftaran
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nama = $_POST['nama_user'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Validasi input
            if (empty($nama) || empty($email) || empty($password)) {
                $error = "Semua field harus diisi!";
            } else {
                // Simpan data ke database
                $query = mysqli_query($koneksi, "INSERT INTO user (nama_user, email, password) VALUES ('$nama', '$email', '$password')");
                if ($query) {
                    $_SESSION['user_logged_in'] = true;
                    $_SESSION['id_user'] = mysqli_insert_id($koneksi);
                    $_SESSION['nama_user'] = $nama;
                    header('Location: indexcust.php?modul=reservasi');
                    exit;
                } else {
                    $error = "Gagal mendaftar. Silakan coba lagi.";
                }
            }
        }

        include 'view/register.php';
        break;

    case 'reservasi':
        // Cek login terlebih dahulu
       if (!isset($_SESSION['user_logged_in'])) {
        header('Location: indexcust.php?modul=login');
         exit;
        }
        $fitur = $_GET['fitur'] ?? null;
        $obj_modelReservasi = new modelReservasi();

        switch ($fitur) {
            case 'add':
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $nama = $_POST['nama'];
                    $no_hp = $_POST['no_hp'];
                    $tanggal = $_POST['tanggal'];
                    $jam = $_POST['jam'];
                    $jumlah_orang = $_POST['jumlah_orang'];

                    $obj_modelReservasi->addReservasi(
                        $_SESSION['id_user'], 
                        $nama, 
                        $no_hp, 
                        $_POST['email'], 
                        $tanggal, 
                        $jam, 
                        $jumlah_orang, 
                        $_POST['jenis_meja'], 
                        $_POST['catatan']
                    );
                    header('Location: indexcust.php?modul=reservasi');
                    exit;
                } else {
                    include 'view/reservasi.php';
                }
                break;

            default:
                include 'view/reservasi.php';
                break;
        }
        break;

    default:
        echo " tidak ditemukan!, coba lagi!";
        break;
}
?>
