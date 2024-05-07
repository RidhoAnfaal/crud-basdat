<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "db_nusantarajuice";

$db = mysqli_connect($server, $user, $password, $nama_database);

if (!$db) {
    die("koneksi gagal" . mysqli_connect_error());
}
