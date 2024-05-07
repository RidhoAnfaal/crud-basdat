<!DOCTYPE html>
<html>

<head>
    <title>Add Data Penjualan</title>
</head>

<body>
    <header>
        <h3>ADD DATA PENJUALAN</h3>
    </header>

    <form action="pjtambahdata.php" method="POST">

        <fieldset>

            <p>
                <label for="jumlah">Jumlah: </label>
                <input type="int" name="jumlah" placeholder="Jumlah" />
            </p>
            <p>
                <label for="tgl_penjualan">Tanggal Penjualan: </label>
                <input type="date" name="tgl_penjualan" placeholder="Tanggal Penjualan" />
            </p>
            <p>
                <label for="total_penjualan">Total Harga: </label>
                <input type="decimal" name="total_penjualan" placeholder="Total Penjualan" />
            </p>
            <p>
                <label for="pembayaran">Pembayaran: </label>
                <select name="pembayaran">
                    <option>Tunai</option>
                    <option>Transfer</option>
                </select>
            </p>
            <p>
                <label for="id_produk">ID Produk: </label>
                <input type="int" name="id_produk" placeholder="ID Produk" />
            </p>
            <p>
                <input type="submit" value="Tambah" name="tambah" />
            </p>

        </fieldset>

    </form>

</body>

</html>