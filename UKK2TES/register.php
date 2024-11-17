<?php 
  require "koneksi.php";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $asal_sekolah = $_POST['asal_sekolah'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
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
       '$agama',
       '$alamat',
       '$tanggal_lahir',
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
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
   
    <div class="container">
        <form action="" method="POST">
             <h1>Tabel Pendaftaran</h1>

            <label for="nama">Nama</label>
            <input type="text" id="nama" placeholder="Nama Lengkap" name="nama" required>

            <label for="jurusan">Pilih Jurusan</label>
            <select name="jurusan" id="jurusan">
                <option value="" disabled selected>Pilih Jurusan</option>
                <option value="RPL">RPL</option>
                <option value="TKJ">TKJ</option>
                <option value="TJAT">TJAT</option>
                <option value="Animasi">Animasi</option>
            </select>

            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select name="jenis_kelamin" id="">
            <option value="" disabled selected>Pilih Jenis Kelamin</option>
            <option value="laki_laki">Laki - laki</option>
            <option value="perempuan">perempuan</option></select>


            <label for="asal_sekolah">Asal Sekolah</label>
            <input type="text" id="asal_sekolah" name="asal_sekolah" required>

            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" id = "tanggal_lahir" name = "tanggal_lahir" requuired>

            <label for="agama">Agama</label>
            <select name="agama" id="agama" required>
            <option for="agama" disabled selected>Agama</option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Hindu">Hindu</option>
            <option value="Buddha">Buddha</option>
            <option value="Konghucu">Konghucu</option>
            </select>

           <label for="alamat">Alamat</label>
           <input type="text" id="alamat" name="alamat" placeholder="Alamat Lengkap" required>

           <label for="no_hp">Nomer Hp</label>
           <input name="number" id="no_hp" name="no_hp" required>

           <label for="email">Email</label>
           <input name="email" id="email" required>

           <button type="submit">Kirim</button>
        </form>
    </div>
</body>
</html>