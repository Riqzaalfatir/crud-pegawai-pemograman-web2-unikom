<html>
    <head>
        <title>Edit Pegawai</title>
    </head>
    <body>
        <center>
        <h1>Edit Data Pegawai</h1>
        <hr>
        <?php
        require '../../config/database.php';

        if (!isset($_GET['nip']) || empty($_GET['nip'])) {
            die("NIP tidak ditemukan di URL. <a href='" . BASE_URL . "index.php'>Kembali</a>");
        }

        $nip = mysqli_real_escape_string($koneksi, $_GET['nip']);
        $sql = "SELECT * FROM pegawai WHERE nip = '$nip'";
        $query = mysqli_query($koneksi, $sql);

        if (mysqli_num_rows($query) == 0) {
            die("Data pegawai tidak ditemukan. <a href='" . BASE_URL . "index.php'>Kembali</a>");
        }

        $row = mysqli_fetch_array($query);

        function active_radio_button($value, $input){
            return $value == $input ? 'checked' : '';
        }
        ?>

        <form name="feditpegawai" action="<?php echo BASE_URL; ?>modules/pegawai/update.php" method="post">
            <input type="hidden" name="nipawal" value="<?php echo $row['nip']; ?>" />
            <table align="center">
                <tr>
                    <td>NIP</td>
                    <td>: <input name="nip" size="10" maxlength="8" value="<?php echo $row['nip']; ?>"></td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>: <input name="nama" size="55" maxlength="55" value="<?php echo $row['namalengkap']; ?>" ></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        <input type="radio" name="jk" value="1" <?php echo active_radio_button($row['jeniskelamin'], 1); ?>>Laki-laki
                        <input type="radio" name="jk" value="2" <?php echo active_radio_button($row['jeniskelamin'], 2); ?>>Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>: <input name="tanggallahir" type="date" value="<?php echo $row['tanggallahir']; ?>" ></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>: <input name="alamat" size="50" value="<?php echo $row['alamat']; ?>"></td>
                </tr>
                <tr>
                    <td>No. HP</td>
                    <td>: <input name="nohp" size="15" value="<?php echo $row['nohp']; ?>"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>: <input name="email" type="email" size="30" value="<?php echo $row['email']; ?>" ></td>
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
