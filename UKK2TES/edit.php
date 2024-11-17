<?php
require "koneksi.php";

$id = $_GET['id'] ?? null;
$data = $koneksi -> query ("SELECT * FROM siswa WHERE id = '$id'") -> fetch_assoc();

if($server["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $jurusan = $_POST["jurusan"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $asal_sekolah = $_POST["asal_sekolah"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $agama = $_POST["agama"];
    $alamat = $_POST["alamat"];
    $no_hp = $_POST["no_hp"];
    $email = $_POST["email"];

    $koneksi -> query ("UPDATE siswa SET nama = '$nama', jurusan = '$jurusan', jenis_kelamin ='$jenis_kelamin', tanggal_lahir ='$tanggal_lahir', agama = '$agama', alamat = '$alamat', no_hp = '$no_hp', email = '$email'");

    header ('location : index.php');
}  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <form method="POST">
            <label for="nama">nama</label>
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