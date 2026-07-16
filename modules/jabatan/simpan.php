<?php 
  require("../../config/database.php");

  $kodejabatan = mysqli_real_escape_string($koneksi, $_POST['kodejabatan']);
  $namajabatan = mysqli_real_escape_string($koneksi, $_POST['namajabatan']);
  $level = mysqli_real_escape_string($koneksi, $_POST['level']);
  $gaji = mysqli_real_escape_string($koneksi, $_POST['gaji']);

  if ($kodejabatan != '') {
    $sql = "INSERT INTO jabatan (kodejabatan, namajabatan, level, gaji) VALUES('$kodejabatan', '$namajabatan', '$level', '$gaji')";
    $hasil = mysqli_query($koneksi, $sql);

    echo "<html>";
    echo "<center>";
    echo "<font size='6'>Informasi Jabatan</font>";
    echo "<hr width='320'>";
    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr><td>Kode Jabatan</td><td>: $kodejabatan</td></tr>";
    echo "<tr><td>Nama Jabatan</td><td>: $namajabatan</td></tr>";
    echo "<tr><td>Level</td><td>: $level</td></tr>";
    echo "<tr><td>Gaji</td><td>: $gaji</td></tr>";
    echo "</table>";
    echo "<hr width='320'>";

    if ($hasil) {
        echo "<font color='green'>Data berhasil disimpan!</font><br><br>";
    } else {
        echo "<font color='red'>Data gagal disimpan: " . mysqli_error($koneksi) . "</font><br><br>";
    }

    echo "<a href='" . BASE_URL . "jabatan.php'>Kembali ke Jabatan</a>";
    echo "</center>";
    echo "</html>";

} else {
    echo "<font color='red'>Kode Jabatan Tidak Boleh Kosong</font><br><br>";
    echo "<a href='" . BASE_URL . "jabatan.php'>Kembali</a>";
}
?>