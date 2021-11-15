<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>
	<center>
		<h3>EDIT DATA</h3>
		
       	 	<?php
			include 'Koneksi.php';
			$no = 1;
			$data = mysqli_query($koneksi,"select * from buku");
			while($d = mysqli_fetch_array($data)){
			?>
		<form action="update-buku.php" method="post">
			<table class="table table-hover table-striped">
				<tr>
					<td>Judul Buku</td>
					<td>
						<input type="hidden" name="no_buku" value="<?=$d['no_buku']?>">
						<input type="text" name="judul" value="<?=$d['judul']?>" class="form-control">
					</td>
				</tr>
				<tr>
					<td>Pengarang</td>
					<td><input type="text" name="pengarang" value="<?=$d['pengarang']?>" class="form-control"></td>
				</tr>
				<tr>
					<td>Tahun Terbit</td>
					<td><input type="date" name="tahun_terbit" value="<?=$d['tahun_terbit']?>" class="form-control"></td>
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