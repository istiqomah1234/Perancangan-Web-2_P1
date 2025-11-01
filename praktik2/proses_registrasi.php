<html>
<head>
    <title>Data Registrasi Mahasiswa Baru</title>
</head>
<body>
    <h1>Data Registrasi Mahasiswa Baru</h1>
    <hr>
    <?php
        $nama = $_POST["nama"];
        $nim = $_POST["nim"];
        $jk = $_POST["jk"];
        $prodi = $_POST["prodi"];
        $alamat = $_POST["alamat"];
        $email = $_POST["email"];
        $telepon = $_POST["telepon"];
    ?>
    <p><b>Nama Lengkap :</b> <?php echo $nama; ?></p>
    <p><b>NIM :</b> <?php echo $nim; ?></p>
    <p><b>Jenis Kelamin :</b> <?php echo $jk; ?></p>
    <p><b>Program Studi :</b> <?php echo $prodi; ?></p>
    <p><b>Alamat :</b> <?php echo $alamat; ?></p>
    <p><b>Email :</b> <?php echo $email; ?></p>
    <p><b>Nomor Telepon :</b> <?php echo $telepon; ?></p>
</body>
</html>
