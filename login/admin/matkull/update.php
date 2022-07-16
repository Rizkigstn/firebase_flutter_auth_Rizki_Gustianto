<?php 
// koneksi database
include '../../koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$kode_matkull = $_POST['kode_matkull'];
$nama_matkull = $_POST['nama_matkull'];
$nilaii = $_POST['nilaii'];
 
// update data ke database
mysqli_query($koneksi,"update matkul set kode_matkull='$kode_matkull', nama_matkull='$nama_matkull', nilaii='$nilaii' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>