<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$tanggal_lahir = $_POST['tanggal_lahir'];

mysqli_query($koneksi, "insert into anggota values('','$nama','$alamat','$no_telp','$tanggal_lahir')");
header("location:index.php?page=tampil.php");
?>