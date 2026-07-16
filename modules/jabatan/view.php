<html>
    <head>
        <title>Lihat Jabatan</title>
    </head>
    <body>
        <center>
        <h1>Lihat Jabatan</h1>
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

        <table align="center">
            <tr>
                <td>Kode Jabatan</td>
                <td>: <?php echo $row['kodejabatan']; ?></td>
            </tr>
            <tr>
                <td>Nama Jabatan</td>
                <td>: <?php echo $row['namajabatan']; ?></td>
            </tr>
            <tr>
                <td>Level</td>
                <td>: <?php echo $row['level']; ?></td>
            </tr>
            <tr>
                <td>Gaji</td>
                <td>: <?php echo $row['gaji']; ?></td>
            </tr>
        </table>
        <hr>
        &nbsp; <a href="<?php echo BASE_URL; ?>jabatan.php">Kembali</a>
        </center>
    </body>
</html>
