<?php require("config/database.php"); ?>
<html>
    <head>
        <title>Latihan Database Dasar</title>
    </head>
    <body>
        <center>
            <h1>Tampil Data Pegawai <a href="<?php echo BASE_URL; ?>session/logout.php">Logout</a></h1>
            <hr>
            <table border="1">
                <tr bgcolor="silver">
                    <td width="50" align="center">No</td>
                    <td width="100" align="center">NIP</td>
                    <td width="200" align="center">Nama Lengkap</td>
                    <td width="50" align="center">JK</td>
                    <td width="150" align="center">Tanggal Lahir</td>
                    <td width="200" align="center">Alamat</td>
                    <td width="150" align="center">No. HP</td>
                    <td width="200" align="center">Proses</td>
                </tr>

                <?php
                $sql = "SELECT * FROM pegawai";
                $hasil = mysqli_query($koneksi, $sql);

                $n = 1;
                while ($row = mysqli_fetch_assoc($hasil)) {
                    $nip          = $row['nip'];
                    $namalengkap  = $row['namalengkap'];
                    $jk           = ($row['jeniskelamin'] == 1) ? 'Laki-laki' : 'Perempuan';
                    $tanggallahir = $row['tanggallahir'];
                    $alamat       = $row['alamat'];
                    $nohp         = $row['nohp'];

                    echo "
                    <tr>
                        <td>$n</td>
                        <td>$nip</td>
                        <td>$namalengkap</td>
                        <td>$jk</td>
                        <td>$tanggallahir</td>
                        <td>$alamat</td>
                        <td>$nohp</td>
                        <td align='center'>
                            <a href='" . BASE_URL . "modules/pegawai/view.php?nip=$nip'>View</a>
                            <a href='" . BASE_URL . "modules/pegawai/edit.php?nip=$nip'>Edit</a>
                            <a href='" . BASE_URL . "modules/pegawai/hapus.php?nip=$nip' onclick=\"return confirm('Anda yakin mau menghapus data ini?')\">Delete</a>
                        </td>
                    </tr>";
                    $n++;
                }
                ?>

                <tr><td align="center" colspan="8"><a href="<?php echo BASE_URL; ?>modules/pegawai/tambah.php">Tambah Pegawai</a></td></tr>

            </table>
        </center>
    </body>
</html>
