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
	<h3>TAMBAH MATAKULIAH</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>KODE</td>
				<td><input type="text" name="kode_matkull"></td>
			</tr>
			<tr>
				<td>NAMA MATAKULIAH</td>
				<td><input type="text" name="nama_matkull"></td>
			</tr>
			<tr>
				<td>NILAI</td>
				<td><input type="number" name="nilaii"></td>
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