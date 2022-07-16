<?php 
// koneksi database
include '../../koneksi.php';
 
// menangkap data yang di kirim dari form
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$nomor = $_POST['nomor'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into guru values('','$nip','$nama','$alamat','$nomor')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>