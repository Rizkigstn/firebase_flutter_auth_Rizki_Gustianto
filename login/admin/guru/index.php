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
	<a href="tambah.php">+ TAMBAH GURU</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>NIP</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Nomor HP</th>
			<th>Opsi</th>
		</tr>
		<?php 
		include '../../koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from guru");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nip']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td><?php echo $d['nomor']; ?></td>
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