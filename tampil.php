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
				<th>Nama</th>
				<th>Alamat</th>
				<th>No Telephon</th>
				<th>Tanggal Lahir</th>
				<th>AKSI</th>
			</tr>
			<?php
			include 'Koneksi.php';
			$no = 1;
			$data = mysqli_query($koneksi,"select * from anggota");
			while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td><?php echo $d['no_telp']; ?></td>
				<td><?php echo $d['tanggal_lahir']; ?></td>
				<td>
					<a href="index.php?page=update.php" class="btn btn-success">EDIT</a>
					<a href="hapus.php?id_anggota=<?php echo $d['id_anggota']; ?>" class="btn btn-danger">HAPUS</a>
				</td>
			</tr>
			<?php
		}
		?>
		</table>
	</center>
</body>
</html>