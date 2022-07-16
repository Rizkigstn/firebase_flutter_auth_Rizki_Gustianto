<!DOCTYPE html>
<html>

<body>
<center>
<style>
div.a {
	text-align: center;
}
</style>
 
	<h2>CRUD DATA MAHASISWA</h2>
	<br/>
	<a href="tambah.php">+ TAMBAH MATAKULIAH</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>KODE</th>
			<th>NAMA MATAKULIAH</th>
			<th>NILAI</th>
			<th>Opsi</th>
		</tr>
		<?php 
		include '../../koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from matkull");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['kode_matkull']; ?></td>
				<td><?php echo $d['nama_matkull']; ?></td>
				<td><?php echo $d['nilaii']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
	</form>
		<br/>
	<a href="../index.php">KEMBALI KE DASHBOARD</a>
	<br/>
</center>
</body>
</html>