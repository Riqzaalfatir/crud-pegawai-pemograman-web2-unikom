<?php
$koneksi = mysqli_connect("sql307.infinityfree.com", "if0_42425526", "latihancrudpw2", "if0_42425526_db_satu");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

define('BASE_URL', '/');
?>