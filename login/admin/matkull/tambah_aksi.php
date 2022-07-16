<?php 
// koneksi database
include '../../koneksi.php';
 
// menangkap data yang di kirim dari form
$kode_matkull = $_POST['kode_matkull'];
$nama_matkull = $_POST['nama_matkull'];
$nilaii = $_POST['nilaii'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into matkull values('','$kode_matkull','$nama_matkull','$nilaii')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>