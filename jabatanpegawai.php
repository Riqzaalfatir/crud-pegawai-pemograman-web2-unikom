<?php require("config/database.php"); ?>
<html>
    <head>
        <title>Data Jabatan Pegawai</title>
    </head>
    <body>
        <center>
            <h1>Tampil Data Jabatan Pegawai</h1>
            <hr>
            <table border="1">
                <tr bgcolor="silver">
                    <td width="50" align="center">No</td>
                    <td width="100" align="center">NIP</td>
                    <td width="150" align="center">Nama Pegawai</td>
                    <td width="100" align="center">Kode Jabatan</td>
                    <td width="150" align="center">Nama Jabatan</td>
                    <td width="100" align="center">Status</td>
                    <td width="100" align="center">Periode</td>
                    <td width="200" align="center">Proses</td>
                </tr>

                <?php
                $sql = "SELECT jp.*, p.namalengkap, j.namajabatan 
                        FROM jabatanpegawai jp
                        JOIN pegawai p ON jp.nip = p.nip
                        JOIN jabatan j ON jp.kodejabatan = j.kodejabatan";
                $hasil = mysqli_query($koneksi, $sql);

                $n = 1;
                while ($row = mysqli_fetch_assoc($hasil)) {
                    $idjp        = $row['idjp'];
                    $nip         = $row['nip'];
                    $namalengkap = $row['namalengkap'];
                    $kodejabatan = $row['kodejabatan'];
                    $namajabatan = $row['namajabatan'];
                    $status      = $row['status'];
                    $periode     = $row['periode'];

                    echo "
                    <tr>
                        <td>$n</td>
                        <td>$nip</td>
                        <td>$namalengkap</td>
                        <td>$kodejabatan</td>
                        <td>$namajabatan</td>
                        <td>$status</td>
                        <td>$periode</td>
                        <td align='center'>
                            <a href='" . BASE_URL . "modules/jabatanpegawai/view.php?idjp=$idjp'>View</a>
                            <a href='" . BASE_URL . "modules/jabatanpegawai/edit.php?idjp=$idjp'>Edit</a>
                            <a href='" . BASE_URL . "modules/jabatanpegawai/hapus.php?idjp=$idjp' onclick=\"return confirm('Anda yakin mau menghapus data ini?')\">Delete</a>
                        </td>
                    </tr>";
                    $n++;
                }
                ?>

                <tr><td align="center" colspan="8"><a href="<?php echo BASE_URL; ?>modules/jabatanpegawai/tambah.php">Tambah Jabatan Pegawai</a></td></tr>

            </table>
        </center>
    </body>
</html>