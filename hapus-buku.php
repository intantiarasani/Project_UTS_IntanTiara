<?php
include 'koneksi.php';

$no_buku = $_GET['no_buku'];
mysqli_query($koneksi,"delete from buku where no_buku='$no_buku'");
header("location:index.php?page=tampil-buku.php");
?>