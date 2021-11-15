<?php
include 'koneksi.php';

$id_anggota = $_GET['id_anggota'];
mysqli_query($koneksi,"delete from anggota where id_anggota='$id_anggota'");
header("location:index.php?page=tampil.php");
?>