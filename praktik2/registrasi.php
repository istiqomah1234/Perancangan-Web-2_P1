<html>
<head>
    <title>Form Registrasi Mahasiswa Baru</title>
</head>
<body>
    <h1>Form Registrasi Mahasiswa Baru</h1>
    <hr>
    <form action="proses_registrasi.php" method="post">
        <pre>
Nama Lengkap     : <input type="text" name="nama" size="30" required>
NIM              : <input type="text" name="nim" size="20" required>
Jenis Kelamin    : 
    <input type="radio" name="jk" value="Laki-laki"> Laki-laki
    <input type="radio" name="jk" value="Perempuan"> Perempuan
Program Studi    : 
    <select name="prodi" required>
        <option value="">-- Pilih Program Studi --</option>
        <option value="Teknik Informatika">Teknik Informatika</option>
        <option value="Sistem Informasi">Sistem Informasi</option>
        <option value="Teknik Komputer">Teknik Komputer</option>
    </select>
Alamat           : <textarea name="alamat" cols="35" rows="4"></textarea>
Email            : <input type="email" name="email" size="30">
Nomor Telepon    : <input type="text" name="telepon" size="20">
<input type="submit" value="Daftar">
<input type="reset" value="Batal">
        </pre>
    </form>
</body>
</html>
