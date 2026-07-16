<html>
    <head>
        <title>Lihat Jabatan Pegawai</title>
    </head>
    <body>
        <center>
        <h1>Lihat Data Jabatan Pegawai</h1>
        <hr>
        <?php
        require '../../config/database.php';

        if (!isset($_GET['idjp']) || empty($_GET['idjp'])) {
            die("ID tidak ditemukan di URL. <a href='" . BASE_URL . "jabatanpegawai.php'>Kembali</a>");
        }

        $idjp = mysqli_real_escape_string($koneksi, $_GET['idjp']);
        $sql = "SELECT jp.*, p.namalengkap, j.namajabatan 
                FROM jabatanpegawai jp
                JOIN pegawai p ON jp.nip = p.nip
                JOIN jabatan j ON jp.kodejabatan = j.kodejabatan
                WHERE jp.idjp = '$idjp'";
        $query = mysqli_query($koneksi, $sql);

        if (mysqli_num_rows($query) == 0) {
            die("Data tidak ditemukan. <a href='" . BASE_URL . "jabatanpegawai.php'>Kembali</a>");
        }

        $row = mysqli_fetch_array($query);
        ?>

        <table align="center">
            <tr>
                <td>ID</td>
                <td>: <?php echo $row['idjp']; ?></td>
            </tr>
            <tr>
                <td>NIP</td>
                <td>: <?php echo $row['nip']; ?></td>
            </tr>
            <tr>
                <td>Nama Pegawai</td>
                <td>: <?php echo $row['namalengkap']; ?></td>
            </tr>
            <tr>
                <td>Kode Jabatan</td>
                <td>: <?php echo $row['kodejabatan']; ?></td>
            </tr>
            <tr>
                <td>Nama Jabatan</td>
                <td>: <?php echo $row['namajabatan']; ?></td>
            </tr>
            <tr>
                <td>Status</td>
                <td>: <?php echo $row['status']; ?></td>
            </tr>
            <tr>
                <td>Periode</td>
                <td>: <?php echo $row['periode']; ?></td>
            </tr>
        </table>
        <hr>
        &nbsp; <a href="<?php echo BASE_URL; ?>jabatanpegawai.php">Kembali</a>
        </center>
    </body>
</html>