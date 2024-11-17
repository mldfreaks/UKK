<?php 
  require "koneksi.php";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $asal_sekolah = $_POST['asal_sekolah'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];
  
    $koneksi-> query("
      INSERT INTO siswa (
      nama,
      jurusan,
      jenis_kelamin,
      asal_sekolah,
      tanggal_lahir,
      agama,
      alamat,
      no_hp,
      email 
      ) VALUES (
       '$nama',
       '$jurusan',
       '$jenis_kelamin',
       '$asal_sekolah',
       '$tanggal_lahir',
       '$agama',
       '$alamat',
       '$no_hp',
       '$email'
       )
    ");
    header('location: index.php');
  } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <form method="POST">
            <label for="nama">Nama</label>
            <input type="text" id="nama" placeholder="Nama Lengkap" name="nama" required>


            <label for="jurusan">Jurusan yang di pilih</label>
            <select name="jurusan" id="jurusan">
                <option value="RPL">RPl</option>
                <option value="TJAT">TJAT</option>
                <option value="TKJ">TKJ</option>
                <option value="Animasi">Animasi</option>
            </select>
            

            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select name="jenis_kelamin" id="jenis_kelamin">
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>


            <label for="asal_sekolah">Asal Sekolah</label>
            <input type="text" id="asal_sekolah" placeholder="Nama Sekolah Lengkap" name="asal_sekolah" required>

            <label for="nama">Tanggal lahir</label>
            <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>

            <label for="agama">Agama</label>
            <select name="agama" id="agama" required>

                <option disabled selected >Agama mu</option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Buddha">Buddha</option>
                <option value="Hindu">Hindu</option>
                <option value="Konghucu">Konghucu</option>  
            </select>

            <label for="alamat">Alamat</label>
            <input type="text" id="alamat" place name="alamat" required>

            <label for="no_hp">No Hp</label>
            <input type="number" id="no_hp" name="no_hp" required>

            <label for="email">email</label>
            <input type="email" id="email" name="email" required>

            <button type="submit">Kirim COKK!!</button>

        </form>
    </div>
</body>
</html>