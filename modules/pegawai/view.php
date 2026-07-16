<html>
    <head>
        <title>Lihat Pegawai</title>
    </head>
    <body>
        <center>
        <h1>Lihat Data Pegawai</h1>
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

        <table align="center">
            <tr>
                <td>NIP</td>
                <td>: <?php echo $row['nip']; ?></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td>: <?php echo $row['namalengkap']; ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>: <?php echo ($row['jeniskelamin'] == 1) ? 'Laki-laki' : 'Perempuan'; ?></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>: <?php echo $row['tanggallahir']; ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>: <?php echo $row['alamat']; ?></td>
            </tr>
            <tr>
                <td>No. HP</td>
                <td>: <?php echo $row['nohp']; ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>: <?php echo $row['email']; ?></td>
            </tr>
        </table>
        <hr>
        &nbsp; <a href="<?php echo BASE_URL; ?>index.php">Kembali</a>
        </center>
    </body>
</html>
