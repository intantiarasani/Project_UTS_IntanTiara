<?php
include 'koneksi.php';

$id_anggota = $_POST['id_anggota'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$tanggal_lahir = $_POST['tanggal_lahir'];

mysqli_query($koneksi,"update anggota set nama='$nama', alamat='$alamat', no_telp='$no_telp', tanggal_lahir='$tanggal_lahir' where id_anggota='$id_anggota'");

header("location:index.php?page=tampil.php");

?> 