<!DOCTYPE html>
<html>

<body>
<center>
 
	<h2>CRUD DATA MAHASISWA</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA MAHASISWA</h3>
 
	<?php
	include '../../koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from matkull where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>KODE</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="kode_matkull" value="<?php echo $d['kode_matkull']; ?>">
					</td>
				</tr>
				<tr>
					<td>NAMA MATAKULIAH</td>
					<td><input type="text" name="nama_matkull" value="<?php echo $d['nama_matkull']; ?>"></td>
				</tr>
				<tr>
					<td>NILAI</td>
					<td><input type="number" name="nilaii" value="<?php echo $d['nilaii']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
</center>
</body>
</html>