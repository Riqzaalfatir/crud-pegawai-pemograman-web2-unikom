<?php require '../../config/database.php'; ?>
<html>
    <head>
        <title>Tambah Jabatan Pegawai</title>
    </head>
    <body>
        <center>
        <h1>Input Data Jabatan Pegawai</h1>
        <hr>
        <form name="ftambahjabatanpegawai" action="<?php echo BASE_URL; ?>modules/jabatanpegawai/simpan.php" method="post">
            <table align="center">
                <tr>
                    <td>NIP</td>
                    <td>: <select name="nip" required>
                        <option value="">Pilih Pegawai</option>
                        <?php
                        $sql_pegawai = "SELECT nip, namalengkap FROM pegawai";
                        $hasil_pegawai = mysqli_query($koneksi, $sql_pegawai);
                        while ($p = mysqli_fetch_assoc($hasil_pegawai)) {
                            echo "<option value='{$p['nip']}'>{$p['nip']} - {$p['namalengkap']}</option>";
                        }
                        ?>
                    </select></td>
                </tr>
                <tr>
                    <td>Kode Jabatan</td>
                    <td>: <select name="kodejabatan" required>
                        <option value="">Pilih Jabatan</option>
                        <?php
                        $sql_jabatan = "SELECT kodejabatan, namajabatan FROM jabatan";
                        $hasil_jabatan = mysqli_query($koneksi, $sql_jabatan);
                        while ($j = mysqli_fetch_assoc($hasil_jabatan)) {
                            echo "<option value='{$j['kodejabatan']}'>{$j['kodejabatan']} - {$j['namajabatan']}</option>";
                        }
                        ?>
                    </select></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>: <input name="status" size="20" maxlength="10" placeholder="Status"></td>
                </tr>
                <tr>
                    <td>Periode</td>
                    <td>: <input name="periode" type="text" size="20" maxlength="15" placeholder="Periode"></td>
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