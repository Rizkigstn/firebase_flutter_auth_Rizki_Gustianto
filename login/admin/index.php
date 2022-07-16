<html>
<head> 
<title>Admin</title>
</head>
<body>
<center>
<br><br>
<br/><br/>
<h1> Halaman Dashboard </h1> 
<br>
<!- cek apakah sudah login ->
<?php 
session_start();
if ($_SESSION['status']!="login"){
header("location:../index.php?pesan=belum_login");
}
?>
<br>
<h2>Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h2>
<br>
<br/>
<h1 > Data Akdemik </h1>
<br>
<br/>
<a href="guru"><button>Data Guru</button></a>||
<a href="siswa"><button>Data Siswa</button></a>||
<a href="matkull"><button>Data Mata Kuliah</button></a>||

<br/>
<br/>
<br/>
<a href="logout.php">LOGOUT</a>
</center>
</body>
</html>