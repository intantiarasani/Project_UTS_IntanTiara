<?php
include 'koneksi.php';

$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$tahun_terbit = $_POST['tahun_terbit'];
$id_anggota = $_POST['id_anggota'];

mysqli_query($koneksi, "insert into buku values('','$judul','$pengarang','$tahun_terbit','id_anggota')");
header("location:index.php?page=tampil-buku.php");
?>