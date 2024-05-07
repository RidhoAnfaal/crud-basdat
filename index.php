<!DOCTYPE html>
<html>

<head>
    <title>Database Nusantara Juice</title>
</head>

<body>
    <header>
        <h1>NUSANTARA FRUITS & JUICE</h1>
    </header>

    <h4>Menu</h4>
    <nav>
        <?php if (isset($_GET['status'])) : ?>
            <p>
                <?php
                if ($_GET['status'] == 'sukses') {
                    echo "berhasil!";
                } else {
                    echo "gagal!";
                }
                ?>
            </p>
        <?php endif; ?>
        <ul>
            <li><a href="list-penjualan.php">Data Penjualan</a></li>
            <li><a href="">Data Pengeluaran</a></li>
            <li><a href="">Data Produk</a></li>
            <li><a href="">Data Supplier</a></li>
        </ul>

    </nav>

</body>

</html>