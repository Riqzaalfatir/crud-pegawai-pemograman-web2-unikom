<html>
    <head>
        <title>Edit Jabatan</title>
    </head>
    <body>
        <center>
        <h1>Edit Data Jabatan</h1>
        <hr>
        <?php
        require '../../config/database.php';

        if (!isset($_GET['kodejabatan']) || empty($_GET['kodejabatan'])) {
            die("Kode Jabatan tidak ditemukan di URL. <a href='" . BASE_URL . "jabatan.php'>Kembali</a>");
        }

        $kodejabatan = mysqli_real_escape_string($koneksi, $_GET['kodejabatan']);
        $sql = "SELECT * FROM jabatan WHERE kodejabatan = '$kodejabatan'";
        $query = mysqli_query($koneksi, $sql);

        if (mysqli_num_rows($query) == 0) {
            die("Data Jabatan tidak ditemukan. <a href='" . BASE_URL . "jabatan.php'>Kembali</a>");
        }

        $row = mysqli_fetch_array($query);

        function active_radio_button($value, $input){
            return $value == $input ? 'checked' : '';
        }
        ?>

        <form name="feditjabatan" action="<?php echo BASE_URL; ?>modules/jabatan/update.php" method="post">
            <input type="hidden" name="kodejabatanawal" value="<?php echo $row['kodejabatan']; ?>" />
            <table align="center">
                <tr>
                    <td>Kode Jabatan</td>
                    <td>: <input name="kodejabatan" size="10" maxlength="8" value="<?php echo $row['kodejabatan']; ?>"></td>
                </tr>
                <tr>
                    <td>Nama Jabatan</td>
                    <td>: <input name="namajabatan" size="55" maxlength="55" value="<?php echo $row['namajabatan']; ?>" ></td>
                </tr>
                <tr>
                    <td>Level</td>
                    <td>: <input name="level" value="<?php echo $row['level']; ?>" ></td>
                </tr>
                <tr>
                    <td>Gaji</td>
                    <td>: <input name="gaji" size="50" value="<?php echo $row['gaji']; ?>"></td>
                </tr>
            </table>
            <hr>
            <input type="submit" value="Simpan">
            <input type="reset" value="Reset">
            &nbsp; <a href="<?php echo BASE_URL; ?>jabatan.php">Kembali</a>
        </form>
        </center>
    </body>
</html>
