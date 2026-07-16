<?php require '../../config/database.php'; ?>
<html>

<head>
    <title>Tambah Jabatab</title>
</head>

<body>
    <center>
        <h1>Input Data Jabatan</h1>
        <hr>
        <form name="ftambahjabatan" action="<?php echo BASE_URL; ?>modules/jabatan/simpan.php" method="post">
            <table align="center">
                <tr>
                    <td>Kode Jabatan</td>
                    <td>: <input name="kodejabatan" size="10" maxlength="8" placeholder="Kode Jabatan"></td>
                </tr>
                <tr>
                    <td>Nama Jabatan</td>
                    <td>: <input name="namajabatan" size="10" maxlength="8" placeholder="Nama Jabatan"></td>
                </tr>
                <tr>
                    <td>Level Jabatan</td>
                    <td>: <input name="level" size="10" maxlength="8" placeholder="Level Jabatan"></td>
                </tr>
                <tr>
                    <td>Gaji Jabatan</td>
                    <td>: <input name="gaji" size="10" maxlength="8" placeholder="Gaji Jabatan"></td>
                </tr>
            </table>
            <hr>
            <input type="submit" value="Simpan">
            <input type="reset" value="reset">
            &nbsp; <a href="<?php echo BASE_URL; ?>jabatan.php">Kembali</a>

        </form>
    </center>
</body>

</html>