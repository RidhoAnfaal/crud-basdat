<?php

include("config.php");

// kalau tidak ada id di query string
if (!isset($_GET['id'])) {
    header('Location: list-penjualan.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM penjualan WHERE id=$id";
$query = mysqli_query($db, $sql);
$pj = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>

<head>
    <title>Update Data Penjualan</title>
</head>

<body>
    <header>
        <h3>Data Penjualan</h3>
    </header>

    <form action="pjedit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $pj['id'] ?>" />

            <p>
                <label for="jumlah">Jumlah: </label>
                <input type="int" name="jumlah" placeholder="Jumlah" value="<?php echo $pj['jumlah'] ?>" />
            </p>
            <p>
                <label for="tgl_penjualan">Tanggal Penjualan: </label>
                <input type="date" name="tgl_penjualan" placeholder="Tanggal Penjualan" value="<?php echo $pj['tgl_penjualan'] ?>" />
            </p>
            <p>
                <label for="nama">Total Harga </label>
                <input type="decimal" name="total_penjualan" placeholder="Total Penjualan" value="<?php echo $pj['total_penjualan'] ?>" />
            </p>
            <p>
                <label for="pembayaran">Pembayaran: </label>
                <?php $pay = $pj['pembayaran']; ?>
                <select name="pembayaran">
                    <option <?php echo ($pay == 'Tunai') ? "selected" : "" ?>>Tunai</option>
                    <option <?php echo ($pay == 'Transfer') ? "selected" : "" ?>>Transfer</option>
                </select>
            </p>
            <p>
                <label for="id_produk">ID Produk: </label>
                <input type="int" name="id_produk" placeholder="ID Produk" value="<?php echo $pj['id_produk'] ?>" />
            </p>
            <p>
                <input type="submit" value="Simpan" name="simpan" />
            </p>

        </fieldset>


    </form>

</body>

</html>