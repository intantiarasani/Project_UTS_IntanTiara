<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>
	<center>
		<h3>TAMBAH PINJAMAN BUKU</h3>
		<form action=tambah-buku-proses.php method="post">
			<table class="table table-hover table-striped">
				<tr>
					<td>Judul Buku</td>
					<td><input type="text" name="judul" class="form-control"></td>
				</tr>
				<tr>
					<td>Pengarang</td>
					<td><input type="text" name="pengarang" class="form-control"></td>
				</tr>
				<tr>
					<td>Tahun Terbit</td>
					<td><input type="date" name="tahun_terbit" class="form-control"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="simpan" class="btn btn-primary"></td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>