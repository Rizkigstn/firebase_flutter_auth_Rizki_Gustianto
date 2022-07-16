<?php 
// koneksi database
include '../../koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$nomor = $_POST['nomor'];
 
// update data ke database
mysqli_query($koneksi,"update guru set nip='$nip', nama='$nama', alamat='$alamat', nomor='$nomor' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>