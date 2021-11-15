<DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>
	<center>
		<h3>APLIKASI PERPUSTAKAAN</h3>
		<br/>
		<table class="table table-hover table-striped">
			<tr>
				<th>NO</th>
				<th>JUDUL BUKU</th>
				<th>PENGARANG BUKU</th>
				<th>TAHUN TERBIT</th>
				<th>AKSI</th>
			</tr>

			<?php
			include 'Koneksi.php';
			$no = 1;
			$data = mysqli_query($koneksi,"select * from buku");
			while($d = mysqli_fetch_array($data)){	
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['judul']; ?></td>
				<td><?php echo $d['pengarang']; ?></td>
				<td><?php echo $d['tahun_terbit']; ?></td>
				<td>
					<a href="index.php?page=update-buku.php" class="btn btn-success">EDIT</a>
					<a href="hapus-buku.php?no_buku=<?php echo $d['no_buku']; ?>" class="btn btn-danger">HAPUS</a>
				</td>
			</tr>
			<?php
		}
		?>
		</table>
	</center>
</body>
</html>