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
                $email = trim($_POST['email']);
                $password = $_POST['password'];
        
                // Validasi input
                if (empty($email) || empty($password)) {
                    $error = "Email dan password tidak boleh kosong.";
                } else {
                    // Hindari SQL Injection dengan prepared statement
                    $stmt = $koneksi->prepare("SELECT * FROM user WHERE email = ?");
                    $stmt->bind_param("s", $email);
                    $stmt->execute();
                    $result = $stmt->get_result();
        
                    if ($result->num_rows === 1) {
                        $user = $result->fetch_assoc();
                        // Bandingkan password yang di-hash
                        if (password_verify($password, $user['password'])) {
                            $_SESSION['user_logged_in'] = true;
                            $_SESSION['user_data'] = $user;
                            header('Location: indexcust.php?modul=reservasi');
                            exit;
                        } else {
                            $error = "Password salah.";
                        }
                    } else {
                        $error = "Email tidak ditemukan.";
                    }
                    $stmt->close();
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
        echo " tidak ditemukan!";
        break;
}
?>
