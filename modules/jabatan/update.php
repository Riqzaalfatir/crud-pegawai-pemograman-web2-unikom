<?php
require '../../config/database.php';

$kodejabatanawal = mysqli_real_escape_string($koneksi, $_POST['kodejabatanawal']);
$kodejabatan      = mysqli_real_escape_string($koneksi, $_POST['kodejabatan']);
$namajabatan      = mysqli_real_escape_string($koneksi, $_POST['namajabatan']);
$level            = mysqli_real_escape_string($koneksi, $_POST['level']);
$gaji             = mysqli_real_escape_string($koneksi, $_POST['gaji']);

$sql = "UPDATE jabatan SET 
        kodejabatan='$kodejabatan', 
        namajabatan='$namajabatan', 
        level='$level', 
        gaji='$gaji' 
        WHERE kodejabatan='$kodejabatanawal'";

$hasil = mysqli_query($koneksi, $sql);

if ($hasil) {
    echo "Data berhasil diupdate!";
    echo "<br><a href='" . BASE_URL . "jabatan.php'>Kembali ke Daftar Jabatan</a>";
} else {
    echo "Data gagal diupdate: " . mysqli_error($koneksi);
    echo "<br><a href='" . BASE_URL . "jabatan.php'>Kembali</a>";
}
?>