<?php
require '../../config/database.php';

if (!isset($_GET['nip']) || empty($_GET['nip'])) {
    die("NIP tidak ditemukan di URL. <a href='" . BASE_URL . "index.php'>Kembali</a>");
}

$nip = mysqli_real_escape_string($koneksi, $_GET['nip']);

$sql = "DELETE FROM pegawai WHERE nip='$nip'";
$hasil = mysqli_query($koneksi, $sql);

if ($hasil) {
    header("Location: " . BASE_URL . "index.php");
    exit;
} else {
    echo "Data gagal dihapus: " . mysqli_error($koneksi);
    echo "<br><a href='" . BASE_URL . "index.php'>Kembali</a>";
}
?>
