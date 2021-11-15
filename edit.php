<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>
	<center>
		<h3>EDIT DATA</h3>
		
       	 	<?php
			include 'koneksi.php';
			$data = mysqli_query($koneksi,"select * from anggota ");
			while($d = mysqli_fetch_array($data)){
			?>
		<form action="update.php" method="post">
			<table class="table table-hover table-striped">
				<tr>
					<td>Nama</td>
					<td>
						<input type="hidden" name="id_anggota" value="<?=$d['id_anggota']?>">
						<input type="text" name="nama" value="<?=$d['nama']?>" class="form-control">
					</td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat" value="<?=$d['alamat']?>" class="form-control"></td>
				</tr>
				<tr>
					<td>No Telephon</td>
					<td><input type="text" name="no_telp" value="<?=$d['no_telp']?>" class="form-control"></td>
				</tr>
				<tr>
					<td>Tanggal Lahir</td>
					<td><input type="date" name="tanggal_lahir" value="<?=$d['tanggal_lahir']?>" class="form-control"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN" class="btn btn-success">
						<input type="submit" value="KEMBALI" class="btn btn-danger">
						<a href="index.php?page=tampil.php"></a>
					</td>
				</tr>
			</table>
		</form>
		<?php
		}
		?>
	</center>
</body>
</html>