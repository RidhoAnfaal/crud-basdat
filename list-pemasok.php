<?php include("config.php"); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Data Pemasok</title>
</head>

<body>
    <header>
        <h3>Data Pemasok</h3>
    </header>

    <br>

    <table border="1">
        <thead>
            <tr>
                <th>ID Pemasok</th>
                <th>Nama</th>
                <th>Nomor Telepon</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $sql = "SELECT * FROM pemasok";
            $query = mysqli_query($db, $sql);

            while ($pmsk = mysqli_fetch_array($query)) {
                echo "<tr>";

                echo "<td>" . $pmsk['id_supplier'] . "</td>";
                echo "<td>" . $pmsk['nama'] . "</td>";
                echo "<td>" . $pmsk['no_tlp'] . "</td>";

                echo "</tr>";
            }
            ?>

        </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

</body>

</html>