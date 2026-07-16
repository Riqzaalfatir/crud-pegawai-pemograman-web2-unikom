<?php
require '../../config/database.php';

$idjp        = mysqli_real_escape_string($koneksi, $_POST['idjp']);
$nip         = mysqli_real_escape_string($koneksi, $_POST['nip']);
$kodejabatan = mysqli_real_escape_string($koneksi, $_POST['kodejabatan']);
$status      = mysqli_real_escape_string($koneksi, $_POST['status']);
$periode     = mysqli_real_escape_string($koneksi, $_POST['periode']);

$sql = "UPDATE jabatanpegawai SET 
        nip='$nip', 
        kodejabatan='$kodejabatan', 
        status='$status', 
        periode='$periode' 
        WHERE idjp='$idjp'";

$hasil = mysqli_query($koneksi, $sql);

if ($hasil) {
    echo "Data berhasil diupdate!";
    echo "<br><a href='" . BASE_URL . "jabatanpegawai.php'>Kembali ke Daftar Jabatan Pegawai</a>";
} else {
    echo "Data gagal diupdate: " . mysqli_error($koneksi);
    echo "<br><a href='" . BASE_URL . "jabatanpegawai.php'>Kembali</a>";
}
?>