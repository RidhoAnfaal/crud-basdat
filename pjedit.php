<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if (isset($_POST['simpan'])) {

    // ambil data dari formulir
    $id = $_POST['id'];
    $tgl = $_POST['tgl_penjualan'];
    $bayar = $_POST['pembayaran'];
    $idp = $_POST['id_produk'];
    $jml = $_POST['jumlah'];
    $total = $_POST['total_penjualan'];

    // buat query update
    $sql = "UPDATE penjualan SET tgl_penjualan='$tgl', pembayaran='$bayar', id_produk='$idp', jumlah='$jml', total_penjualan='$total' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if ($query) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: list-penjualan.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}
