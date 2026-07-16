<?php
require '../../config/database.php';

if (!isset($_GET['kodejabatan']) || empty($_GET['kodejabatan'])) {
    die("Kode Jabatan tidak ditemukan di URL. <a href='" . BASE_URL . "jabatan.php'>Kembali</a>");
}

$kodejabatan = mysqli_real_escape_string($koneksi, $_GET['kodejabatan']);

$sql = "DELETE FROM jabatan WHERE kodejabatan='$kodejabatan'";
$hasil = mysqli_query($koneksi, $sql);

if ($hasil) {
    header("Location: " . BASE_URL . "jabatan.php");
    exit;
} else {
    echo "Data gagal dihapus: " . mysqli_error($koneksi);
    echo "<br><a href='" . BASE_URL . "jabatan.php'>Kembali</a>";
}
?>