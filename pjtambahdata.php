<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if (isset($_POST['tambah'])) {

    // ambil data dari formulir
    $tgl = $_POST['tgl_penjualan'];
    $bayar = $_POST['pembayaran'];
    $idp = $_POST['id_produk'];
    $jml = $_POST['jumlah'];
    $total = $_POST['total_penjualan'];

    // buat query
    $sql = "INSERT INTO penjualan (tgl_penjualan, pembayaran, id_produk, jumlah, total_penjualan) VALUE ('$tgl', '$bayar', '$idp', '$jml', '$total')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if ($query) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}
