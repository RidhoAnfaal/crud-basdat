<?php include("config.php"); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Data Produk</title>
</head>

<body>
    <header>
        <h3>Data Produk</h3>
    </header>

    <br>

    <table border="1">
        <thead>
            <tr>
                <th>ID Produk</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $sql = "SELECT * FROM produk";
            $query = mysqli_query($db, $sql);

            while ($prdk = mysqli_fetch_array($query)) {
                echo "<tr>";

                echo "<td>" . $prdk['id_produk'] . "</td>";
                echo "<td>" . $prdk['nama_jus'] . "</td>";
                echo "<td>" . $prdk['harga'] . "</td>";
                echo "<td>" . $prdk['stok'] . "</td>";

                echo "</tr>";
            }
            ?>

        </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

</body>

</html>