<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>
<center>
 
	<h2>CRUD DATA MAHASISWA</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<h3>TAMBAH DATA GURU</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>NIP</td>
				<td><input type="number" name="nip"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>Nomor HP</td>
				<td><input type="number" name="nomor"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
		<br/>
	<br/>
	</center>
</body>
</html>