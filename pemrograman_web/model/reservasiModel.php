<?php

class modelReservasi {
    public function getAllReservasi() {
        global $conn;
        $query = mysqli_query($conn, "SELECT * FROM reservasi ORDER BY id_reservasi DESC");
        $data = [];
        while ($row = mysqli_fetch_assoc($query)) {
            $data[] = $row;
        }
        return $data;
    }

    public function getReservasiById($id) {
        global $conn;
        $query = mysqli_query($conn, "SELECT * FROM reservasi WHERE id_reservasi = $id");
        return mysqli_fetch_assoc($query);
    }

    public function addReservasi($id_user, $nama, $telp, $email, $tanggal, $waktu, $jumlah_orang, $jenis_meja, $catatan) {
        global $conn;
        mysqli_query($conn, "INSERT INTO reservasi (
            id_user, nama_reservasi, telp_reservasi, email_reservasi, 
            tanggal_reservasi, waktu_reservasi, jumlah_orang, jenis_meja, catatan, status
        ) VALUES (
            '$id_user', '$nama', '$telp', '$email', 
            '$tanggal', '$waktu', '$jumlah_orang', '$jenis_meja', '$catatan', 'pending'
        )");
    }

    public function updateReservasi($id, $nama, $telp, $email, $tanggal, $waktu, $jumlah_orang, $jenis_meja, $catatan, $status) {
        global $conn;
        mysqli_query($conn, "UPDATE reservasi SET
            nama_reservasi = '$nama',
            telp_reservasi = '$telp',
            email_reservasi = '$email',
            tanggal_reservasi = '$tanggal',
            waktu_reservasi = '$waktu',
            jumlah_orang = '$jumlah_orang',
            jenis_meja = '$jenis_meja',
            catatan = '$catatan',
            status = '$status'
            WHERE id_reservasi = $id
        ");
    }

    public function deleteReservasi($id) {
        global $conn;
        mysqli_query($conn, "DELETE FROM reservasi WHERE id_reservasi = $id");
    }
}
