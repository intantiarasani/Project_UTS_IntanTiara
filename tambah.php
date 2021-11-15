<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>
	<center>
		<h3>TAMBAH DATA ANGGOTA</h3>
		<form action=tambah-proses.php method="post">
			<table class="table table-hover table-striped">
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama" class="form-control"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat" class="form-control"></td>
				</tr>
				<tr>
					<td>No Telephon</td>
					<td><input type="text" name="no_telp" class="form-control"></td>
				</tr>
				<tr>
					<td>Tanggal Lahir</td>
					<td><input type="date" name="tanggal_lahir" class="form-control"></td>
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