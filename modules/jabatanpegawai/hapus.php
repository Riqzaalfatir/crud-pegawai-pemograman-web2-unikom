<?php
require '../../config/database.php';

if (!isset($_GET['idjp']) || empty($_GET['idjp'])) {
    die("ID Jabatan Pegawai tidak ditemukan di URL. <a href='" . BASE_URL . "jabatanpegawai.php'>Kembali</a>");
}

$idjp = mysqli_real_escape_string($koneksi, $_GET['idjp']);

$sql = "DELETE FROM jabatanpegawai WHERE idjp='$idjp'";
$hasil = mysqli_query($koneksi, $sql);

if ($hasil) {
    header("Location: " . BASE_URL . "jabatanpegawai.php");
    exit;
} else {
    echo "Data gagal dihapus: " . mysqli_error($koneksi);
    echo "<br><a href='" . BASE_URL . "jabatanpegawai.php'>Kembali</a>";
}
?>