<?php 

require "koneksi.php";



$semuaData = $koneksi->query("SELECT * FROM siswa")-> fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href ="style2.css">
    <title>Pendaftaran</title>
   
</head>
<body>
  <div class="container">
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>jurusan</th>
                <th>Jenis kelamin</th>
                <th>Asal sekolah</th>
                <th>Agama</th>
                <th>Alamat</th>
                <th>Tanggal lahir</th>
                <th>No hp</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($semuaData as $data): ?>
             <tr>
                <td><?= $data['id']?></td>
                <td><?= $data['nama']?></td>
                <td><?= $data['jurusan']?></td>
                <td><?= $data['jenis_kelamin']?></td>
                <td><?= $data['asal_sekolah']?></td>
                <td><?= $data['agama']?></td>
                <td><?= $data['alamat']?></td>
                <td><?= $data['tanggal_lahir']?></td>
                <td><?= $data['no_hp']?></td>
                <td><?= $data['email']?></td>
                <td>
                    <a href="edit.php?id=<?= $data['id'] ?>">Edit</a>
                    <a href="delete.php?id=<?= $data['id'] ?>">Hapus</a>
                </td>
             </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
  </div>
</body>
</html>