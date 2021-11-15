<?php
include 'koneksi.php';

$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$tahun_terbit = $_POST['tahun_terbit'];
$id_anggota = $_POST['id_anggota'];

mysqli_query($koneksi,"update buku set judul='$judul', pengarang='$pengarang',tahun_terbit='$tahun_terbit' where id_anggota='$id_anggota'");

header("location:index.php?page=tampil-buku.php");

?> 