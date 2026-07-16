<?php
require("../../config/database.php");

$nip = mysqli_real_escape_string($koneksi, $_POST['nip']);
$nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
$jk = mysqli_real_escape_string($koneksi, $_POST['jk']);
$tanggallahir = mysqli_real_escape_string($koneksi, $_POST['tanggallahir']);
$alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
$nohp = mysqli_real_escape_string($koneksi, $_POST['nohp']);
$email = mysqli_real_escape_string($koneksi, $_POST['email']);

if ($nip != '') {
    $sql = "INSERT INTO pegawai (nip, namalengkap, jeniskelamin, tanggallahir, alamat, nohp, email) 
            VALUES ('$nip', '$nama', '$jk', '$tanggallahir', '$alamat', '$nohp', '$email')";
    $hasil = mysqli_query($koneksi, $sql);

    echo "<html>";
    echo "<center>";
    echo "<font size='6'>Informasi Data Pegawai</font>";
    echo "<hr width='320'>";
    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr><td>NIP</td><td>: $nip</td></tr>";
    echo "<tr><td>Nama Lengkap</td><td>: $nama</td></tr>";
    echo "<tr><td>Jenis Kelamin</td><td>: " . ($jk == 1 ? "Laki-laki" : "Perempuan") . "</td></tr>";
    echo "<tr><td>Tanggal Lahir</td><td>: $tanggallahir</td></tr>";
    echo "<tr><td>Alamat</td><td>: $alamat</td></tr>";
    echo "<tr><td>No. HP</td><td>: $nohp</td></tr>";
    echo "<tr><td>Email</td><td>: $email</td></tr>";
    echo "</table>";
    echo "<hr width='320'>";

    if ($hasil) {
        echo "<font color='green'>Data berhasil disimpan!</font><br><br>";
    } else {
        echo "<font color='red'>Data gagal disimpan: " . mysqli_error($koneksi) . "</font><br><br>";
    }

    echo "<a href='" . BASE_URL . "index.php'>Kembali ke Daftar Pegawai</a>";
    echo "</center>";
    echo "</html>";

} else {
    echo "<font color='red'>NIP Tidak Boleh Kosong</font><br><br>";
    echo "<a href='" . BASE_URL . "index.php'>Kembali</a>";
}
?>
