<?php
require("../../config/database.php");

$nip         = mysqli_real_escape_string($koneksi, $_POST['nip']);
$kodejabatan = mysqli_real_escape_string($koneksi, $_POST['kodejabatan']);
$status      = mysqli_real_escape_string($koneksi, $_POST['status']);
$periode     = mysqli_real_escape_string($koneksi, $_POST['periode']);

if ($nip != '') {
    $sql = "INSERT INTO jabatanpegawai (nip, kodejabatan, status, periode) 
            VALUES ('$nip', '$kodejabatan', '$status', '$periode')";
    $hasil = mysqli_query($koneksi, $sql);

    echo "<html>";
    echo "<center>";
    echo "<font size='6'>Informasi Data Jabatan Pegawai</font>";
    echo "<hr width='320'>";
    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr><td>NIP</td><td>: $nip</td></tr>";
    echo "<tr><td>Kode Jabatan</td><td>: $kodejabatan</td></tr>";
    echo "<tr><td>Status</td><td>: $status</td></tr>";
    echo "<tr><td>Periode</td><td>: $periode</td></tr>";
    echo "</table>";
    echo "<hr width='320'>";

    if ($hasil) {
        echo "<font color='green'>Data berhasil disimpan!</font><br><br>";
    } else {
        echo "<font color='red'>Data gagal disimpan: " . mysqli_error($koneksi) . "</font><br><br>";
    }

    echo "<a href='" . BASE_URL . "jabatanpegawai.php'>Kembali ke Daftar Jabatan Pegawai</a>";
    echo "</center>";
    echo "</html>";

} else {
    echo "<font color='red'>NIP Tidak Boleh Kosong</font><br><br>";
    echo "<a href='" . BASE_URL . "jabatanpegawai.php'>Kembali</a>";
}
?>