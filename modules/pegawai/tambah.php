<?php require '../../config/database.php'; ?>
<html>
    <head>
        <title>Tambah Pegawai</title>
    </head>
    <body>
        <center>
        <h1>Input Data Pegawai</h1>
        <hr>
        <form name="ftambahpegawai" action="<?php echo BASE_URL; ?>modules/pegawai/simpan.php" method="post">
            <table align="center">
                <tr>
                    <td>NIP</td>
                    <td>: <input name="nip" size="10" maxlength="8" placeholder="NIP"></td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>: <input name="nama" size="55" maxlength="55" placeholder="Nama Lengkap"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        <input type="radio" name="jk" value="1">Laki-laki
                        <input type="radio" name="jk" value="2">Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>: <input name="tanggallahir" type="date" placeholder="Tanggal Lahir"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>: <input name="alamat" size="50" placeholder="Alamat"></td>
                </tr>
                <tr>
                    <td>No. HP</td>
                    <td>: <input name="nohp" size="15" placeholder="No. HP"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>: <input name="email" type="email" size="30" placeholder="Email"></td>
                </tr>
            </table>
            <hr>
            <input type="submit" value="Simpan">
            <input type="reset" value="Reset">
            &nbsp; <a href="<?php echo BASE_URL; ?>index.php">Kembali</a>
        </form>
        </center>
    </body>
</html>
