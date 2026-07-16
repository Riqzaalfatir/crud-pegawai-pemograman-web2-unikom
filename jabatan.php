<?php require("config/database.php"); ?>
<html>
    <head>
        <title>Jabatan</title>
    </head>
    <body>
        <center>
            <h1>Tampil Jabatan <a href="<?php echo BASE_URL; ?>session/logout.php">Logout</a></h1>
            <hr>
            <table border="1">
                <tr bgcolor="silver">
                    <td width="50" align="center">No</td>
                    <td width="100" align="center">Kode Jabatan</td>
                    <td width="150" align="center">Nama Jabatan</td>
                    <td width="100" align="center">Level</td>
                    <td width="150" align="center">Gaji</td>
                    <td width="200" align="center">Proses</td>
                </tr>

                <?php
                $sql = "SELECT * FROM jabatan";
                $hasil = mysqli_query($koneksi, $sql);

                $n = 1;
                while ($row = mysqli_fetch_assoc($hasil)) {
                    $kodejabatan = $row['kodejabatan'];
                    $namajabatan = $row['namajabatan'];
                    $level       = $row['level'];
                    $gaji        = $row['gaji'];
                    echo "
                    <tr>
                        <td>$n</td>
                        <td>$kodejabatan</td>
                        <td>$namajabatan</td>
                        <td>$level</td>
                        <td>$gaji</td>
                        <td align='center'>
                            <a href='" . BASE_URL . "modules/jabatan/view.php?kodejabatan=$kodejabatan'>View</a>
                            <a href='" . BASE_URL . "modules/jabatan/edit.php?kodejabatan=$kodejabatan'>Edit</a>
                            <a href='" . BASE_URL . "modules/jabatan/hapus.php?kodejabatan=$kodejabatan' onclick=\"return confirm('Anda yakin mau menghapus data ini?')\">Delete</a>
                        </td>
                    </tr>";
                    $n++;
                }
                ?>

                <tr><td align="center" colspan="6"><a href="<?php echo BASE_URL; ?>modules/jabatan/tambah.php">Tambah Jabatan</a></td></tr>

            </table>
        </center>
    </body>
</html>