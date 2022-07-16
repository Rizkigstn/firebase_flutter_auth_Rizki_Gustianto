<?php 
// koneksi database
include '../../koneksi.php';
 
// menangkap data yang di kirim dari form
$nip = $_POST['nis'];
$nama = $_POST['nama'];
$tgl_lahir = $_POST['tgl_lahir'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into siswa values('','$nip','$nama','$tgl_lahir')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>