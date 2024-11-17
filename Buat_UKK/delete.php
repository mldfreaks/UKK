<?php 

require "koneksi.php";

$id = $_GET['id'] ?? null;

if ($id != null){
    $koneksi->query ("DELETE FROM siswa WHERE id = '$id'");
}

header('location: index.php');