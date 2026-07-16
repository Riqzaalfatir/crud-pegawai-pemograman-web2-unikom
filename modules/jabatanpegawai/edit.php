<html>
    <head>
        <title>Edit Jabatan Pegawai</title>
    </head>
    <body>
        <center>
        <h1>Edit Data Jabatan Pegawai</h1>
        <hr>
        <?php
        require '../../config/database.php';

        if (!isset($_GET['idjp']) || empty($_GET['idjp'])) {
            die("ID tidak ditemukan di URL. <a href='" . BASE_URL . "jabatanpegawai.php'>Kembali</a>");
        }

        $idjp = mysqli_real_escape_string($koneksi, $_GET['idjp']);
        $sql = "SELECT * FROM jabatanpegawai WHERE idjp = '$idjp'";
        $query = mysqli_query($koneksi, $sql);

        if (mysqli_num_rows($query) == 0) {
            die("Data tidak ditemukan. <a href='" . BASE_URL . "jabatanpegawai.php'>Kembali</a>");
        }

        $row = mysqli_fetch_array($query);
        ?>

        <form name="feditjabatanpegawai" action="<?php echo BASE_URL; ?>modules/jabatanpegawai/update.php" method="post">
            <input type="hidden" name="idjp" value="<?php echo $row['idjp']; ?>" />
            <table align="center">
                <tr>
                    <td>NIP</td>
                    <td>: <select name="nip" required>
                        <?php
                        $sql_pegawai = "SELECT nip, namalengkap FROM pegawai";
                        $hasil_pegawai = mysqli_query($koneksi, $sql_pegawai);
                        while ($p = mysqli_fetch_assoc($hasil_pegawai)) {
                            $selected = ($p['nip'] == $row['nip']) ? 'selected' : '';
                            echo "<option value='{$p['nip']}' $selected>{$p['nip']} - {$p['namalengkap']}</option>";
                        }
                        ?>
                    </select></td>
                </tr>
                <tr>
                    <td>Kode Jabatan</td>
                    <td>: <select name="kodejabatan" required>
                        <?php
                        $sql_jabatan = "SELECT kodejabatan, namajabatan FROM jabatan";
                        $hasil_jabatan = mysqli_query($koneksi, $sql_jabatan);
                        while ($j = mysqli_fetch_assoc($hasil_jabatan)) {
                            $selected = ($j['kodejabatan'] == $row['kodejabatan']) ? 'selected' : '';
                            echo "<option value='{$j['kodejabatan']}' $selected>{$j['kodejabatan']} - {$j['namajabatan']}</option>";
                        }
                        ?>
                    </select></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>: <input name="status" size="20" maxlength="10" value="<?php echo $row['status']; ?>"></td>
                </tr>
                <tr>
                    <td>Periode</td>
                    <td>: <input name="periode" size="20" maxlength="15" value="<?php echo $row['periode']; ?>"></td>
                </tr>
            </table>
            <hr>
            <input type="submit" value="Simpan">
            <input type="reset" value="Reset">
            &nbsp; <a href="<?php echo BASE_URL; ?>jabatanpegawai.php">Kembali</a>
        </form>
        </center>
    </body>
</html>