<?php include("config.php"); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Data Penjualan</title>
</head>

<body>
    <header>
        <h3>Data Penjualan</h3>
    </header>

    <nav>
        <a href="addpenjualan.php">[+] Tambah Data Baru</a>
    </nav>

    <br>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Tgl Penjualan</th>
                <th>Pembayaran</th>
                <th>ID Produk</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $sql = "SELECT * FROM penjualan";
            $query = mysqli_query($db, $sql);

            while ($pj = mysqli_fetch_array($query)) {
                echo "<tr>";

                echo "<td>" . $pj['id'] . "</td>";
                echo "<td>" . $pj['tgl_penjualan'] . "</td>";
                echo "<td>" . $pj['pembayaran'] . "</td>";
                echo "<td>" . $pj['id_produk'] . "</td>";
                echo "<td>" . $pj['jumlah'] . "</td>";
                echo "<td>" . $pj['total_penjualan'] . "</td>";

                echo "<td>";
                echo "<a href='editpenjualan.php?id=" . $pj['id'] . "'>Edit</a> | ";
                echo "<a href='pjhapus.php?id=" . $pj['id'] . "'>Hapus</a>";
                echo "</td>";

                echo "</tr>";
            }
            ?>

        </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

</body>

</html>