<?php 
// koneksi database
include '../../koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$tgl_lahir = $_POST['tgl_lahir'];
 
// update data ke database
mysqli_query($koneksi,"update siswa set nis='$nis', nama='$nama', tgl_lahir='$tgl_lahir' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>