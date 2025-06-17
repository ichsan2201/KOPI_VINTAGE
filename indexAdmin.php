<?php
require_once 'view/koneksi.php';
require_once 'model/reservasiModel.php';
require_once 'model/menuModel.php';
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$modul = isset($_GET['modul']) ? strtolower($_GET['modul']) : 'dashboardadmin';

switch ($modul) {
    case 'dashboardadmin':
        include 'view/dashboardAdmin.php';
        break;

    case 'menu':
        $fitur = isset($_GET['fitur']) ? strtolower($_GET['fitur']) : 'list';
        $obj_modelMenu = new modelMenu();
        switch ($fitur) {
            case 'list':
                $menuList = $obj_modelMenu->getAllMenu();
                include 'view/menuList.php';
                break;

            case 'add':
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $nama_menu = $_POST['nama_menu'];
                    $harga_menu = $_POST['harga_menu'];
                    $kategori = $_POST['kategori'];
                    $deskripsi_menu = $_POST['deskripsi_menu'];
                    $obj_modelMenu->addMenu($nama_menu, $harga_menu, $kategori, $deskripsi_menu);
                    header('Location: indexAdmin.php?modul=menu&fitur=list');
                    exit;
                }
                include 'view/menuInput.php';
                break;

            case 'update':
                $id = $_GET['id_menu'] ?? 0;
                $menu = $obj_modelMenu->getMenuById($id);
                if (!$menu) {
                    header('Location: indexAdmin.php?modul=menu&fitur=list');
                    exit;
                }
                include 'view/menuUpdate.php';
                break;

            case 'delete':
                $id = $_GET['id_menu'] ?? 0;
                if ($id) {
                    $obj_modelMenu->deleteMenu($id);
                }
                header('Location: indexAdmin.php?modul=menu&fitur=list');
                exit;
                break;

            default:
                echo "Fitur tidak ditemukan!";
                break;
        }
        break;

    case 'reservasi':
        $fitur = isset($_GET['fitur']) ? strtolower($_GET['fitur']) : 'list';
        $obj_modelReservasi = new modelReservasi();

        switch ($fitur) {
            case 'list':
                $reservasiList = $obj_modelReservasi->getAllReservasi();
                include 'view/reservasiList.php';
                break;

            case 'update':
                $id = $_GET['id_reservasi'] ?? 0;
                $reservasi = $obj_modelReservasi->getReservasiById($id);
                if (!$reservasi) {
                    header('Location: indexAdmin.php?modul=reservasi&fitur=list');
                    exit;
                }
                include 'view/reservasiUpdate.php';
                break;

            case 'delete':
                $id = $_GET['id_reservasi'] ?? 0;
                if ($id) {
                    $obj_modelReservasi->deleteReservasi($id);
                }
                header('Location: indexAdmin.php?modul=reservasi&fitur=list');
                exit;
                break;

            default:
                echo "Fitur tidak ditemukan!";
                break;
        }

        break;
    
    case 'logout':
        session_destroy();
        header('Location: indexAdmin.php');
        exit;

    default:
        include 'view/dashboardAdmin.php';
        break;
}
