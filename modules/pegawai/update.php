<?php
require '../../config/database.php';

$nipawal      = mysqli_real_escape_string($koneksi, $_POST['nipawal']);
$nip          = mysqli_real_escape_string($koneksi, $_POST['nip']);
$namalengkap  = mysqli_real_escape_string($koneksi, $_POST['nama']);
$jeniskelamin = isset($_POST['jk']) ? mysqli_real_escape_string($koneksi, $_POST['jk']) : '';
$tanggallahir = mysqli_real_escape_string($koneksi, $_POST['tanggallahir']);
$alamat       = mysqli_real_escape_string($koneksi, $_POST['alamat']);
$nohp         = mysqli_real_escape_string($koneksi, $_POST['nohp']);
$email        = mysqli_real_escape_string($koneksi, $_POST['email']);

$sql = "UPDATE pegawai SET 
        nip='$nip', 
        namalengkap='$namalengkap', 
        jeniskelamin='$jeniskelamin', 
        tanggallahir='$tanggallahir', 
        alamat='$alamat', 
        nohp='$nohp', 
        email='$email' 
        WHERE nip='$nipawal'";

$hasil = mysqli_query($koneksi, $sql);

if ($hasil) {
    echo "Data berhasil diupdate!";
    echo "<br><a href='" . BASE_URL . "index.php'>Kembali ke Daftar Pegawai</a>";
} else {
    echo "Data gagal diupdate: " . mysqli_error($koneksi);
    echo "<br><a href='" . BASE_URL . "index.php'>Kembali</a>";
}
?>
